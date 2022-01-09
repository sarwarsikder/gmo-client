<?php
require_once 'com/gmo_pg/client/output/EntryExecTranAmazonpayOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranAmazonpay.php';
require_once 'com/gmo_pg/client/tran/ExecTranAmazonpay.php';
/**
 * <b>Amazon Pay登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAmazonpay {
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
	 * Amazon Pay登録・決済を実行する
	 *
	 * @param EntryExecTranAmazonpayInput $input    Amazon Pay登録・決済入力パラメータ
	 * @return  EntryExecTranAmazonpayOutput Amazon Pay登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// Amazon Pay取引登録入力パラメータを取得
		$entryTranAmazonpayInput =& $input->getEntryTranAmazonpayInput();
		// Amazon Pay決済実行入力パラメータを取得
		$execTranAmazonpayInput =& $input->getExecTranAmazonpayInput();

		// Amazon Pay登録・決済出力パラメータを生成
		$output = new EntryExecTranAmazonpayOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranAmazonpayInput->getAccessId();
		$accessPass = $execTranAmazonpayInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// Amazon Pay取引登録を実行
			$this->log->debug("Amazon Pay取引登録実行");
			$entryTranAmazonpay = new EntryTranAmazonpay();
			$entryTranAmazonpayOutput = $entryTranAmazonpay->exec($entryTranAmazonpayInput);

			if ($this->errorTrap($entryTranAmazonpay)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranAmazonpayOutput->getAccessId();
			$accessPass = $entryTranAmazonpayOutput->getAccessPass();
			$execTranAmazonpayInput->setAccessId($accessId);
			$execTranAmazonpayInput->setAccessPass($accessPass);

			$output->setEntryTranAmazonpayOutput($entryTranAmazonpayOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranAmazonpay = new ExecTranAmazonpay();
		$execTranAmazonpayOutput = $execTranAmazonpay->exec($execTranAmazonpayInput);

		$output->setExecTranAmazonpayOutput($execTranAmazonpayOutput);

		$this->errorTrap($execTranAmazonpay);

		return $output;
	}


}
?>
