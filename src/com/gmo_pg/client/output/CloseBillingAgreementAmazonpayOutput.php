<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>Amazon PayBillingAgreement終了　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class CloseBillingAgreementAmazonpayOutput extends BaseOutput {

	/**
	 * @var string AmazonビリングアグリーメントID
	 */
	private $amazonBillingAgreementID;
	/**
	 * @var string 現状態
	 */
	private $status;


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
		$this->setAmazonBillingAgreementID($params->get('AmazonBillingAgreementID'));
		$this->setStatus($params->get('Status'));

	}

	/**
	 * AmazonビリングアグリーメントID取得
	 * @return string AmazonビリングアグリーメントID
	 */
	public function getAmazonBillingAgreementID() {
		return $this->amazonBillingAgreementID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * AmazonビリングアグリーメントID設定
	 *
	 * @param string $amazonBillingAgreementID
	 */
	public function setAmazonBillingAgreementID($amazonBillingAgreementID) {
		$this->amazonBillingAgreementID = $amazonBillingAgreementID;
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
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'AmazonBillingAgreementID=' . $this->encodeStr($this->getAmazonBillingAgreementID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
