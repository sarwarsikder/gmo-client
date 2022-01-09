<?php
namespace GmoPG\com\gmo_pg\client\output;
require_once 'com/gmo_pg/client/output/EntryTranPaypayAcceptOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPaypayAcceptOutput.php';
/**
 * <b>PayPay随時(利用承諾)登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaypayAcceptOutput {

	/**
	 * @var EntryTranPaypayAcceptOutput PayPay随時(利用承諾)登録出力パラメータ
	 */
	private $entryTranPaypayAcceptOutput;/*@var $entryTranPaypayAcceptOutput EntryTranPaypayAcceptOutput */

	/**
	 * @var ExecTranPaypayAcceptOutput PayPay随時(利用承諾)実行出力パラメータ
	 */
	private $execTranPaypayAcceptOutput;/*@var $execTranPaypayAcceptOutput ExecTranPaypayAcceptOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaypayAcceptOutput = new EntryTranPaypayAcceptOutput($params);
		$this->execTranPaypayAcceptOutput = new ExecTranPaypayAcceptOutput($params);
	}

	/**
	 * PayPay随時(利用承諾)登録出力パラメータ取得
	 * @return EntryTranPaypayAcceptOutput PayPay随時(利用承諾)登録出力パラメータ
	 */
	public function &getEntryTranPaypayAcceptOutput() {
		return $this->entryTranPaypayAcceptOutput;
	}

	/**
	 * PayPay随時(利用承諾)実行出力パラメータ取得
	 * @return ExecTranPaypayAcceptOutput PayPay随時(利用承諾)実行出力パラメータ
	 */
	public function &getExecTranPaypayAcceptOutput() {
		return $this->execTranPaypayAcceptOutput;
	}

	/**
	 * PayPay随時(利用承諾)登録出力パラメータ設定
	 *
	 * @param EntryTranPaypayAcceptOutput  $entryTranPaypayAcceptOutput PayPay随時(利用承諾)登録出力パラメータ
	 */
	public function setEntryTranPaypayAcceptOutput(&$entryTranPaypayAcceptOutput) {
		$this->entryTranPaypayAcceptOutput = $entryTranPaypayAcceptOutput;
	}

	/**
	 * PayPay随時(利用承諾)決済実行出力パラメータ設定
	 *
	 * @param ExecTranPaypayAcceptOutput $execTranPaypayAcceptOutput PayPay随時(利用承諾)実行出力パラメータ
	 */
	public function setExecTranPaypayAcceptOutput(&$execTranPaypayAcceptOutput) {
		$this->execTranPaypayAcceptOutput = $execTranPaypayAcceptOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranPaypayAcceptOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranPaypayAcceptOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranPaypayAcceptOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranPaypayAcceptOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranPaypayAcceptOutput->getStartLimitDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranPaypayAcceptOutput->setAccessID($accessID);
		$this->execTranPaypayAcceptOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranPaypayAcceptOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranPaypayAcceptOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranPaypayAcceptOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranPaypayAcceptOutput->setStartLimitDate($startLimitDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranPaypayAcceptOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranPaypayAcceptOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranPaypayAcceptOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranPaypayAcceptOutput->getErrList();
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
