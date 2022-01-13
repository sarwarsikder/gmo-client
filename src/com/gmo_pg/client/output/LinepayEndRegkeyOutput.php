<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>LINE Pay利用承諾終了　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class LinepayEndRegkeyOutput extends BaseOutput {

	/**
	 * @var string RegKey
	 */
	private $regKey;
	/**
	 * @var string ステータス
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
		$this->setRegKey($params->get('RegKey'));
		$this->setStatus($params->get('Status'));

	}

	/**
	 * RegKey取得
	 * @return string RegKey
	 */
	public function getRegKey() {
		return $this->regKey;
	}
	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * RegKey設定
	 *
	 * @param string $regKey
	 */
	public function setRegKey($regKey) {
		$this->regKey = $regKey;
	}
	/**
	 * ステータス設定
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
		$str .= 'RegKey=' . $this->encodeStr($this->getRegKey());
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
