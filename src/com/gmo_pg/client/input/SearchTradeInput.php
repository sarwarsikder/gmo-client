<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>取引照会　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class SearchTradeInput extends BaseInput {

	/**
	 * @var ショップID GMOPG発行の、加盟店識別ID
	 */
	private $shopId;

	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;

	/**
	 * @var string オーダーID 加盟店様が発番する、取引のID
	 */
	private $orderId;

	/**
	 * @var string サイト設定のマスクレベル利用有無
	 */
	private $useSiteMaskLevel;

	/**
	 * @var  string 可変マスク
	 */
	private $useFloatingMask;

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
	public function getShopId() {
		return $this->shopId;
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}

	/**
	 * オーダーID
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * サイト設定のマスクレベル利用有無取得
	 * @return string サイト設定のマスクレベル利用有無
	 */
	public function getUseSiteMaskLevel() {
		return $this->useSiteMaskLevel;
	}

	/**
	 * 可変マスク取得
	 * @return string 可変マスク
	 */
	public function getUseFloatingMask(){
	    return $this->useFloatingMask;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId ショップID
	 */
	public function setShopId($shopId) {
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass ショップパスワード
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * サイト設定のマスクレベル利用有無設定
	 *
	 * @param string $useSiteMaskLevel サイト設定のマスクレベル利用有無
	 */
	public function setUseSiteMaskLevel($useSiteMaskLevel) {
		$this->useSiteMaskLevel = $useSiteMaskLevel;
	}

	/**
	 * 可変マスク設定
	 * @param string $useFloatingMask 登録カード連番
	 */
	public function setUseFloatingMask($useFloatingMask){
	    $this->useFloatingMask = $useFloatingMask;
	}

	/**
	 * デフォルト値を設定する
	 */
	public function setDefaultValues() {
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

	    // 各項目の設定(CardSeqは値が数値でないものは無効とする)
	    $this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
	    $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
        $this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
        $this->setUseSiteMaskLevel($this->getStringValue($params, 'UseSiteMaskLevel', $this->getUseSiteMaskLevel()));
        $this->setUseFloatingMask($this->getStringValue($params, '$useFloatingMask', $this->getUseFloatingMask()));
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列表現
	 */
	public function toString() {

	    $str  = 'ShopID=' . $this->encodeStr($this->getShopId());
	    $str .= '&';
	    $str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
	    $str .= '&';
	    $str .= 'UseSiteMaskLevel=' . $this->encodeStr($this->getUseSiteMaskLevel());
	    $str .= '&';
	    $str .= 'useFloatingMask=' . $this->encodeStr($this->getUseFloatingMask());

	    return $str;
	}

}
?>