<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>多通貨クレジット決済（DCC)ショップ別レート照会　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchRateDccInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var integer 利用金額
	 */
	private $amount;
	/**
	 * @var string 支払通貨コード
	 */
	private $dccCurrency;
	/**
	 * @var string FX追跡番号(FTN)
	 */
	private $ftn;


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
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 支払通貨コード取得
	 * @return string 支払通貨コード
	 */
	public function getDccCurrency() {
		return $this->dccCurrency;
	}
	/**
	 * FX追跡番号(FTN)取得
	 * @return string FX追跡番号(FTN)
	 */
	public function getFtn() {
		return $this->ftn;
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
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
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
	 * FX追跡番号(FTN)設定
	 *
	 * @param string $ftn
	 */
	public function setFtn($ftn) {
		$this->ftn = $ftn;
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
		$this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
		$this->setDccCurrency($this->getStringValue($params, 'DccCurrency', $this->getDccCurrency()));
		$this->setFtn($this->getStringValue($params, 'Ftn', $this->getFtn()));

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
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'DccCurrency=' . $this->encodeStr($this->getDccCurrency());
		$str .='&';
		$str .= 'Ftn=' . $this->encodeStr($this->getFtn());

	    return $str;
	}


}
?>
