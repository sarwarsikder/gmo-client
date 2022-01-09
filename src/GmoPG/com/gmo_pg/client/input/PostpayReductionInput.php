<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PS後払い請求減額　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class PostpayReductionInput extends BaseInput {

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
	 * @var string 利用金額
	 */
	private $amount;
	/**
	 * @var string 税送料
	 */
	private $tax;
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
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->tax;
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
	 * 利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * 税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
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
		$this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
		$this->setTax($this->getStringValue($params, 'Tax', $this->getTax()));
		$this->setDetailName($this->getStringValue($params, 'DetailName', $this->getDetailName()));
		$this->setDetailPrice($this->getStringValue($params, 'DetailPrice', $this->getDetailPrice()));
		$this->setDetailQuantity($this->getStringValue($params, 'DetailQuantity', $this->getDetailQuantity()));
		$this->setDetailBrand($this->getStringValue($params, 'DetailBrand', $this->getDetailBrand()));
		$this->setDetailCategory($this->getStringValue($params, 'DetailCategory', $this->getDetailCategory()));
		$this->setMultiItem($this->getStringValue($params, 'MultiItem', $this->getMultiItem()));

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
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
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

	    return $str;
	}


}
?>
