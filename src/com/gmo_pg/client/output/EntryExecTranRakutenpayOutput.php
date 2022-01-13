<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryTranRakutenpayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranRakutenpayOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranRakutenpayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranRakutenpayOutput.php';*/

/**
 * <b>楽天ペイ登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranRakutenpayOutput
{

    /**
     * @var EntryTranRakutenpayOutput 楽天ペイ登録出力パラメータ
     */
    private $entryTranRakutenpayOutput;/*@var $entryTranRakutenpayOutput EntryTranRakutenpayOutput */

    /**
     * @var ExecTranRakutenpayOutput 楽天ペイ実行出力パラメータ
     */
    private $execTranRakutenpayOutput;/*@var $execTranRakutenpayOutput ExecTranRakutenpayOutput */

    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranRakutenpayOutput = new EntryTranRakutenpayOutput($params);
        $this->execTranRakutenpayOutput = new ExecTranRakutenpayOutput($params);
    }

    /**
     * 楽天ペイ登録出力パラメータ取得
     * @return EntryTranRakutenpayOutput 楽天ペイ登録出力パラメータ
     */
    public function &getEntryTranRakutenpayOutput()
    {
        return $this->entryTranRakutenpayOutput;
    }

    /**
     * 楽天ペイ実行出力パラメータ取得
     * @return ExecTranRakutenpayOutput 楽天ペイ実行出力パラメータ
     */
    public function &getExecTranRakutenpayOutput()
    {
        return $this->execTranRakutenpayOutput;
    }

    /**
     * 楽天ペイ登録出力パラメータ設定
     *
     * @param EntryTranRakutenpayOutput $entryTranRakutenpayOutput 楽天ペイ登録出力パラメータ
     */
    public function setEntryTranRakutenpayOutput(&$entryTranRakutenpayOutput)
    {
        $this->entryTranRakutenpayOutput = $entryTranRakutenpayOutput;
    }

    /**
     * 楽天ペイ決済実行出力パラメータ設定
     *
     * @param ExecTranRakutenpayOutput $execTranRakutenpayOutput 楽天ペイ実行出力パラメータ
     */
    public function setExecTranRakutenpayOutput(&$execTranRakutenpayOutput)
    {
        $this->execTranRakutenpayOutput = $execTranRakutenpayOutput;
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->entryTranRakutenpayOutput->getAccessID();

    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->entryTranRakutenpayOutput->getAccessPass();

    }

    /**
     * トークン取得
     * @return string トークン
     */
    public function getToken()
    {
        return $this->execTranRakutenpayOutput->getToken();

    }

    /**
     * 支払手続き開始IFのURL取得
     * @return string 支払手続き開始IFのURL
     */
    public function getStartURL()
    {
        return $this->execTranRakutenpayOutput->getStartURL();

    }

    /**
     * 支払開始期限日時取得
     * @return string 支払開始期限日時
     */
    public function getStartLimitDate()
    {
        return $this->execTranRakutenpayOutput->getStartLimitDate();

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->entryTranRakutenpayOutput->setAccessID($accessID);
        $this->execTranRakutenpayOutput->setAccessID($accessID);

    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranRakutenpayOutput->setAccessPass($accessPass);

    }

    /**
     * トークン設定
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->execTranRakutenpayOutput->setToken($token);

    }

    /**
     * 支払手続き開始IFのURL設定
     *
     * @param string $startURL
     */
    public function setStartURL($startURL)
    {
        $this->execTranRakutenpayOutput->setStartURL($startURL);

    }

    /**
     * 支払開始期限日時設定
     *
     * @param string $startLimitDate
     */
    public function setStartLimitDate($startLimitDate)
    {
        $this->execTranRakutenpayOutput->setStartLimitDate($startLimitDate);

    }

    /**
     * 取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranRakutenpayOutput->getErrList();
    }

    /**
     * 決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranRakutenpayOutput->getErrList();
    }

    /**
     * 取引登録エラー発生判定
     * @return boolean 取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranRakutenpayOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * 決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranRakutenpayOutput->getErrList();
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
