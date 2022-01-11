<?php
namespace GmoPG\com\gmo_pg\client\tran;
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/PostpayShippingCancelOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>PS後払い出荷取消　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class PostpayShippingCancel extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 出荷取消を実行する
	 *
	 * @param  PostpayShippingCancelInput $input  入力パラメータ
	 * @return PostpayShippingCancelOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // PostpayShippingCancelOutput作成し、戻す
	    return new PostpayShippingCancelOutput($resultMap);
	}
}
?>
