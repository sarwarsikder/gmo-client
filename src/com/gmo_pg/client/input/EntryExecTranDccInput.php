<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranDccInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranDccInput;

/*require_once 'com/gmo_pg/client/input/EntryTranDccInput.php';
require_once 'com/gmo_pg/client/input/ExecTranDccInput.php';*/

/**
 * <b>多通貨クレジット決済（DCC)登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDccInput
{

    /**
     * @var EntryTranDccInput 多通貨クレジット決済（DCC)登録入力パラメータ
     */
    private $entryTranDccInput;
    /* @var $entryTranInput EntryTranDccInput */

    /**
     * @var ExecTranDccInput 多通貨クレジット決済（DCC)実行入力パラメータ
     */
    private $execTranDccInput;
    /* @var $execTranInput ExecTranDccInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranDccInput = new EntryTranDccInput($params);
        $this->execTranDccInput = new ExecTranDccInput($params);
    }

    /**
     * 多通貨クレジット決済（DCC)取引登録入力パラメータ取得
     *
     * @return EntryTranDccInput 取引登録時パラメータ
     */
    public function &getEntryTranDccInput()
    {
        return $this->entryTranDccInput;
    }

    /**
     * 多通貨クレジット決済（DCC)実行入力パラメータ取得
     * @return ExecTranDccInput 決済実行時パラメータ
     */
    public function &getExecTranDccInput()
    {
        return $this->execTranDccInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranDccInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranDccInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranDccInput->getOrderID();

    }

    /**
     * 支払通貨コード取得
     * @return string 支払通貨コード
     */
    public function getDccCurrency()
    {
        return $this->entryTranDccInput->getDccCurrency();
    }

    /**
     * FX追跡番号取得
     * @return string FX追跡番号
     */
    public function getFtn()
    {
        return $this->entryTranDccInput->getFtn();
    }

    /**
     * 商品コード取得
     * @return string 商品コード
     */
    public function getItemCode()
    {
        return $this->entryTranDccInput->getItemCode();
    }

    /**
     * 利用料金取得
     * @return integer 利用料金
     */
    public function getAmount()
    {
        return $this->entryTranDccInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranDccInput->getTax();
    }

    /**
     * 3DS使用可否フラグ取得
     * @return string 3DS使用可否フラグ
     */
    public function getTdFlag()
    {
        return $this->entryTranDccInput->getTdFlag();
    }

    /**
     * 3DS表示店舗名取得
     * @return string 3DS表示店舗名
     */
    public function getTdTenantName()
    {
        return $this->entryTranDccInput->getTdTenantName();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranDccInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranDccInput->getAccessPass();
    }

    /**
     * カード番号取得
     * @return string カード番号
     */
    public function getCardNo()
    {
        return $this->execTranDccInput->getCardNo();
    }

    /**
     * 有効期限取得
     * @return string 有効期限
     */
    public function getExpire()
    {
        return $this->execTranDccInput->getExpire();
    }

    /**
     * セキュリティコード取得
     * @return string セキュリティコード
     */
    public function getSecurityCode()
    {
        return $this->execTranDccInput->getSecurityCode();
    }

    /**
     * トークン取得
     * @return string トークン
     */
    public function getToken()
    {
        return $this->execTranDccInput->getToken();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranDccInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranDccInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranDccInput->getClientField3();
    }

    /**
     * 加盟店自由項目返却フラグ取得
     * @return string 加盟店自由項目返却フラグ
     */
    public function getClientFieldFlag()
    {
        return $this->execTranDccInput->getClientFieldFlag();
    }

    /**
     * サイトID取得
     * @return string サイトID
     */
    public function getSiteID()
    {
        return $this->execTranDccInput->getSiteID();
    }

    /**
     * サイトパスワード取得
     * @return string サイトパスワード
     */
    public function getSitePass()
    {
        return $this->execTranDccInput->getSitePass();
    }

    /**
     * 会員ID取得
     * @return string 会員ID
     */
    public function getMemberID()
    {
        return $this->execTranDccInput->getMemberID();
    }

    /**
     * モード取得
     * @return string モード
     */
    public function getSeqMode()
    {
        return $this->execTranDccInput->getSeqMode();
    }

    /**
     * カード登録連番取得
     * @return string カード登録連番
     */
    public function getCardSeq()
    {
        return $this->execTranDccInput->getCardSeq();
    }

    /**
     * カードパスワード取得
     * @return string カードパスワード
     */
    public function getCardPass()
    {
        return $this->execTranDccInput->getCardPass();
    }

    /**
     * 多通貨クレジット決済（DCC)取引登録入力パラメータ設定
     *
     * @param EntryTranDccInput entryTranDccInput  取引登録入力パラメータ
     */
    public function setEntryTranDccInput(&$entryTranDccInput)
    {
        $this->entryTranDccInput = $entryTranDccInput;
    }

    /**
     * 多通貨クレジット決済（DCC)実行入力パラメータ設定
     *
     * @param ExecTranDccInput  execTranDccInput   決済実行入力パラメータ
     */
    public function setExecTranDccInput(&$execTranDccInput)
    {
        $this->execTranDccInput = $execTranDccInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranDccInput->setShopID($shopID);
        $this->execTranDccInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranDccInput->setShopPass($shopPass);
        $this->execTranDccInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranDccInput->setOrderID($orderID);
        $this->execTranDccInput->setOrderID($orderID);

    }

    /**
     * 支払通貨コード設定
     *
     * @param string $dccCurrency
     */
    public function setDccCurrency($dccCurrency)
    {
        $this->entryTranDccInput->setDccCurrency($dccCurrency);
    }

    /**
     * FX追跡番号設定
     *
     * @param string $ftn
     */
    public function setFtn($ftn)
    {
        $this->entryTranDccInput->setFtn($ftn);
    }

    /**
     * 商品コード設定
     *
     * @param string $itemCode
     */
    public function setItemCode($itemCode)
    {
        $this->entryTranDccInput->setItemCode($itemCode);
    }

    /**
     * 利用料金設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranDccInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranDccInput->setTax($tax);
    }

    /**
     * 3DS使用可否フラグ設定
     *
     * @param string $tdFlag
     */
    public function setTdFlag($tdFlag)
    {
        $this->entryTranDccInput->setTdFlag($tdFlag);
    }

    /**
     * 3DS表示店舗名設定
     *
     * @param string $tdTenantName
     */
    public function setTdTenantName($tdTenantName)
    {
        $this->entryTranDccInput->setTdTenantName($tdTenantName);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranDccInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranDccInput->setAccessPass($accessPass);
    }

    /**
     * カード番号設定
     *
     * @param string $cardNo
     */
    public function setCardNo($cardNo)
    {
        $this->execTranDccInput->setCardNo($cardNo);
    }

    /**
     * 有効期限設定
     *
     * @param string $expire
     */
    public function setExpire($expire)
    {
        $this->execTranDccInput->setExpire($expire);
    }

    /**
     * セキュリティコード設定
     *
     * @param string $securityCode
     */
    public function setSecurityCode($securityCode)
    {
        $this->execTranDccInput->setSecurityCode($securityCode);
    }

    /**
     * トークン設定
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->execTranDccInput->setToken($token);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranDccInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranDccInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranDccInput->setClientField3($clientField3);
    }

    /**
     * 加盟店自由項目返却フラグ設定
     *
     * @param string $clientFieldFlag
     */
    public function setClientFieldFlag($clientFieldFlag)
    {
        $this->execTranDccInput->setClientFieldFlag($clientFieldFlag);
    }

    /**
     * サイトID設定
     *
     * @param string $siteID
     */
    public function setSiteID($siteID)
    {
        $this->execTranDccInput->setSiteID($siteID);
    }

    /**
     * サイトパスワード設定
     *
     * @param string $sitePass
     */
    public function setSitePass($sitePass)
    {
        $this->execTranDccInput->setSitePass($sitePass);
    }

    /**
     * 会員ID設定
     *
     * @param string $memberID
     */
    public function setMemberID($memberID)
    {
        $this->execTranDccInput->setMemberID($memberID);
    }

    /**
     * モード設定
     *
     * @param string $seqMode
     */
    public function setSeqMode($seqMode)
    {
        $this->execTranDccInput->setSeqMode($seqMode);
    }

    /**
     * カード登録連番設定
     *
     * @param string $cardSeq
     */
    public function setCardSeq($cardSeq)
    {
        $this->execTranDccInput->setCardSeq($cardSeq);
    }

    /**
     * カードパスワード設定
     *
     * @param string $cardPass
     */
    public function setCardPass($cardPass)
    {
        $this->execTranDccInput->setCardPass($cardPass);
    }

}

?>
