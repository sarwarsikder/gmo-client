<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/SecureTranDccOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>多通貨クレジット決済（DCC)認証後決済実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class SecureTranDcc extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 認証後決済実行を実行する
	 *
	 * @param  SecureTranDccInput $input  入力パラメータ
	 * @return SecureTranDccOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // SecureTranDccOutput作成し、戻す
	    return new SecureTranDccOutput($resultMap);
	}
}
?>
