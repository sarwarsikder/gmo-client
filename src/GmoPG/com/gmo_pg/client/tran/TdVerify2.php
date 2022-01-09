<?php
require_once ('com/gmo_pg/client/output/TdVerify2Output.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>3DS2.0認証後決済実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class TdVerify2 extends BaseTran {
    
    /**
     * コンストラクタ
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 3DS2.0認証後決済実行を実行する
     *
     * @param  TdVerify2Input $input  入力パラメータ
     * @return TdVerify2Output $output 出力パラメータ
     */
    public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());

        // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
            return null;
        }

        // EntryTranOutput作成し、戻す
        return new TdVerify2Output($resultMap);
    }
}
