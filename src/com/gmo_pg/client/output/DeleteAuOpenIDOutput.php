<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>auかんたん決済OpenID解除　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/02/15
 */
class DeleteAuOpenIDOutput extends BaseOutput {

	/**
	 * @var string サイトID
	 */
	private $siteID;

	/**
	 * @var string 会員ID
	 */
	private $memberID;

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
        $this->setSiteID($params->get('SiteID'));
        $this->setMemberID($params->get('MemberID'));
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}

	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
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
	    $str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
	    $str .= '&';
	    $str .= 'MemberID=' . $this->encodeStr($this->getMemberID());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>