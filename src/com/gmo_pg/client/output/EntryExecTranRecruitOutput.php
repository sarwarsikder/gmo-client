<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryTranRecruitOutput;
use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranRecruitOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranRecruitOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranRecruitOutput.php';*/

/**
 * <b>リクルートかんたん支払い登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranRecruitOutput
{

    /**
     * @var EntryTranRecruitOutput リクルートかんたん支払い登録出力パラメータ
     */
    private $entryTranRecruitOutput;/*@var $entryTranRecruitOutput EntryTranRecruitOutput */

    /**
     * @var ExecTranRecruitOutput リクルートかんたん支払い実行出力パラメータ
     */
    private $execTranRecruitOutput;/*@var $execTranRecruitOutput ExecTranRecruitOutput */

    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranRecruitOutput = new EntryTranRecruitOutput($params);
        $this->execTranRecruitOutput = new ExecTranRecruitOutput($params);
    }

    /**
     * リクルートかんたん支払い登録出力パラメータ取得
     * @return EntryTranRecruitOutput リクルートかんたん支払い登録出力パラメータ
     */
    public function &getEntryTranRecruitOutput()
    {
        return $this->entryTranRecruitOutput;
    }

    /**
     * リクルートかんたん支払い実行出力パラメータ取得
     * @return ExecTranRecruitOutput リクルートかんたん支払い実行出力パラメータ
     */
    public function &getExecTranRecruitOutput()
    {
        return $this->execTranRecruitOutput;
    }

    /**
     * リクルートかんたん支払い登録出力パラメータ設定
     *
     * @param EntryTranRecruitOutput $entryTranRecruitOutput リクルートかんたん支払い登録出力パラメータ
     */
    public function setEntryTranRecruitOutput(&$entryTranRecruitOutput)
    {
        $this->entryTranRecruitOutput = $entryTranRecruitOutput;
    }

    /**
     * リクルートかんたん支払い決済実行出力パラメータ設定
     *
     * @param ExecTranRecruitOutput $execTranRecruitOutput リクルートかんたん支払い実行出力パラメータ
     */
    public function setExecTranRecruitOutput(&$execTranRecruitOutput)
    {
        $this->execTranRecruitOutput = $execTranRecruitOutput;
    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranRecruitOutput->getOrderID();

    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->entryTranRecruitOutput->getAccessID();

    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->entryTranRecruitOutput->getAccessPass();

    }

    /**
     * トークン取得
     * @return string トークン
     */
    public function getToken()
    {
        return $this->execTranRecruitOutput->getToken();

    }

    /**
     * 支払手続き開始IFのURL取得
     * @return string 支払手続き開始IFのURL
     */
    public function getStartURL()
    {
        return $this->execTranRecruitOutput->getStartURL();

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranRecruitOutput->setOrderID($orderID);

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->entryTranRecruitOutput->setAccessID($accessID);
        $this->execTranRecruitOutput->setAccessID($accessID);

    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranRecruitOutput->setAccessPass($accessPass);

    }

    /**
     * トークン設定
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->execTranRecruitOutput->setToken($token);

    }

    /**
     * 支払手続き開始IFのURL設定
     *
     * @param string $startURL
     */
    public function setStartURL($startURL)
    {
        $this->execTranRecruitOutput->setStartURL($startURL);

    }

    /**
     * 取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranRecruitOutput->getErrList();
    }

    /**
     * 決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranRecruitOutput->getErrList();
    }

    /**
     * 取引登録エラー発生判定
     * @return boolean 取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranRecruitOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * 決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranRecruitOutput->getErrList();
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
