<?php
require_once 'com/gmo_pg/client/output/EntryExecTranAupayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranAupay.php';
require_once 'com/gmo_pg/client/tran/ExecTranAupay.php';
/**
 * <b>au PAY登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAupay {
	/**
	 * @var Gmopg_Log ログ
	 */
	private $log;

	/**
	 * @var GPayException 例外
	 */
	private $exception;

	/**
	 * コンストラクタ
	 */
	public function __construct() {
		$this->log = new Gmopg_Log(get_class($this));
	}

	/**
	 * 例外の発生を判定する
	 *
	 * @param mixed $target    判定対象
	 */
	private function errorTrap(&$target) {
		if (is_null($target->getException())) {
			return false;
		}
		$this->exception = $target->getException();
		return true;
	}

	/**
	 * 例外の発生を判定する
	 *
	 * @return  boolean 判定結果(true=エラーアリ)
	 */
	public function isExceptionOccured() {
		return false == is_null($this->exception);
	}

	/**
	 * 例外を返す
	 *
	 * @return  GPayException 例外
	 */
	public function &getException() {
		return $this->exception;
	}

	/**
	 * au PAY登録・決済を実行する
	 *
	 * @param EntryExecTranAupayInput $input    au PAY登録・決済入力パラメータ
	 * @return  EntryExecTranAupayOutput au PAY登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// au PAY取引登録入力パラメータを取得
		$entryTranAupayInput =& $input->getEntryTranAupayInput();
		// au PAY決済実行入力パラメータを取得
		$execTranAupayInput =& $input->getExecTranAupayInput();

		// au PAY登録・決済出力パラメータを生成
		$output = new EntryExecTranAupayOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranAupayInput->getAccessId();
		$accessPass = $execTranAupayInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// au PAY取引登録を実行
			$this->log->debug("au PAY取引登録実行");
			$entryTranAupay = new EntryTranAupay();
			$entryTranAupayOutput = $entryTranAupay->exec($entryTranAupayInput);

			if ($this->errorTrap($entryTranAupay)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranAupayOutput->getAccessId();
			$accessPass = $entryTranAupayOutput->getAccessPass();
			$execTranAupayInput->setAccessId($accessId);
			$execTranAupayInput->setAccessPass($accessPass);

			$output->setEntryTranAupayOutput($entryTranAupayOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranAupay = new ExecTranAupay();
		$execTranAupayOutput = $execTranAupay->exec($execTranAupayInput);

		$output->setExecTranAupayOutput($execTranAupayOutput);

		$this->errorTrap($execTranAupay);

		return $output;
	}


}
?>
