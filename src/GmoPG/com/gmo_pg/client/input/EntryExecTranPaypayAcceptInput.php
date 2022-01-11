<?php
namespace GmoPG\com\gmo_pg\client\input;

use  GmoPG\com\gmo_pg\client\input\EntryTranPaypayAcceptInput;
use  GmoPG\com\gmo_pg\client\input\ExecTranPaypayAcceptInput;

/*require_once 'com/gmo_pg/client/input/EntryTranPaypayAcceptInput.php';
require_once 'com/gmo_pg/client/input/ExecTranPaypayAcceptInput.php';*/

/**
 * <b>PayPay随時(利用承諾)登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaypayAcceptInput
{

    /**
     * @var EntryTranPaypayAcceptInput PayPay随時(利用承諾)登録入力パラメータ
     */
    private $entryTranPaypayAcceptInput;
    /* @var $entryTranInput EntryTranPaypayAcceptInput */

    /**
     * @var ExecTranPaypayAcceptInput PayPay随時(利用承諾)実行入力パラメータ
     */
    private $execTranPaypayAcceptInput;
    /* @var $execTranInput ExecTranPaypayAcceptInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranPaypayAcceptInput = new EntryTranPaypayAcceptInput($params);
        $this->execTranPaypayAcceptInput = new ExecTranPaypayAcceptInput($params);
    }

    /**
     * PayPay随時(利用承諾)取引登録入力パラメータ取得
     *
     * @return EntryTranPaypayAcceptInput 取引登録時パラメータ
     */
    public function &getEntryTranPaypayAcceptInput()
    {
        return $this->entryTranPaypayAcceptInput;
    }

    /**
     * PayPay随時(利用承諾)実行入力パラメータ取得
     * @return ExecTranPaypayAcceptInput 決済実行時パラメータ
     */
    public function &getExecTranPaypayAcceptInput()
    {
        return $this->execTranPaypayAcceptInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranPaypayAcceptInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranPaypayAcceptInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranPaypayAcceptInput->getOrderID();

    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranPaypayAcceptInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranPaypayAcceptInput->getAccessPass();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranPaypayAcceptInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranPaypayAcceptInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranPaypayAcceptInput->getClientField3();
    }

    /**
     * 結果戻り先URL取得
     * @return string 結果戻り先URL
     */
    public function getRetURL()
    {
        return $this->execTranPaypayAcceptInput->getRetURL();
    }

    /**
     * 決済開始期限秒取得
     * @return integer 決済開始期限秒
     */
    public function getPaymentTermSec()
    {
        return $this->execTranPaypayAcceptInput->getPaymentTermSec();
    }

    /**
     * PayPay随時(利用承諾)取引登録入力パラメータ設定
     *
     * @param EntryTranPaypayAcceptInput entryTranPaypayAcceptInput  取引登録入力パラメータ
     */
    public function setEntryTranPaypayAcceptInput(&$entryTranPaypayAcceptInput)
    {
        $this->entryTranPaypayAcceptInput = $entryTranPaypayAcceptInput;
    }

    /**
     * PayPay随時(利用承諾)実行入力パラメータ設定
     *
     * @param ExecTranPaypayAcceptInput  execTranPaypayAcceptInput   決済実行入力パラメータ
     */
    public function setExecTranPaypayAcceptInput(&$execTranPaypayAcceptInput)
    {
        $this->execTranPaypayAcceptInput = $execTranPaypayAcceptInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranPaypayAcceptInput->setShopID($shopID);
        $this->execTranPaypayAcceptInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranPaypayAcceptInput->setShopPass($shopPass);
        $this->execTranPaypayAcceptInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranPaypayAcceptInput->setOrderID($orderID);
        $this->execTranPaypayAcceptInput->setOrderID($orderID);

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranPaypayAcceptInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranPaypayAcceptInput->setAccessPass($accessPass);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranPaypayAcceptInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranPaypayAcceptInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranPaypayAcceptInput->setClientField3($clientField3);
    }

    /**
     * 結果戻り先URL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranPaypayAcceptInput->setRetURL($retURL);
    }

    /**
     * 決済開始期限秒設定
     *
     * @param integer $paymentTermSec
     */
    public function setPaymentTermSec($paymentTermSec)
    {
        $this->execTranPaypayAcceptInput->setPaymentTermSec($paymentTermSec);
    }

}

?>
