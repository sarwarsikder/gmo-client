<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>au PAYOpenID解除　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class DeleteAupayOpenIDInput extends BaseInput {

	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;
	/**
	 * @var string 会員ID
	 */
	private $memberID;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
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
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
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
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());

	    return $str;
	}


}
?>
