<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>メルペイ支払い可否事前確認　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class MerpayPrePaymentCheckOutput extends BaseOutput {

	/**
	 * @var string サブスクリプションID
	 */
	private $subscriptionId;
	/**
	 * @var string 確認結果
	 */
	private $checkResult;


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
		$this->setSubscriptionId($params->get('SubscriptionId'));
		$this->setCheckResult($params->get('CheckResult'));

	}

	/**
	 * サブスクリプションID取得
	 * @return string サブスクリプションID
	 */
	public function getSubscriptionId() {
		return $this->subscriptionId;
	}
	/**
	 * 確認結果取得
	 * @return string 確認結果
	 */
	public function getCheckResult() {
		return $this->checkResult;
	}

	/**
	 * サブスクリプションID設定
	 *
	 * @param string $subscriptionId
	 */
	public function setSubscriptionId($subscriptionId) {
		$this->subscriptionId = $subscriptionId;
	}
	/**
	 * 確認結果設定
	 *
	 * @param string $checkResult
	 */
	public function setCheckResult($checkResult) {
		$this->checkResult = $checkResult;
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
		$str .= 'SubscriptionId=' . $this->encodeStr($this->getSubscriptionId());
		$str .='&';
		$str .= 'CheckResult=' . $this->encodeStr($this->getCheckResult());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
