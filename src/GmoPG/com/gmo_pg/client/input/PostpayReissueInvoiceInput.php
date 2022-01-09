<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PS後払い請求書再発行申請　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class PostpayReissueInvoiceInput extends BaseInput {

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
	 * @var string 送付先区分
	 */
	private $destinationType;
	/**
	 * @var string 依頼理由コード
	 */
	private $reasonCode;
	/**
	 * @var string その他依頼理由
	 */
	private $otherReason;
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
	 * 送付先区分取得
	 * @return string 送付先区分
	 */
	public function getDestinationType() {
		return $this->destinationType;
	}
	/**
	 * 依頼理由コード取得
	 * @return string 依頼理由コード
	 */
	public function getReasonCode() {
		return $this->reasonCode;
	}
	/**
	 * その他依頼理由取得
	 * @return string その他依頼理由
	 */
	public function getOtherReason() {
		return $this->otherReason;
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
	 * 送付先区分設定
	 *
	 * @param string $destinationType
	 */
	public function setDestinationType($destinationType) {
		$this->destinationType = $destinationType;
	}
	/**
	 * 依頼理由コード設定
	 *
	 * @param string $reasonCode
	 */
	public function setReasonCode($reasonCode) {
		$this->reasonCode = $reasonCode;
	}
	/**
	 * その他依頼理由設定
	 *
	 * @param string $otherReason
	 */
	public function setOtherReason($otherReason) {
		$this->otherReason = $otherReason;
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
		$this->setDestinationType($this->getStringValue($params, 'DestinationType', $this->getDestinationType()));
		$this->setReasonCode($this->getStringValue($params, 'ReasonCode', $this->getReasonCode()));
		$this->setOtherReason($this->getStringValue($params, 'OtherReason', $this->getOtherReason()));
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
		$str .= 'DestinationType=' . $this->encodeStr($this->getDestinationType());
		$str .='&';
		$str .= 'ReasonCode=' . $this->encodeStr($this->getReasonCode());
		$str .='&';
		$str .= 'OtherReason=' . $this->encodeStr($this->getOtherReason());
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

	    return $str;
	}


}
?>
