<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>3D認証後取引実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class TdVerifyInput extends BaseInput {

	/**
	 * @var string 3Dセキュア認証結果 カードホルダーのブラウザから戻ったPaRes
	 */
	private $paRes;

	/**
	 * @var string 取引ID
	 */
	private $md;

	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}

	/**
	 * デフォルト値を設定する
	 */
	public function setDefaultValues() {
	    // ※デフォルト値無しの為何もしない
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
	    // 入力パラメータが無い(=null)場合は設定処理を行わない。
	    if (is_null($params)) {
	        return;
	    }

	    // 各項目の設定
	    $this->setMd($this->getStringValue($params, 'MD', $this->getMd()));
	    $this->setPaRes($this->getStringValue($params, 'PaRes', $this->getPaRes()));
	}

	/**
	 * 3Dセキュア認証結果取得
	 * @return string 3Dセキュア認証結果
	 */
	public function getPaRes() {
		return $this->paRes;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getMd() {
		return $this->md;
	}

	/**
	 * 3Dセキュア認証結果設定
	 *
	 * <p>
	 * Acsから、リダイレクトによりカードホルダーのブラウザを経由し送信された、PaResの値を無加工で設定すること
	 * </p>
	 *
	 * @param string $paRes 3Dセキュア認証結果
	 */
	public function setPaRes($paRes) {
		$this->paRes = $paRes;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $md 取引ID
	 */
	public function setMd($md) {
		$this->md = $md;
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列
	 */
	public function toString() {
	    $str  = 'PaRes=' . $this->encodeStr($this->getPaRes());
	    $str .= '&';
	    $str .= 'MD=' . $this->encodeStr($this->getMd());

	    return $str;
	}
}
?>