<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/AlterBulkPaymentOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>一括決済サービス売上データ変更　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class AlterBulkPayment extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 売上データ変更を実行する
	 *
	 * @param  AlterBulkPaymentInput $input  入力パラメータ
	 * @return AlterBulkPaymentOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // AlterBulkPaymentOutput作成し、戻す
	    return new AlterBulkPaymentOutput($resultMap);
	}
}
?>
