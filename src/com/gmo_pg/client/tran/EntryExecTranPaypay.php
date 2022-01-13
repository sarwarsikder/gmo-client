<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranPaypayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranPaypay;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranPaypay;

/*require_once 'com/gmo_pg/client/output/EntryExecTranPaypayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranPaypay.php';
require_once 'com/gmo_pg/client/tran/ExecTranPaypay.php';*/

/**
 * <b>PayPay登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaypay
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
     * PayPay登録・決済を実行する
     *
     * @param EntryExecTranPaypayInput $input PayPay登録・決済入力パラメータ
     * @return  EntryExecTranPaypayOutput PayPay登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // PayPay取引登録入力パラメータを取得
        $entryTranPaypayInput =& $input->getEntryTranPaypayInput();
        // PayPay決済実行入力パラメータを取得
        $execTranPaypayInput =& $input->getExecTranPaypayInput();

        // PayPay登録・決済出力パラメータを生成
        $output = new EntryExecTranPaypayOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranPaypayInput->getAccessId();
        $accessPass = $execTranPaypayInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // PayPay取引登録を実行
            $this->log->debug("PayPay取引登録実行");
            $entryTranPaypay = new EntryTranPaypay();
            $entryTranPaypayOutput = $entryTranPaypay->exec($entryTranPaypayInput);

            if ($this->errorTrap($entryTranPaypay)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranPaypayOutput->getAccessId();
            $accessPass = $entryTranPaypayOutput->getAccessPass();
            $execTranPaypayInput->setAccessId($accessId);
            $execTranPaypayInput->setAccessPass($accessPass);

            $output->setEntryTranPaypayOutput($entryTranPaypayOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranPaypay = new ExecTranPaypay();
        $execTranPaypayOutput = $execTranPaypay->exec($execTranPaypayInput);

        $output->setExecTranPaypayOutput($execTranPaypayOutput);

        $this->errorTrap($execTranPaypay);

        return $output;
    }


}

?>
