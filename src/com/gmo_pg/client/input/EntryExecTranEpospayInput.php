<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\input;
use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranEpospayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranEpospayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranEpospayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranEpospayInput.php';*/

/**
 * <b>エポスかんたん決済登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranEpospayInput
{

    /**
     * @var EntryTranEpospayInput エポスかんたん決済登録入力パラメータ
     */
    private $entryTranEpospayInput;
    /* @var $entryTranInput EntryTranEpospayInput */

    /**
     * @var ExecTranEpospayInput エポスかんたん決済実行入力パラメータ
     */
    private $execTranEpospayInput;
    /* @var $execTranInput ExecTranEpospayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranEpospayInput = new EntryTranEpospayInput($params);
        $this->execTranEpospayInput = new ExecTranEpospayInput($params);
    }

    /**
     * エポスかんたん決済取引登録入力パラメータ取得
     *
     * @return EntryTranEpospayInput 取引登録時パラメータ
     */
    public function &getEntryTranEpospayInput()
    {
        return $this->entryTranEpospayInput;
    }

    /**
     * エポスかんたん決済実行入力パラメータ取得
     * @return ExecTranEpospayInput 決済実行時パラメータ
     */
    public function &getExecTranEpospayInput()
    {
        return $this->execTranEpospayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranEpospayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranEpospayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranEpospayInput->getOrderID();

    }

    /**
     * 処理区分取得
     * @return string 処理区分
     */
    public function getJobCd()
    {
        return $this->entryTranEpospayInput->getJobCd();
    }

    /**
     * 利用料金取得
     * @return integer 利用料金
     */
    public function getAmount()
    {
        return $this->entryTranEpospayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranEpospayInput->getTax();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranEpospayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranEpospayInput->getAccessPass();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranEpospayInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranEpospayInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranEpospayInput->getClientField3();
    }

    /**
     * 結果戻り先URL取得
     * @return string 結果戻り先URL
     */
    public function getRetURL()
    {
        return $this->execTranEpospayInput->getRetURL();
    }

    /**
     * 支払開始期限秒取得
     * @return integer 支払開始期限秒
     */
    public function getPaymentTermSec()
    {
        return $this->execTranEpospayInput->getPaymentTermSec();
    }

    /**
     * エポスかんたん決済取引登録入力パラメータ設定
     *
     * @param EntryTranEpospayInput entryTranEpospayInput  取引登録入力パラメータ
     */
    public function setEntryTranEpospayInput(&$entryTranEpospayInput)
    {
        $this->entryTranEpospayInput = $entryTranEpospayInput;
    }

    /**
     * エポスかんたん決済実行入力パラメータ設定
     *
     * @param ExecTranEpospayInput  execTranEpospayInput   決済実行入力パラメータ
     */
    public function setExecTranEpospayInput(&$execTranEpospayInput)
    {
        $this->execTranEpospayInput = $execTranEpospayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranEpospayInput->setShopID($shopID);
        $this->execTranEpospayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranEpospayInput->setShopPass($shopPass);
        $this->execTranEpospayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranEpospayInput->setOrderID($orderID);
        $this->execTranEpospayInput->setOrderID($orderID);

    }

    /**
     * 処理区分設定
     *
     * @param string $jobCd
     */
    public function setJobCd($jobCd)
    {
        $this->entryTranEpospayInput->setJobCd($jobCd);
    }

    /**
     * 利用料金設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranEpospayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranEpospayInput->setTax($tax);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranEpospayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranEpospayInput->setAccessPass($accessPass);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranEpospayInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranEpospayInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranEpospayInput->setClientField3($clientField3);
    }

    /**
     * 結果戻り先URL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranEpospayInput->setRetURL($retURL);
    }

    /**
     * 支払開始期限秒設定
     *
     * @param integer $paymentTermSec
     */
    public function setPaymentTermSec($paymentTermSec)
    {
        $this->execTranEpospayInput->setPaymentTermSec($paymentTermSec);
    }

}

?>
