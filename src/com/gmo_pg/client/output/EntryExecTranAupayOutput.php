<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\EntryTranAupayOutput;
use GmoPG\com\gmo_pg\client\output\ExecTranAupayOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranAupayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranAupayOutput.php';*/

/**
 * <b>au PAY登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAupayOutput
{

    /**
     * @var EntryTranAupayOutput au PAY登録出力パラメータ
     */
    private $entryTranAupayOutput;/*@var $entryTranAupayOutput EntryTranAupayOutput */

    /**
     * @var ExecTranAupayOutput au PAY実行出力パラメータ
     */
    private $execTranAupayOutput;/*@var $execTranAupayOutput ExecTranAupayOutput */

    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranAupayOutput = new EntryTranAupayOutput($params);
        $this->execTranAupayOutput = new ExecTranAupayOutput($params);
    }

    /**
     * au PAY登録出力パラメータ取得
     * @return EntryTranAupayOutput au PAY登録出力パラメータ
     */
    public function &getEntryTranAupayOutput()
    {
        return $this->entryTranAupayOutput;
    }

    /**
     * au PAY実行出力パラメータ取得
     * @return ExecTranAupayOutput au PAY実行出力パラメータ
     */
    public function &getExecTranAupayOutput()
    {
        return $this->execTranAupayOutput;
    }

    /**
     * au PAY登録出力パラメータ設定
     *
     * @param EntryTranAupayOutput $entryTranAupayOutput au PAY登録出力パラメータ
     */
    public function setEntryTranAupayOutput(&$entryTranAupayOutput)
    {
        $this->entryTranAupayOutput = $entryTranAupayOutput;
    }

    /**
     * au PAY決済実行出力パラメータ設定
     *
     * @param ExecTranAupayOutput $execTranAupayOutput au PAY実行出力パラメータ
     */
    public function setExecTranAupayOutput(&$execTranAupayOutput)
    {
        $this->execTranAupayOutput = $execTranAupayOutput;
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->entryTranAupayOutput->getAccessID();

    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->entryTranAupayOutput->getAccessPass();

    }

    /**
     * トークン取得
     * @return string トークン
     */
    public function getToken()
    {
        return $this->execTranAupayOutput->getToken();

    }

    /**
     * 支払手続き開始IFのURL取得
     * @return string 支払手続き開始IFのURL
     */
    public function getStartURL()
    {
        return $this->execTranAupayOutput->getStartURL();

    }

    /**
     * 支払開始期限日時取得
     * @return string 支払開始期限日時
     */
    public function getStartLimitDate()
    {
        return $this->execTranAupayOutput->getStartLimitDate();

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->entryTranAupayOutput->setAccessID($accessID);
        $this->execTranAupayOutput->setAccessID($accessID);

    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranAupayOutput->setAccessPass($accessPass);

    }

    /**
     * トークン設定
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->execTranAupayOutput->setToken($token);

    }

    /**
     * 支払手続き開始IFのURL設定
     *
     * @param string $startURL
     */
    public function setStartURL($startURL)
    {
        $this->execTranAupayOutput->setStartURL($startURL);

    }

    /**
     * 支払開始期限日時設定
     *
     * @param string $startLimitDate
     */
    public function setStartLimitDate($startLimitDate)
    {
        $this->execTranAupayOutput->setStartLimitDate($startLimitDate);

    }

    /**
     * 取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranAupayOutput->getErrList();
    }

    /**
     * 決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranAupayOutput->getErrList();
    }

    /**
     * 取引登録エラー発生判定
     * @return boolean 取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranAupayOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * 決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranAupayOutput->getErrList();
        return 0 < count($execErrList);
    }

    /**
     * エラー発生判定
     * @return boolean エラー発生有無(true=エラー発生)
     */
    public function isErrorOccurred()
    {
        return $this->isEntryErrorOccurred() || $this->isExecErrorOccurred();
    }

}

?>
