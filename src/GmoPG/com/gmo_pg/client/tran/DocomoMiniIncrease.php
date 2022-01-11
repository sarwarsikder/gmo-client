<?php
namespace GmoPG\com\gmo_pg\client\tran;

use GmoPG\com\gmo_pg\client\common\Cryptgram;
use GmoPG\com\gmo_pg\client\common\GPayException;
use GmoPG\com\gmo_pg\client\output\DocomoMiniIncreaseOutput;
use GmoPG\com\gmo_pg\client\tran\BaseTran;


/*require_once('com/gmo_pg/client/common/Cryptgram.php');
require_once('com/gmo_pg/client/common/GPayException.php');
require_once('com/gmo_pg/client/output/DocomoMiniIncreaseOutput.php');
require_once('com/gmo_pg/client/tran/BaseTran.php');*/

/**
 * <b>d払い(ミニアプリ)増額　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class DocomoMiniIncrease extends BaseTran
{

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 増額を実行する
     *
     * @param DocomoMiniIncreaseInput $input 入力パラメータ
     * @return DocomoMiniIncreaseOutput $output 出力パラメータ
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

        // DocomoMiniIncreaseOutput作成し、戻す
        return new DocomoMiniIncreaseOutput($resultMap);
    }
}

?>
