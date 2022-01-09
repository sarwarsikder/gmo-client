<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');

/**
 * <b>Paypal決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 12-24-2009 00:00:00
 */
class ExecTranPaypalInput extends BaseInput {

	/**
	 * @var string GMO-PGが発行する、PGマルチペイメントサービス中で加盟店様を識別するID
	 */
	private $shopId;

	/**
	 * @var string ショップIDと対になるパスワード
	 */
	private $shopPass;

	/**
	 * @var string 取引ID。GMO-PGが払い出した、取引を特定するID
	 */
	private $accessId;

	/**
	 * @var string 取引パスワード。取引IDと対になるパスワード
	 */
	private $accessPass;

	/**
	 * @var string オーダーID。加盟店様が発番した、取引を表すID
	 */
	private $orderId;

	/**
	 * @var string 商品名
	 */
	private $itemName;

	/**
	 * @var string リダイレクトURL
	 */
	private $redirectURL;

	/**
	 * @var string 言語
	 */
	private $locale;

	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;

	/**
	 * @var string 加盟店自由項目
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
     *
     * @var string 決済タイプ
     */
    private $paymentType;

    /**
     *
     * @var string 支払同意ＩＤ
     */
    private $paypalBillingAgreementId;

    /**
     *
     * @var string 配送先利用フラグ
     */
    private $shipFlg;

    /**
     *
     * @var string 配送先氏名
     */
    private $shipToName;

    /**
     *
     * @var string 配送先郵便番号
     */
    private $shipToZip;

    /**
     *
     * @var string 配送先国コード
     */
    private $shipToCountryCode;

    /**
     *
     * @var string 配送先都道府県
     */
    private $shipToState;

    /**
     *
     * @var string 配送先市町村
     */
    private $shipToCity;

    /**
     *
     * @var string 配送先番地
     */
    private $shipToStreet;

    /**
     *
     * @var string 配送先建物名など
     */
    private $shipToStreet2;

	/**
	 * コンストラクタ
	 * @param array $params 入力パラメタ
	 * @return unknown_type
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}

	/**
	 * デフォルト値を設定する
	 */
	public function setDefaultValues() {
		// 加盟店自由項目返却フラグ(固定値)
		$this->clientFieldFlag = "1";
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		if (is_null($params)) {
			return;
		}

		$this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setAccessId($this->getStringValue($params, 'AccessID', $this->getAccessId()));
		$this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
		$this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
		$this->setItemName($this->getStringValue($params, 'ItemName', $this->getItemName()));
		$this->setRedirectURL($this->getStringValue($params, 'RedirectURL', $this->getRedirectURL()));
		$this->setLocale($this->getStringValue($params, 'Locale', $this->getLocale()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
		$this->setPaymentType($this->getStringValue($params, 'PaymentType', $this->getPaymentType()));
		$this->setPaypalBillingAgreementId($this->getStringValue($params, 'PaypalBillingAgreementID', $this->getPaypalBillingAgreementId()));
		$this->setShipFlg($this->getStringValue($params, 'ShipFlg', $this->getShipFlg()));
		$this->setShipToName($this->getStringValue($params, 'ShipToName', $this->getShipToName()));
		$this->setShipToZip($this->getStringValue($params, 'ShipToZip', $this->getShipToZip()));
		$this->setShipToCountryCode($this->getStringValue($params, 'ShipToCountryCode', $this->getShipToCountryCode()));
		$this->setShipToState($this->getStringValue($params, 'ShipToState', $this->getShipToState()));
		$this->setShipToCity($this->getStringValue($params, 'ShipToCity', $this->getShipToCity()));
		$this->setShipToStreet($this->getStringValue($params, 'ShipToStreet', $this->getShipToStreet()));
		$this->setShipToStreet2($this->getStringValue($params, 'ShipToStreet2', $this->getShipToStreet2()));
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
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessId());
		$str .= '&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .= '&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
		$str .= '&';
		$str .= 'ItemName=' . $this->encodeStr($this->getItemName());
		$str .= '&';
		$str .= 'RedirectURL=' . $this->encodeStr($this->getRedirectURL());
		$str .= '&';
		$str .= 'Locale=' . $this->encodeStr($this->getLocale());
		$str .= '&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .= '&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .= '&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .= '&';
		$str .= 'ClientFieldFlag=' . $this->clientFieldFlag;
		$str .= '&';
		$str .= 'PaymentType=' . $this->encodeStr($this->getPaymentType());
		$str .= '&';
		$str .= 'PaypalBillingAgreementID=' . $this->encodeStr($this->getPaypalBillingAgreementId());
		$str .= '&';
		$str .= 'ShipFlg=' . $this->encodeStr($this->getShipFlg());
		$str .= '&';
		$str .= 'ShipToName=' . $this->encodeStr($this->getShipToName());
		$str .= '&';
		$str .= 'ShipToZip=' . $this->encodeStr($this->getShipToZip());
		$str .= '&';
		$str .= 'ShipToCountryCode=' . $this->encodeStr($this->getShipToCountryCode());
		$str .= '&';
		$str .= 'ShipToState=' . $this->encodeStr($this->getShipToState());
		$str .= '&';
		$str .= 'ShipToCity=' . $this->encodeStr($this->getShipToCity());
		$str .= '&';
		$str .= 'ShipToStreet=' . $this->encodeStr($this->getShipToStreet());
		$str .= '&';
		$str .= 'ShipToStreet2=' . $this->encodeStr($this->getShipToStreet2());

		return $str;
	}

	/**
	 * ショップId取得
	 * @return string ショップId
	 */
	public function getShopId(){
		return $this->shopId;
	}

	/**
	 * ショップパスワードの取得
	 * @return string ショップパスワード
	 */
	public function getShopPass(){
		return $this->shopPass;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->accessId;
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
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * リダイレクトURL取得
	 * @return string リダイレクトURL
	 */
	public function getRedirectURL(){
		return $this->redirectURL;
	}

	/**
	 * 言語取得
	 * @return string 言語
	 */
	public function getLocale(){
	    return $this->locale;
	}

	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getItemName(){
		return $this->itemName;
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
	 * 決済タイプ取得
	 * @return string 決済タイプ
	 */
	public function getPaymentType() {
	    return $this->paymentType;
	}

	/**
	 * 支払同意ＩＤ取得
	 * @return string 支払同意ＩＤ
	 */
	public function getPaypalBillingAgreementId() {
	    return $this->paypalBillingAgreementId;
	}

	/**
	 * 配送先利用フラグ取得
	 * @return string 配送先利用フラグ
	 */
	public function getShipFlg() {
	    return $this->shipFlg;
	}

	/**
	 * 配送先氏名取得
	 * @return string 配送先氏名
	 */
	public function getShipToName() {
	    return $this->shipToName;
	}

	/**
	 * 配送先郵便番号取得
	 * @return string 配送先郵便番号
	 */
	public function getShipToZip() {
	    return $this->shipToZip;
	}

	/**
	 * 配送先国コード取得
	 * @return string 配送先国コード
	 */
	public function getShipToCountryCode() {
	    return $this->shipToCountryCode;
	}

	/**
	 * 配送先都道府県取得
	 * @return string 配送先都道府県
	 */
	public function getShipToState() {
	    return $this->shipToState;
	}

	/**
	 * 配送先市町村取得
	 * @return string 配送先市町村
	 */
	public function getShipToCity() {
	    return $this->shipToCity;
	}

	/**
	 * 配送先番地取得
	 * @return string 配送先番地
	 */
	public function getShipToStreet() {
	    return $this->shipToStreet;
	}

	/**
	 * 配送先建物名など取得
	 * @return string 配送先建物名など
	 */
	public function getShipToStreet2() {
	    return $this->shipToStreet2;
	}

	/**
	 * ショップIdの設定
	 * @param $shopId ショップId
	 */
	public function setShopId( $shopId ){
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワードの設定
	 * @param $shopPass ショップパスワード
	 */
	public function setShopPass( $shopPass ){
		$this->shopPass = $shopPass;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->accessId = $accessId;
	}

	/**
	 * 取引パスワードを設定
	 *
	 * @param string $accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
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
	 * 商品名設定
	 * @param string $itemName 商品名
	 */
	public function setItemName( $itemName ){
		$this->itemName = $itemName;
	}

	/**
	 * リダイレクトURL設定
	 * @param string $redirectURL リダイレクトURL
	 */
	public function setRedirectURL( $redirectURL ){
		$this->redirectURL = $redirectURL;
	}

	/**
	 * 言語設定
	 * @param string $locale 言語
	 */
	public function setLocale( $locale ){
	    $this->locale = $locale;
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

    /**
     * 決済タイプ設定
     *
     * @param string $paymentType 決済タイプ
     */
    public function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
    }

    /**
     * 支払同意ＩＤ設定
     *
     * @param string $paypalBillingAgreementId 支払同意ＩＤ
     */
    public function setPaypalBillingAgreementId($paypalBillingAgreementId) {
        $this->paypalBillingAgreementId = $paypalBillingAgreementId;
    }

    /**
     * 配送先利用フラグ設定
     *
     * @param string $shipFlg 配送先利用フラグ
     */
    public function setShipFlg($shipFlg) {
        $this->shipFlg = $shipFlg;
    }

    /**
     * 配送先氏名設定
     *
     * @param string $shipToName 配送先氏名
     */
    public function setShipToName($shipToName) {
        $this->shipToName = $shipToName;
    }

    /**
     * 配送先郵便番号設定
     *
     * @param string $shipToZip 配送先郵便番号
     */
    public function setShipToZip($shipToZip) {
        $this->shipToZip = $shipToZip;
    }

    /**
     * 配送先国コード設定
     *
     * @param string $shipToCountryCode 配送先国コード
     */
    public function setShipToCountryCode($shipToCountryCode) {
        $this->shipToCountryCode = $shipToCountryCode;
    }

    /**
     * 配送先都道府県設定
     *
     * @param string $shipToState 配送先都道府県
     */
    public function setShipToState($shipToState) {
        $this->shipToState = $shipToState;
    }

    /**
     * 配送先市町村設定
     *
     * @param string $shipToCity 配送先市町村
     */
    public function setShipToCity($shipToCity) {
        $this->shipToCity = $shipToCity;
    }

    /**
     * 配送先番地設定
     *
     * @param string $shipToStreet 配送先番地
     */
    public function setShipToStreet($shipToStreet) {
        $this->shipToStreet = $shipToStreet;
    }

    /**
     * 配送先建物名など
     *
     * @param string $shipToStreet2 配送先建物名など
     */
    public function setShipToStreet2($shipToStreet2) {
        $this->shipToStreet2 = $shipToStreet2;
    }
}
