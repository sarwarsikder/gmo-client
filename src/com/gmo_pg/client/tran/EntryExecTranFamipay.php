<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranFamipayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranFamipay;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranFamipay;

/*require_once 'com/gmo_pg/client/output/EntryExecTranFamipayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranFamipay.php';
require_once 'com/gmo_pg/client/tran/ExecTranFamipay.php';*/

/**
 * <b>FamiPay登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranFamipay
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
     * FamiPay登録・決済を実行する
     *
     * @param EntryExecTranFamipayInput $input FamiPay登録・決済入力パラメータ
     * @return  EntryExecTranFamipayOutput FamiPay登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // FamiPay取引登録入力パラメータを取得
        $entryTranFamipayInput =& $input->getEntryTranFamipayInput();
        // FamiPay決済実行入力パラメータを取得
        $execTranFamipayInput =& $input->getExecTranFamipayInput();

        // FamiPay登録・決済出力パラメータを生成
        $output = new EntryExecTranFamipayOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranFamipayInput->getAccessId();
        $accessPass = $execTranFamipayInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // FamiPay取引登録を実行
            $this->log->debug("FamiPay取引登録実行");
            $entryTranFamipay = new EntryTranFamipay();
            $entryTranFamipayOutput = $entryTranFamipay->exec($entryTranFamipayInput);

            if ($this->errorTrap($entryTranFamipay)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranFamipayOutput->getAccessId();
            $accessPass = $entryTranFamipayOutput->getAccessPass();
            $execTranFamipayInput->setAccessId($accessId);
            $execTranFamipayInput->setAccessPass($accessPass);

            $output->setEntryTranFamipayOutput($entryTranFamipayOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranFamipay = new ExecTranFamipay();
        $execTranFamipayOutput = $execTranFamipay->exec($execTranFamipayInput);

        $output->setExecTranFamipayOutput($execTranFamipayOutput);

        $this->errorTrap($execTranFamipay);

        return $output;
    }


}

?>
