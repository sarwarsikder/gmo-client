<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>PS後払い決済変更　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class PostpayChangeOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 処理日時
	 */
	private $tranDate;
	/**
	 * @var string 後払い取引ID
	 */
	private $postpayTransactionId;
	/**
	 * @var string 改ざんチェック文字列
	 */
	private $checkString;


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
		$this->setStatus($params->get('Status'));
		$this->setTranDate($params->get('TranDate'));
		$this->setPostpayTransactionId($params->get('PostpayTransactionId'));
		$this->setCheckString($params->get('CheckString'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
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
	public function getTranDate() {
		return $this->tranDate;
	}
	/**
	 * 後払い取引ID取得
	 * @return string 後払い取引ID
	 */
	public function getPostpayTransactionId() {
		return $this->postpayTransactionId;
	}
	/**
	 * 改ざんチェック文字列取得
	 * @return string 改ざんチェック文字列
	 */
	public function getCheckString() {
		return $this->checkString;
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
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}
	/**
	 * 後払い取引ID設定
	 *
	 * @param string $postpayTransactionId
	 */
	public function setPostpayTransactionId($postpayTransactionId) {
		$this->postpayTransactionId = $postpayTransactionId;
	}
	/**
	 * 改ざんチェック文字列設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
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
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
		$str .='&';
		$str .= 'PostpayTransactionId=' . $this->encodeStr($this->getPostpayTransactionId());
		$str .='&';
		$str .= 'CheckString=' . $this->encodeStr($this->getCheckString());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
