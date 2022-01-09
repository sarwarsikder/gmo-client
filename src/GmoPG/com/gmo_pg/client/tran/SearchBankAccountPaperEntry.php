<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/SearchBankAccountPaperEntryOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>口座振替ペーパー申込口座登録依頼書データ照会　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBankAccountPaperEntry extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 口座登録依頼書データ照会を実行する
	 *
	 * @param  SearchBankAccountPaperEntryInput $input  入力パラメータ
	 * @return SearchBankAccountPaperEntryOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // SearchBankAccountPaperEntryOutput作成し、戻す
	    return new SearchBankAccountPaperEntryOutput($resultMap);
	}
}
?>
