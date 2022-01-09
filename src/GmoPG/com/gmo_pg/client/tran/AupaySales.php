<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/AupaySalesOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>au PAY実売上　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class AupaySales extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 実売上を実行する
	 *
	 * @param  AupaySalesInput $input  入力パラメータ
	 * @return AupaySalesOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // AupaySalesOutput作成し、戻す
	    return new AupaySalesOutput($resultMap);
	}
}
?>
