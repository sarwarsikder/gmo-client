<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\tran;

use Kcsl\GmoClient\com\gmo_pg\client\common\Cryptgram;
use Kcsl\GmoClient\com\gmo_pg\client\common\GPayException;
use Kcsl\GmoClient\com\gmo_pg\client\output\EpospayCancelOutput;
use Kcsl\GmoClient\com\gmo_pg\client\tran\BaseTran;

/*require_once('com/gmo_pg/client/common/Cryptgram.php');
require_once('com/gmo_pg/client/common/GPayException.php');
require_once('com/gmo_pg/client/output/EpospayCancelOutput.php');
require_once('com/gmo_pg/client/tran/BaseTran.php');*/

/**
 * <b>エポスかんたん決済キャンセル　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EpospayCancel extends BaseTran
{

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * キャンセルを実行する
     *
     * @param EpospayCancelInput $input 入力パラメータ
     * @return EpospayCancelOutput $output 出力パラメータ
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

        // EpospayCancelOutput作成し、戻す
        return new EpospayCancelOutput($resultMap);
    }
}

?>
