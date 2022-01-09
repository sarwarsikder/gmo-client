<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PS後払い決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranPostpayInput extends BaseInput {

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
	 * @var string HttpHeaderAccept
	 */
	private $httpHeaderAccept;
	/**
	 * @var string HttpHeaderAcceptCharset
	 */
	private $httpHeaderAcceptCharset;
	/**
	 * @var string HttpHeaderAcceptEncoding
	 */
	private $httpHeaderAcceptEncoding;
	/**
	 * @var string HttpHeaderAcceptLanguage
	 */
	private $httpHeaderAcceptLanguage;
	/**
	 * @var string HttpHeaderClientIp
	 */
	private $httpHeaderClientIp;
	/**
	 * @var string HttpHeaderConnection
	 */
	private $httpHeaderConnection;
	/**
	 * @var string HttpHeaderDoNotTrack
	 */
	private $httpHeaderDoNotTrack;
	/**
	 * @var string HttpHeaderHost
	 */
	private $httpHeaderHost;
	/**
	 * @var string HttpHeaderReferrer
	 */
	private $httpHeaderReferrer;
	/**
	 * @var string HttpHeaderUserAgent
	 */
	private $httpHeaderUserAgent;
	/**
	 * @var string HttpHeaderKeepAlive
	 */
	private $httpHeaderKeepAlive;
	/**
	 * @var string HttpHeaderUaCpu
	 */
	private $httpHeaderUaCpu;
	/**
	 * @var string HttpHeaderVia
	 */
	private $httpHeaderVia;
	/**
	 * @var string HttpHeaderXForwardedFor
	 */
	private $httpHeaderXForwardedFor;
	/**
	 * @var string その他HttpHeader
	 */
	private $httpHeaderOther;
	/**
	 * @var string 購入者IPアドレス
	 */
	private $customerIp;
	/**
	 * @var string 端末識別ID
	 */
	private $imei;
	/**
	 * @var string デバイス情報
	 */
	private $deviceInfo;
	/**
	 * @var string 購入者情報_加盟店注文日
	 */
	private $customerOrderDate;
	/**
	 * @var string 購入者情報_氏名（漢字）
	 */
	private $customerName;
	/**
	 * @var string 購入者情報_氏名（カナ）
	 */
	private $customerNameKana;
	/**
	 * @var string 購入者情報_郵便番号
	 */
	private $customerZipCode;
	/**
	 * @var string 購入者情報_住所
	 */
	private $customerAddress;
	/**
	 * @var string 購入者情報_会社名
	 */
	private $customerCompanyName;
	/**
	 * @var string 購入者情報_部署名
	 */
	private $customerDepartmentName;
	/**
	 * @var string 購入者情報_電話番号1
	 */
	private $customerTel1;
	/**
	 * @var string 購入者情報_電話番号2
	 */
	private $customerTel2;
	/**
	 * @var string 購入者情報_メールアドレス1
	 */
	private $customerEmail1;
	/**
	 * @var string 購入者情報_メールアドレス2
	 */
	private $customerEmail2;
	/**
	 * @var string 購入者情報_決済種別
	 */
	private $customerPaymentType;
	/**
	 * @var string 購入者情報_性別
	 */
	private $customerSex;
	/**
	 * @var string 購入者情報_誕生日
	 */
	private $customerBirthday;
	/**
	 * @var string 購入者情報_会員登録日
	 */
	private $customerRegistDate;
	/**
	 * @var string 購入者情報_購入回数
	 */
	private $customerBuyCount;
	/**
	 * @var string 購入者情報_購入金額総額
	 */
	private $customerBuyAmountTotal;
	/**
	 * @var string 購入者情報_会員ID
	 */
	private $customerID;
	/**
	 * @var string 配送先項目_氏名（漢字）
	 */
	private $deliveryName;
	/**
	 * @var string 配送先項目_氏名（カナ）
	 */
	private $deliveryNameKana;
	/**
	 * @var string 配送先項目_郵便番号
	 */
	private $deliveryZipCode;
	/**
	 * @var string 配送先項目_住所
	 */
	private $deliveryAdress;
	/**
	 * @var string 配送先項目_会社名
	 */
	private $deliveryCompanyName;
	/**
	 * @var string 配送先項目_部署名
	 */
	private $deliveryDepartmentName;
	/**
	 * @var string 配送先項目_電話番号
	 */
	private $deliveryTel;
	/**
	 * @var string 明細項目(単)_明細名
	 */
	private $detailName;
	/**
	 * @var string 明細項目(単)_単価
	 */
	private $detailPrice;
	/**
	 * @var string 明細項目(単)_数量
	 */
	private $detailQuantity;
	/**
	 * @var string 明細項目(単)_ブランド
	 */
	private $detailBrand;
	/**
	 * @var string 明細項目(単)_カテゴリ
	 */
	private $detailCategory;
	/**
	 * @var string 明細項目(複) ※4
	 */
	private $multiItem;
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
	 * HttpHeaderAccept取得
	 * @return string HttpHeaderAccept
	 */
	public function getHttpHeaderAccept() {
		return $this->httpHeaderAccept;
	}
	/**
	 * HttpHeaderAcceptCharset取得
	 * @return string HttpHeaderAcceptCharset
	 */
	public function getHttpHeaderAcceptCharset() {
		return $this->httpHeaderAcceptCharset;
	}
	/**
	 * HttpHeaderAcceptEncoding取得
	 * @return string HttpHeaderAcceptEncoding
	 */
	public function getHttpHeaderAcceptEncoding() {
		return $this->httpHeaderAcceptEncoding;
	}
	/**
	 * HttpHeaderAcceptLanguage取得
	 * @return string HttpHeaderAcceptLanguage
	 */
	public function getHttpHeaderAcceptLanguage() {
		return $this->httpHeaderAcceptLanguage;
	}
	/**
	 * HttpHeaderClientIp取得
	 * @return string HttpHeaderClientIp
	 */
	public function getHttpHeaderClientIp() {
		return $this->httpHeaderClientIp;
	}
	/**
	 * HttpHeaderConnection取得
	 * @return string HttpHeaderConnection
	 */
	public function getHttpHeaderConnection() {
		return $this->httpHeaderConnection;
	}
	/**
	 * HttpHeaderDoNotTrack取得
	 * @return string HttpHeaderDoNotTrack
	 */
	public function getHttpHeaderDoNotTrack() {
		return $this->httpHeaderDoNotTrack;
	}
	/**
	 * HttpHeaderHost取得
	 * @return string HttpHeaderHost
	 */
	public function getHttpHeaderHost() {
		return $this->httpHeaderHost;
	}
	/**
	 * HttpHeaderReferrer取得
	 * @return string HttpHeaderReferrer
	 */
	public function getHttpHeaderReferrer() {
		return $this->httpHeaderReferrer;
	}
	/**
	 * HttpHeaderUserAgent取得
	 * @return string HttpHeaderUserAgent
	 */
	public function getHttpHeaderUserAgent() {
		return $this->httpHeaderUserAgent;
	}
	/**
	 * HttpHeaderKeepAlive取得
	 * @return string HttpHeaderKeepAlive
	 */
	public function getHttpHeaderKeepAlive() {
		return $this->httpHeaderKeepAlive;
	}
	/**
	 * HttpHeaderUaCpu取得
	 * @return string HttpHeaderUaCpu
	 */
	public function getHttpHeaderUaCpu() {
		return $this->httpHeaderUaCpu;
	}
	/**
	 * HttpHeaderVia取得
	 * @return string HttpHeaderVia
	 */
	public function getHttpHeaderVia() {
		return $this->httpHeaderVia;
	}
	/**
	 * HttpHeaderXForwardedFor取得
	 * @return string HttpHeaderXForwardedFor
	 */
	public function getHttpHeaderXForwardedFor() {
		return $this->httpHeaderXForwardedFor;
	}
	/**
	 * その他HttpHeader取得
	 * @return string その他HttpHeader
	 */
	public function getHttpHeaderOther() {
		return $this->httpHeaderOther;
	}
	/**
	 * 購入者IPアドレス取得
	 * @return string 購入者IPアドレス
	 */
	public function getCustomerIp() {
		return $this->customerIp;
	}
	/**
	 * 端末識別ID取得
	 * @return string 端末識別ID
	 */
	public function getImei() {
		return $this->imei;
	}
	/**
	 * デバイス情報取得
	 * @return string デバイス情報
	 */
	public function getDeviceInfo() {
		return $this->deviceInfo;
	}
	/**
	 * 購入者情報_加盟店注文日取得
	 * @return string 購入者情報_加盟店注文日
	 */
	public function getCustomerOrderDate() {
		return $this->customerOrderDate;
	}
	/**
	 * 購入者情報_氏名（漢字）取得
	 * @return string 購入者情報_氏名（漢字）
	 */
	public function getCustomerName() {
		return $this->customerName;
	}
	/**
	 * 購入者情報_氏名（カナ）取得
	 * @return string 購入者情報_氏名（カナ）
	 */
	public function getCustomerNameKana() {
		return $this->customerNameKana;
	}
	/**
	 * 購入者情報_郵便番号取得
	 * @return string 購入者情報_郵便番号
	 */
	public function getCustomerZipCode() {
		return $this->customerZipCode;
	}
	/**
	 * 購入者情報_住所取得
	 * @return string 購入者情報_住所
	 */
	public function getCustomerAddress() {
		return $this->customerAddress;
	}
	/**
	 * 購入者情報_会社名取得
	 * @return string 購入者情報_会社名
	 */
	public function getCustomerCompanyName() {
		return $this->customerCompanyName;
	}
	/**
	 * 購入者情報_部署名取得
	 * @return string 購入者情報_部署名
	 */
	public function getCustomerDepartmentName() {
		return $this->customerDepartmentName;
	}
	/**
	 * 購入者情報_電話番号1取得
	 * @return string 購入者情報_電話番号1
	 */
	public function getCustomerTel1() {
		return $this->customerTel1;
	}
	/**
	 * 購入者情報_電話番号2取得
	 * @return string 購入者情報_電話番号2
	 */
	public function getCustomerTel2() {
		return $this->customerTel2;
	}
	/**
	 * 購入者情報_メールアドレス1取得
	 * @return string 購入者情報_メールアドレス1
	 */
	public function getCustomerEmail1() {
		return $this->customerEmail1;
	}
	/**
	 * 購入者情報_メールアドレス2取得
	 * @return string 購入者情報_メールアドレス2
	 */
	public function getCustomerEmail2() {
		return $this->customerEmail2;
	}
	/**
	 * 購入者情報_決済種別取得
	 * @return string 購入者情報_決済種別
	 */
	public function getCustomerPaymentType() {
		return $this->customerPaymentType;
	}
	/**
	 * 購入者情報_性別取得
	 * @return string 購入者情報_性別
	 */
	public function getCustomerSex() {
		return $this->customerSex;
	}
	/**
	 * 購入者情報_誕生日取得
	 * @return string 購入者情報_誕生日
	 */
	public function getCustomerBirthday() {
		return $this->customerBirthday;
	}
	/**
	 * 購入者情報_会員登録日取得
	 * @return string 購入者情報_会員登録日
	 */
	public function getCustomerRegistDate() {
		return $this->customerRegistDate;
	}
	/**
	 * 購入者情報_購入回数取得
	 * @return string 購入者情報_購入回数
	 */
	public function getCustomerBuyCount() {
		return $this->customerBuyCount;
	}
	/**
	 * 購入者情報_購入金額総額取得
	 * @return string 購入者情報_購入金額総額
	 */
	public function getCustomerBuyAmountTotal() {
		return $this->customerBuyAmountTotal;
	}
	/**
	 * 購入者情報_会員ID取得
	 * @return string 購入者情報_会員ID
	 */
	public function getCustomerID() {
		return $this->customerID;
	}
	/**
	 * 配送先項目_氏名（漢字）取得
	 * @return string 配送先項目_氏名（漢字）
	 */
	public function getDeliveryName() {
		return $this->deliveryName;
	}
	/**
	 * 配送先項目_氏名（カナ）取得
	 * @return string 配送先項目_氏名（カナ）
	 */
	public function getDeliveryNameKana() {
		return $this->deliveryNameKana;
	}
	/**
	 * 配送先項目_郵便番号取得
	 * @return string 配送先項目_郵便番号
	 */
	public function getDeliveryZipCode() {
		return $this->deliveryZipCode;
	}
	/**
	 * 配送先項目_住所取得
	 * @return string 配送先項目_住所
	 */
	public function getDeliveryAdress() {
		return $this->deliveryAdress;
	}
	/**
	 * 配送先項目_会社名取得
	 * @return string 配送先項目_会社名
	 */
	public function getDeliveryCompanyName() {
		return $this->deliveryCompanyName;
	}
	/**
	 * 配送先項目_部署名取得
	 * @return string 配送先項目_部署名
	 */
	public function getDeliveryDepartmentName() {
		return $this->deliveryDepartmentName;
	}
	/**
	 * 配送先項目_電話番号取得
	 * @return string 配送先項目_電話番号
	 */
	public function getDeliveryTel() {
		return $this->deliveryTel;
	}
	/**
	 * 明細項目(単)_明細名取得
	 * @return string 明細項目(単)_明細名
	 */
	public function getDetailName() {
		return $this->detailName;
	}
	/**
	 * 明細項目(単)_単価取得
	 * @return string 明細項目(単)_単価
	 */
	public function getDetailPrice() {
		return $this->detailPrice;
	}
	/**
	 * 明細項目(単)_数量取得
	 * @return string 明細項目(単)_数量
	 */
	public function getDetailQuantity() {
		return $this->detailQuantity;
	}
	/**
	 * 明細項目(単)_ブランド取得
	 * @return string 明細項目(単)_ブランド
	 */
	public function getDetailBrand() {
		return $this->detailBrand;
	}
	/**
	 * 明細項目(単)_カテゴリ取得
	 * @return string 明細項目(単)_カテゴリ
	 */
	public function getDetailCategory() {
		return $this->detailCategory;
	}
	/**
	 * 明細項目(複) ※4取得
	 * @return string 明細項目(複) ※4
	 */
	public function getMultiItem() {
		return $this->multiItem;
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
	 * HttpHeaderAccept設定
	 *
	 * @param string $httpHeaderAccept
	 */
	public function setHttpHeaderAccept($httpHeaderAccept) {
		$this->httpHeaderAccept = $httpHeaderAccept;
	}
	/**
	 * HttpHeaderAcceptCharset設定
	 *
	 * @param string $httpHeaderAcceptCharset
	 */
	public function setHttpHeaderAcceptCharset($httpHeaderAcceptCharset) {
		$this->httpHeaderAcceptCharset = $httpHeaderAcceptCharset;
	}
	/**
	 * HttpHeaderAcceptEncoding設定
	 *
	 * @param string $httpHeaderAcceptEncoding
	 */
	public function setHttpHeaderAcceptEncoding($httpHeaderAcceptEncoding) {
		$this->httpHeaderAcceptEncoding = $httpHeaderAcceptEncoding;
	}
	/**
	 * HttpHeaderAcceptLanguage設定
	 *
	 * @param string $httpHeaderAcceptLanguage
	 */
	public function setHttpHeaderAcceptLanguage($httpHeaderAcceptLanguage) {
		$this->httpHeaderAcceptLanguage = $httpHeaderAcceptLanguage;
	}
	/**
	 * HttpHeaderClientIp設定
	 *
	 * @param string $httpHeaderClientIp
	 */
	public function setHttpHeaderClientIp($httpHeaderClientIp) {
		$this->httpHeaderClientIp = $httpHeaderClientIp;
	}
	/**
	 * HttpHeaderConnection設定
	 *
	 * @param string $httpHeaderConnection
	 */
	public function setHttpHeaderConnection($httpHeaderConnection) {
		$this->httpHeaderConnection = $httpHeaderConnection;
	}
	/**
	 * HttpHeaderDoNotTrack設定
	 *
	 * @param string $httpHeaderDoNotTrack
	 */
	public function setHttpHeaderDoNotTrack($httpHeaderDoNotTrack) {
		$this->httpHeaderDoNotTrack = $httpHeaderDoNotTrack;
	}
	/**
	 * HttpHeaderHost設定
	 *
	 * @param string $httpHeaderHost
	 */
	public function setHttpHeaderHost($httpHeaderHost) {
		$this->httpHeaderHost = $httpHeaderHost;
	}
	/**
	 * HttpHeaderReferrer設定
	 *
	 * @param string $httpHeaderReferrer
	 */
	public function setHttpHeaderReferrer($httpHeaderReferrer) {
		$this->httpHeaderReferrer = $httpHeaderReferrer;
	}
	/**
	 * HttpHeaderUserAgent設定
	 *
	 * @param string $httpHeaderUserAgent
	 */
	public function setHttpHeaderUserAgent($httpHeaderUserAgent) {
		$this->httpHeaderUserAgent = $httpHeaderUserAgent;
	}
	/**
	 * HttpHeaderKeepAlive設定
	 *
	 * @param string $httpHeaderKeepAlive
	 */
	public function setHttpHeaderKeepAlive($httpHeaderKeepAlive) {
		$this->httpHeaderKeepAlive = $httpHeaderKeepAlive;
	}
	/**
	 * HttpHeaderUaCpu設定
	 *
	 * @param string $httpHeaderUaCpu
	 */
	public function setHttpHeaderUaCpu($httpHeaderUaCpu) {
		$this->httpHeaderUaCpu = $httpHeaderUaCpu;
	}
	/**
	 * HttpHeaderVia設定
	 *
	 * @param string $httpHeaderVia
	 */
	public function setHttpHeaderVia($httpHeaderVia) {
		$this->httpHeaderVia = $httpHeaderVia;
	}
	/**
	 * HttpHeaderXForwardedFor設定
	 *
	 * @param string $httpHeaderXForwardedFor
	 */
	public function setHttpHeaderXForwardedFor($httpHeaderXForwardedFor) {
		$this->httpHeaderXForwardedFor = $httpHeaderXForwardedFor;
	}
	/**
	 * その他HttpHeader設定
	 *
	 * @param string $httpHeaderOther
	 */
	public function setHttpHeaderOther($httpHeaderOther) {
		$this->httpHeaderOther = $httpHeaderOther;
	}
	/**
	 * 購入者IPアドレス設定
	 *
	 * @param string $customerIp
	 */
	public function setCustomerIp($customerIp) {
		$this->customerIp = $customerIp;
	}
	/**
	 * 端末識別ID設定
	 *
	 * @param string $imei
	 */
	public function setImei($imei) {
		$this->imei = $imei;
	}
	/**
	 * デバイス情報設定
	 *
	 * @param string $deviceInfo
	 */
	public function setDeviceInfo($deviceInfo) {
		$this->deviceInfo = $deviceInfo;
	}
	/**
	 * 購入者情報_加盟店注文日設定
	 *
	 * @param string $customerOrderDate
	 */
	public function setCustomerOrderDate($customerOrderDate) {
		$this->customerOrderDate = $customerOrderDate;
	}
	/**
	 * 購入者情報_氏名（漢字）設定
	 *
	 * @param string $customerName
	 */
	public function setCustomerName($customerName) {
		$this->customerName = $customerName;
	}
	/**
	 * 購入者情報_氏名（カナ）設定
	 *
	 * @param string $customerNameKana
	 */
	public function setCustomerNameKana($customerNameKana) {
		$this->customerNameKana = $customerNameKana;
	}
	/**
	 * 購入者情報_郵便番号設定
	 *
	 * @param string $customerZipCode
	 */
	public function setCustomerZipCode($customerZipCode) {
		$this->customerZipCode = $customerZipCode;
	}
	/**
	 * 購入者情報_住所設定
	 *
	 * @param string $customerAddress
	 */
	public function setCustomerAddress($customerAddress) {
		$this->customerAddress = $customerAddress;
	}
	/**
	 * 購入者情報_会社名設定
	 *
	 * @param string $customerCompanyName
	 */
	public function setCustomerCompanyName($customerCompanyName) {
		$this->customerCompanyName = $customerCompanyName;
	}
	/**
	 * 購入者情報_部署名設定
	 *
	 * @param string $customerDepartmentName
	 */
	public function setCustomerDepartmentName($customerDepartmentName) {
		$this->customerDepartmentName = $customerDepartmentName;
	}
	/**
	 * 購入者情報_電話番号1設定
	 *
	 * @param string $customerTel1
	 */
	public function setCustomerTel1($customerTel1) {
		$this->customerTel1 = $customerTel1;
	}
	/**
	 * 購入者情報_電話番号2設定
	 *
	 * @param string $customerTel2
	 */
	public function setCustomerTel2($customerTel2) {
		$this->customerTel2 = $customerTel2;
	}
	/**
	 * 購入者情報_メールアドレス1設定
	 *
	 * @param string $customerEmail1
	 */
	public function setCustomerEmail1($customerEmail1) {
		$this->customerEmail1 = $customerEmail1;
	}
	/**
	 * 購入者情報_メールアドレス2設定
	 *
	 * @param string $customerEmail2
	 */
	public function setCustomerEmail2($customerEmail2) {
		$this->customerEmail2 = $customerEmail2;
	}
	/**
	 * 購入者情報_決済種別設定
	 *
	 * @param string $customerPaymentType
	 */
	public function setCustomerPaymentType($customerPaymentType) {
		$this->customerPaymentType = $customerPaymentType;
	}
	/**
	 * 購入者情報_性別設定
	 *
	 * @param string $customerSex
	 */
	public function setCustomerSex($customerSex) {
		$this->customerSex = $customerSex;
	}
	/**
	 * 購入者情報_誕生日設定
	 *
	 * @param string $customerBirthday
	 */
	public function setCustomerBirthday($customerBirthday) {
		$this->customerBirthday = $customerBirthday;
	}
	/**
	 * 購入者情報_会員登録日設定
	 *
	 * @param string $customerRegistDate
	 */
	public function setCustomerRegistDate($customerRegistDate) {
		$this->customerRegistDate = $customerRegistDate;
	}
	/**
	 * 購入者情報_購入回数設定
	 *
	 * @param string $customerBuyCount
	 */
	public function setCustomerBuyCount($customerBuyCount) {
		$this->customerBuyCount = $customerBuyCount;
	}
	/**
	 * 購入者情報_購入金額総額設定
	 *
	 * @param string $customerBuyAmountTotal
	 */
	public function setCustomerBuyAmountTotal($customerBuyAmountTotal) {
		$this->customerBuyAmountTotal = $customerBuyAmountTotal;
	}
	/**
	 * 購入者情報_会員ID設定
	 *
	 * @param string $customerID
	 */
	public function setCustomerID($customerID) {
		$this->customerID = $customerID;
	}
	/**
	 * 配送先項目_氏名（漢字）設定
	 *
	 * @param string $deliveryName
	 */
	public function setDeliveryName($deliveryName) {
		$this->deliveryName = $deliveryName;
	}
	/**
	 * 配送先項目_氏名（カナ）設定
	 *
	 * @param string $deliveryNameKana
	 */
	public function setDeliveryNameKana($deliveryNameKana) {
		$this->deliveryNameKana = $deliveryNameKana;
	}
	/**
	 * 配送先項目_郵便番号設定
	 *
	 * @param string $deliveryZipCode
	 */
	public function setDeliveryZipCode($deliveryZipCode) {
		$this->deliveryZipCode = $deliveryZipCode;
	}
	/**
	 * 配送先項目_住所設定
	 *
	 * @param string $deliveryAdress
	 */
	public function setDeliveryAdress($deliveryAdress) {
		$this->deliveryAdress = $deliveryAdress;
	}
	/**
	 * 配送先項目_会社名設定
	 *
	 * @param string $deliveryCompanyName
	 */
	public function setDeliveryCompanyName($deliveryCompanyName) {
		$this->deliveryCompanyName = $deliveryCompanyName;
	}
	/**
	 * 配送先項目_部署名設定
	 *
	 * @param string $deliveryDepartmentName
	 */
	public function setDeliveryDepartmentName($deliveryDepartmentName) {
		$this->deliveryDepartmentName = $deliveryDepartmentName;
	}
	/**
	 * 配送先項目_電話番号設定
	 *
	 * @param string $deliveryTel
	 */
	public function setDeliveryTel($deliveryTel) {
		$this->deliveryTel = $deliveryTel;
	}
	/**
	 * 明細項目(単)_明細名設定
	 *
	 * @param string $detailName
	 */
	public function setDetailName($detailName) {
		$this->detailName = $detailName;
	}
	/**
	 * 明細項目(単)_単価設定
	 *
	 * @param string $detailPrice
	 */
	public function setDetailPrice($detailPrice) {
		$this->detailPrice = $detailPrice;
	}
	/**
	 * 明細項目(単)_数量設定
	 *
	 * @param string $detailQuantity
	 */
	public function setDetailQuantity($detailQuantity) {
		$this->detailQuantity = $detailQuantity;
	}
	/**
	 * 明細項目(単)_ブランド設定
	 *
	 * @param string $detailBrand
	 */
	public function setDetailBrand($detailBrand) {
		$this->detailBrand = $detailBrand;
	}
	/**
	 * 明細項目(単)_カテゴリ設定
	 *
	 * @param string $detailCategory
	 */
	public function setDetailCategory($detailCategory) {
		$this->detailCategory = $detailCategory;
	}
	/**
	 * 明細項目(複) ※4設定
	 *
	 * @param string $multiItem
	 */
	public function setMultiItem($multiItem) {
		$this->multiItem = $multiItem;
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
		$this->setHttpHeaderAccept($this->getStringValue($params, 'HttpHeaderAccept', $this->getHttpHeaderAccept()));
		$this->setHttpHeaderAcceptCharset($this->getStringValue($params, 'HttpHeaderAcceptCharset', $this->getHttpHeaderAcceptCharset()));
		$this->setHttpHeaderAcceptEncoding($this->getStringValue($params, 'HttpHeaderAcceptEncoding', $this->getHttpHeaderAcceptEncoding()));
		$this->setHttpHeaderAcceptLanguage($this->getStringValue($params, 'HttpHeaderAcceptLanguage', $this->getHttpHeaderAcceptLanguage()));
		$this->setHttpHeaderClientIp($this->getStringValue($params, 'HttpHeaderClientIp', $this->getHttpHeaderClientIp()));
		$this->setHttpHeaderConnection($this->getStringValue($params, 'HttpHeaderConnection', $this->getHttpHeaderConnection()));
		$this->setHttpHeaderDoNotTrack($this->getStringValue($params, 'HttpHeaderDoNotTrack', $this->getHttpHeaderDoNotTrack()));
		$this->setHttpHeaderHost($this->getStringValue($params, 'HttpHeaderHost', $this->getHttpHeaderHost()));
		$this->setHttpHeaderReferrer($this->getStringValue($params, 'HttpHeaderReferrer', $this->getHttpHeaderReferrer()));
		$this->setHttpHeaderUserAgent($this->getStringValue($params, 'HttpHeaderUserAgent', $this->getHttpHeaderUserAgent()));
		$this->setHttpHeaderKeepAlive($this->getStringValue($params, 'HttpHeaderKeepAlive', $this->getHttpHeaderKeepAlive()));
		$this->setHttpHeaderUaCpu($this->getStringValue($params, 'HttpHeaderUaCpu', $this->getHttpHeaderUaCpu()));
		$this->setHttpHeaderVia($this->getStringValue($params, 'HttpHeaderVia', $this->getHttpHeaderVia()));
		$this->setHttpHeaderXForwardedFor($this->getStringValue($params, 'HttpHeaderXForwardedFor', $this->getHttpHeaderXForwardedFor()));
		$this->setHttpHeaderOther($this->getStringValue($params, 'HttpHeaderOther', $this->getHttpHeaderOther()));
		$this->setCustomerIp($this->getStringValue($params, 'CustomerIp', $this->getCustomerIp()));
		$this->setImei($this->getStringValue($params, 'Imei', $this->getImei()));
		$this->setDeviceInfo($this->getStringValue($params, 'DeviceInfo', $this->getDeviceInfo()));
		$this->setCustomerOrderDate($this->getStringValue($params, 'CustomerOrderDate', $this->getCustomerOrderDate()));
		$this->setCustomerName($this->getStringValue($params, 'CustomerName', $this->getCustomerName()));
		$this->setCustomerNameKana($this->getStringValue($params, 'CustomerNameKana', $this->getCustomerNameKana()));
		$this->setCustomerZipCode($this->getStringValue($params, 'CustomerZipCode', $this->getCustomerZipCode()));
		$this->setCustomerAddress($this->getStringValue($params, 'CustomerAddress', $this->getCustomerAddress()));
		$this->setCustomerCompanyName($this->getStringValue($params, 'CustomerCompanyName', $this->getCustomerCompanyName()));
		$this->setCustomerDepartmentName($this->getStringValue($params, 'CustomerDepartmentName', $this->getCustomerDepartmentName()));
		$this->setCustomerTel1($this->getStringValue($params, 'CustomerTel1', $this->getCustomerTel1()));
		$this->setCustomerTel2($this->getStringValue($params, 'CustomerTel2', $this->getCustomerTel2()));
		$this->setCustomerEmail1($this->getStringValue($params, 'CustomerEmail1', $this->getCustomerEmail1()));
		$this->setCustomerEmail2($this->getStringValue($params, 'CustomerEmail2', $this->getCustomerEmail2()));
		$this->setCustomerPaymentType($this->getStringValue($params, 'CustomerPaymentType', $this->getCustomerPaymentType()));
		$this->setCustomerSex($this->getStringValue($params, 'CustomerSex', $this->getCustomerSex()));
		$this->setCustomerBirthday($this->getStringValue($params, 'CustomerBirthday', $this->getCustomerBirthday()));
		$this->setCustomerRegistDate($this->getStringValue($params, 'CustomerRegistDate', $this->getCustomerRegistDate()));
		$this->setCustomerBuyCount($this->getStringValue($params, 'CustomerBuyCount', $this->getCustomerBuyCount()));
		$this->setCustomerBuyAmountTotal($this->getStringValue($params, 'CustomerBuyAmountTotal', $this->getCustomerBuyAmountTotal()));
		$this->setCustomerID($this->getStringValue($params, 'CustomerID', $this->getCustomerID()));
		$this->setDeliveryName($this->getStringValue($params, 'DeliveryName', $this->getDeliveryName()));
		$this->setDeliveryNameKana($this->getStringValue($params, 'DeliveryNameKana', $this->getDeliveryNameKana()));
		$this->setDeliveryZipCode($this->getStringValue($params, 'DeliveryZipCode', $this->getDeliveryZipCode()));
		$this->setDeliveryAdress($this->getStringValue($params, 'DeliveryAdress', $this->getDeliveryAdress()));
		$this->setDeliveryCompanyName($this->getStringValue($params, 'DeliveryCompanyName', $this->getDeliveryCompanyName()));
		$this->setDeliveryDepartmentName($this->getStringValue($params, 'DeliveryDepartmentName', $this->getDeliveryDepartmentName()));
		$this->setDeliveryTel($this->getStringValue($params, 'DeliveryTel', $this->getDeliveryTel()));
		$this->setDetailName($this->getStringValue($params, 'DetailName', $this->getDetailName()));
		$this->setDetailPrice($this->getStringValue($params, 'DetailPrice', $this->getDetailPrice()));
		$this->setDetailQuantity($this->getStringValue($params, 'DetailQuantity', $this->getDetailQuantity()));
		$this->setDetailBrand($this->getStringValue($params, 'DetailBrand', $this->getDetailBrand()));
		$this->setDetailCategory($this->getStringValue($params, 'DetailCategory', $this->getDetailCategory()));
		$this->setMultiItem($this->getStringValue($params, 'MultiItem', $this->getMultiItem()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));

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
		$str .= 'HttpHeaderAccept=' . $this->encodeStr($this->getHttpHeaderAccept());
		$str .='&';
		$str .= 'HttpHeaderAcceptCharset=' . $this->encodeStr($this->getHttpHeaderAcceptCharset());
		$str .='&';
		$str .= 'HttpHeaderAcceptEncoding=' . $this->encodeStr($this->getHttpHeaderAcceptEncoding());
		$str .='&';
		$str .= 'HttpHeaderAcceptLanguage=' . $this->encodeStr($this->getHttpHeaderAcceptLanguage());
		$str .='&';
		$str .= 'HttpHeaderClientIp=' . $this->encodeStr($this->getHttpHeaderClientIp());
		$str .='&';
		$str .= 'HttpHeaderConnection=' . $this->encodeStr($this->getHttpHeaderConnection());
		$str .='&';
		$str .= 'HttpHeaderDoNotTrack=' . $this->encodeStr($this->getHttpHeaderDoNotTrack());
		$str .='&';
		$str .= 'HttpHeaderHost=' . $this->encodeStr($this->getHttpHeaderHost());
		$str .='&';
		$str .= 'HttpHeaderReferrer=' . $this->encodeStr($this->getHttpHeaderReferrer());
		$str .='&';
		$str .= 'HttpHeaderUserAgent=' . $this->encodeStr($this->getHttpHeaderUserAgent());
		$str .='&';
		$str .= 'HttpHeaderKeepAlive=' . $this->encodeStr($this->getHttpHeaderKeepAlive());
		$str .='&';
		$str .= 'HttpHeaderUaCpu=' . $this->encodeStr($this->getHttpHeaderUaCpu());
		$str .='&';
		$str .= 'HttpHeaderVia=' . $this->encodeStr($this->getHttpHeaderVia());
		$str .='&';
		$str .= 'HttpHeaderXForwardedFor=' . $this->encodeStr($this->getHttpHeaderXForwardedFor());
		$str .='&';
		$str .= 'HttpHeaderOther=' . $this->encodeStr($this->getHttpHeaderOther());
		$str .='&';
		$str .= 'CustomerIp=' . $this->encodeStr($this->getCustomerIp());
		$str .='&';
		$str .= 'Imei=' . $this->encodeStr($this->getImei());
		$str .='&';
		$str .= 'DeviceInfo=' . $this->encodeStr($this->getDeviceInfo());
		$str .='&';
		$str .= 'CustomerOrderDate=' . $this->encodeStr($this->getCustomerOrderDate());
		$str .='&';
		$str .= 'CustomerName=' . $this->encodeStr($this->getCustomerName());
		$str .='&';
		$str .= 'CustomerNameKana=' . $this->encodeStr($this->getCustomerNameKana());
		$str .='&';
		$str .= 'CustomerZipCode=' . $this->encodeStr($this->getCustomerZipCode());
		$str .='&';
		$str .= 'CustomerAddress=' . $this->encodeStr($this->getCustomerAddress());
		$str .='&';
		$str .= 'CustomerCompanyName=' . $this->encodeStr($this->getCustomerCompanyName());
		$str .='&';
		$str .= 'CustomerDepartmentName=' . $this->encodeStr($this->getCustomerDepartmentName());
		$str .='&';
		$str .= 'CustomerTel1=' . $this->encodeStr($this->getCustomerTel1());
		$str .='&';
		$str .= 'CustomerTel2=' . $this->encodeStr($this->getCustomerTel2());
		$str .='&';
		$str .= 'CustomerEmail1=' . $this->encodeStr($this->getCustomerEmail1());
		$str .='&';
		$str .= 'CustomerEmail2=' . $this->encodeStr($this->getCustomerEmail2());
		$str .='&';
		$str .= 'CustomerPaymentType=' . $this->encodeStr($this->getCustomerPaymentType());
		$str .='&';
		$str .= 'CustomerSex=' . $this->encodeStr($this->getCustomerSex());
		$str .='&';
		$str .= 'CustomerBirthday=' . $this->encodeStr($this->getCustomerBirthday());
		$str .='&';
		$str .= 'CustomerRegistDate=' . $this->encodeStr($this->getCustomerRegistDate());
		$str .='&';
		$str .= 'CustomerBuyCount=' . $this->encodeStr($this->getCustomerBuyCount());
		$str .='&';
		$str .= 'CustomerBuyAmountTotal=' . $this->encodeStr($this->getCustomerBuyAmountTotal());
		$str .='&';
		$str .= 'CustomerID=' . $this->encodeStr($this->getCustomerID());
		$str .='&';
		$str .= 'DeliveryName=' . $this->encodeStr($this->getDeliveryName());
		$str .='&';
		$str .= 'DeliveryNameKana=' . $this->encodeStr($this->getDeliveryNameKana());
		$str .='&';
		$str .= 'DeliveryZipCode=' . $this->encodeStr($this->getDeliveryZipCode());
		$str .='&';
		$str .= 'DeliveryAdress=' . $this->encodeStr($this->getDeliveryAdress());
		$str .='&';
		$str .= 'DeliveryCompanyName=' . $this->encodeStr($this->getDeliveryCompanyName());
		$str .='&';
		$str .= 'DeliveryDepartmentName=' . $this->encodeStr($this->getDeliveryDepartmentName());
		$str .='&';
		$str .= 'DeliveryTel=' . $this->encodeStr($this->getDeliveryTel());
		$str .='&';
		$str .= 'DetailName=' . $this->encodeStr($this->getDetailName());
		$str .='&';
		$str .= 'DetailPrice=' . $this->encodeStr($this->getDetailPrice());
		$str .='&';
		$str .= 'DetailQuantity=' . $this->encodeStr($this->getDetailQuantity());
		$str .='&';
		$str .= 'DetailBrand=' . $this->encodeStr($this->getDetailBrand());
		$str .='&';
		$str .= 'DetailCategory=' . $this->encodeStr($this->getDetailCategory());
		$str .='&';
		$str .= 'MultiItem=' . $this->encodeStr($this->getMultiItem());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());

	    return $str;
	}


}
?>
