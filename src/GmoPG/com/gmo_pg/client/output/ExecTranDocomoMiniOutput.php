<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>d払い(ミニアプリ)決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranDocomoMiniOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string ステータス
	 */
	private $status;
	/**
	 * @var string ドコモ決済トークン
	 */
	private $docomoToken;
	/**
	 * @var string ドコモ決済トークン期限
	 */
	private $docomoTokenLimitDate;


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
		$this->setDocomoToken($params->get('DocomoToken'));
		$this->setDocomoTokenLimitDate($params->get('DocomoTokenLimitDate'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus() {
		return $this->status;
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
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
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
		$str .= 'DocomoToken=' . $this->encodeStr($this->getDocomoToken());
		$str .='&';
		$str .= 'DocomoTokenLimitDate=' . $this->encodeStr($this->getDocomoTokenLimitDate());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
