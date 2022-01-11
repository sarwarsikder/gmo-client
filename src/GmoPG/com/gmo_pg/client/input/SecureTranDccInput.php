<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>多通貨クレジット決済（DCC)認証後決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SecureTranDccInput extends BaseInput {

	/**
	 * @var string 3DSサービス結果
	 */
	private $paRes;
	/**
	 * @var string MD
	 */
	private $mD;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * 3DSサービス結果取得
	 * @return string 3DSサービス結果
	 */
	public function getPaRes() {
		return $this->paRes;
	}
	/**
	 * MD取得
	 * @return string MD
	 */
	public function getMD() {
		return $this->mD;
	}

	/**
	 * 3DSサービス結果設定
	 *
	 * @param string $paRes
	 */
	public function setPaRes($paRes) {
		$this->paRes = $paRes;
	}
	/**
	 * MD設定
	 *
	 * @param string $mD
	 */
	public function setMD($mD) {
		$this->mD = $mD;
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

		$this->setPaRes($this->getStringValue($params, 'PaRes', $this->getPaRes()));
		$this->setMD($this->getStringValue($params, 'MD', $this->getMD()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'PaRes=' . $this->encodeStr($this->getPaRes());
		$str .='&';
		$str .= 'MD=' . $this->encodeStr($this->getMD());

	    return $str;
	}


}
?>
