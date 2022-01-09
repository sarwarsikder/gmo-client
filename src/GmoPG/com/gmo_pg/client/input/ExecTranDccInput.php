<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>多通貨クレジット決済（DCC)決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranDccInput extends BaseInput {

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
	 * @var string カード番号
	 */
	private $cardNo;
	/**
	 * @var string 有効期限
	 */
	private $expire;
	/**
	 * @var string セキュリティコード
	 */
	private $securityCode;
	/**
	 * @var string トークン
	 */
	private $token;
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
	 * @var string 加盟店自由項目返却フラグ
	 */
	private $clientFieldFlag;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string モード
	 */
	private $seqMode;
	/**
	 * @var string カード登録連番
	 */
	private $cardSeq;
	/**
	 * @var string カードパスワード
	 */
	private $cardPass;


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
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}
	/**
	 * 有効期限取得
	 * @return string 有効期限
	 */
	public function getExpire() {
		return $this->expire;
	}
	/**
	 * セキュリティコード取得
	 * @return string セキュリティコード
	 */
	public function getSecurityCode() {
		return $this->securityCode;
	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->token;
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
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->clientFieldFlag;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * モード取得
	 * @return string モード
	 */
	public function getSeqMode() {
		return $this->seqMode;
	}
	/**
	 * カード登録連番取得
	 * @return string カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}
	/**
	 * カードパスワード取得
	 * @return string カードパスワード
	 */
	public function getCardPass() {
		return $this->cardPass;
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
	 * カード番号設定
	 *
	 * @param string $cardNo
	 */
	public function setCardNo($cardNo) {
		$this->cardNo = $cardNo;
	}
	/**
	 * 有効期限設定
	 *
	 * @param string $expire
	 */
	public function setExpire($expire) {
		$this->expire = $expire;
	}
	/**
	 * セキュリティコード設定
	 *
	 * @param string $securityCode
	 */
	public function setSecurityCode($securityCode) {
		$this->securityCode = $securityCode;
	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
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
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->clientFieldFlag = $clientFieldFlag;
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * モード設定
	 *
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode) {
		$this->seqMode = $seqMode;
	}
	/**
	 * カード登録連番設定
	 *
	 * @param string $cardSeq
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}
	/**
	 * カードパスワード設定
	 *
	 * @param string $cardPass
	 */
	public function setCardPass($cardPass) {
		$this->cardPass = $cardPass;
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
		$this->setCardNo($this->getStringValue($params, 'CardNo', $this->getCardNo()));
		$this->setExpire($this->getStringValue($params, 'Expire', $this->getExpire()));
		$this->setSecurityCode($this->getStringValue($params, 'SecurityCode', $this->getSecurityCode()));
		$this->setToken($this->getStringValue($params, 'Token', $this->getToken()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
		$this->setClientFieldFlag($this->getStringValue($params, 'ClientFieldFlag', $this->getClientFieldFlag()));
		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setSeqMode($this->getStringValue($params, 'SeqMode', $this->getSeqMode()));
		$this->setCardSeq($this->getStringValue($params, 'CardSeq', $this->getCardSeq()));
		$this->setCardPass($this->getStringValue($params, 'CardPass', $this->getCardPass()));

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
		$str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
		$str .='&';
		$str .= 'Expire=' . $this->encodeStr($this->getExpire());
		$str .='&';
		$str .= 'SecurityCode=' . $this->encodeStr($this->getSecurityCode());
		$str .='&';
		$str .= 'Token=' . $this->encodeStr($this->getToken());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'ClientFieldFlag=' . $this->encodeStr($this->getClientFieldFlag());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
		$str .='&';
		$str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
		$str .='&';
		$str .= 'CardPass=' . $this->encodeStr($this->getCardPass());

	    return $str;
	}


}
?>
