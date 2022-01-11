<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>多通貨クレジット決済（DCC)取引登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryTranDccInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 支払通貨コード
	 */
	private $dccCurrency;
	/**
	 * @var string FX追跡番号
	 */
	private $ftn;
	/**
	 * @var string 商品コード
	 */
	private $itemCode;
	/**
	 * @var integer 利用料金
	 */
	private $amount;
	/**
	 * @var integer 税送料
	 */
	private $tax;
	/**
	 * @var string 3DS使用可否フラグ
	 */
	private $tdFlag;
	/**
	 * @var string 3DS表示店舗名
	 */
	private $tdTenantName;


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
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 支払通貨コード取得
	 * @return string 支払通貨コード
	 */
	public function getDccCurrency() {
		return $this->dccCurrency;
	}
	/**
	 * FX追跡番号取得
	 * @return string FX追跡番号
	 */
	public function getFtn() {
		return $this->ftn;
	}
	/**
	 * 商品コード取得
	 * @return string 商品コード
	 */
	public function getItemCode() {
		return $this->itemCode;
	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->tax;
	}
	/**
	 * 3DS使用可否フラグ取得
	 * @return string 3DS使用可否フラグ
	 */
	public function getTdFlag() {
		return $this->tdFlag;
	}
	/**
	 * 3DS表示店舗名取得
	 * @return string 3DS表示店舗名
	 */
	public function getTdTenantName() {
		return $this->tdTenantName;
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
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * 支払通貨コード設定
	 *
	 * @param string $dccCurrency
	 */
	public function setDccCurrency($dccCurrency) {
		$this->dccCurrency = $dccCurrency;
	}
	/**
	 * FX追跡番号設定
	 *
	 * @param string $ftn
	 */
	public function setFtn($ftn) {
		$this->ftn = $ftn;
	}
	/**
	 * 商品コード設定
	 *
	 * @param string $itemCode
	 */
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}
	/**
	 * 3DS使用可否フラグ設定
	 *
	 * @param string $tdFlag
	 */
	public function setTdFlag($tdFlag) {
		$this->tdFlag = $tdFlag;
	}
	/**
	 * 3DS表示店舗名設定
	 *
	 * @param string $tdTenantName
	 */
	public function setTdTenantName($tdTenantName) {
		$this->tdTenantName = $tdTenantName;
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
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setDccCurrency($this->getStringValue($params, 'DccCurrency', $this->getDccCurrency()));
		$this->setFtn($this->getStringValue($params, 'Ftn', $this->getFtn()));
		$this->setItemCode($this->getStringValue($params, 'ItemCode', $this->getItemCode()));
		$this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
		$this->setTax($this->getStringValue($params, 'Tax', $this->getTax()));
		$this->setTdFlag($this->getStringValue($params, 'TdFlag', $this->getTdFlag()));
		$this->setTdTenantName($this->getStringValue($params, 'TdTenantName', $this->getTdTenantName()));

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
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'DccCurrency=' . $this->encodeStr($this->getDccCurrency());
		$str .='&';
		$str .= 'Ftn=' . $this->encodeStr($this->getFtn());
		$str .='&';
		$str .= 'ItemCode=' . $this->encodeStr($this->getItemCode());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
		$str .='&';
		$str .= 'TdFlag=' . $this->encodeStr($this->getTdFlag());
		$str .='&';
		$str .= 'TdTenantName=' . $this->encodeStr($this->getTdTenantName());

	    return $str;
	}


}
?>
