<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranRakutenpayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranRakutenpay;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranRakutenpay;

/*require_once 'com/gmo_pg/client/output/EntryExecTranRakutenpayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranRakutenpay.php';
require_once 'com/gmo_pg/client/tran/ExecTranRakutenpay.php';*/

/**
 * <b>楽天ペイ登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranRakutenpay
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
     * 楽天ペイ登録・決済を実行する
     *
     * @param EntryExecTranRakutenpayInput $input 楽天ペイ登録・決済入力パラメータ
     * @return  EntryExecTranRakutenpayOutput 楽天ペイ登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // 楽天ペイ取引登録入力パラメータを取得
        $entryTranRakutenpayInput =& $input->getEntryTranRakutenpayInput();
        // 楽天ペイ決済実行入力パラメータを取得
        $execTranRakutenpayInput =& $input->getExecTranRakutenpayInput();

        // 楽天ペイ登録・決済出力パラメータを生成
        $output = new EntryExecTranRakutenpayOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranRakutenpayInput->getAccessId();
        $accessPass = $execTranRakutenpayInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // 楽天ペイ取引登録を実行
            $this->log->debug("楽天ペイ取引登録実行");
            $entryTranRakutenpay = new EntryTranRakutenpay();
            $entryTranRakutenpayOutput = $entryTranRakutenpay->exec($entryTranRakutenpayInput);

            if ($this->errorTrap($entryTranRakutenpay)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranRakutenpayOutput->getAccessId();
            $accessPass = $entryTranRakutenpayOutput->getAccessPass();
            $execTranRakutenpayInput->setAccessId($accessId);
            $execTranRakutenpayInput->setAccessPass($accessPass);

            $output->setEntryTranRakutenpayOutput($entryTranRakutenpayOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranRakutenpay = new ExecTranRakutenpay();
        $execTranRakutenpayOutput = $execTranRakutenpay->exec($execTranRakutenpayInput);

        $output->setExecTranRakutenpayOutput($execTranRakutenpayOutput);

        $this->errorTrap($execTranRakutenpay);

        return $output;
    }


}

?>
