<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>siftイベント実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SiftEventsOutput extends BaseOutput {

	/**
	 * @var string siftオーダーID
	 */
	private $siftOrderID;
	/**
	 * @var string 決済不正使用スコア
	 */
	private $paymentAbuseScore;


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
		$this->setPaymentAbuseScore($params->get('PaymentAbuseScore'));

	}

	/**
	 * siftオーダーID取得
	 * @return string siftオーダーID
	 */
	public function getSiftOrderID() {
		return $this->siftOrderID;
	}
	/**
	 * 決済不正使用スコア取得
	 * @return string 決済不正使用スコア
	 */
	public function getPaymentAbuseScore() {
		return $this->paymentAbuseScore;
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
	 * 決済不正使用スコア設定
	 *
	 * @param string $paymentAbuseScore
	 */
	public function setPaymentAbuseScore($paymentAbuseScore) {
		$this->paymentAbuseScore = $paymentAbuseScore;
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
		$str .= 'PaymentAbuseScore=' . $this->encodeStr($this->getPaymentAbuseScore());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
