<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/SearchTradeAupayOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>au PAY取引情報照会　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchTradeAupay extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 取引情報照会を実行する
	 *
	 * @param  SearchTradeAupayInput $input  入力パラメータ
	 * @return SearchTradeAupayOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // SearchTradeAupayOutput作成し、戻す
	    return new SearchTradeAupayOutput($resultMap);
	}
}
?>
