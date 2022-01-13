<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/

/**
 * <b>Paypal決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 12-24-2009 00:00:00
 */
class ExecTranPaypalOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderId;

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
	 * @var string ショップID
	 */
	private $shopId;

	/**
	 * @var string ステータス
	 */
	private $status;

	/**
	 * @var string 処理日時
	 */
	private $tranDate;
	
	/**
	 * @var string トランザクションID
	 */
	private $tranId;

	/**
	 * @var string 改ざんチェック文字列
	 */
	private $checkString;

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params 出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
			return;
		}

		// マップの展開
		$this->setOrderId($params->get('OrderID'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
		$this->setShopId($params->get('ShopID'));
		$this->setStatus($params->get('Status'));
		$this->setTranDate($params->get('TranDate'));
		$this->setTranId($params->get('TranID'));
		$this->setCheckString($params->get('CheckString'));
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
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
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
	    return $this->shopId;
	}

	/**
	 * ステータス取得
	 * @return string ステータス
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
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranId() {
	    return $this->tranId;
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
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}
	
	/**
	 * ショップID設定
	 *
	 * @param string $shopId ショップID
	 */
	public function setShopId($shopId) {
	    $this->shopId = $shopId;
	}
	
	/**
	 * ステータス設定
	 *
	 * @param string $status ステータス
	 */
	public function setStatus($status) {
	    $this->status = $status;
	}
	
	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate 処理日時
	 */
	public function setTranDate($tranDate) {
	    $this->tranDate = $tranDate;
	}
	
	/**
	 * トランザクションID設定
	 *
	 * @param string $tranId トランザクションID
	 */
	public function setTranId($tranId) {
	    $this->tranId = $tranId;
	}
	
	/**
	 * 改ざんチェック文字列設定
	 *
	 * @param string $checkString 改ざんチェック文字列
	 */
	public function setCheckString($checkString) {
	    $this->checkString = $checkString;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return 出力パラメータ文字列表現
	 */
	public function toString() {
		$str  = 'OrderID=' . $this->getOrderId();
		$str .= '&';
		$str .= 'ClientField1=' . $this->getClientField1();
		$str .= '&';
		$str .= 'ClientField2=' . $this->getClientField2();
		$str .= '&';
		$str .= 'ClientField3=' . $this->getClientField3();
		$str .= '&';
		$str .= 'ShopID=' . $this->getShopId();
		$str .= '&';
		$str .= 'Status=' . $this->getStatus();
		$str .= '&';
		$str .= 'TranDate=' . $this->getTranDate();
		$str .= '&';
		$str .= 'TranID=' . $this->getTranId();
		$str .= '&';
		$str .= 'CheckString=' . $this->getCheckString();

		if ($this->isErrorOccurred()) {
			// エラー文字列を連結して返す
			$errString = parent::toString();
			$str .= '&' . $errString;
		}
		return $str;
	}
}
