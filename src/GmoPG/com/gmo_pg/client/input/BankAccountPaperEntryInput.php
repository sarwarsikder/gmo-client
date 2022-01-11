<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>口座振替ペーパー申込口座登録依頼書データ登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class BankAccountPaperEntryInput extends BaseInput {

	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;
	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string 会員名
	 */
	private $memberName;
	/**
	 * @var string 金融機関区分
	 */
	private $financialInstituteType;
	/**
	 * @var string 金融機関コード
	 */
	private $bankCode;
	/**
	 * @var string 支店コード
	 */
	private $branchCode;
	/**
	 * @var string 預金種別
	 */
	private $accountType;
	/**
	 * @var string 口座番号
	 */
	private $accountNumber;
	/**
	 * @var string ゆうちょ口座 - 記号
	 */
	private $postalAccountNumber1;
	/**
	 * @var string ゆうちょ口座 - 番号
	 */
	private $postalAccountNumber2;
	/**
	 * @var string 口座名義区分
	 */
	private $accountOwnerType;
	/**
	 * @var string 口座名義（姓）
	 */
	private $accountNameSei;
	/**
	 * @var string 口座名義（名）
	 */
	private $accountNameMei;
	/**
	 * @var string 口座名義（姓）カナ
	 */
	private $accountNameSeiKana;
	/**
	 * @var string 口座名義（名）カナ
	 */
	private $accountNameMeiKana;
	/**
	 * @var string 口座名義（法人）
	 */
	private $accountNameBisiness;
	/**
	 * @var string 口座名義（法人）カナ
	 */
	private $accountNameBisinessKana;
	/**
	 * @var string 操作種別
	 */
	private $operationType;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}
	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->memberName;
	}
	/**
	 * 金融機関区分取得
	 * @return string 金融機関区分
	 */
	public function getFinancialInstituteType() {
		return $this->financialInstituteType;
	}
	/**
	 * 金融機関コード取得
	 * @return string 金融機関コード
	 */
	public function getBankCode() {
		return $this->bankCode;
	}
	/**
	 * 支店コード取得
	 * @return string 支店コード
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}
	/**
	 * 預金種別取得
	 * @return string 預金種別
	 */
	public function getAccountType() {
		return $this->accountType;
	}
	/**
	 * 口座番号取得
	 * @return string 口座番号
	 */
	public function getAccountNumber() {
		return $this->accountNumber;
	}
	/**
	 * ゆうちょ口座 - 記号取得
	 * @return string ゆうちょ口座 - 記号
	 */
	public function getPostalAccountNumber1() {
		return $this->postalAccountNumber1;
	}
	/**
	 * ゆうちょ口座 - 番号取得
	 * @return string ゆうちょ口座 - 番号
	 */
	public function getPostalAccountNumber2() {
		return $this->postalAccountNumber2;
	}
	/**
	 * 口座名義区分取得
	 * @return string 口座名義区分
	 */
	public function getAccountOwnerType() {
		return $this->accountOwnerType;
	}
	/**
	 * 口座名義（姓）取得
	 * @return string 口座名義（姓）
	 */
	public function getAccountNameSei() {
		return $this->accountNameSei;
	}
	/**
	 * 口座名義（名）取得
	 * @return string 口座名義（名）
	 */
	public function getAccountNameMei() {
		return $this->accountNameMei;
	}
	/**
	 * 口座名義（姓）カナ取得
	 * @return string 口座名義（姓）カナ
	 */
	public function getAccountNameSeiKana() {
		return $this->accountNameSeiKana;
	}
	/**
	 * 口座名義（名）カナ取得
	 * @return string 口座名義（名）カナ
	 */
	public function getAccountNameMeiKana() {
		return $this->accountNameMeiKana;
	}
	/**
	 * 口座名義（法人）取得
	 * @return string 口座名義（法人）
	 */
	public function getAccountNameBisiness() {
		return $this->accountNameBisiness;
	}
	/**
	 * 口座名義（法人）カナ取得
	 * @return string 口座名義（法人）カナ
	 */
	public function getAccountNameBisinessKana() {
		return $this->accountNameBisinessKana;
	}
	/**
	 * 操作種別取得
	 * @return string 操作種別
	 */
	public function getOperationType() {
		return $this->operationType;
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}
	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->shopID = $shopID;
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->memberName = $memberName;
	}
	/**
	 * 金融機関区分設定
	 *
	 * @param string $financialInstituteType
	 */
	public function setFinancialInstituteType($financialInstituteType) {
		$this->financialInstituteType = $financialInstituteType;
	}
	/**
	 * 金融機関コード設定
	 *
	 * @param string $bankCode
	 */
	public function setBankCode($bankCode) {
		$this->bankCode = $bankCode;
	}
	/**
	 * 支店コード設定
	 *
	 * @param string $branchCode
	 */
	public function setBranchCode($branchCode) {
		$this->branchCode = $branchCode;
	}
	/**
	 * 預金種別設定
	 *
	 * @param string $accountType
	 */
	public function setAccountType($accountType) {
		$this->accountType = $accountType;
	}
	/**
	 * 口座番号設定
	 *
	 * @param string $accountNumber
	 */
	public function setAccountNumber($accountNumber) {
		$this->accountNumber = $accountNumber;
	}
	/**
	 * ゆうちょ口座 - 記号設定
	 *
	 * @param string $postalAccountNumber1
	 */
	public function setPostalAccountNumber1($postalAccountNumber1) {
		$this->postalAccountNumber1 = $postalAccountNumber1;
	}
	/**
	 * ゆうちょ口座 - 番号設定
	 *
	 * @param string $postalAccountNumber2
	 */
	public function setPostalAccountNumber2($postalAccountNumber2) {
		$this->postalAccountNumber2 = $postalAccountNumber2;
	}
	/**
	 * 口座名義区分設定
	 *
	 * @param string $accountOwnerType
	 */
	public function setAccountOwnerType($accountOwnerType) {
		$this->accountOwnerType = $accountOwnerType;
	}
	/**
	 * 口座名義（姓）設定
	 *
	 * @param string $accountNameSei
	 */
	public function setAccountNameSei($accountNameSei) {
		$this->accountNameSei = $accountNameSei;
	}
	/**
	 * 口座名義（名）設定
	 *
	 * @param string $accountNameMei
	 */
	public function setAccountNameMei($accountNameMei) {
		$this->accountNameMei = $accountNameMei;
	}
	/**
	 * 口座名義（姓）カナ設定
	 *
	 * @param string $accountNameSeiKana
	 */
	public function setAccountNameSeiKana($accountNameSeiKana) {
		$this->accountNameSeiKana = $accountNameSeiKana;
	}
	/**
	 * 口座名義（名）カナ設定
	 *
	 * @param string $accountNameMeiKana
	 */
	public function setAccountNameMeiKana($accountNameMeiKana) {
		$this->accountNameMeiKana = $accountNameMeiKana;
	}
	/**
	 * 口座名義（法人）設定
	 *
	 * @param string $accountNameBisiness
	 */
	public function setAccountNameBisiness($accountNameBisiness) {
		$this->accountNameBisiness = $accountNameBisiness;
	}
	/**
	 * 口座名義（法人）カナ設定
	 *
	 * @param string $accountNameBisinessKana
	 */
	public function setAccountNameBisinessKana($accountNameBisinessKana) {
		$this->accountNameBisinessKana = $accountNameBisinessKana;
	}
	/**
	 * 操作種別設定
	 *
	 * @param string $operationType
	 */
	public function setOperationType($operationType) {
		$this->operationType = $operationType;
	}


	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setMemberName($this->getStringValue($params, 'MemberName', $this->getMemberName()));
		$this->setFinancialInstituteType($this->getStringValue($params, 'FinancialInstituteType', $this->getFinancialInstituteType()));
		$this->setBankCode($this->getStringValue($params, 'BankCode', $this->getBankCode()));
		$this->setBranchCode($this->getStringValue($params, 'BranchCode', $this->getBranchCode()));
		$this->setAccountType($this->getStringValue($params, 'AccountType', $this->getAccountType()));
		$this->setAccountNumber($this->getStringValue($params, 'AccountNumber', $this->getAccountNumber()));
		$this->setPostalAccountNumber1($this->getStringValue($params, 'PostalAccountNumber1', $this->getPostalAccountNumber1()));
		$this->setPostalAccountNumber2($this->getStringValue($params, 'PostalAccountNumber2', $this->getPostalAccountNumber2()));
		$this->setAccountOwnerType($this->getStringValue($params, 'AccountOwnerType', $this->getAccountOwnerType()));
		$this->setAccountNameSei($this->getStringValue($params, 'AccountNameSei', $this->getAccountNameSei()));
		$this->setAccountNameMei($this->getStringValue($params, 'AccountNameMei', $this->getAccountNameMei()));
		$this->setAccountNameSeiKana($this->getStringValue($params, 'AccountNameSeiKana', $this->getAccountNameSeiKana()));
		$this->setAccountNameMeiKana($this->getStringValue($params, 'AccountNameMeiKana', $this->getAccountNameMeiKana()));
		$this->setAccountNameBisiness($this->getStringValue($params, 'AccountNameBisiness', $this->getAccountNameBisiness()));
		$this->setAccountNameBisinessKana($this->getStringValue($params, 'AccountNameBisinessKana', $this->getAccountNameBisinessKana()));
		$this->setOperationType($this->getStringValue($params, 'OperationType', $this->getOperationType()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'MemberName=' . $this->encodeStr($this->getMemberName());
		$str .='&';
		$str .= 'FinancialInstituteType=' . $this->encodeStr($this->getFinancialInstituteType());
		$str .='&';
		$str .= 'BankCode=' . $this->encodeStr($this->getBankCode());
		$str .='&';
		$str .= 'BranchCode=' . $this->encodeStr($this->getBranchCode());
		$str .='&';
		$str .= 'AccountType=' . $this->encodeStr($this->getAccountType());
		$str .='&';
		$str .= 'AccountNumber=' . $this->encodeStr($this->getAccountNumber());
		$str .='&';
		$str .= 'PostalAccountNumber1=' . $this->encodeStr($this->getPostalAccountNumber1());
		$str .='&';
		$str .= 'PostalAccountNumber2=' . $this->encodeStr($this->getPostalAccountNumber2());
		$str .='&';
		$str .= 'AccountOwnerType=' . $this->encodeStr($this->getAccountOwnerType());
		$str .='&';
		$str .= 'AccountNameSei=' . $this->encodeStr($this->getAccountNameSei());
		$str .='&';
		$str .= 'AccountNameMei=' . $this->encodeStr($this->getAccountNameMei());
		$str .='&';
		$str .= 'AccountNameSeiKana=' . $this->encodeStr($this->getAccountNameSeiKana());
		$str .='&';
		$str .= 'AccountNameMeiKana=' . $this->encodeStr($this->getAccountNameMeiKana());
		$str .='&';
		$str .= 'AccountNameBisiness=' . $this->encodeStr($this->getAccountNameBisiness());
		$str .='&';
		$str .= 'AccountNameBisinessKana=' . $this->encodeStr($this->getAccountNameBisinessKana());
		$str .='&';
		$str .= 'OperationType=' . $this->encodeStr($this->getOperationType());

	    return $str;
	}


}
?>
