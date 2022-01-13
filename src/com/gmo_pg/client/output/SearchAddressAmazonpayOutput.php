<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>Amazon Pay住所情報参照　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchAddressAmazonpayOutput extends BaseOutput {

	/**
	 * @var string 配送先国コード
	 */
	private $shippingCountryCode;
	/**
	 * @var string 配送先都市
	 */
	private $shippingCity;
	/**
	 * @var string 配送先州・群
	 */
	private $shippingCounty;
	/**
	 * @var string 配送先区
	 */
	private $shippingDistrict;
	/**
	 * @var string 配送先郵便番号
	 */
	private $shippingPostalCode;
	/**
	 * @var string 配送先都道府県
	 */
	private $shippingStateOrRegion;
	/**
	 * @var string 配送先住所1
	 */
	private $shippingAddressLine1;
	/**
	 * @var string 配送先住所2
	 */
	private $shippingAddressLine2;
	/**
	 * @var string 配送先住所3
	 */
	private $shippingAddressLine3;
	/**
	 * @var string 配送先氏名
	 */
	private $shippingName;
	/**
	 * @var string 配送先電話番号
	 */
	private $shippingPhoneNumber;
	/**
	 * @var string AmazonバイヤーID
	 */
	private $amazonBuyerID;
	/**
	 * @var string Amazonアカウント名
	 */
	private $amazonAccountName;
	/**
	 * @var string Amazonメールアドレス
	 */
	private $amazonMailAddress;
	/**
	 * @var string Amazon電話番号
	 */
	private $amazonPhoneNumber;
	/**
	 * @var string 請求先国コード
	 */
	private $billingCountryCode;
	/**
	 * @var string 請求先都市
	 */
	private $billingCity;
	/**
	 * @var string 請求先州・群
	 */
	private $billingCounty;
	/**
	 * @var string 請求先区
	 */
	private $billingDistrict;
	/**
	 * @var string 請求先郵便番号
	 */
	private $billingPostalCode;
	/**
	 * @var string 請求先都道府県
	 */
	private $billingStateOrRegion;
	/**
	 * @var string 請求先住所1
	 */
	private $billingAddressLine1;
	/**
	 * @var string 請求先住所2
	 */
	private $billingAddressLine2;
	/**
	 * @var string 請求先住所3
	 */
	private $billingAddressLine3;
	/**
	 * @var string 請求先氏名
	 */
	private $billingName;
	/**
	 * @var string 請求先電話番号
	 */
	private $billingPhoneNumber;
	/**
	 * @var string 決済手段説明
	 */
	private $paymentDescriptor;


	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params  出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
            return;
        }

        // マップの展開
		$this->setShippingCountryCode($params->get('ShippingCountryCode'));
		$this->setShippingCity($params->get('ShippingCity'));
		$this->setShippingCounty($params->get('ShippingCounty'));
		$this->setShippingDistrict($params->get('ShippingDistrict'));
		$this->setShippingPostalCode($params->get('ShippingPostalCode'));
		$this->setShippingStateOrRegion($params->get('ShippingStateOrRegion'));
		$this->setShippingAddressLine1($params->get('ShippingAddressLine1'));
		$this->setShippingAddressLine2($params->get('ShippingAddressLine2'));
		$this->setShippingAddressLine3($params->get('ShippingAddressLine3'));
		$this->setShippingName($params->get('ShippingName'));
		$this->setShippingPhoneNumber($params->get('ShippingPhoneNumber'));
		$this->setAmazonBuyerID($params->get('AmazonBuyerID'));
		$this->setAmazonAccountName($params->get('AmazonAccountName'));
		$this->setAmazonMailAddress($params->get('AmazonMailAddress'));
		$this->setAmazonPhoneNumber($params->get('AmazonPhoneNumber'));
		$this->setBillingCountryCode($params->get('BillingCountryCode'));
		$this->setBillingCity($params->get('BillingCity'));
		$this->setBillingCounty($params->get('BillingCounty'));
		$this->setBillingDistrict($params->get('BillingDistrict'));
		$this->setBillingPostalCode($params->get('BillingPostalCode'));
		$this->setBillingStateOrRegion($params->get('BillingStateOrRegion'));
		$this->setBillingAddressLine1($params->get('BillingAddressLine1'));
		$this->setBillingAddressLine2($params->get('BillingAddressLine2'));
		$this->setBillingAddressLine3($params->get('BillingAddressLine3'));
		$this->setBillingName($params->get('BillingName'));
		$this->setBillingPhoneNumber($params->get('BillingPhoneNumber'));
		$this->setPaymentDescriptor($params->get('PaymentDescriptor'));

	}

	/**
	 * 配送先国コード取得
	 * @return string 配送先国コード
	 */
	public function getShippingCountryCode() {
		return $this->shippingCountryCode;
	}
	/**
	 * 配送先都市取得
	 * @return string 配送先都市
	 */
	public function getShippingCity() {
		return $this->shippingCity;
	}
	/**
	 * 配送先州・群取得
	 * @return string 配送先州・群
	 */
	public function getShippingCounty() {
		return $this->shippingCounty;
	}
	/**
	 * 配送先区取得
	 * @return string 配送先区
	 */
	public function getShippingDistrict() {
		return $this->shippingDistrict;
	}
	/**
	 * 配送先郵便番号取得
	 * @return string 配送先郵便番号
	 */
	public function getShippingPostalCode() {
		return $this->shippingPostalCode;
	}
	/**
	 * 配送先都道府県取得
	 * @return string 配送先都道府県
	 */
	public function getShippingStateOrRegion() {
		return $this->shippingStateOrRegion;
	}
	/**
	 * 配送先住所1取得
	 * @return string 配送先住所1
	 */
	public function getShippingAddressLine1() {
		return $this->shippingAddressLine1;
	}
	/**
	 * 配送先住所2取得
	 * @return string 配送先住所2
	 */
	public function getShippingAddressLine2() {
		return $this->shippingAddressLine2;
	}
	/**
	 * 配送先住所3取得
	 * @return string 配送先住所3
	 */
	public function getShippingAddressLine3() {
		return $this->shippingAddressLine3;
	}
	/**
	 * 配送先氏名取得
	 * @return string 配送先氏名
	 */
	public function getShippingName() {
		return $this->shippingName;
	}
	/**
	 * 配送先電話番号取得
	 * @return string 配送先電話番号
	 */
	public function getShippingPhoneNumber() {
		return $this->shippingPhoneNumber;
	}
	/**
	 * AmazonバイヤーID取得
	 * @return string AmazonバイヤーID
	 */
	public function getAmazonBuyerID() {
		return $this->amazonBuyerID;
	}
	/**
	 * Amazonアカウント名取得
	 * @return string Amazonアカウント名
	 */
	public function getAmazonAccountName() {
		return $this->amazonAccountName;
	}
	/**
	 * Amazonメールアドレス取得
	 * @return string Amazonメールアドレス
	 */
	public function getAmazonMailAddress() {
		return $this->amazonMailAddress;
	}
	/**
	 * Amazon電話番号取得
	 * @return string Amazon電話番号
	 */
	public function getAmazonPhoneNumber() {
		return $this->amazonPhoneNumber;
	}
	/**
	 * 請求先国コード取得
	 * @return string 請求先国コード
	 */
	public function getBillingCountryCode() {
		return $this->billingCountryCode;
	}
	/**
	 * 請求先都市取得
	 * @return string 請求先都市
	 */
	public function getBillingCity() {
		return $this->billingCity;
	}
	/**
	 * 請求先州・群取得
	 * @return string 請求先州・群
	 */
	public function getBillingCounty() {
		return $this->billingCounty;
	}
	/**
	 * 請求先区取得
	 * @return string 請求先区
	 */
	public function getBillingDistrict() {
		return $this->billingDistrict;
	}
	/**
	 * 請求先郵便番号取得
	 * @return string 請求先郵便番号
	 */
	public function getBillingPostalCode() {
		return $this->billingPostalCode;
	}
	/**
	 * 請求先都道府県取得
	 * @return string 請求先都道府県
	 */
	public function getBillingStateOrRegion() {
		return $this->billingStateOrRegion;
	}
	/**
	 * 請求先住所1取得
	 * @return string 請求先住所1
	 */
	public function getBillingAddressLine1() {
		return $this->billingAddressLine1;
	}
	/**
	 * 請求先住所2取得
	 * @return string 請求先住所2
	 */
	public function getBillingAddressLine2() {
		return $this->billingAddressLine2;
	}
	/**
	 * 請求先住所3取得
	 * @return string 請求先住所3
	 */
	public function getBillingAddressLine3() {
		return $this->billingAddressLine3;
	}
	/**
	 * 請求先氏名取得
	 * @return string 請求先氏名
	 */
	public function getBillingName() {
		return $this->billingName;
	}
	/**
	 * 請求先電話番号取得
	 * @return string 請求先電話番号
	 */
	public function getBillingPhoneNumber() {
		return $this->billingPhoneNumber;
	}
	/**
	 * 決済手段説明取得
	 * @return string 決済手段説明
	 */
	public function getPaymentDescriptor() {
		return $this->paymentDescriptor;
	}

	/**
	 * 配送先国コード設定
	 *
	 * @param string $shippingCountryCode
	 */
	public function setShippingCountryCode($shippingCountryCode) {
		$this->shippingCountryCode = $shippingCountryCode;
	}
	/**
	 * 配送先都市設定
	 *
	 * @param string $shippingCity
	 */
	public function setShippingCity($shippingCity) {
		$this->shippingCity = $shippingCity;
	}
	/**
	 * 配送先州・群設定
	 *
	 * @param string $shippingCounty
	 */
	public function setShippingCounty($shippingCounty) {
		$this->shippingCounty = $shippingCounty;
	}
	/**
	 * 配送先区設定
	 *
	 * @param string $shippingDistrict
	 */
	public function setShippingDistrict($shippingDistrict) {
		$this->shippingDistrict = $shippingDistrict;
	}
	/**
	 * 配送先郵便番号設定
	 *
	 * @param string $shippingPostalCode
	 */
	public function setShippingPostalCode($shippingPostalCode) {
		$this->shippingPostalCode = $shippingPostalCode;
	}
	/**
	 * 配送先都道府県設定
	 *
	 * @param string $shippingStateOrRegion
	 */
	public function setShippingStateOrRegion($shippingStateOrRegion) {
		$this->shippingStateOrRegion = $shippingStateOrRegion;
	}
	/**
	 * 配送先住所1設定
	 *
	 * @param string $shippingAddressLine1
	 */
	public function setShippingAddressLine1($shippingAddressLine1) {
		$this->shippingAddressLine1 = $shippingAddressLine1;
	}
	/**
	 * 配送先住所2設定
	 *
	 * @param string $shippingAddressLine2
	 */
	public function setShippingAddressLine2($shippingAddressLine2) {
		$this->shippingAddressLine2 = $shippingAddressLine2;
	}
	/**
	 * 配送先住所3設定
	 *
	 * @param string $shippingAddressLine3
	 */
	public function setShippingAddressLine3($shippingAddressLine3) {
		$this->shippingAddressLine3 = $shippingAddressLine3;
	}
	/**
	 * 配送先氏名設定
	 *
	 * @param string $shippingName
	 */
	public function setShippingName($shippingName) {
		$this->shippingName = $shippingName;
	}
	/**
	 * 配送先電話番号設定
	 *
	 * @param string $shippingPhoneNumber
	 */
	public function setShippingPhoneNumber($shippingPhoneNumber) {
		$this->shippingPhoneNumber = $shippingPhoneNumber;
	}
	/**
	 * AmazonバイヤーID設定
	 *
	 * @param string $amazonBuyerID
	 */
	public function setAmazonBuyerID($amazonBuyerID) {
		$this->amazonBuyerID = $amazonBuyerID;
	}
	/**
	 * Amazonアカウント名設定
	 *
	 * @param string $amazonAccountName
	 */
	public function setAmazonAccountName($amazonAccountName) {
		$this->amazonAccountName = $amazonAccountName;
	}
	/**
	 * Amazonメールアドレス設定
	 *
	 * @param string $amazonMailAddress
	 */
	public function setAmazonMailAddress($amazonMailAddress) {
		$this->amazonMailAddress = $amazonMailAddress;
	}
	/**
	 * Amazon電話番号設定
	 *
	 * @param string $amazonPhoneNumber
	 */
	public function setAmazonPhoneNumber($amazonPhoneNumber) {
		$this->amazonPhoneNumber = $amazonPhoneNumber;
	}
	/**
	 * 請求先国コード設定
	 *
	 * @param string $billingCountryCode
	 */
	public function setBillingCountryCode($billingCountryCode) {
		$this->billingCountryCode = $billingCountryCode;
	}
	/**
	 * 請求先都市設定
	 *
	 * @param string $billingCity
	 */
	public function setBillingCity($billingCity) {
		$this->billingCity = $billingCity;
	}
	/**
	 * 請求先州・群設定
	 *
	 * @param string $billingCounty
	 */
	public function setBillingCounty($billingCounty) {
		$this->billingCounty = $billingCounty;
	}
	/**
	 * 請求先区設定
	 *
	 * @param string $billingDistrict
	 */
	public function setBillingDistrict($billingDistrict) {
		$this->billingDistrict = $billingDistrict;
	}
	/**
	 * 請求先郵便番号設定
	 *
	 * @param string $billingPostalCode
	 */
	public function setBillingPostalCode($billingPostalCode) {
		$this->billingPostalCode = $billingPostalCode;
	}
	/**
	 * 請求先都道府県設定
	 *
	 * @param string $billingStateOrRegion
	 */
	public function setBillingStateOrRegion($billingStateOrRegion) {
		$this->billingStateOrRegion = $billingStateOrRegion;
	}
	/**
	 * 請求先住所1設定
	 *
	 * @param string $billingAddressLine1
	 */
	public function setBillingAddressLine1($billingAddressLine1) {
		$this->billingAddressLine1 = $billingAddressLine1;
	}
	/**
	 * 請求先住所2設定
	 *
	 * @param string $billingAddressLine2
	 */
	public function setBillingAddressLine2($billingAddressLine2) {
		$this->billingAddressLine2 = $billingAddressLine2;
	}
	/**
	 * 請求先住所3設定
	 *
	 * @param string $billingAddressLine3
	 */
	public function setBillingAddressLine3($billingAddressLine3) {
		$this->billingAddressLine3 = $billingAddressLine3;
	}
	/**
	 * 請求先氏名設定
	 *
	 * @param string $billingName
	 */
	public function setBillingName($billingName) {
		$this->billingName = $billingName;
	}
	/**
	 * 請求先電話番号設定
	 *
	 * @param string $billingPhoneNumber
	 */
	public function setBillingPhoneNumber($billingPhoneNumber) {
		$this->billingPhoneNumber = $billingPhoneNumber;
	}
	/**
	 * 決済手段説明設定
	 *
	 * @param string $paymentDescriptor
	 */
	public function setPaymentDescriptor($paymentDescriptor) {
		$this->paymentDescriptor = $paymentDescriptor;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ShippingCountryCode=' . $this->encodeStr($this->getShippingCountryCode());
		$str .='&';
		$str .= 'ShippingCity=' . $this->encodeStr($this->getShippingCity());
		$str .='&';
		$str .= 'ShippingCounty=' . $this->encodeStr($this->getShippingCounty());
		$str .='&';
		$str .= 'ShippingDistrict=' . $this->encodeStr($this->getShippingDistrict());
		$str .='&';
		$str .= 'ShippingPostalCode=' . $this->encodeStr($this->getShippingPostalCode());
		$str .='&';
		$str .= 'ShippingStateOrRegion=' . $this->encodeStr($this->getShippingStateOrRegion());
		$str .='&';
		$str .= 'ShippingAddressLine1=' . $this->encodeStr($this->getShippingAddressLine1());
		$str .='&';
		$str .= 'ShippingAddressLine2=' . $this->encodeStr($this->getShippingAddressLine2());
		$str .='&';
		$str .= 'ShippingAddressLine3=' . $this->encodeStr($this->getShippingAddressLine3());
		$str .='&';
		$str .= 'ShippingName=' . $this->encodeStr($this->getShippingName());
		$str .='&';
		$str .= 'ShippingPhoneNumber=' . $this->encodeStr($this->getShippingPhoneNumber());
		$str .='&';
		$str .= 'AmazonBuyerID=' . $this->encodeStr($this->getAmazonBuyerID());
		$str .='&';
		$str .= 'AmazonAccountName=' . $this->encodeStr($this->getAmazonAccountName());
		$str .='&';
		$str .= 'AmazonMailAddress=' . $this->encodeStr($this->getAmazonMailAddress());
		$str .='&';
		$str .= 'AmazonPhoneNumber=' . $this->encodeStr($this->getAmazonPhoneNumber());
		$str .='&';
		$str .= 'BillingCountryCode=' . $this->encodeStr($this->getBillingCountryCode());
		$str .='&';
		$str .= 'BillingCity=' . $this->encodeStr($this->getBillingCity());
		$str .='&';
		$str .= 'BillingCounty=' . $this->encodeStr($this->getBillingCounty());
		$str .='&';
		$str .= 'BillingDistrict=' . $this->encodeStr($this->getBillingDistrict());
		$str .='&';
		$str .= 'BillingPostalCode=' . $this->encodeStr($this->getBillingPostalCode());
		$str .='&';
		$str .= 'BillingStateOrRegion=' . $this->encodeStr($this->getBillingStateOrRegion());
		$str .='&';
		$str .= 'BillingAddressLine1=' . $this->encodeStr($this->getBillingAddressLine1());
		$str .='&';
		$str .= 'BillingAddressLine2=' . $this->encodeStr($this->getBillingAddressLine2());
		$str .='&';
		$str .= 'BillingAddressLine3=' . $this->encodeStr($this->getBillingAddressLine3());
		$str .='&';
		$str .= 'BillingName=' . $this->encodeStr($this->getBillingName());
		$str .='&';
		$str .= 'BillingPhoneNumber=' . $this->encodeStr($this->getBillingPhoneNumber());
		$str .='&';
		$str .= 'PaymentDescriptor=' . $this->encodeStr($this->getPaymentDescriptor());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
