<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>Amazon Pay利用承諾終了　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class CloseChargePermissionAmazonpayOutput extends BaseOutput {

	/**
	 * @var string AmazonチャージパーミッションID
	 */
	private $amazonChargePermissionID;
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
		$this->setAmazonChargePermissionID($params->get('AmazonChargePermissionID'));
		$this->setStatus($params->get('Status'));

	}

	/**
	 * AmazonチャージパーミッションID取得
	 * @return string AmazonチャージパーミッションID
	 */
	public function getAmazonChargePermissionID() {
		return $this->amazonChargePermissionID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * AmazonチャージパーミッションID設定
	 *
	 * @param string $amazonChargePermissionID
	 */
	public function setAmazonChargePermissionID($amazonChargePermissionID) {
		$this->amazonChargePermissionID = $amazonChargePermissionID;
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
		$str .= 'AmazonChargePermissionID=' . $this->encodeStr($this->getAmazonChargePermissionID());
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
