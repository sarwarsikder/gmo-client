<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;
require_once 'com/gmo_pg/client/output/EntryTranFamipayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranFamipayOutput.php';
/**
 * <b>FamiPay登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranFamipayOutput {

	/**
	 * @var EntryTranFamipayOutput FamiPay登録出力パラメータ
	 */
	private $entryTranFamipayOutput;/*@var $entryTranFamipayOutput EntryTranFamipayOutput */

	/**
	 * @var ExecTranFamipayOutput FamiPay実行出力パラメータ
	 */
	private $execTranFamipayOutput;/*@var $execTranFamipayOutput ExecTranFamipayOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranFamipayOutput = new EntryTranFamipayOutput($params);
		$this->execTranFamipayOutput = new ExecTranFamipayOutput($params);
	}

	/**
	 * FamiPay登録出力パラメータ取得
	 * @return EntryTranFamipayOutput FamiPay登録出力パラメータ
	 */
	public function &getEntryTranFamipayOutput() {
		return $this->entryTranFamipayOutput;
	}

	/**
	 * FamiPay実行出力パラメータ取得
	 * @return ExecTranFamipayOutput FamiPay実行出力パラメータ
	 */
	public function &getExecTranFamipayOutput() {
		return $this->execTranFamipayOutput;
	}

	/**
	 * FamiPay登録出力パラメータ設定
	 *
	 * @param EntryTranFamipayOutput  $entryTranFamipayOutput FamiPay登録出力パラメータ
	 */
	public function setEntryTranFamipayOutput(&$entryTranFamipayOutput) {
		$this->entryTranFamipayOutput = $entryTranFamipayOutput;
	}

	/**
	 * FamiPay決済実行出力パラメータ設定
	 *
	 * @param ExecTranFamipayOutput $execTranFamipayOutput FamiPay実行出力パラメータ
	 */
	public function setExecTranFamipayOutput(&$execTranFamipayOutput) {
		$this->execTranFamipayOutput = $execTranFamipayOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranFamipayOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranFamipayOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranFamipayOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranFamipayOutput->getStartURL();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranFamipayOutput->setAccessID($accessID);
		$this->execTranFamipayOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranFamipayOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranFamipayOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranFamipayOutput->setStartURL($startURL);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranFamipayOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranFamipayOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranFamipayOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranFamipayOutput->getErrList();
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
