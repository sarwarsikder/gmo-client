<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranPostpayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranPostpay;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranPostpay;

/*require_once 'com/gmo_pg/client/output/EntryExecTranPostpayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranPostpay.php';
require_once 'com/gmo_pg/client/tran/ExecTranPostpay.php';*/

/**
 * <b>PS後払い登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPostpay
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
     * PS後払い登録・決済を実行する
     *
     * @param EntryExecTranPostpayInput $input PS後払い登録・決済入力パラメータ
     * @return  EntryExecTranPostpayOutput PS後払い登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // PS後払い取引登録入力パラメータを取得
        $entryTranPostpayInput =& $input->getEntryTranPostpayInput();
        // PS後払い決済実行入力パラメータを取得
        $execTranPostpayInput =& $input->getExecTranPostpayInput();

        // PS後払い登録・決済出力パラメータを生成
        $output = new EntryExecTranPostpayOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranPostpayInput->getAccessId();
        $accessPass = $execTranPostpayInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // PS後払い取引登録を実行
            $this->log->debug("PS後払い取引登録実行");
            $entryTranPostpay = new EntryTranPostpay();
            $entryTranPostpayOutput = $entryTranPostpay->exec($entryTranPostpayInput);

            if ($this->errorTrap($entryTranPostpay)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranPostpayOutput->getAccessId();
            $accessPass = $entryTranPostpayOutput->getAccessPass();
            $execTranPostpayInput->setAccessId($accessId);
            $execTranPostpayInput->setAccessPass($accessPass);

            $output->setEntryTranPostpayOutput($entryTranPostpayOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranPostpay = new ExecTranPostpay();
        $execTranPostpayOutput = $execTranPostpay->exec($execTranPostpayInput);

        $output->setExecTranPostpayOutput($execTranPostpayOutput);

        $this->errorTrap($execTranPostpay);

        return $output;
    }


}

?>
