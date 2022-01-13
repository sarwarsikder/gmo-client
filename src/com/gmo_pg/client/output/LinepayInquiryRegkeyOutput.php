<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>LINE PayRegKey照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class LinepayInquiryRegkeyOutput extends BaseOutput {

	/**
	 * @var string RegKey
	 */
	private $regKey;
	/**
	 * @var string ステータス
	 */
	private $status;
	/**
	 * @var string 支払方法
	 */
	private $payMethod;
	/**
	 * @var string カードブランド
	 */
	private $cardBrand;
	/**
	 * @var string RegKey発行日時
	 */
	private $registDate;
	/**
	 * @var string RegKey最終利用日時
	 */
	private $processLastDate;


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
		$this->setRegKey($params->get('RegKey'));
		$this->setStatus($params->get('Status'));
		$this->setPayMethod($params->get('PayMethod'));
		$this->setCardBrand($params->get('CardBrand'));
		$this->setRegistDate($params->get('RegistDate'));
		$this->setProcessLastDate($params->get('ProcessLastDate'));

	}

	/**
	 * RegKey取得
	 * @return string RegKey
	 */
	public function getRegKey() {
		return $this->regKey;
	}
	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 支払方法取得
	 * @return string 支払方法
	 */
	public function getPayMethod() {
		return $this->payMethod;
	}
	/**
	 * カードブランド取得
	 * @return string カードブランド
	 */
	public function getCardBrand() {
		return $this->cardBrand;
	}
	/**
	 * RegKey発行日時取得
	 * @return string RegKey発行日時
	 */
	public function getRegistDate() {
		return $this->registDate;
	}
	/**
	 * RegKey最終利用日時取得
	 * @return string RegKey最終利用日時
	 */
	public function getProcessLastDate() {
		return $this->processLastDate;
	}

	/**
	 * RegKey設定
	 *
	 * @param string $regKey
	 */
	public function setRegKey($regKey) {
		$this->regKey = $regKey;
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
	 * 支払方法設定
	 *
	 * @param string $payMethod
	 */
	public function setPayMethod($payMethod) {
		$this->payMethod = $payMethod;
	}
	/**
	 * カードブランド設定
	 *
	 * @param string $cardBrand
	 */
	public function setCardBrand($cardBrand) {
		$this->cardBrand = $cardBrand;
	}
	/**
	 * RegKey発行日時設定
	 *
	 * @param string $registDate
	 */
	public function setRegistDate($registDate) {
		$this->registDate = $registDate;
	}
	/**
	 * RegKey最終利用日時設定
	 *
	 * @param string $processLastDate
	 */
	public function setProcessLastDate($processLastDate) {
		$this->processLastDate = $processLastDate;
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
		$str .= 'RegKey=' . $this->encodeStr($this->getRegKey());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'PayMethod=' . $this->encodeStr($this->getPayMethod());
		$str .='&';
		$str .= 'CardBrand=' . $this->encodeStr($this->getCardBrand());
		$str .='&';
		$str .= 'RegistDate=' . $this->encodeStr($this->getRegistDate());
		$str .='&';
		$str .= 'ProcessLastDate=' . $this->encodeStr($this->getProcessLastDate());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
