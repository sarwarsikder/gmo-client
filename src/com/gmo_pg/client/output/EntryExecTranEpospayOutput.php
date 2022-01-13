<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;
require_once 'com/gmo_pg/client/output/EntryTranEpospayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranEpospayOutput.php';
/**
 * <b>エポスかんたん決済登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranEpospayOutput {

	/**
	 * @var EntryTranEpospayOutput エポスかんたん決済登録出力パラメータ
	 */
	private $entryTranEpospayOutput;/*@var $entryTranEpospayOutput EntryTranEpospayOutput */

	/**
	 * @var ExecTranEpospayOutput エポスかんたん決済実行出力パラメータ
	 */
	private $execTranEpospayOutput;/*@var $execTranEpospayOutput ExecTranEpospayOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranEpospayOutput = new EntryTranEpospayOutput($params);
		$this->execTranEpospayOutput = new ExecTranEpospayOutput($params);
	}

	/**
	 * エポスかんたん決済登録出力パラメータ取得
	 * @return EntryTranEpospayOutput エポスかんたん決済登録出力パラメータ
	 */
	public function &getEntryTranEpospayOutput() {
		return $this->entryTranEpospayOutput;
	}

	/**
	 * エポスかんたん決済実行出力パラメータ取得
	 * @return ExecTranEpospayOutput エポスかんたん決済実行出力パラメータ
	 */
	public function &getExecTranEpospayOutput() {
		return $this->execTranEpospayOutput;
	}

	/**
	 * エポスかんたん決済登録出力パラメータ設定
	 *
	 * @param EntryTranEpospayOutput  $entryTranEpospayOutput エポスかんたん決済登録出力パラメータ
	 */
	public function setEntryTranEpospayOutput(&$entryTranEpospayOutput) {
		$this->entryTranEpospayOutput = $entryTranEpospayOutput;
	}

	/**
	 * エポスかんたん決済決済実行出力パラメータ設定
	 *
	 * @param ExecTranEpospayOutput $execTranEpospayOutput エポスかんたん決済実行出力パラメータ
	 */
	public function setExecTranEpospayOutput(&$execTranEpospayOutput) {
		$this->execTranEpospayOutput = $execTranEpospayOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranEpospayOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranEpospayOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranEpospayOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranEpospayOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranEpospayOutput->getStartLimitDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranEpospayOutput->setAccessID($accessID);
		$this->execTranEpospayOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranEpospayOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranEpospayOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranEpospayOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranEpospayOutput->setStartLimitDate($startLimitDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranEpospayOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranEpospayOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranEpospayOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranEpospayOutput->getErrList();
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
