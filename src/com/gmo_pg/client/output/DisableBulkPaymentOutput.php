<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>一括決済サービス売上データ無効化　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class DisableBulkPaymentOutput extends BaseOutput {

	/**
	 * @var string レコード通番
	 */
	private $recordNumber;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string レコードステータス
	 */
	private $recordStatus;


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
		$this->setRecordNumber($params->get('RecordNumber'));
		$this->setOrderID($params->get('OrderID'));
		$this->setRecordStatus($params->get('RecordStatus'));

	}

	/**
	 * レコード通番取得
	 * @return string レコード通番
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
	 * レコードステータス取得
	 * @return string レコードステータス
	 */
	public function getRecordStatus() {
		return $this->recordStatus;
	}

	/**
	 * レコード通番設定
	 *
	 * @param string $recordNumber
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
	 * レコードステータス設定
	 *
	 * @param string $recordStatus
	 */
	public function setRecordStatus($recordStatus) {
		$this->recordStatus = $recordStatus;
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
		$str .= 'RecordNumber=' . $this->encodeStr($this->getRecordNumber());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'RecordStatus=' . $this->encodeStr($this->getRecordStatus());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
