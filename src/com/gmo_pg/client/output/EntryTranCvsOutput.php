<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once ('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>コンビニ取引登録　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 02-07-2008 00:00:00
 */
class EntryTranCvsOutput extends BaseOutput {

	/**
	 * @var string 取引ID
	 */
	private $accessId;

	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;

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
        $this->setAccessId($params->get('AccessID'));
        $this->setAccessPass($params->get('AccessPass'));
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
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
	    $str .= 'AccessID=' . $this->getAccessId();
	    $str .= '&';
	    $str .= 'AccessPass=' . $this->getAccessPass();

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>