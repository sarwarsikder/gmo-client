<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>siftスコア照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SiftScoreOutput extends BaseOutput {

	/**
	 * @var string siftオーダーID
	 */
	private $siftOrderID;
	/**
	 * @var string イベントタイプ
	 */
	private $type;
	/**
	 * @var string 処理日時 
	 */
	private $processDate;
	/**
	 * @var string ユーザID
	 */
	private $userId;
	/**
	 * @var string セッションID
	 */
	private $sessionId;
	/**
	 * @var string 取引ID
	 */
	private $transactionId;
	/**
	 * @var string 通信結果
	 */
	private $status;
	/**
	 * @var string 注文ID
	 */
	private $orderID;
	/**
	 * @var string 決済方法
	 */
	private $payType;
	/**
	 * @var bigDecimal 決済不正使用スコア
	 */
	private $paymentAbuseScore;
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
		$this->setSiftOrderID($params->get('SiftOrderID'));
		$this->setType($params->get('Type'));
		$this->setProcessDate($params->get('ProcessDate'));
		$this->setUserId($params->get('UserId'));
		$this->setSessionId($params->get('SessionId'));
		$this->setTransactionId($params->get('TransactionId'));
		$this->setStatus($params->get('Status'));
		$this->setOrderID($params->get('OrderID'));
		$this->setPayType($params->get('PayType'));
		$this->setPaymentAbuseScore($params->get('PaymentAbuseScore'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));

	}

	/**
	 * siftオーダーID取得
	 * @return string siftオーダーID
	 */
	public function getSiftOrderID() {
		return $this->siftOrderID;
	}
	/**
	 * イベントタイプ取得
	 * @return string イベントタイプ
	 */
	public function getType() {
		return $this->type;
	}
	/**
	 * 処理日時 取得
	 * @return string 処理日時 
	 */
	public function getProcessDate() {
		return $this->processDate;
	}
	/**
	 * ユーザID取得
	 * @return string ユーザID
	 */
	public function getUserId() {
		return $this->userId;
	}
	/**
	 * セッションID取得
	 * @return string セッションID
	 */
	public function getSessionId() {
		return $this->sessionId;
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getTransactionId() {
		return $this->transactionId;
	}
	/**
	 * 通信結果取得
	 * @return string 通信結果
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 注文ID取得
	 * @return string 注文ID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 決済方法取得
	 * @return string 決済方法
	 */
	public function getPayType() {
		return $this->payType;
	}
	/**
	 * 決済不正使用スコア取得
	 * @return bigDecimal 決済不正使用スコア
	 */
	public function getPaymentAbuseScore() {
		return $this->paymentAbuseScore;
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
	 * siftオーダーID設定
	 *
	 * @param string $siftOrderID
	 */
	public function setSiftOrderID($siftOrderID) {
		$this->siftOrderID = $siftOrderID;
	}
	/**
	 * イベントタイプ設定
	 *
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}
	/**
	 * 処理日時 設定
	 *
	 * @param string $processDate
	 */
	public function setProcessDate($processDate) {
		$this->processDate = $processDate;
	}
	/**
	 * ユーザID設定
	 *
	 * @param string $userId
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}
	/**
	 * セッションID設定
	 *
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $transactionId
	 */
	public function setTransactionId($transactionId) {
		$this->transactionId = $transactionId;
	}
	/**
	 * 通信結果設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 注文ID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
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
	 * 決済不正使用スコア設定
	 *
	 * @param bigDecimal $paymentAbuseScore
	 */
	public function setPaymentAbuseScore($paymentAbuseScore) {
		$this->paymentAbuseScore = $paymentAbuseScore;
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
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'SiftOrderID=' . $this->encodeStr($this->getSiftOrderID());
		$str .='&';
		$str .= 'Type=' . $this->encodeStr($this->getType());
		$str .='&';
		$str .= 'ProcessDate=' . $this->encodeStr($this->getProcessDate());
		$str .='&';
		$str .= 'UserId=' . $this->encodeStr($this->getUserId());
		$str .='&';
		$str .= 'SessionId=' . $this->encodeStr($this->getSessionId());
		$str .='&';
		$str .= 'TransactionId=' . $this->encodeStr($this->getTransactionId());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'PayType=' . $this->encodeStr($this->getPayType());
		$str .='&';
		$str .= 'PaymentAbuseScore=' . $this->encodeStr($this->getPaymentAbuseScore());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
