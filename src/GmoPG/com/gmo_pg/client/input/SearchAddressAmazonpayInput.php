<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>Amazon Pay住所情報参照　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchAddressAmazonpayInput extends BaseInput {

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
	 * @var string AmazonチェックアウトセッションID
	 */
	private $amazonCheckoutSessionID;
	/**
	 * @var string Amazonバイヤートークン
	 */
	private $amazonBuyerToken;


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
	 * AmazonチェックアウトセッションID取得
	 * @return string AmazonチェックアウトセッションID
	 */
	public function getAmazonCheckoutSessionID() {
		return $this->amazonCheckoutSessionID;
	}
	/**
	 * Amazonバイヤートークン取得
	 * @return string Amazonバイヤートークン
	 */
	public function getAmazonBuyerToken() {
		return $this->amazonBuyerToken;
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
	 * AmazonチェックアウトセッションID設定
	 *
	 * @param string $amazonCheckoutSessionID
	 */
	public function setAmazonCheckoutSessionID($amazonCheckoutSessionID) {
		$this->amazonCheckoutSessionID = $amazonCheckoutSessionID;
	}
	/**
	 * Amazonバイヤートークン設定
	 *
	 * @param string $amazonBuyerToken
	 */
	public function setAmazonBuyerToken($amazonBuyerToken) {
		$this->amazonBuyerToken = $amazonBuyerToken;
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
		$this->setAmazonCheckoutSessionID($this->getStringValue($params, 'AmazonCheckoutSessionID', $this->getAmazonCheckoutSessionID()));
		$this->setAmazonBuyerToken($this->getStringValue($params, 'AmazonBuyerToken', $this->getAmazonBuyerToken()));

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
		$str .= 'AmazonCheckoutSessionID=' . $this->encodeStr($this->getAmazonCheckoutSessionID());
		$str .='&';
		$str .= 'AmazonBuyerToken=' . $this->encodeStr($this->getAmazonBuyerToken());

	    return $str;
	}


}
?>
