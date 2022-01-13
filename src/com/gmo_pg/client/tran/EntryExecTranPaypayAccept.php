<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranPaypayAcceptOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranPaypayAccept;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranPaypayAccept;

/*require_once 'com/gmo_pg/client/output/EntryExecTranPaypayAcceptOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranPaypayAccept.php';
require_once 'com/gmo_pg/client/tran/ExecTranPaypayAccept.php';*/

/**
 * <b>PayPay随時(利用承諾)登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaypayAccept
{
    /**
     * @var Gmopg_Log ログ
     */
    private $log;

    /**
     * @var GPayException 例外
     */
    private $exception;

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->log = new Gmopg_Log(get_class($this));
    }

    /**
     * 例外の発生を判定する
     *
     * @param mixed $target 判定対象
     */
    private function errorTrap(&$target)
    {
        if (is_null($target->getException())) {
            return false;
        }
        $this->exception = $target->getException();
        return true;
    }

    /**
     * 例外の発生を判定する
     *
     * @return  boolean 判定結果(true=エラーアリ)
     */
    public function isExceptionOccured()
    {
        return false == is_null($this->exception);
    }

    /**
     * 例外を返す
     *
     * @return  GPayException 例外
     */
    public function &getException()
    {
        return $this->exception;
    }

    /**
     * PayPay随時(利用承諾)登録・決済を実行する
     *
     * @param EntryExecTranPaypayAcceptInput $input PayPay随時(利用承諾)登録・決済入力パラメータ
     * @return  EntryExecTranPaypayAcceptOutput PayPay随時(利用承諾)登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // PayPay随時(利用承諾)取引登録入力パラメータを取得
        $entryTranPaypayAcceptInput =& $input->getEntryTranPaypayAcceptInput();
        // PayPay随時(利用承諾)決済実行入力パラメータを取得
        $execTranPaypayAcceptInput =& $input->getExecTranPaypayAcceptInput();

        // PayPay随時(利用承諾)登録・決済出力パラメータを生成
        $output = new EntryExecTranPaypayAcceptOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranPaypayAcceptInput->getAccessId();
        $accessPass = $execTranPaypayAcceptInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // PayPay随時(利用承諾)取引登録を実行
            $this->log->debug("PayPay随時(利用承諾)取引登録実行");
            $entryTranPaypayAccept = new EntryTranPaypayAccept();
            $entryTranPaypayAcceptOutput = $entryTranPaypayAccept->exec($entryTranPaypayAcceptInput);

            if ($this->errorTrap($entryTranPaypayAccept)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranPaypayAcceptOutput->getAccessId();
            $accessPass = $entryTranPaypayAcceptOutput->getAccessPass();
            $execTranPaypayAcceptInput->setAccessId($accessId);
            $execTranPaypayAcceptInput->setAccessPass($accessPass);

            $output->setEntryTranPaypayAcceptOutput($entryTranPaypayAcceptOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranPaypayAccept = new ExecTranPaypayAccept();
        $execTranPaypayAcceptOutput = $execTranPaypayAccept->exec($execTranPaypayAcceptInput);

        $output->setExecTranPaypayAcceptOutput($execTranPaypayAcceptOutput);

        $this->errorTrap($execTranPaypayAccept);

        return $output;
    }


}

?>
