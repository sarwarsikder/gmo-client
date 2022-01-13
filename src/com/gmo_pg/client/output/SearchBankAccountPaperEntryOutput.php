<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>口座振替ペーパー申込口座登録依頼書データ照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBankAccountPaperEntryOutput extends BaseOutput {

	/**
	 * @var string 申込ID
	 */
	private $tranID;
	/**
	 * @var string ステータス
	 */
	private $status;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string 登録日時
	 */
	private $registDate;
	/**
	 * @var string 登録者
	 */
	private $registUser;
	/**
	 * @var string 確定日時
	 */
	private $confirmDate;
	/**
	 * @var string 確定者
	 */
	private $confirmUser;
	/**
	 * @var string 不備登録日時
	 */
	private $ngDate;
	/**
	 * @var string 不備理由コード
	 */
	private $ngReason;
	/**
	 * @var string 不備理由備考
	 */
	private $ngNote;
	/**
	 * @var string 金融機関区分
	 */
	private $financialInstituteType;
	/**
	 * @var string 金融機関コード
	 */
	private $bankCode;
	/**
	 * @var string 金融機関名
	 */
	private $bankName;
	/**
	 * @var string 支店コード
	 */
	private $branchCode;
	/**
	 * @var string 支店名
	 */
	private $branchName;
	/**
	 * @var string 預金種別
	 */
	private $accountType;
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
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params  出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
            return;
        }

        // マップの展開
		$this->setTranID($params->get('TranID'));
		$this->setStatus($params->get('Status'));
		$this->setSiteID($params->get('SiteID'));
		$this->setMemberID($params->get('MemberID'));
		$this->setRegistDate($params->get('RegistDate'));
		$this->setRegistUser($params->get('RegistUser'));
		$this->setConfirmDate($params->get('ConfirmDate'));
		$this->setConfirmUser($params->get('ConfirmUser'));
		$this->setNgDate($params->get('NgDate'));
		$this->setNgReason($params->get('NgReason'));
		$this->setNgNote($params->get('NgNote'));
		$this->setFinancialInstituteType($params->get('FinancialInstituteType'));
		$this->setBankCode($params->get('BankCode'));
		$this->setBankName($params->get('BankName'));
		$this->setBranchCode($params->get('BranchCode'));
		$this->setBranchName($params->get('BranchName'));
		$this->setAccountType($params->get('AccountType'));
		$this->setAccountOwnerType($params->get('AccountOwnerType'));
		$this->setAccountNameSei($params->get('AccountNameSei'));
		$this->setAccountNameMei($params->get('AccountNameMei'));
		$this->setAccountNameSeiKana($params->get('AccountNameSeiKana'));
		$this->setAccountNameMeiKana($params->get('AccountNameMeiKana'));
		$this->setAccountNameBisiness($params->get('AccountNameBisiness'));
		$this->setAccountNameBisinessKana($params->get('AccountNameBisinessKana'));
		$this->setAccountNumber($params->get('AccountNumber'));
		$this->setPostalAccountNumber1($params->get('PostalAccountNumber1'));
		$this->setPostalAccountNumber2($params->get('PostalAccountNumber2'));

	}

	/**
	 * 申込ID取得
	 * @return string 申込ID
	 */
	public function getTranID() {
		return $this->tranID;
	}
	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * 登録日時取得
	 * @return string 登録日時
	 */
	public function getRegistDate() {
		return $this->registDate;
	}
	/**
	 * 登録者取得
	 * @return string 登録者
	 */
	public function getRegistUser() {
		return $this->registUser;
	}
	/**
	 * 確定日時取得
	 * @return string 確定日時
	 */
	public function getConfirmDate() {
		return $this->confirmDate;
	}
	/**
	 * 確定者取得
	 * @return string 確定者
	 */
	public function getConfirmUser() {
		return $this->confirmUser;
	}
	/**
	 * 不備登録日時取得
	 * @return string 不備登録日時
	 */
	public function getNgDate() {
		return $this->ngDate;
	}
	/**
	 * 不備理由コード取得
	 * @return string 不備理由コード
	 */
	public function getNgReason() {
		return $this->ngReason;
	}
	/**
	 * 不備理由備考取得
	 * @return string 不備理由備考
	 */
	public function getNgNote() {
		return $this->ngNote;
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
	 * 金融機関名取得
	 * @return string 金融機関名
	 */
	public function getBankName() {
		return $this->bankName;
	}
	/**
	 * 支店コード取得
	 * @return string 支店コード
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}
	/**
	 * 支店名取得
	 * @return string 支店名
	 */
	public function getBranchName() {
		return $this->branchName;
	}
	/**
	 * 預金種別取得
	 * @return string 預金種別
	 */
	public function getAccountType() {
		return $this->accountType;
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
	 * 申込ID設定
	 *
	 * @param string $tranID
	 */
	public function setTranID($tranID) {
		$this->tranID = $tranID;
	}
	/**
	 * ステータス設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
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
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * 登録日時設定
	 *
	 * @param string $registDate
	 */
	public function setRegistDate($registDate) {
		$this->registDate = $registDate;
	}
	/**
	 * 登録者設定
	 *
	 * @param string $registUser
	 */
	public function setRegistUser($registUser) {
		$this->registUser = $registUser;
	}
	/**
	 * 確定日時設定
	 *
	 * @param string $confirmDate
	 */
	public function setConfirmDate($confirmDate) {
		$this->confirmDate = $confirmDate;
	}
	/**
	 * 確定者設定
	 *
	 * @param string $confirmUser
	 */
	public function setConfirmUser($confirmUser) {
		$this->confirmUser = $confirmUser;
	}
	/**
	 * 不備登録日時設定
	 *
	 * @param string $ngDate
	 */
	public function setNgDate($ngDate) {
		$this->ngDate = $ngDate;
	}
	/**
	 * 不備理由コード設定
	 *
	 * @param string $ngReason
	 */
	public function setNgReason($ngReason) {
		$this->ngReason = $ngReason;
	}
	/**
	 * 不備理由備考設定
	 *
	 * @param string $ngNote
	 */
	public function setNgNote($ngNote) {
		$this->ngNote = $ngNote;
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
	 * 金融機関名設定
	 *
	 * @param string $bankName
	 */
	public function setBankName($bankName) {
		$this->bankName = $bankName;
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
	 * 支店名設定
	 *
	 * @param string $branchName
	 */
	public function setBranchName($branchName) {
		$this->branchName = $branchName;
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
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'TranID=' . $this->encodeStr($this->getTranID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'RegistDate=' . $this->encodeStr($this->getRegistDate());
		$str .='&';
		$str .= 'RegistUser=' . $this->encodeStr($this->getRegistUser());
		$str .='&';
		$str .= 'ConfirmDate=' . $this->encodeStr($this->getConfirmDate());
		$str .='&';
		$str .= 'ConfirmUser=' . $this->encodeStr($this->getConfirmUser());
		$str .='&';
		$str .= 'NgDate=' . $this->encodeStr($this->getNgDate());
		$str .='&';
		$str .= 'NgReason=' . $this->encodeStr($this->getNgReason());
		$str .='&';
		$str .= 'NgNote=' . $this->encodeStr($this->getNgNote());
		$str .='&';
		$str .= 'FinancialInstituteType=' . $this->encodeStr($this->getFinancialInstituteType());
		$str .='&';
		$str .= 'BankCode=' . $this->encodeStr($this->getBankCode());
		$str .='&';
		$str .= 'BankName=' . $this->encodeStr($this->getBankName());
		$str .='&';
		$str .= 'BranchCode=' . $this->encodeStr($this->getBranchCode());
		$str .='&';
		$str .= 'BranchName=' . $this->encodeStr($this->getBranchName());
		$str .='&';
		$str .= 'AccountType=' . $this->encodeStr($this->getAccountType());
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
		$str .= 'AccountNumber=' . $this->encodeStr($this->getAccountNumber());
		$str .='&';
		$str .= 'PostalAccountNumber1=' . $this->encodeStr($this->getPostalAccountNumber1());
		$str .='&';
		$str .= 'PostalAccountNumber2=' . $this->encodeStr($this->getPostalAccountNumber2());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
