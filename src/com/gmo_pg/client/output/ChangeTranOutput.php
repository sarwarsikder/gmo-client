<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>金額変更 出力パラメータクラス</b>
 *
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class ChangeTranOutput extends BaseOutput {

	/**
	 * @var string 取引ID
	 *
	 */
	private $accessId;

	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;

	/**
	 * @var string 仕向先コード
	 */
	private $forward;

	/**
	 * @var string カード会社承認番号
	 *
	 */
	private $approve;

	/**
	 * @var string トランザクションID
	 *
	 */
	private $tranId;

	/**
	 * @var string 決済日付(yyyyMMddHHmmss)
	 *
	 */
	private $tranDate;

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
        $this->setAccessId($params->get('AccessID'));
        $this->setAccessPass($params->get('AccessPass'));
        $this->setForward($params->get('Forward'));
        $this->setApprovalNo($params->get('Approve'));
        $this->setTranId($params->get('TranID'));
        $this->setTranDate($params->get('TranDate'));
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->accessId;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}

	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->forward;
	}

	/**
	 * 承認番号取得
	 *
	 * @deprecated 下位互換のためのメソッドです。<br />
	 * 承認番号を取得する場合、getApprovalNo()を利用してください。
	 * @return string 承認番号
	 */
	public function getApprove() {
		return $this->approve;
	}

    /**
     * 承認番号取得
     *
     * @return string 承認番号
     */
    public function getApprovalNo() {
        return $this->approve;
    }

	/**
	 * 決済日付取得
	 * @return string 決済日付(yyyyMMddHHmmss形式)
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
	 * 取引ID設定
	 *
	 * @param string $accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->accessId = $accessId;
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}

	/**
	 * 仕向先コード設定
	 *
	 * @param string $forward 仕向先コード
	 */
	public function setForward($forward) {
		$this->forward = $forward;
	}

	/**
	 * 承認番号設定
	 *
	 *@deprecated 下位互換のためのメソッドです。setApprovalNoを利用してください。
	 * @param string $approve 承認番号
	 */
	public function setApprove($approve) {
		$this->approve = $approve;
	}

    /**
     * 承認番号設定
     *
     * @param string $approve 承認番号
     */
    public function setApprovalNo($approve) {
        $this->approve = $approve;
    }

	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate 決済日付(yyyyMMddHHmmss形式)
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
	 * AlterTranOutput文字列表現取得
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
	    $str  = 'AccessID=' . $this->getAccessId();
	    $str .= '&';
	    $str .= 'AccessPass=' . $this->getAccessPass();
	    $str .= '&';
	    $str .= 'Forward=' . $this->getForward();
	    $str .= '&';
	    $str .= 'Approve=' . $this->getApprovalNo();
	    $str .= '&';
	    $str .= 'TranID=' . $this->getTranId();
	    $str .= '&';
	    $str .= 'TranDate=' . $this->getTranDate();

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }
        return $str;
	}
}
?>