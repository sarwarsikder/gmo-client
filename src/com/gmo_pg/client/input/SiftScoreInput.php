<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>siftスコア照会　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SiftScoreInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード 
	 */
	private $shopPass;
	/**
	 * @var string siftオーダーID
	 */
	private $siftOrderID;
	/**
	 * @var string 注文ID
	 */
	private $orderID;


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
	 * ショップパスワード 取得
	 * @return string ショップパスワード 
	 */
	public function getShopPass() {
		return $this->shopPass;
	}
	/**
	 * siftオーダーID取得
	 * @return string siftオーダーID
	 */
	public function getSiftOrderID() {
		return $this->siftOrderID;
	}
	/**
	 * 注文ID取得
	 * @return string 注文ID
	 */
	public function getOrderID() {
		return $this->orderID;
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
	 * ショップパスワード 設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}
	/**
	 * siftオーダーID設定
	 *
	 * @param string $siftOrderID
	 */
	public function setSiftOrderID($siftOrderID) {
		$this->siftOrderID = $siftOrderID;
	}
	/**
	 * 注文ID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
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
		$this->setSiftOrderID($this->getStringValue($params, 'SiftOrderID', $this->getSiftOrderID()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));

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
		$str .= 'SiftOrderID=' . $this->encodeStr($this->getSiftOrderID());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());

	    return $str;
	}


}
?>
