<?php
require_once 'com/gmo_pg/client/output/EntryExecTranDocomoMiniOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranDocomoMini.php';
require_once 'com/gmo_pg/client/tran/ExecTranDocomoMini.php';
/**
 * <b>d払い(ミニアプリ)登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDocomoMini {
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
	 * d払い(ミニアプリ)登録・決済を実行する
	 *
	 * @param EntryExecTranDocomoMiniInput $input    d払い(ミニアプリ)登録・決済入力パラメータ
	 * @return  EntryExecTranDocomoMiniOutput d払い(ミニアプリ)登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// d払い(ミニアプリ)取引登録入力パラメータを取得
		$entryTranDocomoMiniInput =& $input->getEntryTranDocomoMiniInput();
		// d払い(ミニアプリ)決済実行入力パラメータを取得
		$execTranDocomoMiniInput =& $input->getExecTranDocomoMiniInput();

		// d払い(ミニアプリ)登録・決済出力パラメータを生成
		$output = new EntryExecTranDocomoMiniOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranDocomoMiniInput->getAccessId();
		$accessPass = $execTranDocomoMiniInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// d払い(ミニアプリ)取引登録を実行
			$this->log->debug("d払い(ミニアプリ)取引登録実行");
			$entryTranDocomoMini = new EntryTranDocomoMini();
			$entryTranDocomoMiniOutput = $entryTranDocomoMini->exec($entryTranDocomoMiniInput);

			if ($this->errorTrap($entryTranDocomoMini)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranDocomoMiniOutput->getAccessId();
			$accessPass = $entryTranDocomoMiniOutput->getAccessPass();
			$execTranDocomoMiniInput->setAccessId($accessId);
			$execTranDocomoMiniInput->setAccessPass($accessPass);

			$output->setEntryTranDocomoMiniOutput($entryTranDocomoMiniOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranDocomoMini = new ExecTranDocomoMini();
		$execTranDocomoMiniOutput = $execTranDocomoMini->exec($execTranDocomoMiniInput);

		$output->setExecTranDocomoMiniOutput($execTranDocomoMiniOutput);

		$this->errorTrap($execTranDocomoMini);

		return $output;
	}


}
?>
