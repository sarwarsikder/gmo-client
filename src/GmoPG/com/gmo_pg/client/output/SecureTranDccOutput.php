<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;
/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>多通貨クレジット決済（DCC)認証後決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SecureTranDccOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 支払方法
	 */
	private $method;
	/**
	 * @var string トランザクションID
	 */
	private $dccTranID;
	/**
	 * @var string 決済日付
	 */
	private $tranDate;
	/**
	 * @var string MD5ハッシュ
	 */
	private $checkString;
	/**
	 * @var string 支払通貨コード
	 */
	private $dccCurrency;
	/**
	 * @var bigDecimal 支払通貨決済額
	 */
	private $dccAmount;
	/**
	 * @var bigDecimal 為替レート
	 */
	private $dccRate;
	/**
	 * @var string FX追跡番号
	 */
	private $ftn;
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
		$this->setOrderID($params->get('OrderID'));
		$this->setMethod($params->get('Method'));
		$this->setDccTranID($params->get('DccTranID'));
		$this->setTranDate($params->get('TranDate'));
		$this->setCheckString($params->get('CheckString'));
		$this->setDccCurrency($params->get('DccCurrency'));
		$this->setDccAmount($params->get('DccAmount'));
		$this->setDccRate($params->get('DccRate'));
		$this->setFtn($params->get('Ftn'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 支払方法取得
	 * @return string 支払方法
	 */
	public function getMethod() {
		return $this->method;
	}
	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getDccTranID() {
		return $this->dccTranID;
	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->tranDate;
	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
		return $this->checkString;
	}
	/**
	 * 支払通貨コード取得
	 * @return string 支払通貨コード
	 */
	public function getDccCurrency() {
		return $this->dccCurrency;
	}
	/**
	 * 支払通貨決済額取得
	 * @return bigDecimal 支払通貨決済額
	 */
	public function getDccAmount() {
		return $this->dccAmount;
	}
	/**
	 * 為替レート取得
	 * @return bigDecimal 為替レート
	 */
	public function getDccRate() {
		return $this->dccRate;
	}
	/**
	 * FX追跡番号取得
	 * @return string FX追跡番号
	 */
	public function getFtn() {
		return $this->ftn;
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
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * 支払方法設定
	 *
	 * @param string $method
	 */
	public function setMethod($method) {
		$this->method = $method;
	}
	/**
	 * トランザクションID設定
	 *
	 * @param string $dccTranID
	 */
	public function setDccTranID($dccTranID) {
		$this->dccTranID = $dccTranID;
	}
	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}
	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
	}
	/**
	 * 支払通貨コード設定
	 *
	 * @param string $dccCurrency
	 */
	public function setDccCurrency($dccCurrency) {
		$this->dccCurrency = $dccCurrency;
	}
	/**
	 * 支払通貨決済額設定
	 *
	 * @param bigDecimal $dccAmount
	 */
	public function setDccAmount($dccAmount) {
		$this->dccAmount = $dccAmount;
	}
	/**
	 * 為替レート設定
	 *
	 * @param bigDecimal $dccRate
	 */
	public function setDccRate($dccRate) {
		$this->dccRate = $dccRate;
	}
	/**
	 * FX追跡番号設定
	 *
	 * @param string $ftn
	 */
	public function setFtn($ftn) {
		$this->ftn = $ftn;
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
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Method=' . $this->encodeStr($this->getMethod());
		$str .='&';
		$str .= 'DccTranID=' . $this->encodeStr($this->getDccTranID());
		$str .='&';
		$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
		$str .='&';
		$str .= 'CheckString=' . $this->encodeStr($this->getCheckString());
		$str .='&';
		$str .= 'DccCurrency=' . $this->encodeStr($this->getDccCurrency());
		$str .='&';
		$str .= 'DccAmount=' . $this->encodeStr($this->getDccAmount());
		$str .='&';
		$str .= 'DccRate=' . $this->encodeStr($this->getDccRate());
		$str .='&';
		$str .= 'Ftn=' . $this->encodeStr($this->getFtn());
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
