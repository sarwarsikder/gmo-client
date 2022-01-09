<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/MerpayCancelReturnOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>メルペイキャンセル　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class MerpayCancelReturn extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * キャンセルを実行する
	 *
	 * @param  MerpayCancelReturnInput $input  入力パラメータ
	 * @return MerpayCancelReturnOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // MerpayCancelReturnOutput作成し、戻す
	    return new MerpayCancelReturnOutput($resultMap);
	}
}
?>
