<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';

/**
 * <b>逆引き会員ID検照会　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 15-12-2014
 */
class SearchCardReverseInput extends BaseInput {

	/**
	 * @var string サイトID GMOPG発行のサイト識別ID
	 */
	private $siteId;

	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;

	/**
	 * @var string カード番号
	 */
	private $cardNo;

	/**
	 * @var string カード番号
	 */
	private $token;

	/**
	 * @var string ショップID
	 */
	private $shopId;

	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;

	/**
	 * @var string オーダーID
	 */
	private $orderId;

	/**
	 * @var string 会員ID
	 */
	private $memberId;

	/**
	 * @var カード登録連番モード
	 */
	private $seqMode;

	/**
	 * @var カード登録連番
	 */
	private $cardSeq;

	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}



	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteId() {
		return $this->siteId;
	}

	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}

	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}

	/**
	 * カード情報トークン
	 * @return string カード情報トークン
	 */
	public function getToken() {
		return $this->token;
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
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberId() {
		return $this->memberId;
	}

	/**
	 * カード登録連番モード
	 * @return string カード登録連番モード
	 */
	public function getSeqMode() {
		return $this->seqMode;
	}

	/**
	 * カード登録連番
	 * @return string カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteId サイトID
	 */
	public function setSiteId($siteId) {
		$this->siteId = $siteId;
	}

	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass サイトパスワード
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}

	/**
	 * カード番号設定
	 *
	 * @param string $cardNo カード番号
	 */
	public function setCardNo($cardNo) {
		$this->cardNo = $cardNo;
	}

	/**
	 * カード情報トークン
	 *
	 * @param string $token カード情報トークン
	 */
	public function setToken($token) {
		$this->token = $token;
	}

	/**
	 * ショップID
	 *
	 * @param string $shopId ショップID
	 */
	public function setShopId($shopId) {
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワード
	 *
	 * @param string $shopPass ショップパスワード
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}

	/**
	 * オーダーID
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * 会員ID
	 *
	 * @param string $memberId
	 */
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
	}

	/**
	 * カード登録連番モード
	 *
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode) {
		$this->seqMode = $seqMode;
	}

	/**
	 * カード登録連番
	 *
	 * @param string $cardSeq
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}

	/**
	 * デフォルト値設定する
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

	    // 各項目の設定(CardSeqは値が数値でないものは無効とする)
	    $this->setSiteId($this->getStringValue($params, 'SiteID', $this->getSiteId()));
	    $this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
        $this->setCardNo($this->getStringValue($params, 'CardNo', $this->getCardNo()));
        $this->setToken($this->getStringValue($params, 'Token', $this->getToken()));
        $this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
        $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
        $this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
        $this->setMemberId($this->getStringValue($params, 'MemberID', $this->getMemberId()));
        $this->setSeqMode($this->getStringValue($params, 'SeqMode', $this->getSeqMode()));
        $this->setCardSeq($this->getStringValue($params, 'CardSeq', $this->getCardSeq()));
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列表現
	 */
	public function toString() {

	    $str  = 'SiteID=' . $this->encodeStr($this->getSiteId());
	    $str .= '&';
	    $str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
	    $str .= '&';
	    $str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
	    $str .= '&';
	    $str .= 'Token=' . $this->encodeStr($this->getToken());
	    $str .= '&';
	    $str .= 'ShopID=' . $this->encodeStr($this->getShopId());
	    $str .= '&';
	    $str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
	    $str .= '&';
	    $str .= 'MemberID=' . $this->encodeStr($this->getMemberId());
	    $str .= '&';
	    $str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
	    $str .= '&';
	    $str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());;

	    return $str;
	}

}
?>