<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryExecTranDccOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\EntryTranDcc;
use Kcsl\GmoClient\com\gmo_pg\client\tran\ExecTranDcc;

/*require_once 'com/gmo_pg/client/output/EntryExecTranDccOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranDcc.php';
require_once 'com/gmo_pg/client/tran/ExecTranDcc.php';*/

/**
 * <b>多通貨クレジット決済（DCC)登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDcc
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
     * 多通貨クレジット決済（DCC)登録・決済を実行する
     *
     * @param EntryExecTranDccInput $input 多通貨クレジット決済（DCC)登録・決済入力パラメータ
     * @return  EntryExecTranDccOutput 多通貨クレジット決済（DCC)登録・決済出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {
        // 多通貨クレジット決済（DCC)取引登録入力パラメータを取得
        $entryTranDccInput =& $input->getEntryTranDccInput();
        // 多通貨クレジット決済（DCC)決済実行入力パラメータを取得
        $execTranDccInput =& $input->getExecTranDccInput();

        // 多通貨クレジット決済（DCC)登録・決済出力パラメータを生成
        $output = new EntryExecTranDccOutput();

        // 取引ID、取引パスワードを取得
        $accessId = $execTranDccInput->getAccessId();
        $accessPass = $execTranDccInput->getAccessPass();

        // 取引ID、取引パスワードが設定されていないとき
        if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
            // 多通貨クレジット決済（DCC)取引登録を実行
            $this->log->debug("多通貨クレジット決済（DCC)取引登録実行");
            $entryTranDcc = new EntryTranDcc();
            $entryTranDccOutput = $entryTranDcc->exec($entryTranDccInput);

            if ($this->errorTrap($entryTranDcc)) {
                return $output;
            }

            // 取引ID、取引パスワードを決済実行用のパラメータに設定
            $accessId = $entryTranDccOutput->getAccessId();
            $accessPass = $entryTranDccOutput->getAccessPass();
            $execTranDccInput->setAccessId($accessId);
            $execTranDccInput->setAccessPass($accessPass);

            $output->setEntryTranDccOutput($entryTranDccOutput);
        }

        $this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

        // 取引登録でエラーが起きたとき決済を実行せずに戻る
        if ($output->isEntryErrorOccurred()) {
            $this->log->debug("<<<取引登録失敗>>>");
            return $output;
        }

        // 決済実行
        $this->log->debug("決済実行");
        $execTranDcc = new ExecTranDcc();
        $execTranDccOutput = $execTranDcc->exec($execTranDccInput);

        $output->setExecTranDccOutput($execTranDccOutput);

        $this->errorTrap($execTranDcc);

        return $output;
    }


}

?>
