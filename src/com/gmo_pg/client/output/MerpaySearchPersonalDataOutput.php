<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>メルペイ個人情報参照　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class MerpaySearchPersonalDataOutput extends BaseOutput {

	/**
	 * @var string 販売元ニックネーム
	 */
	private $buyerNickname;
	/**
	 * @var string 販売元電話番号
	 */
	private $buyerTel;
	/**
	 * @var string 販売元メールアドレス
	 */
	private $buyerMail;
	/**
	 * @var string 配送先姓
	 */
	private $deliveryFamilyName;
	/**
	 * @var string 配送先名
	 */
	private $deliveryFirstName;
	/**
	 * @var string 配送先姓（カナ）
	 */
	private $deliveryFamilyNameKana;
	/**
	 * @var string 配送先名（カナ）
	 */
	private $deliveryFirstNameKana;
	/**
	 * @var string 配送先電話番号
	 */
	private $deliveryTel;
	/**
	 * @var string 配送先郵便番号
	 */
	private $deleveryZipCode;
	/**
	 * @var string 配送先都道府県
	 */
	private $deliveryPrefecture;
	/**
	 * @var string 配送先市区町村
	 */
	private $deliveryCity;
	/**
	 * @var string 配送先住所1
	 */
	private $deliveryAddress1;
	/**
	 * @var string 配送先住所2
	 */
	private $deliveryAddress2;


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
		$this->setBuyerNickname($params->get('BuyerNickname'));
		$this->setBuyerTel($params->get('BuyerTel'));
		$this->setBuyerMail($params->get('BuyerMail'));
		$this->setDeliveryFamilyName($params->get('DeliveryFamilyName'));
		$this->setDeliveryFirstName($params->get('DeliveryFirstName'));
		$this->setDeliveryFamilyNameKana($params->get('DeliveryFamilyNameKana'));
		$this->setDeliveryFirstNameKana($params->get('DeliveryFirstNameKana'));
		$this->setDeliveryTel($params->get('DeliveryTel'));
		$this->setDeleveryZipCode($params->get('DeleveryZipCode'));
		$this->setDeliveryPrefecture($params->get('DeliveryPrefecture'));
		$this->setDeliveryCity($params->get('DeliveryCity'));
		$this->setDeliveryAddress1($params->get('DeliveryAddress1'));
		$this->setDeliveryAddress2($params->get('DeliveryAddress2'));

	}

	/**
	 * 販売元ニックネーム取得
	 * @return string 販売元ニックネーム
	 */
	public function getBuyerNickname() {
		return $this->buyerNickname;
	}
	/**
	 * 販売元電話番号取得
	 * @return string 販売元電話番号
	 */
	public function getBuyerTel() {
		return $this->buyerTel;
	}
	/**
	 * 販売元メールアドレス取得
	 * @return string 販売元メールアドレス
	 */
	public function getBuyerMail() {
		return $this->buyerMail;
	}
	/**
	 * 配送先姓取得
	 * @return string 配送先姓
	 */
	public function getDeliveryFamilyName() {
		return $this->deliveryFamilyName;
	}
	/**
	 * 配送先名取得
	 * @return string 配送先名
	 */
	public function getDeliveryFirstName() {
		return $this->deliveryFirstName;
	}
	/**
	 * 配送先姓（カナ）取得
	 * @return string 配送先姓（カナ）
	 */
	public function getDeliveryFamilyNameKana() {
		return $this->deliveryFamilyNameKana;
	}
	/**
	 * 配送先名（カナ）取得
	 * @return string 配送先名（カナ）
	 */
	public function getDeliveryFirstNameKana() {
		return $this->deliveryFirstNameKana;
	}
	/**
	 * 配送先電話番号取得
	 * @return string 配送先電話番号
	 */
	public function getDeliveryTel() {
		return $this->deliveryTel;
	}
	/**
	 * 配送先郵便番号取得
	 * @return string 配送先郵便番号
	 */
	public function getDeleveryZipCode() {
		return $this->deleveryZipCode;
	}
	/**
	 * 配送先都道府県取得
	 * @return string 配送先都道府県
	 */
	public function getDeliveryPrefecture() {
		return $this->deliveryPrefecture;
	}
	/**
	 * 配送先市区町村取得
	 * @return string 配送先市区町村
	 */
	public function getDeliveryCity() {
		return $this->deliveryCity;
	}
	/**
	 * 配送先住所1取得
	 * @return string 配送先住所1
	 */
	public function getDeliveryAddress1() {
		return $this->deliveryAddress1;
	}
	/**
	 * 配送先住所2取得
	 * @return string 配送先住所2
	 */
	public function getDeliveryAddress2() {
		return $this->deliveryAddress2;
	}

	/**
	 * 販売元ニックネーム設定
	 *
	 * @param string $buyerNickname
	 */
	public function setBuyerNickname($buyerNickname) {
		$this->buyerNickname = $buyerNickname;
	}
	/**
	 * 販売元電話番号設定
	 *
	 * @param string $buyerTel
	 */
	public function setBuyerTel($buyerTel) {
		$this->buyerTel = $buyerTel;
	}
	/**
	 * 販売元メールアドレス設定
	 *
	 * @param string $buyerMail
	 */
	public function setBuyerMail($buyerMail) {
		$this->buyerMail = $buyerMail;
	}
	/**
	 * 配送先姓設定
	 *
	 * @param string $deliveryFamilyName
	 */
	public function setDeliveryFamilyName($deliveryFamilyName) {
		$this->deliveryFamilyName = $deliveryFamilyName;
	}
	/**
	 * 配送先名設定
	 *
	 * @param string $deliveryFirstName
	 */
	public function setDeliveryFirstName($deliveryFirstName) {
		$this->deliveryFirstName = $deliveryFirstName;
	}
	/**
	 * 配送先姓（カナ）設定
	 *
	 * @param string $deliveryFamilyNameKana
	 */
	public function setDeliveryFamilyNameKana($deliveryFamilyNameKana) {
		$this->deliveryFamilyNameKana = $deliveryFamilyNameKana;
	}
	/**
	 * 配送先名（カナ）設定
	 *
	 * @param string $deliveryFirstNameKana
	 */
	public function setDeliveryFirstNameKana($deliveryFirstNameKana) {
		$this->deliveryFirstNameKana = $deliveryFirstNameKana;
	}
	/**
	 * 配送先電話番号設定
	 *
	 * @param string $deliveryTel
	 */
	public function setDeliveryTel($deliveryTel) {
		$this->deliveryTel = $deliveryTel;
	}
	/**
	 * 配送先郵便番号設定
	 *
	 * @param string $deleveryZipCode
	 */
	public function setDeleveryZipCode($deleveryZipCode) {
		$this->deleveryZipCode = $deleveryZipCode;
	}
	/**
	 * 配送先都道府県設定
	 *
	 * @param string $deliveryPrefecture
	 */
	public function setDeliveryPrefecture($deliveryPrefecture) {
		$this->deliveryPrefecture = $deliveryPrefecture;
	}
	/**
	 * 配送先市区町村設定
	 *
	 * @param string $deliveryCity
	 */
	public function setDeliveryCity($deliveryCity) {
		$this->deliveryCity = $deliveryCity;
	}
	/**
	 * 配送先住所1設定
	 *
	 * @param string $deliveryAddress1
	 */
	public function setDeliveryAddress1($deliveryAddress1) {
		$this->deliveryAddress1 = $deliveryAddress1;
	}
	/**
	 * 配送先住所2設定
	 *
	 * @param string $deliveryAddress2
	 */
	public function setDeliveryAddress2($deliveryAddress2) {
		$this->deliveryAddress2 = $deliveryAddress2;
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
		$str .= 'BuyerNickname=' . $this->encodeStr($this->getBuyerNickname());
		$str .='&';
		$str .= 'BuyerTel=' . $this->encodeStr($this->getBuyerTel());
		$str .='&';
		$str .= 'BuyerMail=' . $this->encodeStr($this->getBuyerMail());
		$str .='&';
		$str .= 'DeliveryFamilyName=' . $this->encodeStr($this->getDeliveryFamilyName());
		$str .='&';
		$str .= 'DeliveryFirstName=' . $this->encodeStr($this->getDeliveryFirstName());
		$str .='&';
		$str .= 'DeliveryFamilyNameKana=' . $this->encodeStr($this->getDeliveryFamilyNameKana());
		$str .='&';
		$str .= 'DeliveryFirstNameKana=' . $this->encodeStr($this->getDeliveryFirstNameKana());
		$str .='&';
		$str .= 'DeliveryTel=' . $this->encodeStr($this->getDeliveryTel());
		$str .='&';
		$str .= 'DeleveryZipCode=' . $this->encodeStr($this->getDeleveryZipCode());
		$str .='&';
		$str .= 'DeliveryPrefecture=' . $this->encodeStr($this->getDeliveryPrefecture());
		$str .='&';
		$str .= 'DeliveryCity=' . $this->encodeStr($this->getDeliveryCity());
		$str .='&';
		$str .= 'DeliveryAddress1=' . $this->encodeStr($this->getDeliveryAddress1());
		$str .='&';
		$str .= 'DeliveryAddress2=' . $this->encodeStr($this->getDeliveryAddress2());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
