<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>一括決済サービス売上データ参照　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBulkPaymentOutput extends BaseOutput {

	/**
	 * @var string 処理指定日
	 */
	private $targetDate;
	/**
	 * @var integer レコード通番
	 */
	private $recordNumber;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 商品コード
	 */
	private $itemCode;
	/**
	 * @var integer 利用金額
	 */
	private $amount;
	/**
	 * @var integer 税送料
	 */
	private $tax;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var integer カード登録連番
	 */
	private $cardSeq;
	/**
	 * @var string カード番号
	 */
	private $cardNo;
	/**
	 * @var string 有効期限
	 */
	private $expire;
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
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;
	/**
	 * @var string トランザクションID
	 */
	private $transactionID;
	/**
	 * @var string 承認番号
	 */
	private $approvalNo;
	/**
	 * @var string 仕向先コード
	 */
	private $forward;
	/**
	 * @var string レコード登録種別
	 */
	private $registerType;
	/**
	 * @var string レコードステータス
	 */
	private $recordStatus;
	/**
	 * @var string オーソリコード
	 */
	private $authCode;


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
		$this->setTargetDate($params->get('TargetDate'));
		$this->setRecordNumber($params->get('RecordNumber'));
		$this->setOrderID($params->get('OrderID'));
		$this->setItemCode($params->get('ItemCode'));
		$this->setAmount($params->get('Amount'));
		$this->setTax($params->get('Tax'));
		$this->setMemberID($params->get('MemberID'));
		$this->setCardSeq($params->get('CardSeq'));
		$this->setCardNo($params->get('CardNo'));
		$this->setExpire($params->get('Expire'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
		$this->setAccessID($params->get('AccessID'));
		$this->setAccessPass($params->get('AccessPass'));
		$this->setTransactionID($params->get('TransactionID'));
		$this->setApprovalNo($params->get('ApprovalNo'));
		$this->setForward($params->get('Forward'));
		$this->setRegisterType($params->get('RegisterType'));
		$this->setRecordStatus($params->get('RecordStatus'));
		$this->setAuthCode($params->get('AuthCode'));

	}

	/**
	 * 処理指定日取得
	 * @return string 処理指定日
	 */
	public function getTargetDate() {
		return $this->targetDate;
	}
	/**
	 * レコード通番取得
	 * @return integer レコード通番
	 */
	public function getRecordNumber() {
		return $this->recordNumber;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 商品コード取得
	 * @return string 商品コード
	 */
	public function getItemCode() {
		return $this->itemCode;
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
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * カード登録連番取得
	 * @return integer カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}
	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}
	/**
	 * 有効期限取得
	 * @return string 有効期限
	 */
	public function getExpire() {
		return $this->expire;
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
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTransactionID() {
		return $this->transactionID;
	}
	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprovalNo() {
		return $this->approvalNo;
	}
	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->forward;
	}
	/**
	 * レコード登録種別取得
	 * @return string レコード登録種別
	 */
	public function getRegisterType() {
		return $this->registerType;
	}
	/**
	 * レコードステータス取得
	 * @return string レコードステータス
	 */
	public function getRecordStatus() {
		return $this->recordStatus;
	}
	/**
	 * オーソリコード取得
	 * @return string オーソリコード
	 */
	public function getAuthCode() {
		return $this->authCode;
	}
	/**
	 * エラーコード
	 * @return string エラーコード
	 */
	public function getErrCode() {
	    $errCodeBuffer = '';

	    // 各エラーコードを連結した文字列を生成
	    foreach ($this->getErrList() as $errHolder) {
	        $errCodeBuffer .= $errHolder->getErrCode() . '|';
	    }

	    return $errCodeBuffer;
	}
	/**
	 * エラー詳細コード
	 * @return string エラー詳細コード
	 */
	public function getErrInfo() {
	    $errInfoBuffer = '';

	    // 各エラー詳細を連結した文字列を生成
	    foreach ($this->getErrList() as $errHolder) {
	        $errInfoBuffer .= $errHolder->getErrInfo() . '|';
	    }

	    return $errInfoBuffer;
	}

	/**
	 * 処理指定日設定
	 *
	 * @param string $targetDate
	 */
	public function setTargetDate($targetDate) {
		$this->targetDate = $targetDate;
	}
	/**
	 * レコード通番設定
	 *
	 * @param integer $recordNumber
	 */
	public function setRecordNumber($recordNumber) {
		$this->recordNumber = $recordNumber;
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
	 * 商品コード設定
	 *
	 * @param string $itemCode
	 */
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
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
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * カード登録連番設定
	 *
	 * @param integer $cardSeq
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}
	/**
	 * カード番号設定
	 *
	 * @param string $cardNo
	 */
	public function setCardNo($cardNo) {
		$this->cardNo = $cardNo;
	}
	/**
	 * 有効期限設定
	 *
	 * @param string $expire
	 */
	public function setExpire($expire) {
		$this->expire = $expire;
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
	 * トランザクションID設定
	 *
	 * @param string $transactionID
	 */
	public function setTransactionID($transactionID) {
		$this->transactionID = $transactionID;
	}
	/**
	 * 承認番号設定
	 *
	 * @param string $approvalNo
	 */
	public function setApprovalNo($approvalNo) {
		$this->approvalNo = $approvalNo;
	}
	/**
	 * 仕向先コード設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->forward = $forward;
	}
	/**
	 * レコード登録種別設定
	 *
	 * @param string $registerType
	 */
	public function setRegisterType($registerType) {
		$this->registerType = $registerType;
	}
	/**
	 * レコードステータス設定
	 *
	 * @param string $recordStatus
	 */
	public function setRecordStatus($recordStatus) {
		$this->recordStatus = $recordStatus;
	}
	/**
	 * オーソリコード設定
	 *
	 * @param string $authCode
	 */
	public function setAuthCode($authCode) {
		$this->authCode = $authCode;
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
		$str .= 'TargetDate=' . $this->encodeStr($this->getTargetDate());
		$str .='&';
		$str .= 'RecordNumber=' . $this->encodeStr($this->getRecordNumber());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'ItemCode=' . $this->encodeStr($this->getItemCode());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
		$str .='&';
		$str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
		$str .='&';
		$str .= 'Expire=' . $this->encodeStr($this->getExpire());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'TransactionID=' . $this->encodeStr($this->getTransactionID());
		$str .='&';
		$str .= 'ApprovalNo=' . $this->encodeStr($this->getApprovalNo());
		$str .='&';
		$str .= 'Forward=' . $this->encodeStr($this->getForward());
		$str .='&';
		$str .= 'RegisterType=' . $this->encodeStr($this->getRegisterType());
		$str .='&';
		$str .= 'RecordStatus=' . $this->encodeStr($this->getRecordStatus());
		$str .='&';
		$str .= 'AuthCode=' . $this->encodeStr($this->getAuthCode());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

	/**
	 * エラー発生判定
	 * @return boolean エラー発生フラグ(true=エラーあり)
	 */
	public function isErrorOccurred() {
	    return true == empty($this->getTargetDate());
	}

}
?>
