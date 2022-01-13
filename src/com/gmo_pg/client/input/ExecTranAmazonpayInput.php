<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>Amazon Pay決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranAmazonpayInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;
	/**
	 * @var string 加盟店自由項目2
	 */
	private $clientField2;
	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;
	/**
	 * @var string AmazonオーダーリファレンスID
	 */
	private $amazonOrderReferenceID;
	/**
	 * @var string 決済結果戻しURL
	 */
	private $retURL;
	/**
	 * @var integer 支払開始期限秒
	 */
	private $paymentTermSec;
	/**
	 * @var string AmazonチェックアウトセッションID
	 */
	private $amazonCheckoutSessionID;
	/**
	 * @var string 商品名
	 */
	private $itemName;
	/**
	 * @var string AmazonビリングアグリーメントID
	 */
	private $amazonBillingAgreementID;
	/**
	 * @var string AmazonチャージパーミッションID 
	 */
	private $amazonChargePermissionID;
	/**
	 * @var string 請求サイクル単位
	 */
	private $frequencyUnit;
	/**
	 * @var string 請求サイクル数
	 */
	private $frequencyValue;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}
	/**
	 * AmazonオーダーリファレンスID取得
	 * @return string AmazonオーダーリファレンスID
	 */
	public function getAmazonOrderReferenceID() {
		return $this->amazonOrderReferenceID;
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->retURL;
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->paymentTermSec;
	}
	/**
	 * AmazonチェックアウトセッションID取得
	 * @return string AmazonチェックアウトセッションID
	 */
	public function getAmazonCheckoutSessionID() {
		return $this->amazonCheckoutSessionID;
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getItemName() {
		return $this->itemName;
	}
	/**
	 * AmazonビリングアグリーメントID取得
	 * @return string AmazonビリングアグリーメントID
	 */
	public function getAmazonBillingAgreementID() {
		return $this->amazonBillingAgreementID;
	}
	/**
	 * AmazonチャージパーミッションID 取得
	 * @return string AmazonチャージパーミッションID 
	 */
	public function getAmazonChargePermissionID() {
		return $this->amazonChargePermissionID;
	}
	/**
	 * 請求サイクル単位取得
	 * @return string 請求サイクル単位
	 */
	public function getFrequencyUnit() {
		return $this->frequencyUnit;
	}
	/**
	 * 請求サイクル数取得
	 * @return string 請求サイクル数
	 */
	public function getFrequencyValue() {
		return $this->frequencyValue;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->shopID = $shopID;
	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}
	/**
	 * AmazonオーダーリファレンスID設定
	 *
	 * @param string $amazonOrderReferenceID
	 */
	public function setAmazonOrderReferenceID($amazonOrderReferenceID) {
		$this->amazonOrderReferenceID = $amazonOrderReferenceID;
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->retURL = $retURL;
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->paymentTermSec = $paymentTermSec;
	}
	/**
	 * AmazonチェックアウトセッションID設定
	 *
	 * @param string $amazonCheckoutSessionID
	 */
	public function setAmazonCheckoutSessionID($amazonCheckoutSessionID) {
		$this->amazonCheckoutSessionID = $amazonCheckoutSessionID;
	}
	/**
	 * 商品名設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}
	/**
	 * AmazonビリングアグリーメントID設定
	 *
	 * @param string $amazonBillingAgreementID
	 */
	public function setAmazonBillingAgreementID($amazonBillingAgreementID) {
		$this->amazonBillingAgreementID = $amazonBillingAgreementID;
	}
	/**
	 * AmazonチャージパーミッションID 設定
	 *
	 * @param string $amazonChargePermissionID
	 */
	public function setAmazonChargePermissionID($amazonChargePermissionID) {
		$this->amazonChargePermissionID = $amazonChargePermissionID;
	}
	/**
	 * 請求サイクル単位設定
	 *
	 * @param string $frequencyUnit
	 */
	public function setFrequencyUnit($frequencyUnit) {
		$this->frequencyUnit = $frequencyUnit;
	}
	/**
	 * 請求サイクル数設定
	 *
	 * @param string $frequencyValue
	 */
	public function setFrequencyValue($frequencyValue) {
		$this->frequencyValue = $frequencyValue;
	}


	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setAccessID($this->getStringValue($params, 'AccessID', $this->getAccessID()));
		$this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
		$this->setAmazonOrderReferenceID($this->getStringValue($params, 'AmazonOrderReferenceID', $this->getAmazonOrderReferenceID()));
		$this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
		$this->setPaymentTermSec($this->getStringValue($params, 'PaymentTermSec', $this->getPaymentTermSec()));
		$this->setAmazonCheckoutSessionID($this->getStringValue($params, 'AmazonCheckoutSessionID', $this->getAmazonCheckoutSessionID()));
		$this->setItemName($this->getStringValue($params, 'ItemName', $this->getItemName()));
		$this->setAmazonBillingAgreementID($this->getStringValue($params, 'AmazonBillingAgreementID', $this->getAmazonBillingAgreementID()));
		$this->setAmazonChargePermissionID($this->getStringValue($params, 'AmazonChargePermissionID', $this->getAmazonChargePermissionID()));
		$this->setFrequencyUnit($this->getStringValue($params, 'FrequencyUnit', $this->getFrequencyUnit()));
		$this->setFrequencyValue($this->getStringValue($params, 'FrequencyValue', $this->getFrequencyValue()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .='&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'AmazonOrderReferenceID=' . $this->encodeStr($this->getAmazonOrderReferenceID());
		$str .='&';
		$str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
		$str .='&';
		$str .= 'PaymentTermSec=' . $this->encodeStr($this->getPaymentTermSec());
		$str .='&';
		$str .= 'AmazonCheckoutSessionID=' . $this->encodeStr($this->getAmazonCheckoutSessionID());
		$str .='&';
		$str .= 'ItemName=' . $this->encodeStr($this->getItemName());
		$str .='&';
		$str .= 'AmazonBillingAgreementID=' . $this->encodeStr($this->getAmazonBillingAgreementID());
		$str .='&';
		$str .= 'AmazonChargePermissionID=' . $this->encodeStr($this->getAmazonChargePermissionID());
		$str .='&';
		$str .= 'FrequencyUnit=' . $this->encodeStr($this->getFrequencyUnit());
		$str .='&';
		$str .= 'FrequencyValue=' . $this->encodeStr($this->getFrequencyValue());

	    return $str;
	}


}
?>
