<?php
namespace GmoPG\com\gmo_pg\client\output;
require_once 'com/gmo_pg/client/output/EntryTranMerpayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranMerpayOutput.php';
/**
 * <b>メルペイ登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranMerpayOutput {

	/**
	 * @var EntryTranMerpayOutput メルペイ登録出力パラメータ
	 */
	private $entryTranMerpayOutput;/*@var $entryTranMerpayOutput EntryTranMerpayOutput */

	/**
	 * @var ExecTranMerpayOutput メルペイ実行出力パラメータ
	 */
	private $execTranMerpayOutput;/*@var $execTranMerpayOutput ExecTranMerpayOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranMerpayOutput = new EntryTranMerpayOutput($params);
		$this->execTranMerpayOutput = new ExecTranMerpayOutput($params);
	}

	/**
	 * メルペイ登録出力パラメータ取得
	 * @return EntryTranMerpayOutput メルペイ登録出力パラメータ
	 */
	public function &getEntryTranMerpayOutput() {
		return $this->entryTranMerpayOutput;
	}

	/**
	 * メルペイ実行出力パラメータ取得
	 * @return ExecTranMerpayOutput メルペイ実行出力パラメータ
	 */
	public function &getExecTranMerpayOutput() {
		return $this->execTranMerpayOutput;
	}

	/**
	 * メルペイ登録出力パラメータ設定
	 *
	 * @param EntryTranMerpayOutput  $entryTranMerpayOutput メルペイ登録出力パラメータ
	 */
	public function setEntryTranMerpayOutput(&$entryTranMerpayOutput) {
		$this->entryTranMerpayOutput = $entryTranMerpayOutput;
	}

	/**
	 * メルペイ決済実行出力パラメータ設定
	 *
	 * @param ExecTranMerpayOutput $execTranMerpayOutput メルペイ実行出力パラメータ
	 */
	public function setExecTranMerpayOutput(&$execTranMerpayOutput) {
		$this->execTranMerpayOutput = $execTranMerpayOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranMerpayOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranMerpayOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranMerpayOutput->getToken();

	}
	/**
	 * 決済開始URL取得
	 * @return string 決済開始URL
	 */
	public function getStartURL() {
		return $this->execTranMerpayOutput->getStartURL();

	}
	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->execTranMerpayOutput->getShopID();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranMerpayOutput->getOrderID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranMerpayOutput->getStatus();

	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranMerpayOutput->getTranDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranMerpayOutput->setAccessID($accessID);
		$this->execTranMerpayOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranMerpayOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranMerpayOutput->setToken($token);

	}
	/**
	 * 決済開始URL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranMerpayOutput->setStartURL($startURL);

	}
	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->execTranMerpayOutput->setShopID($shopID);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranMerpayOutput->setOrderID($orderID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranMerpayOutput->setStatus($status);

	}
	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranMerpayOutput->setTranDate($tranDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranMerpayOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranMerpayOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranMerpayOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranMerpayOutput->getErrList();
		return 0 < count($execErrList);
	}

	/**
	 * エラー発生判定
	 * @return boolean エラー発生有無(true=エラー発生)
	 */
	public function isErrorOccurred() {
		return $this->isEntryErrorOccurred() || $this->isExecErrorOccurred();
	}

}
?>
