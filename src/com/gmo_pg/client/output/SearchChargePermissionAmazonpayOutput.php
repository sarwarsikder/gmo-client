<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>Amazon Pay利用承諾照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchChargePermissionAmazonpayOutput extends BaseOutput {

	/**
	 * @var string AmazonチャージパーミッションID
	 */
	private $amazonChargePermissionID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 現状態詳細コード
	 */
	private $reasonCode;
	/**
	 * @var string 請求最大金額
	 */
	private $amountLimit;
	/**
	 * @var string 残高
	 */
	private $amountBalance;


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
		$this->setAmazonChargePermissionID($params->get('AmazonChargePermissionID'));
		$this->setStatus($params->get('Status'));
		$this->setReasonCode($params->get('ReasonCode'));
		$this->setAmountLimit($params->get('AmountLimit'));
		$this->setAmountBalance($params->get('AmountBalance'));

	}

	/**
	 * AmazonチャージパーミッションID取得
	 * @return string AmazonチャージパーミッションID
	 */
	public function getAmazonChargePermissionID() {
		return $this->amazonChargePermissionID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 現状態詳細コード取得
	 * @return string 現状態詳細コード
	 */
	public function getReasonCode() {
		return $this->reasonCode;
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
	public function getAmountBalance() {
		return $this->amountBalance;
	}

	/**
	 * AmazonチャージパーミッションID設定
	 *
	 * @param string $amazonChargePermissionID
	 */
	public function setAmazonChargePermissionID($amazonChargePermissionID) {
		$this->amazonChargePermissionID = $amazonChargePermissionID;
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
	 * 現状態詳細コード設定
	 *
	 * @param string $reasonCode
	 */
	public function setReasonCode($reasonCode) {
		$this->reasonCode = $reasonCode;
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
	 * @param string $amountBalance
	 */
	public function setAmountBalance($amountBalance) {
		$this->amountBalance = $amountBalance;
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
		$str .= 'AmazonChargePermissionID=' . $this->encodeStr($this->getAmazonChargePermissionID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'ReasonCode=' . $this->encodeStr($this->getReasonCode());
		$str .='&';
		$str .= 'AmountLimit=' . $this->encodeStr($this->getAmountLimit());
		$str .='&';
		$str .= 'AmountBalance=' . $this->encodeStr($this->getAmountBalance());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
