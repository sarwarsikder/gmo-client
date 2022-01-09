<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/DisableBulkPaymentOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>一括決済サービス売上データ無効化　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class DisableBulkPayment extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 売上データ無効化を実行する
	 *
	 * @param  DisableBulkPaymentInput $input  入力パラメータ
	 * @return DisableBulkPaymentOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // DisableBulkPaymentOutput作成し、戻す
	    return new DisableBulkPaymentOutput($resultMap);
	}
}
?>
