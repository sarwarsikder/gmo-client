<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>Amazon PayBillingAgreement照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBillingAgreementAmazonpayOutput extends BaseOutput {

	/**
	 * @var string AmazonビリングアグリーメントID
	 */
	private $amazonBillingAgreementID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 請求最大金額
	 */
	private $amountLimit;
	/**
	 * @var string 残高
	 */
	private $currentRemainingBalance;


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
		$this->setAmazonBillingAgreementID($params->get('AmazonBillingAgreementID'));
		$this->setStatus($params->get('Status'));
		$this->setAmountLimit($params->get('AmountLimit'));
		$this->setCurrentRemainingBalance($params->get('CurrentRemainingBalance'));

	}

	/**
	 * AmazonビリングアグリーメントID取得
	 * @return string AmazonビリングアグリーメントID
	 */
	public function getAmazonBillingAgreementID() {
		return $this->amazonBillingAgreementID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 請求最大金額取得
	 * @return string 請求最大金額
	 */
	public function getAmountLimit() {
		return $this->amountLimit;
	}
	/**
	 * 残高取得
	 * @return string 残高
	 */
	public function getCurrentRemainingBalance() {
		return $this->currentRemainingBalance;
	}

	/**
	 * AmazonビリングアグリーメントID設定
	 *
	 * @param string $amazonBillingAgreementID
	 */
	public function setAmazonBillingAgreementID($amazonBillingAgreementID) {
		$this->amazonBillingAgreementID = $amazonBillingAgreementID;
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
	 * 請求最大金額設定
	 *
	 * @param string $amountLimit
	 */
	public function setAmountLimit($amountLimit) {
		$this->amountLimit = $amountLimit;
	}
	/**
	 * 残高設定
	 *
	 * @param string $currentRemainingBalance
	 */
	public function setCurrentRemainingBalance($currentRemainingBalance) {
		$this->currentRemainingBalance = $currentRemainingBalance;
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
		$str .= 'AmazonBillingAgreementID=' . $this->encodeStr($this->getAmazonBillingAgreementID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'AmountLimit=' . $this->encodeStr($this->getAmountLimit());
		$str .='&';
		$str .= 'CurrentRemainingBalance=' . $this->encodeStr($this->getCurrentRemainingBalance());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
