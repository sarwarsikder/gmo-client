<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranCvsOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\BaseTran;

/*require_once('com/gmo_pg/client/output/ExecTranCvsOutput.php');
require_once('com/gmo_pg/client/tran/BaseTran.php');*/

/**
 * <b>コンビニ決済実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class ExecTranCvs extends BaseTran
{

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 決済を実行する
     *
     * @param ExecTranCvsInput $input 入力パラメータ
     * @return ExecTranCvsOuput 出力パラメータ
     */
    public function exec(&$input)
    {


        // プロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());

        // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
            return null;
        }

        // ExecTranCvsOutputを作成し、戻す
        return new ExecTranCvsOutput($resultMap);
    }

}

?>