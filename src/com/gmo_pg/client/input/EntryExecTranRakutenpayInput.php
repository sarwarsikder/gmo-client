<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranRakutenpayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranRakutenpayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranRakutenpayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranRakutenpayInput.php';*/

/**
 * <b>楽天ペイ登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranRakutenpayInput
{

    /**
     * @var EntryTranRakutenpayInput 楽天ペイ登録入力パラメータ
     */
    private $entryTranRakutenpayInput;
    /* @var $entryTranInput EntryTranRakutenpayInput */

    /**
     * @var ExecTranRakutenpayInput 楽天ペイ実行入力パラメータ
     */
    private $execTranRakutenpayInput;
    /* @var $execTranInput ExecTranRakutenpayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranRakutenpayInput = new EntryTranRakutenpayInput($params);
        $this->execTranRakutenpayInput = new ExecTranRakutenpayInput($params);
    }

    /**
     * 楽天ペイ取引登録入力パラメータ取得
     *
     * @return EntryTranRakutenpayInput 取引登録時パラメータ
     */
    public function &getEntryTranRakutenpayInput()
    {
        return $this->entryTranRakutenpayInput;
    }

    /**
     * 楽天ペイ実行入力パラメータ取得
     * @return ExecTranRakutenpayInput 決済実行時パラメータ
     */
    public function &getExecTranRakutenpayInput()
    {
        return $this->execTranRakutenpayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranRakutenpayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranRakutenpayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranRakutenpayInput->getOrderID();

    }

    /**
     * 処理区分取得
     * @return string 処理区分
     */
    public function getJobCd()
    {
        return $this->entryTranRakutenpayInput->getJobCd();
    }

    /**
     * 利用金額取得
     * @return integer 利用金額
     */
    public function getAmount()
    {
        return $this->entryTranRakutenpayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranRakutenpayInput->getTax();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranRakutenpayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranRakutenpayInput->getAccessPass();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranRakutenpayInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranRakutenpayInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranRakutenpayInput->getClientField3();
    }

    /**
     * 決済結果戻しURL取得
     * @return string 決済結果戻しURL
     */
    public function getRetURL()
    {
        return $this->execTranRakutenpayInput->getRetURL();
    }

    /**
     * 支払開始期限秒取得
     * @return integer 支払開始期限秒
     */
    public function getPaymentTermSec()
    {
        return $this->execTranRakutenpayInput->getPaymentTermSec();
    }

    /**
     * 決済リトライ可能回数取得
     * @return integer 決済リトライ可能回数
     */
    public function getRetryCount()
    {
        return $this->execTranRakutenpayInput->getRetryCount();
    }

    /**
     * 楽天説明文取得
     * @return string 楽天説明文
     */
    public function getDescription()
    {
        return $this->execTranRakutenpayInput->getDescription();
    }

    /**
     * 楽天ペイ取引登録入力パラメータ設定
     *
     * @param EntryTranRakutenpayInput entryTranRakutenpayInput  取引登録入力パラメータ
     */
    public function setEntryTranRakutenpayInput(&$entryTranRakutenpayInput)
    {
        $this->entryTranRakutenpayInput = $entryTranRakutenpayInput;
    }

    /**
     * 楽天ペイ実行入力パラメータ設定
     *
     * @param ExecTranRakutenpayInput  execTranRakutenpayInput   決済実行入力パラメータ
     */
    public function setExecTranRakutenpayInput(&$execTranRakutenpayInput)
    {
        $this->execTranRakutenpayInput = $execTranRakutenpayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranRakutenpayInput->setShopID($shopID);
        $this->execTranRakutenpayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranRakutenpayInput->setShopPass($shopPass);
        $this->execTranRakutenpayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranRakutenpayInput->setOrderID($orderID);
        $this->execTranRakutenpayInput->setOrderID($orderID);

    }

    /**
     * 処理区分設定
     *
     * @param string $jobCd
     */
    public function setJobCd($jobCd)
    {
        $this->entryTranRakutenpayInput->setJobCd($jobCd);
    }

    /**
     * 利用金額設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranRakutenpayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranRakutenpayInput->setTax($tax);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranRakutenpayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranRakutenpayInput->setAccessPass($accessPass);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranRakutenpayInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranRakutenpayInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranRakutenpayInput->setClientField3($clientField3);
    }

    /**
     * 決済結果戻しURL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranRakutenpayInput->setRetURL($retURL);
    }

    /**
     * 支払開始期限秒設定
     *
     * @param integer $paymentTermSec
     */
    public function setPaymentTermSec($paymentTermSec)
    {
        $this->execTranRakutenpayInput->setPaymentTermSec($paymentTermSec);
    }

    /**
     * 決済リトライ可能回数設定
     *
     * @param integer $retryCount
     */
    public function setRetryCount($retryCount)
    {
        $this->execTranRakutenpayInput->setRetryCount($retryCount);
    }

    /**
     * 楽天説明文設定
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->execTranRakutenpayInput->setDescription($description);
    }

}

?>
