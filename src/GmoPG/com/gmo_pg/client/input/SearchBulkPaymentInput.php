<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>一括決済サービス売上データ参照　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBulkPaymentInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string 処理指定日
	 */
	private $targetDate;
	/**
	 * @var integer レコード通番
	 */
	private $recordNumber;
	/**
	 * @var string オーダーID
	 */
	private $orderID;


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
	 * 処理指定日取得
	 * @return string 処理指定日
	 */
	public function getTargetDate() {
		return $this->targetDate;
	}
	/**
	 * レコード通番取得
	 * @return integer レコード通番
	 */
	public function getRecordNumber() {
		return $this->recordNumber;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
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
	 * 処理指定日設定
	 *
	 * @param string $targetDate
	 */
	public function setTargetDate($targetDate) {
		$this->targetDate = $targetDate;
	}
	/**
	 * レコード通番設定
	 *
	 * @param integer $recordNumber
	 */
	public function setRecordNumber($recordNumber) {
		$this->recordNumber = $recordNumber;
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
		$this->setTargetDate($this->getStringValue($params, 'TargetDate', $this->getTargetDate()));
		$this->setRecordNumber($this->getStringValue($params, 'RecordNumber', $this->getRecordNumber()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));

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
		$str .= 'TargetDate=' . $this->encodeStr($this->getTargetDate());
		$str .='&';
		$str .= 'RecordNumber=' . $this->encodeStr($this->getRecordNumber());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());

	    return $str;
	}


}
?>
