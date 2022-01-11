<?php
namespace GmoPG\com\gmo_pg\client\tran;

use GmoPG\com\gmo_pg\client\common\Cryptgram;
use GmoPG\com\gmo_pg\client\common\GPayException;
use GmoPG\com\gmo_pg\client\output\LinepayCancelReturnOutput;
use GmoPG\com\gmo_pg\client\tran\BaseTran;

/*require_once('com/gmo_pg/client/common/Cryptgram.php');
require_once('com/gmo_pg/client/common/GPayException.php');
require_once('com/gmo_pg/client/output/LinepayCancelReturnOutput.php');
require_once('com/gmo_pg/client/tran/BaseTran.php');*/

/**
 * <b>LINE Payキャンセル・返品　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class LinepayCancelReturn extends BaseTran
{

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * キャンセル・返品を実行する
     *
     * @param LinepayCancelReturnInput $input 入力パラメータ
     * @return LinepayCancelReturnOutput $output 出力パラメータ
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

        // LinepayCancelReturnOutput作成し、戻す
        return new LinepayCancelReturnOutput($resultMap);
    }
}

?>