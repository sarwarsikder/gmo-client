<?php
require_once 'com/gmo_pg/client/input/EntryTranPaypayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranPaypayInput.php';
/**
 * <b>PayPay登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaypayInput {

	/**
	 * @var EntryTranPaypayInput PayPay登録入力パラメータ
	 */
	private $entryTranPaypayInput;/* @var $entryTranInput EntryTranPaypayInput */

	/**
	 * @var ExecTranPaypayInput PayPay実行入力パラメータ
	 */
	private $execTranPaypayInput;/* @var $execTranInput ExecTranPaypayInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaypayInput = new EntryTranPaypayInput($params);
		$this->execTranPaypayInput = new ExecTranPaypayInput($params);
	}

	/**
	 * PayPay取引登録入力パラメータ取得
	 *
	 * @return EntryTranPaypayInput 取引登録時パラメータ
	 */
	public function &getEntryTranPaypayInput() {
		return $this->entryTranPaypayInput;
	}

	/**
	 * PayPay実行入力パラメータ取得
	 * @return ExecTranPaypayInput 決済実行時パラメータ
	 */
	public function &getExecTranPaypayInput() {
		return $this->execTranPaypayInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranPaypayInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranPaypayInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranPaypayInput->getOrderID();

	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranPaypayInput->getJobCd();
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranPaypayInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranPaypayInput->getTax();
	}
	/**
	 * 決済タイプ取得
	 * @return integer 決済タイプ
	 */
	public function getPaymentType() {
		return $this->entryTranPaypayInput->getPaymentType();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranPaypayInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranPaypayInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranPaypayInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranPaypayInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranPaypayInput->getClientField3();
	}
	/**
	 * 決済完了後の戻り先URL取得
	 * @return string 決済完了後の戻り先URL
	 */
	public function getRetURL() {
		return $this->execTranPaypayInput->getRetURL();
	}
	/**
	 * 支払開始期限秒取得
	 * @return string 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranPaypayInput->getPaymentTermSec();
	}
	/**
	 * PayPay承諾番号取得
	 * @return string PayPay承諾番号
	 */
	public function getPaypayAcceptCode() {
		return $this->execTranPaypayInput->getPaypayAcceptCode();
	}

	/**
	 * PayPay取引登録入力パラメータ設定
	 *
	 * @param EntryTranPaypayInput entryTranPaypayInput  取引登録入力パラメータ
	 */
	public function setEntryTranPaypayInput(&$entryTranPaypayInput) {
		$this->entryTranPaypayInput = $entryTranPaypayInput;
	}

	/**
	 * PayPay実行入力パラメータ設定
	 *
	 * @param ExecTranPaypayInput  execTranPaypayInput   決済実行入力パラメータ
	 */
	public function setExecTranPaypayInput(&$execTranPaypayInput) {
		$this->execTranPaypayInput = $execTranPaypayInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranPaypayInput->setShopID($shopID);
		$this->execTranPaypayInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranPaypayInput->setShopPass($shopPass);
		$this->execTranPaypayInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranPaypayInput->setOrderID($orderID);
		$this->execTranPaypayInput->setOrderID($orderID);

	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranPaypayInput->setJobCd($jobCd);
	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranPaypayInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranPaypayInput->setTax($tax);
	}
	/**
	 * 決済タイプ設定
	 *
	 * @param integer $paymentType
	 */
	public function setPaymentType($paymentType) {
		$this->entryTranPaypayInput->setPaymentType($paymentType);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranPaypayInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranPaypayInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranPaypayInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranPaypayInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranPaypayInput->setClientField3($clientField3);
	}
	/**
	 * 決済完了後の戻り先URL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranPaypayInput->setRetURL($retURL);
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param string $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranPaypayInput->setPaymentTermSec($paymentTermSec);
	}
	/**
	 * PayPay承諾番号設定
	 *
	 * @param string $paypayAcceptCode
	 */
	public function setPaypayAcceptCode($paypayAcceptCode) {
		$this->execTranPaypayInput->setPaypayAcceptCode($paypayAcceptCode);
	}

}
?>
