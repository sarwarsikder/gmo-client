<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>d払い(ミニアプリ)取引状態参照　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchTradeDocomoMiniOutput extends BaseOutput {

	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 処理日時
	 */
	private $processDate;
	/**
	 * @var string 処理区分
	 */
	private $jobCd;
	/**
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;
	/**
	 * @var integer 利用金額
	 */
	private $amount;
	/**
	 * @var integer 税送料
	 */
	private $tax;
	/**
	 * @var integer キャンセル金額
	 */
	private $cancelAmount;
	/**
	 * @var integer キャンセル税送料
	 */
	private $cancelTax;
	/**
	 * @var integer 増額金額
	 */
	private $increaseAmount;
	/**
	 * @var integer 増額税送料
	 */
	private $increaseTax;
	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;
	/**
	 * @var string 加盟店自由項目2
	 */
	private $clientField2;
	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;
	/**
	 * @var string 決済方法
	 */
	private $payType;
	/**
	 * @var string ドコモ加盟店注文番号
	 */
	private $docomoStoreOrderNumber;
	/**
	 * @var string ドコモ決済番号
	 */
	private $docomoSettlementNumber;
	/**
	 * @var string ドコモ表示項目1
	 */
	private $docomoDisp1;
	/**
	 * @var string ドコモ表示項目2
	 */
	private $docomoDisp2;
	/**
	 * @var string ドコモ決済トークン
	 */
	private $docomoToken;
	/**
	 * @var string ドコモ決済トークン期限
	 */
	private $docomoTokenLimitDate;
	/**
	 * @var string ドコモ加盟店処理実施最終期限
	 */
	private $docomoProcessLimitDate;


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
		$this->setStatus($params->get('Status'));
		$this->setProcessDate($params->get('ProcessDate'));
		$this->setJobCd($params->get('JobCd'));
		$this->setAccessID($params->get('AccessID'));
		$this->setAccessPass($params->get('AccessPass'));
		$this->setAmount($params->get('Amount'));
		$this->setTax($params->get('Tax'));
		$this->setCancelAmount($params->get('CancelAmount'));
		$this->setCancelTax($params->get('CancelTax'));
		$this->setIncreaseAmount($params->get('IncreaseAmount'));
		$this->setIncreaseTax($params->get('IncreaseTax'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
		$this->setPayType($params->get('PayType'));
		$this->setDocomoStoreOrderNumber($params->get('DocomoStoreOrderNumber'));
		$this->setDocomoSettlementNumber($params->get('DocomoSettlementNumber'));
		$this->setDocomoDisp1($params->get('DocomoDisp1'));
		$this->setDocomoDisp2($params->get('DocomoDisp2'));
		$this->setDocomoToken($params->get('DocomoToken'));
		$this->setDocomoTokenLimitDate($params->get('DocomoTokenLimitDate'));
		$this->setDocomoProcessLimitDate($params->get('DocomoProcessLimitDate'));

	}

	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getProcessDate() {
		return $this->processDate;
	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->jobCd;
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->tax;
	}
	/**
	 * キャンセル金額取得
	 * @return integer キャンセル金額
	 */
	public function getCancelAmount() {
		return $this->cancelAmount;
	}
	/**
	 * キャンセル税送料取得
	 * @return integer キャンセル税送料
	 */
	public function getCancelTax() {
		return $this->cancelTax;
	}
	/**
	 * 増額金額取得
	 * @return integer 増額金額
	 */
	public function getIncreaseAmount() {
		return $this->increaseAmount;
	}
	/**
	 * 増額税送料取得
	 * @return integer 増額税送料
	 */
	public function getIncreaseTax() {
		return $this->increaseTax;
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}
	/**
	 * 決済方法取得
	 * @return string 決済方法
	 */
	public function getPayType() {
		return $this->payType;
	}
	/**
	 * ドコモ加盟店注文番号取得
	 * @return string ドコモ加盟店注文番号
	 */
	public function getDocomoStoreOrderNumber() {
		return $this->docomoStoreOrderNumber;
	}
	/**
	 * ドコモ決済番号取得
	 * @return string ドコモ決済番号
	 */
	public function getDocomoSettlementNumber() {
		return $this->docomoSettlementNumber;
	}
	/**
	 * ドコモ表示項目1取得
	 * @return string ドコモ表示項目1
	 */
	public function getDocomoDisp1() {
		return $this->docomoDisp1;
	}
	/**
	 * ドコモ表示項目2取得
	 * @return string ドコモ表示項目2
	 */
	public function getDocomoDisp2() {
		return $this->docomoDisp2;
	}
	/**
	 * ドコモ決済トークン取得
	 * @return string ドコモ決済トークン
	 */
	public function getDocomoToken() {
		return $this->docomoToken;
	}
	/**
	 * ドコモ決済トークン期限取得
	 * @return string ドコモ決済トークン期限
	 */
	public function getDocomoTokenLimitDate() {
		return $this->docomoTokenLimitDate;
	}
	/**
	 * ドコモ加盟店処理実施最終期限取得
	 * @return string ドコモ加盟店処理実施最終期限
	 */
	public function getDocomoProcessLimitDate() {
		return $this->docomoProcessLimitDate;
	}

	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 処理日時設定
	 *
	 * @param string $processDate
	 */
	public function setProcessDate($processDate) {
		$this->processDate = $processDate;
	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->jobCd = $jobCd;
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}
	/**
	 * キャンセル金額設定
	 *
	 * @param integer $cancelAmount
	 */
	public function setCancelAmount($cancelAmount) {
		$this->cancelAmount = $cancelAmount;
	}
	/**
	 * キャンセル税送料設定
	 *
	 * @param integer $cancelTax
	 */
	public function setCancelTax($cancelTax) {
		$this->cancelTax = $cancelTax;
	}
	/**
	 * 増額金額設定
	 *
	 * @param integer $increaseAmount
	 */
	public function setIncreaseAmount($increaseAmount) {
		$this->increaseAmount = $increaseAmount;
	}
	/**
	 * 増額税送料設定
	 *
	 * @param integer $increaseTax
	 */
	public function setIncreaseTax($increaseTax) {
		$this->increaseTax = $increaseTax;
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}
	/**
	 * 決済方法設定
	 *
	 * @param string $payType
	 */
	public function setPayType($payType) {
		$this->payType = $payType;
	}
	/**
	 * ドコモ加盟店注文番号設定
	 *
	 * @param string $docomoStoreOrderNumber
	 */
	public function setDocomoStoreOrderNumber($docomoStoreOrderNumber) {
		$this->docomoStoreOrderNumber = $docomoStoreOrderNumber;
	}
	/**
	 * ドコモ決済番号設定
	 *
	 * @param string $docomoSettlementNumber
	 */
	public function setDocomoSettlementNumber($docomoSettlementNumber) {
		$this->docomoSettlementNumber = $docomoSettlementNumber;
	}
	/**
	 * ドコモ表示項目1設定
	 *
	 * @param string $docomoDisp1
	 */
	public function setDocomoDisp1($docomoDisp1) {
		$this->docomoDisp1 = $docomoDisp1;
	}
	/**
	 * ドコモ表示項目2設定
	 *
	 * @param string $docomoDisp2
	 */
	public function setDocomoDisp2($docomoDisp2) {
		$this->docomoDisp2 = $docomoDisp2;
	}
	/**
	 * ドコモ決済トークン設定
	 *
	 * @param string $docomoToken
	 */
	public function setDocomoToken($docomoToken) {
		$this->docomoToken = $docomoToken;
	}
	/**
	 * ドコモ決済トークン期限設定
	 *
	 * @param string $docomoTokenLimitDate
	 */
	public function setDocomoTokenLimitDate($docomoTokenLimitDate) {
		$this->docomoTokenLimitDate = $docomoTokenLimitDate;
	}
	/**
	 * ドコモ加盟店処理実施最終期限設定
	 *
	 * @param string $docomoProcessLimitDate
	 */
	public function setDocomoProcessLimitDate($docomoProcessLimitDate) {
		$this->docomoProcessLimitDate = $docomoProcessLimitDate;
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
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'ProcessDate=' . $this->encodeStr($this->getProcessDate());
		$str .='&';
		$str .= 'JobCd=' . $this->encodeStr($this->getJobCd());
		$str .='&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
		$str .='&';
		$str .= 'CancelAmount=' . $this->encodeStr($this->getCancelAmount());
		$str .='&';
		$str .= 'CancelTax=' . $this->encodeStr($this->getCancelTax());
		$str .='&';
		$str .= 'IncreaseAmount=' . $this->encodeStr($this->getIncreaseAmount());
		$str .='&';
		$str .= 'IncreaseTax=' . $this->encodeStr($this->getIncreaseTax());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'PayType=' . $this->encodeStr($this->getPayType());
		$str .='&';
		$str .= 'DocomoStoreOrderNumber=' . $this->encodeStr($this->getDocomoStoreOrderNumber());
		$str .='&';
		$str .= 'DocomoSettlementNumber=' . $this->encodeStr($this->getDocomoSettlementNumber());
		$str .='&';
		$str .= 'DocomoDisp1=' . $this->encodeStr($this->getDocomoDisp1());
		$str .='&';
		$str .= 'DocomoDisp2=' . $this->encodeStr($this->getDocomoDisp2());
		$str .='&';
		$str .= 'DocomoToken=' . $this->encodeStr($this->getDocomoToken());
		$str .='&';
		$str .= 'DocomoTokenLimitDate=' . $this->encodeStr($this->getDocomoTokenLimitDate());
		$str .='&';
		$str .= 'DocomoProcessLimitDate=' . $this->encodeStr($this->getDocomoProcessLimitDate());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
