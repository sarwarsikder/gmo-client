<?php
require_once 'com/gmo_pg/client/input/EntryTranDocomoMiniInput.php';
require_once 'com/gmo_pg/client/input/ExecTranDocomoMiniInput.php';
/**
 * <b>d払い(ミニアプリ)登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDocomoMiniInput {

	/**
	 * @var EntryTranDocomoMiniInput d払い(ミニアプリ)登録入力パラメータ
	 */
	private $entryTranDocomoMiniInput;/* @var $entryTranInput EntryTranDocomoMiniInput */

	/**
	 * @var ExecTranDocomoMiniInput d払い(ミニアプリ)実行入力パラメータ
	 */
	private $execTranDocomoMiniInput;/* @var $execTranInput ExecTranDocomoMiniInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoMiniInput = new EntryTranDocomoMiniInput($params);
		$this->execTranDocomoMiniInput = new ExecTranDocomoMiniInput($params);
	}

	/**
	 * d払い(ミニアプリ)取引登録入力パラメータ取得
	 *
	 * @return EntryTranDocomoMiniInput 取引登録時パラメータ
	 */
	public function &getEntryTranDocomoMiniInput() {
		return $this->entryTranDocomoMiniInput;
	}

	/**
	 * d払い(ミニアプリ)実行入力パラメータ取得
	 * @return ExecTranDocomoMiniInput 決済実行時パラメータ
	 */
	public function &getExecTranDocomoMiniInput() {
		return $this->execTranDocomoMiniInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranDocomoMiniInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranDocomoMiniInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranDocomoMiniInput->getOrderID();

	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranDocomoMiniInput->getJobCd();
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranDocomoMiniInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranDocomoMiniInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranDocomoMiniInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranDocomoMiniInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranDocomoMiniInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranDocomoMiniInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranDocomoMiniInput->getClientField3();
	}
	/**
	 * ドコモ表示項目1取得
	 * @return string ドコモ表示項目1
	 */
	public function getDocomoDisp1() {
		return $this->execTranDocomoMiniInput->getDocomoDisp1();
	}
	/**
	 * ドコモ表示項目2取得
	 * @return string ドコモ表示項目2
	 */
	public function getDocomoDisp2() {
		return $this->execTranDocomoMiniInput->getDocomoDisp2();
	}

	/**
	 * d払い(ミニアプリ)取引登録入力パラメータ設定
	 *
	 * @param EntryTranDocomoMiniInput entryTranDocomoMiniInput  取引登録入力パラメータ
	 */
	public function setEntryTranDocomoMiniInput(&$entryTranDocomoMiniInput) {
		$this->entryTranDocomoMiniInput = $entryTranDocomoMiniInput;
	}

	/**
	 * d払い(ミニアプリ)実行入力パラメータ設定
	 *
	 * @param ExecTranDocomoMiniInput  execTranDocomoMiniInput   決済実行入力パラメータ
	 */
	public function setExecTranDocomoMiniInput(&$execTranDocomoMiniInput) {
		$this->execTranDocomoMiniInput = $execTranDocomoMiniInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranDocomoMiniInput->setShopID($shopID);
		$this->execTranDocomoMiniInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranDocomoMiniInput->setShopPass($shopPass);
		$this->execTranDocomoMiniInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranDocomoMiniInput->setOrderID($orderID);
		$this->execTranDocomoMiniInput->setOrderID($orderID);

	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranDocomoMiniInput->setJobCd($jobCd);
	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranDocomoMiniInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranDocomoMiniInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranDocomoMiniInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranDocomoMiniInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranDocomoMiniInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranDocomoMiniInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranDocomoMiniInput->setClientField3($clientField3);
	}
	/**
	 * ドコモ表示項目1設定
	 *
	 * @param string $docomoDisp1
	 */
	public function setDocomoDisp1($docomoDisp1) {
		$this->execTranDocomoMiniInput->setDocomoDisp1($docomoDisp1);
	}
	/**
	 * ドコモ表示項目2設定
	 *
	 * @param string $docomoDisp2
	 */
	public function setDocomoDisp2($docomoDisp2) {
		$this->execTranDocomoMiniInput->setDocomoDisp2($docomoDisp2);
	}

}
?>
