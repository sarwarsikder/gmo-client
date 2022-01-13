<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranFamipayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranFamipayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranFamipayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranFamipayInput.php';*/

/**
 * <b>FamiPay登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranFamipayInput
{

    /**
     * @var EntryTranFamipayInput FamiPay登録入力パラメータ
     */
    private $entryTranFamipayInput;
    /* @var $entryTranInput EntryTranFamipayInput */

    /**
     * @var ExecTranFamipayInput FamiPay実行入力パラメータ
     */
    private $execTranFamipayInput;
    /* @var $execTranInput ExecTranFamipayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranFamipayInput = new EntryTranFamipayInput($params);
        $this->execTranFamipayInput = new ExecTranFamipayInput($params);
    }

    /**
     * FamiPay取引登録入力パラメータ取得
     *
     * @return EntryTranFamipayInput 取引登録時パラメータ
     */
    public function &getEntryTranFamipayInput()
    {
        return $this->entryTranFamipayInput;
    }

    /**
     * FamiPay実行入力パラメータ取得
     * @return ExecTranFamipayInput 決済実行時パラメータ
     */
    public function &getExecTranFamipayInput()
    {
        return $this->execTranFamipayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranFamipayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranFamipayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranFamipayInput->getOrderID();

    }

    /**
     * 利用料金取得
     * @return integer 利用料金
     */
    public function getAmount()
    {
        return $this->entryTranFamipayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranFamipayInput->getTax();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranFamipayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranFamipayInput->getAccessPass();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranFamipayInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranFamipayInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranFamipayInput->getClientField3();
    }

    /**
     * 決済結果戻しURL取得
     * @return string 決済結果戻しURL
     */
    public function getRetURL()
    {
        return $this->execTranFamipayInput->getRetURL();
    }

    /**
     * 認証連携トークン取得
     * @return string 認証連携トークン
     */
    public function getAuthToken()
    {
        return $this->execTranFamipayInput->getAuthToken();
    }

    /**
     * FamiPay取引登録入力パラメータ設定
     *
     * @param EntryTranFamipayInput entryTranFamipayInput  取引登録入力パラメータ
     */
    public function setEntryTranFamipayInput(&$entryTranFamipayInput)
    {
        $this->entryTranFamipayInput = $entryTranFamipayInput;
    }

    /**
     * FamiPay実行入力パラメータ設定
     *
     * @param ExecTranFamipayInput  execTranFamipayInput   決済実行入力パラメータ
     */
    public function setExecTranFamipayInput(&$execTranFamipayInput)
    {
        $this->execTranFamipayInput = $execTranFamipayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranFamipayInput->setShopID($shopID);
        $this->execTranFamipayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranFamipayInput->setShopPass($shopPass);
        $this->execTranFamipayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranFamipayInput->setOrderID($orderID);
        $this->execTranFamipayInput->setOrderID($orderID);

    }

    /**
     * 利用料金設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranFamipayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranFamipayInput->setTax($tax);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranFamipayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranFamipayInput->setAccessPass($accessPass);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranFamipayInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranFamipayInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranFamipayInput->setClientField3($clientField3);
    }

    /**
     * 決済結果戻しURL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranFamipayInput->setRetURL($retURL);
    }

    /**
     * 認証連携トークン設定
     *
     * @param string $authToken
     */
    public function setAuthToken($authToken)
    {
        $this->execTranFamipayInput->setAuthToken($authToken);
    }

}

?>
