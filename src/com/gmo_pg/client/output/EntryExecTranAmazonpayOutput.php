<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryTranAmazonpayOutput;
use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranAmazonpayOutput;


/*require_once 'com/gmo_pg/client/output/EntryTranAmazonpayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranAmazonpayOutput.php';*/
/**
 * <b>Amazon Pay登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAmazonpayOutput {

	/**
	 * @var EntryTranAmazonpayOutput Amazon Pay登録出力パラメータ
	 */
	private $entryTranAmazonpayOutput;/*@var $entryTranAmazonpayOutput EntryTranAmazonpayOutput */

	/**
	 * @var ExecTranAmazonpayOutput Amazon Pay実行出力パラメータ
	 */
	private $execTranAmazonpayOutput;/*@var $execTranAmazonpayOutput ExecTranAmazonpayOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranAmazonpayOutput = new EntryTranAmazonpayOutput($params);
		$this->execTranAmazonpayOutput = new ExecTranAmazonpayOutput($params);
	}

	/**
	 * Amazon Pay登録出力パラメータ取得
	 * @return EntryTranAmazonpayOutput Amazon Pay登録出力パラメータ
	 */
	public function &getEntryTranAmazonpayOutput() {
		return $this->entryTranAmazonpayOutput;
	}

	/**
	 * Amazon Pay実行出力パラメータ取得
	 * @return ExecTranAmazonpayOutput Amazon Pay実行出力パラメータ
	 */
	public function &getExecTranAmazonpayOutput() {
		return $this->execTranAmazonpayOutput;
	}

	/**
	 * Amazon Pay登録出力パラメータ設定
	 *
	 * @param EntryTranAmazonpayOutput  $entryTranAmazonpayOutput Amazon Pay登録出力パラメータ
	 */
	public function setEntryTranAmazonpayOutput(&$entryTranAmazonpayOutput) {
		$this->entryTranAmazonpayOutput = $entryTranAmazonpayOutput;
	}

	/**
	 * Amazon Pay決済実行出力パラメータ設定
	 *
	 * @param ExecTranAmazonpayOutput $execTranAmazonpayOutput Amazon Pay実行出力パラメータ
	 */
	public function setExecTranAmazonpayOutput(&$execTranAmazonpayOutput) {
		$this->execTranAmazonpayOutput = $execTranAmazonpayOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranAmazonpayOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranAmazonpayOutput->getAccessPass();

	}
	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->execTranAmazonpayOutput->getShopID();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranAmazonpayOutput->getOrderID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranAmazonpayOutput->getStatus();

	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranAmazonpayOutput->getTranDate();

	}
	/**
	 * AmazonオーダーリファレンスID取得
	 * @return string AmazonオーダーリファレンスID
	 */
	public function getAmazonOrderReferenceID() {
		return $this->execTranAmazonpayOutput->getAmazonOrderReferenceID();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranAmazonpayOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranAmazonpayOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranAmazonpayOutput->getStartLimitDate();

	}
	/**
	 * AmazonビリングアグリーメントID取得
	 * @return string AmazonビリングアグリーメントID
	 */
	public function getAmazonBillingAgreementID() {
		return $this->execTranAmazonpayOutput->getAmazonBillingAgreementID();

	}
	/**
	 * AmazonチャージパーミッションID取得
	 * @return string AmazonチャージパーミッションID
	 */
	public function getAmazonChargePermissionID() {
		return $this->execTranAmazonpayOutput->getAmazonChargePermissionID();

	}
	/**
	 * 改ざんチェック文字列取得
	 * @return string 改ざんチェック文字列
	 */
	public function getCheckString() {
		return $this->execTranAmazonpayOutput->getCheckString();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranAmazonpayOutput->setAccessID($accessID);
		$this->execTranAmazonpayOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranAmazonpayOutput->setAccessPass($accessPass);

	}
	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->execTranAmazonpayOutput->setShopID($shopID);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranAmazonpayOutput->setOrderID($orderID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranAmazonpayOutput->setStatus($status);

	}
	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranAmazonpayOutput->setTranDate($tranDate);

	}
	/**
	 * AmazonオーダーリファレンスID設定
	 *
	 * @param string $amazonOrderReferenceID
	 */
	public function setAmazonOrderReferenceID($amazonOrderReferenceID) {
		$this->execTranAmazonpayOutput->setAmazonOrderReferenceID($amazonOrderReferenceID);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranAmazonpayOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranAmazonpayOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranAmazonpayOutput->setStartLimitDate($startLimitDate);

	}
	/**
	 * AmazonビリングアグリーメントID設定
	 *
	 * @param string $amazonBillingAgreementID
	 */
	public function setAmazonBillingAgreementID($amazonBillingAgreementID) {
		$this->execTranAmazonpayOutput->setAmazonBillingAgreementID($amazonBillingAgreementID);

	}
	/**
	 * AmazonチャージパーミッションID設定
	 *
	 * @param string $amazonChargePermissionID
	 */
	public function setAmazonChargePermissionID($amazonChargePermissionID) {
		$this->execTranAmazonpayOutput->setAmazonChargePermissionID($amazonChargePermissionID);

	}
	/**
	 * 改ざんチェック文字列設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranAmazonpayOutput->setCheckString($checkString);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranAmazonpayOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranAmazonpayOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranAmazonpayOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranAmazonpayOutput->getErrList();
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
