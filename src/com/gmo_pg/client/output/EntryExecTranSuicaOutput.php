<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;
require_once 'com/gmo_pg/client/output/EntryTranSuicaOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranSuicaOutput.php';
/**
 * <b>モバイルSuica取引登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class EntryExecTranSuicaOutput {

	/**
	 * @var EntryTranSuicaOutput モバイルSuica取引登録出力パラメータ
	 */
	private $entryTranSuicaOutput;

	/**
	 * @var ExecTranSuicaOutput モバイルSuica決済実行出力パラメータ
	 */
	private $execTranSuicaOutput;/*@var $execTranSuicaOutput ExecTranSuicaOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranSuicaOutput = new EntryTranSuicaOutput($params);
		$this->execTranSuicaOutput = new ExecTranSuicaOutput($params);
	}

	/**
	 * モバイルSuica取引登録出力パラメータ取得
	 * @return EntryTranSuicaOutput モバイルSuica取引登録出力パラメータ
	 */
	public function &getEntryTranSuicaOutput() {
		return $this->entryTranSuicaOutput;
	}

	/**
	 * モバイルSuica決済実行出力パラメータ取得
	 * @return ExecTranSuicaOutput モバイルSuica決済実行出力パラメータ
	 */
	public function &getExecTranSuicaOutput() {
		return $this->execTranSuicaOutput;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranSuicaOutput->getAccessPass();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->entryTranSuicaOutput->getAccessId();
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->execTranSuicaOutput->getOrderId();
	}
	/**
	 * Suica注文番号を取得します。
	 *
	 * @return	$String	Suica注文番号
	 */
	public function getSuicaOrderNo() {
		return $this->execTranSuicaOutput->getSuicaOrderNo();
	}

	/**
	 * Suica受付番号を取得します。
	 *
	 * @return	$String	Suica受付番号
	 */
	public function getReceiptNo() {
		return $this->execTranSuicaOutput->getReceiptNo();
	}

	/**
	 * 支払期限日時を取得します。
	 *
	 * @return	$timestamp	支払期限日時
	 */
	public function getPaymentTerm() {
		return $this->execTranSuicaOutput->getPaymentTerm();
	}

	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->execTranSuicaOutput->getTranDate();
	}

	/**
	 * MD5ハッシュ取得
	 * @return string チェック文字列
	 */
	public function getCheckString() {
		return $this->execTranSuicaOutput->getCheckString();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranSuicaOutput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranSuicaOutput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranSuicaOutput->getClientField3();
	}



	/**
	 * モバイルSuica取引登録出力パラメータ設定
	 *
	 * @param EntryTranSuicaOutput  $entryTranSuicaOutput モバイルSuica取引登録出力パラメータ
	 */
	public function setEntryTranSuicaOutput(&$entryTranSuicaOutput) {
		$this->entryTranSuicaOutput = $entryTranSuicaOutput;
	}

	/**
	 * モバイルSuica決済実行出力パラメータ設定
	 *
	 * @param ExecTranOutput $execTranOutput モバイルSuica決済実行出力パラメータ
	 */
	public function setExecTranSuicaOutput(&$execTranSuicaOutput) {
		$this->execTranSuicaOutput = $execTranSuicaOutput;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->entryTranSuicaOutput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranSuicaOutput->setAccessPass($accessPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->entryTranSuicaOutput->setOrderId($orderId);
	}

	/**
	 * Suica注文番号を格納します。
	 *
	 * @param	$String	Suica注文番号
	 */
	public function setSuicaOrderNo($String) {
		$this->execTranSuicaOutput->setSuicaOrderNo($String);
	}

	/**
	 * 支払期限日時を格納します。
	 *
	 * @param	$timestamp	支払期限日時
	 */
	public function setPaymentTerm($timestamp) {
		$this->execTranSuicaOutput->setPaymentTerm($timestamp);
	}

	/**
	 * Suica受付番号を格納します。
	 *
	 * @param	$String	Suica受付番号
	 */
	public function setReceiptNo($String) {
		$this->execTranSuicaOutput->setReceiptNo($String);
	}

	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate 決済日付
	 */
	public function setTranDate($tranDate) {
		$this->execTranSuicaOutput->setTranDate($tranDate);
	}

	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString チェック文字列
	 */
	public function setCheckString($checkString) {
		$this->execTranSuicaOutput->setCheckString($checkString);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->execTranSuicaOutput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->execTranSuicaOutput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->execTranSuicaOutput->setClientField3($clientField3);
	}



	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranSuicaOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranSuicaOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranSuicaOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranSuicaOutput->getErrList();
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