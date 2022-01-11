<?php
namespace GmoPG\com\gmo_pg\client\output;
use GmoPG\com\gmo_pg\client\output\EntryTranPaypayOutput;
use GmoPG\com\gmo_pg\client\output\ExecTranPaypayOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranPaypayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPaypayOutput.php';*/
/**
 * <b>PayPay登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaypayOutput {

	/**
	 * @var EntryTranPaypayOutput PayPay登録出力パラメータ
	 */
	private $entryTranPaypayOutput;/*@var $entryTranPaypayOutput EntryTranPaypayOutput */

	/**
	 * @var ExecTranPaypayOutput PayPay実行出力パラメータ
	 */
	private $execTranPaypayOutput;/*@var $execTranPaypayOutput ExecTranPaypayOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaypayOutput = new EntryTranPaypayOutput($params);
		$this->execTranPaypayOutput = new ExecTranPaypayOutput($params);
	}

	/**
	 * PayPay登録出力パラメータ取得
	 * @return EntryTranPaypayOutput PayPay登録出力パラメータ
	 */
	public function &getEntryTranPaypayOutput() {
		return $this->entryTranPaypayOutput;
	}

	/**
	 * PayPay実行出力パラメータ取得
	 * @return ExecTranPaypayOutput PayPay実行出力パラメータ
	 */
	public function &getExecTranPaypayOutput() {
		return $this->execTranPaypayOutput;
	}

	/**
	 * PayPay登録出力パラメータ設定
	 *
	 * @param EntryTranPaypayOutput  $entryTranPaypayOutput PayPay登録出力パラメータ
	 */
	public function setEntryTranPaypayOutput(&$entryTranPaypayOutput) {
		$this->entryTranPaypayOutput = $entryTranPaypayOutput;
	}

	/**
	 * PayPay決済実行出力パラメータ設定
	 *
	 * @param ExecTranPaypayOutput $execTranPaypayOutput PayPay実行出力パラメータ
	 */
	public function setExecTranPaypayOutput(&$execTranPaypayOutput) {
		$this->execTranPaypayOutput = $execTranPaypayOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranPaypayOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranPaypayOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranPaypayOutput->getToken();

	}
	/**
	 * 決済開始URL取得
	 * @return string 決済開始URL
	 */
	public function getStartURL() {
		return $this->execTranPaypayOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranPaypayOutput->getStartLimitDate();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranPaypayOutput->getOrderID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranPaypayOutput->getStatus();

	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranPaypayOutput->getTranDate();

	}
	/**
	 * トラッキングID取得
	 * @return string トラッキングID
	 */
	public function getPaypayTrackingID() {
		return $this->execTranPaypayOutput->getPaypayTrackingID();

	}
	/**
	 * 改ざんチェック文字列取得
	 * @return string 改ざんチェック文字列
	 */
	public function getCheckString() {
		return $this->execTranPaypayOutput->getCheckString();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranPaypayOutput->setAccessID($accessID);
		$this->execTranPaypayOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranPaypayOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranPaypayOutput->setToken($token);

	}
	/**
	 * 決済開始URL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranPaypayOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranPaypayOutput->setStartLimitDate($startLimitDate);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranPaypayOutput->setOrderID($orderID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranPaypayOutput->setStatus($status);

	}
	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranPaypayOutput->setTranDate($tranDate);

	}
	/**
	 * トラッキングID設定
	 *
	 * @param string $paypayTrackingID
	 */
	public function setPaypayTrackingID($paypayTrackingID) {
		$this->execTranPaypayOutput->setPaypayTrackingID($paypayTrackingID);

	}
	/**
	 * 改ざんチェック文字列設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranPaypayOutput->setCheckString($checkString);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranPaypayOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranPaypayOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranPaypayOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranPaypayOutput->getErrList();
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
