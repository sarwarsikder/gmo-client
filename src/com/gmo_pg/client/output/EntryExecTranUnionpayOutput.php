<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryTranUnionpayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranUnionpayOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranUnionpayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranUnionpayOutput.php';*/

/**
 * <b>ネット銀聯登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranUnionpayOutput
{

    /**
     * @var EntryTranUnionpayOutput ネット銀聯登録出力パラメータ
     */
    private $entryTranUnionpayOutput;/*@var $entryTranUnionpayOutput EntryTranUnionpayOutput */

    /**
     * @var ExecTranUnionpayOutput ネット銀聯実行出力パラメータ
     */
    private $execTranUnionpayOutput;/*@var $execTranUnionpayOutput ExecTranUnionpayOutput */

    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranUnionpayOutput = new EntryTranUnionpayOutput($params);
        $this->execTranUnionpayOutput = new ExecTranUnionpayOutput($params);
    }

    /**
     * ネット銀聯登録出力パラメータ取得
     * @return EntryTranUnionpayOutput ネット銀聯登録出力パラメータ
     */
    public function &getEntryTranUnionpayOutput()
    {
        return $this->entryTranUnionpayOutput;
    }

    /**
     * ネット銀聯実行出力パラメータ取得
     * @return ExecTranUnionpayOutput ネット銀聯実行出力パラメータ
     */
    public function &getExecTranUnionpayOutput()
    {
        return $this->execTranUnionpayOutput;
    }

    /**
     * ネット銀聯登録出力パラメータ設定
     *
     * @param EntryTranUnionpayOutput $entryTranUnionpayOutput ネット銀聯登録出力パラメータ
     */
    public function setEntryTranUnionpayOutput(&$entryTranUnionpayOutput)
    {
        $this->entryTranUnionpayOutput = $entryTranUnionpayOutput;
    }

    /**
     * ネット銀聯決済実行出力パラメータ設定
     *
     * @param ExecTranUnionpayOutput $execTranUnionpayOutput ネット銀聯実行出力パラメータ
     */
    public function setExecTranUnionpayOutput(&$execTranUnionpayOutput)
    {
        $this->execTranUnionpayOutput = $execTranUnionpayOutput;
    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranUnionpayOutput->getOrderID();

    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->entryTranUnionpayOutput->getAccessID();

    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->entryTranUnionpayOutput->getAccessPass();

    }

    /**
     * トークン取得
     * @return string トークン
     */
    public function getToken()
    {
        return $this->execTranUnionpayOutput->getToken();

    }

    /**
     * 支払手続き開始IFのURL取得
     * @return string 支払手続き開始IFのURL
     */
    public function getStartURL()
    {
        return $this->execTranUnionpayOutput->getStartURL();

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranUnionpayOutput->setOrderID($orderID);

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->entryTranUnionpayOutput->setAccessID($accessID);
        $this->execTranUnionpayOutput->setAccessID($accessID);

    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranUnionpayOutput->setAccessPass($accessPass);

    }

    /**
     * トークン設定
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->execTranUnionpayOutput->setToken($token);

    }

    /**
     * 支払手続き開始IFのURL設定
     *
     * @param string $startURL
     */
    public function setStartURL($startURL)
    {
        $this->execTranUnionpayOutput->setStartURL($startURL);

    }

    /**
     * 取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranUnionpayOutput->getErrList();
    }

    /**
     * 決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranUnionpayOutput->getErrList();
    }

    /**
     * 取引登録エラー発生判定
     * @return boolean 取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranUnionpayOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * 決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranUnionpayOutput->getErrList();
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
