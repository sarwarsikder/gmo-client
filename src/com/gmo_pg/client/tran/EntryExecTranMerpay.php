<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranMerpayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranMerpay;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranMerpay;

/*require_once 'com/gmo_pg/client/output/EntryExecTranMerpayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranMerpay.php';
require_once 'com/gmo_pg/client/tran/ExecTranMerpay.php';*/

/**
 * <b>メルペイ登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranMerpay
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
     * メルペイ登録・決済を実行する
     *
     * @param EntryExecTranMerpayInput $input メルペイ登録・決済入力パラメータ
     * @return  EntryExecTranMerpayOutput メルペイ登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // メルペイ取引登録入力パラメータを取得
        $entryTranMerpayInput =& $input->getEntryTranMerpayInput();
        // メルペイ決済実行入力パラメータを取得
        $execTranMerpayInput =& $input->getExecTranMerpayInput();

        // メルペイ登録・決済出力パラメータを生成
        $output = new EntryExecTranMerpayOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranMerpayInput->getAccessId();
        $accessPass = $execTranMerpayInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // メルペイ取引登録を実行
            $this->log->debug("メルペイ取引登録実行");
            $entryTranMerpay = new EntryTranMerpay();
            $entryTranMerpayOutput = $entryTranMerpay->exec($entryTranMerpayInput);

            if ($this->errorTrap($entryTranMerpay)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranMerpayOutput->getAccessId();
            $accessPass = $entryTranMerpayOutput->getAccessPass();
            $execTranMerpayInput->setAccessId($accessId);
            $execTranMerpayInput->setAccessPass($accessPass);

            $output->setEntryTranMerpayOutput($entryTranMerpayOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranMerpay = new ExecTranMerpay();
        $execTranMerpayOutput = $execTranMerpay->exec($execTranMerpayInput);

        $output->setExecTranMerpayOutput($execTranMerpayOutput);

        $this->errorTrap($execTranMerpay);

        return $output;
    }


}

?>
