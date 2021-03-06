<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/

/**
 * <b>auかんたん決済継続課金決済取消　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2013/06/05
 */
class AuContinuanceChargeCancelOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;

	/**
	 * @var string 課金月
	 */
	private $continuanceMonth;

	/**
	 * @var string 現状態
	 */
	private $status;

	/**
	 * @var string 利用金額－キャンセル金額
	 */
	private $amount;

	/**
	 * @var string 税送料－キャンセル税送料
	 */
	private $tax;

	/**
	 * @var string キャンセル金額
	 */
	private $cancelAmount;

	/**
	 * @var string キャンセル税送料
	 */
	private $cancelTax;

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
        $this->setOrderID($params->get('OrderID'));
        $this->setContinuanceMonth($params->get('ContinuanceMonth'));
        $this->setStatus($params->get('Status'));
        $this->setAmount($params->get('Amount'));
        $this->setTax($params->get('Tax'));
        $this->setCancelAmount($params->get('CancelAmount'));
        $this->setCancelTax($params->get('CancelTax'));
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}

	/**
	 * 課金月取得
	 * @return string 課金月
	 */
	public function getContinuanceMonth() {
		return $this->continuanceMonth;
	}

	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * 利用金額－キャンセル金額取得
	 * @return integer 利用金額－キャンセル金額
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * 税送料－キャンセル税送料取得
	 * @return integer 税送料－キャンセル税送料
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
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}

	/**
	 * 課金月設定
	 *
	 * @param string $continuanceMonth
	 */
	public function setContinuanceMonth($continuanceMonth) {
		$this->continuanceMonth = $continuanceMonth;
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
	 * 利用金額－キャンセル金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * 税送料－キャンセル税送料設定
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
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
	    $str .= '&';
	    $str .= 'ContinuanceMonth=' . $this->encodeStr($this->getContinuanceMonth());
	    $str .= '&';
	    $str .= 'Status=' . $this->encodeStr($this->getStatus());
	    $str .= '&';
	    $str .= 'Amount=' . $this->encodeStr($this->getAmount());
	    $str .= '&';
	    $str .= 'Tax=' . $this->encodeStr($this->getTax());
	    $str .= '&';
	    $str .= 'CancelAmount=' . $this->encodeStr($this->getCancelAmount());
	    $str .= '&';
	    $str .= 'CancelTax=' . $this->encodeStr($this->getCancelTax());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>