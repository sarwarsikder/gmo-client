<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/PaypayAcceptEndOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>PayPay随時(利用承諾)利用承諾終了　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class PaypayAcceptEnd extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 利用承諾終了を実行する
	 *
	 * @param  PaypayAcceptEndInput $input  入力パラメータ
	 * @return PaypayAcceptEndOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // PaypayAcceptEndOutput作成し、戻す
	    return new PaypayAcceptEndOutput($resultMap);
	}
}
?>
