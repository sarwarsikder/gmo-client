<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranAmazonpayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranAmazonpayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranAmazonpayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranAmazonpayInput.php';*/

/**
 * <b>Amazon Pay登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAmazonpayInput
{

    /**
     * @var EntryTranAmazonpayInput Amazon Pay登録入力パラメータ
     */
    private $entryTranAmazonpayInput;
    /* @var $entryTranInput EntryTranAmazonpayInput */

    /**
     * @var ExecTranAmazonpayInput Amazon Pay実行入力パラメータ
     */
    private $execTranAmazonpayInput;
    /* @var $execTranInput ExecTranAmazonpayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranAmazonpayInput = new EntryTranAmazonpayInput($params);
        $this->execTranAmazonpayInput = new ExecTranAmazonpayInput($params);
    }

    /**
     * Amazon Pay取引登録入力パラメータ取得
     *
     * @return EntryTranAmazonpayInput 取引登録時パラメータ
     */
    public function &getEntryTranAmazonpayInput()
    {
        return $this->entryTranAmazonpayInput;
    }

    /**
     * Amazon Pay実行入力パラメータ取得
     * @return ExecTranAmazonpayInput 決済実行時パラメータ
     */
    public function &getExecTranAmazonpayInput()
    {
        return $this->execTranAmazonpayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranAmazonpayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranAmazonpayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranAmazonpayInput->getOrderID();

    }

    /**
     * 処理区分取得
     * @return string 処理区分
     */
    public function getJobCd()
    {
        return $this->entryTranAmazonpayInput->getJobCd();
    }

    /**
     * 利用金額取得
     * @return integer 利用金額
     */
    public function getAmount()
    {
        return $this->entryTranAmazonpayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranAmazonpayInput->getTax();
    }

    /**
     * AmazonPay実装タイプ取得
     * @return string AmazonPay実装タイプ
     */
    public function getAmazonpayType()
    {
        return $this->entryTranAmazonpayInput->getAmazonpayType();
    }

    /**
     * 決済タイプ取得
     * @return string 決済タイプ
     */
    public function getPaymentType()
    {
        return $this->entryTranAmazonpayInput->getPaymentType();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranAmazonpayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranAmazonpayInput->getAccessPass();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranAmazonpayInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranAmazonpayInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranAmazonpayInput->getClientField3();
    }

    /**
     * AmazonオーダーリファレンスID取得
     * @return string AmazonオーダーリファレンスID
     */
    public function getAmazonOrderReferenceID()
    {
        return $this->execTranAmazonpayInput->getAmazonOrderReferenceID();
    }

    /**
     * 決済結果戻しURL取得
     * @return string 決済結果戻しURL
     */
    public function getRetURL()
    {
        return $this->execTranAmazonpayInput->getRetURL();
    }

    /**
     * 支払開始期限秒取得
     * @return integer 支払開始期限秒
     */
    public function getPaymentTermSec()
    {
        return $this->execTranAmazonpayInput->getPaymentTermSec();
    }

    /**
     * AmazonチェックアウトセッションID取得
     * @return string AmazonチェックアウトセッションID
     */
    public function getAmazonCheckoutSessionID()
    {
        return $this->execTranAmazonpayInput->getAmazonCheckoutSessionID();
    }

    /**
     * 商品名取得
     * @return string 商品名
     */
    public function getItemName()
    {
        return $this->execTranAmazonpayInput->getItemName();
    }

    /**
     * AmazonビリングアグリーメントID取得
     * @return string AmazonビリングアグリーメントID
     */
    public function getAmazonBillingAgreementID()
    {
        return $this->execTranAmazonpayInput->getAmazonBillingAgreementID();
    }

    /**
     * AmazonチャージパーミッションID 取得
     * @return string AmazonチャージパーミッションID
     */
    public function getAmazonChargePermissionID()
    {
        return $this->execTranAmazonpayInput->getAmazonChargePermissionID();
    }

    /**
     * 請求サイクル単位取得
     * @return string 請求サイクル単位
     */
    public function getFrequencyUnit()
    {
        return $this->execTranAmazonpayInput->getFrequencyUnit();
    }

    /**
     * 請求サイクル数取得
     * @return string 請求サイクル数
     */
    public function getFrequencyValue()
    {
        return $this->execTranAmazonpayInput->getFrequencyValue();
    }

    /**
     * Amazon Pay取引登録入力パラメータ設定
     *
     * @param EntryTranAmazonpayInput entryTranAmazonpayInput  取引登録入力パラメータ
     */
    public function setEntryTranAmazonpayInput(&$entryTranAmazonpayInput)
    {
        $this->entryTranAmazonpayInput = $entryTranAmazonpayInput;
    }

    /**
     * Amazon Pay実行入力パラメータ設定
     *
     * @param ExecTranAmazonpayInput  execTranAmazonpayInput   決済実行入力パラメータ
     */
    public function setExecTranAmazonpayInput(&$execTranAmazonpayInput)
    {
        $this->execTranAmazonpayInput = $execTranAmazonpayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranAmazonpayInput->setShopID($shopID);
        $this->execTranAmazonpayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranAmazonpayInput->setShopPass($shopPass);
        $this->execTranAmazonpayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranAmazonpayInput->setOrderID($orderID);
        $this->execTranAmazonpayInput->setOrderID($orderID);

    }

    /**
     * 処理区分設定
     *
     * @param string $jobCd
     */
    public function setJobCd($jobCd)
    {
        $this->entryTranAmazonpayInput->setJobCd($jobCd);
    }

    /**
     * 利用金額設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranAmazonpayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranAmazonpayInput->setTax($tax);
    }

    /**
     * AmazonPay実装タイプ設定
     *
     * @param string $amazonpayType
     */
    public function setAmazonpayType($amazonpayType)
    {
        $this->entryTranAmazonpayInput->setAmazonpayType($amazonpayType);
    }

    /**
     * 決済タイプ設定
     *
     * @param string $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->entryTranAmazonpayInput->setPaymentType($paymentType);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranAmazonpayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranAmazonpayInput->setAccessPass($accessPass);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranAmazonpayInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranAmazonpayInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranAmazonpayInput->setClientField3($clientField3);
    }

    /**
     * AmazonオーダーリファレンスID設定
     *
     * @param string $amazonOrderReferenceID
     */
    public function setAmazonOrderReferenceID($amazonOrderReferenceID)
    {
        $this->execTranAmazonpayInput->setAmazonOrderReferenceID($amazonOrderReferenceID);
    }

    /**
     * 決済結果戻しURL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranAmazonpayInput->setRetURL($retURL);
    }

    /**
     * 支払開始期限秒設定
     *
     * @param integer $paymentTermSec
     */
    public function setPaymentTermSec($paymentTermSec)
    {
        $this->execTranAmazonpayInput->setPaymentTermSec($paymentTermSec);
    }

    /**
     * AmazonチェックアウトセッションID設定
     *
     * @param string $amazonCheckoutSessionID
     */
    public function setAmazonCheckoutSessionID($amazonCheckoutSessionID)
    {
        $this->execTranAmazonpayInput->setAmazonCheckoutSessionID($amazonCheckoutSessionID);
    }

    /**
     * 商品名設定
     *
     * @param string $itemName
     */
    public function setItemName($itemName)
    {
        $this->execTranAmazonpayInput->setItemName($itemName);
    }

    /**
     * AmazonビリングアグリーメントID設定
     *
     * @param string $amazonBillingAgreementID
     */
    public function setAmazonBillingAgreementID($amazonBillingAgreementID)
    {
        $this->execTranAmazonpayInput->setAmazonBillingAgreementID($amazonBillingAgreementID);
    }

    /**
     * AmazonチャージパーミッションID 設定
     *
     * @param string $amazonChargePermissionID
     */
    public function setAmazonChargePermissionID($amazonChargePermissionID)
    {
        $this->execTranAmazonpayInput->setAmazonChargePermissionID($amazonChargePermissionID);
    }

    /**
     * 請求サイクル単位設定
     *
     * @param string $frequencyUnit
     */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->execTranAmazonpayInput->setFrequencyUnit($frequencyUnit);
    }

    /**
     * 請求サイクル数設定
     *
     * @param string $frequencyValue
     */
    public function setFrequencyValue($frequencyValue)
    {
        $this->execTranAmazonpayInput->setFrequencyValue($frequencyValue);
    }

}

?>
