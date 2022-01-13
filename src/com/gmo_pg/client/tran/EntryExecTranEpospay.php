<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranEpospayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranEpospay;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranEpospay;

/*require_once 'com/gmo_pg/client/output/EntryExecTranEpospayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranEpospay.php';
require_once 'com/gmo_pg/client/tran/ExecTranEpospay.php';*/

/**
 * <b>エポスかんたん決済登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranEpospay
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
     * エポスかんたん決済登録・決済を実行する
     *
     * @param EntryExecTranEpospayInput $input エポスかんたん決済登録・決済入力パラメータ
     * @return  EntryExecTranEpospayOutput エポスかんたん決済登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // エポスかんたん決済取引登録入力パラメータを取得
        $entryTranEpospayInput =& $input->getEntryTranEpospayInput();
        // エポスかんたん決済決済実行入力パラメータを取得
        $execTranEpospayInput =& $input->getExecTranEpospayInput();

        // エポスかんたん決済登録・決済出力パラメータを生成
        $output = new EntryExecTranEpospayOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranEpospayInput->getAccessId();
        $accessPass = $execTranEpospayInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // エポスかんたん決済取引登録を実行
            $this->log->debug("エポスかんたん決済取引登録実行");
            $entryTranEpospay = new EntryTranEpospay();
            $entryTranEpospayOutput = $entryTranEpospay->exec($entryTranEpospayInput);

            if ($this->errorTrap($entryTranEpospay)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranEpospayOutput->getAccessId();
            $accessPass = $entryTranEpospayOutput->getAccessPass();
            $execTranEpospayInput->setAccessId($accessId);
            $execTranEpospayInput->setAccessPass($accessPass);

            $output->setEntryTranEpospayOutput($entryTranEpospayOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranEpospay = new ExecTranEpospay();
        $execTranEpospayOutput = $execTranEpospay->exec($execTranEpospayInput);

        $output->setExecTranEpospayOutput($execTranEpospayOutput);

        $this->errorTrap($execTranEpospay);

        return $output;
    }


}

?>
