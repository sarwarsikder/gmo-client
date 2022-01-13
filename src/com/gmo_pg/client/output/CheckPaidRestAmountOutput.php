<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>Paid取引先利用可能額確認　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class CheckPaidRestAmountOutput extends BaseOutput {

	/**
	 * @var string Paid取引先ID
	 */
	private $paidBuyerID;
	/**
	 * @var string 利用可能額
	 */
	private $restAmount;


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
		$this->setPaidBuyerID($params->get('PaidBuyerID'));
		$this->setRestAmount($params->get('RestAmount'));

	}

	/**
	 * Paid取引先ID取得
	 * @return string Paid取引先ID
	 */
	public function getPaidBuyerID() {
		return $this->paidBuyerID;
	}
	/**
	 * 利用可能額取得
	 * @return string 利用可能額
	 */
	public function getRestAmount() {
		return $this->restAmount;
	}

	/**
	 * Paid取引先ID設定
	 *
	 * @param string $paidBuyerID
	 */
	public function setPaidBuyerID($paidBuyerID) {
		$this->paidBuyerID = $paidBuyerID;
	}
	/**
	 * 利用可能額設定
	 *
	 * @param string $restAmount
	 */
	public function setRestAmount($restAmount) {
		$this->restAmount = $restAmount;
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
		$str .= 'PaidBuyerID=' . $this->encodeStr($this->getPaidBuyerID());
		$str .='&';
		$str .= 'RestAmount=' . $this->encodeStr($this->getRestAmount());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
