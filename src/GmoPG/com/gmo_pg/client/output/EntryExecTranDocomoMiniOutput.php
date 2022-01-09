<?php
namespace GmoPG\com\gmo_pg\client\output;
require_once 'com/gmo_pg/client/output/EntryTranDocomoMiniOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranDocomoMiniOutput.php';
/**
 * <b>d払い(ミニアプリ)登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDocomoMiniOutput {

	/**
	 * @var EntryTranDocomoMiniOutput d払い(ミニアプリ)登録出力パラメータ
	 */
	private $entryTranDocomoMiniOutput;/*@var $entryTranDocomoMiniOutput EntryTranDocomoMiniOutput */

	/**
	 * @var ExecTranDocomoMiniOutput d払い(ミニアプリ)実行出力パラメータ
	 */
	private $execTranDocomoMiniOutput;/*@var $execTranDocomoMiniOutput ExecTranDocomoMiniOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoMiniOutput = new EntryTranDocomoMiniOutput($params);
		$this->execTranDocomoMiniOutput = new ExecTranDocomoMiniOutput($params);
	}

	/**
	 * d払い(ミニアプリ)登録出力パラメータ取得
	 * @return EntryTranDocomoMiniOutput d払い(ミニアプリ)登録出力パラメータ
	 */
	public function &getEntryTranDocomoMiniOutput() {
		return $this->entryTranDocomoMiniOutput;
	}

	/**
	 * d払い(ミニアプリ)実行出力パラメータ取得
	 * @return ExecTranDocomoMiniOutput d払い(ミニアプリ)実行出力パラメータ
	 */
	public function &getExecTranDocomoMiniOutput() {
		return $this->execTranDocomoMiniOutput;
	}

	/**
	 * d払い(ミニアプリ)登録出力パラメータ設定
	 *
	 * @param EntryTranDocomoMiniOutput  $entryTranDocomoMiniOutput d払い(ミニアプリ)登録出力パラメータ
	 */
	public function setEntryTranDocomoMiniOutput(&$entryTranDocomoMiniOutput) {
		$this->entryTranDocomoMiniOutput = $entryTranDocomoMiniOutput;
	}

	/**
	 * d払い(ミニアプリ)決済実行出力パラメータ設定
	 *
	 * @param ExecTranDocomoMiniOutput $execTranDocomoMiniOutput d払い(ミニアプリ)実行出力パラメータ
	 */
	public function setExecTranDocomoMiniOutput(&$execTranDocomoMiniOutput) {
		$this->execTranDocomoMiniOutput = $execTranDocomoMiniOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranDocomoMiniOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranDocomoMiniOutput->getAccessPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranDocomoMiniOutput->getOrderID();

	}
	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus() {
		return $this->execTranDocomoMiniOutput->getStatus();

	}
	/**
	 * ドコモ決済トークン取得
	 * @return string ドコモ決済トークン
	 */
	public function getDocomoToken() {
		return $this->execTranDocomoMiniOutput->getDocomoToken();

	}
	/**
	 * ドコモ決済トークン期限取得
	 * @return string ドコモ決済トークン期限
	 */
	public function getDocomoTokenLimitDate() {
		return $this->execTranDocomoMiniOutput->getDocomoTokenLimitDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranDocomoMiniOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranDocomoMiniOutput->setAccessPass($accessPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranDocomoMiniOutput->setOrderID($orderID);

	}
	/**
	 * ステータス設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranDocomoMiniOutput->setStatus($status);

	}
	/**
	 * ドコモ決済トークン設定
	 *
	 * @param string $docomoToken
	 */
	public function setDocomoToken($docomoToken) {
		$this->execTranDocomoMiniOutput->setDocomoToken($docomoToken);

	}
	/**
	 * ドコモ決済トークン期限設定
	 *
	 * @param string $docomoTokenLimitDate
	 */
	public function setDocomoTokenLimitDate($docomoTokenLimitDate) {
		$this->execTranDocomoMiniOutput->setDocomoTokenLimitDate($docomoTokenLimitDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranDocomoMiniOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranDocomoMiniOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranDocomoMiniOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranDocomoMiniOutput->getErrList();
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
