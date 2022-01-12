<?php
namespace GmoPG\com\gmo_pg\client\tran;

use GmoPG\com\gmo_pg\client\common\Cryptgram;
use GmoPG\com\gmo_pg\client\common\GPayException;
use GmoPG\com\gmo_pg\client\output\SearchBulkPaymentOutput;
use GmoPG\com\gmo_pg\client\tran\BaseTran;

/*require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/SearchBulkPaymentOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');*/

/**
 * <b>一括決済サービス売上データ参照　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBulkPayment extends BaseTran
{

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 売上データ参照を実行する
     *
     * @param SearchBulkPaymentInput $input 入力パラメータ
     * @return SearchBulkPaymentOutput $output 出力パラメータ
     * @exception GPayException
     */
    public function exec(&$input)
    {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
        // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
            return null;
        }

        // SearchBulkPaymentOutput作成し、戻す
        return new SearchBulkPaymentOutput($resultMap);
    }
}

?>
