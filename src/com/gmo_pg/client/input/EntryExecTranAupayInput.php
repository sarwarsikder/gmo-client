<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranAupayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranAupayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranAupayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranAupayInput.php';*/

/**
 * <b>au PAY登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAupayInput
{

    /**
     * @var EntryTranAupayInput au PAY登録入力パラメータ
     */
    private $entryTranAupayInput;
    /* @var $entryTranInput EntryTranAupayInput */

    /**
     * @var ExecTranAupayInput au PAY実行入力パラメータ
     */
    private $execTranAupayInput;
    /* @var $execTranInput ExecTranAupayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranAupayInput = new EntryTranAupayInput($params);
        $this->execTranAupayInput = new ExecTranAupayInput($params);
    }

    /**
     * au PAY取引登録入力パラメータ取得
     *
     * @return EntryTranAupayInput 取引登録時パラメータ
     */
    public function &getEntryTranAupayInput()
    {
        return $this->entryTranAupayInput;
    }

    /**
     * au PAY実行入力パラメータ取得
     * @return ExecTranAupayInput 決済実行時パラメータ
     */
    public function &getExecTranAupayInput()
    {
        return $this->execTranAupayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranAupayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranAupayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranAupayInput->getOrderID();

    }

    /**
     * 処理区分取得
     * @return string 処理区分
     */
    public function getJobCd()
    {
        return $this->entryTranAupayInput->getJobCd();
    }

    /**
     * 利用金額取得
     * @return integer 利用金額
     */
    public function getAmount()
    {
        return $this->entryTranAupayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranAupayInput->getTax();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranAupayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranAupayInput->getAccessPass();
    }

    /**
     * サイトID取得
     * @return string サイトID
     */
    public function getSiteID()
    {
        return $this->execTranAupayInput->getSiteID();
    }

    /**
     * サイトパスワード取得
     * @return string サイトパスワード
     */
    public function getSitePass()
    {
        return $this->execTranAupayInput->getSitePass();
    }

    /**
     * 会員ID取得
     * @return string 会員ID
     */
    public function getMemberID()
    {
        return $this->execTranAupayInput->getMemberID();
    }

    /**
     * 会員名取得
     * @return string 会員名
     */
    public function getMemberName()
    {
        return $this->execTranAupayInput->getMemberName();
    }

    /**
     * 会員作成フラグ取得
     * @return string 会員作成フラグ
     */
    public function getCreateMember()
    {
        return $this->execTranAupayInput->getCreateMember();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranAupayInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranAupayInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranAupayInput->getClientField3();
    }

    /**
     * 摘要取得
     * @return string 摘要
     */
    public function getCommodity()
    {
        return $this->execTranAupayInput->getCommodity();
    }

    /**
     * 決済結果戻しURL取得
     * @return string 決済結果戻しURL
     */
    public function getRetURL()
    {
        return $this->execTranAupayInput->getRetURL();
    }

    /**
     * 支払開始期限秒取得
     * @return integer 支払開始期限秒
     */
    public function getPaymentTermSec()
    {
        return $this->execTranAupayInput->getPaymentTermSec();
    }

    /**
     * 表示サービス名取得
     * @return string 表示サービス名
     */
    public function getServiceName()
    {
        return $this->execTranAupayInput->getServiceName();
    }

    /**
     * 表示電話番号取得
     * @return string 表示電話番号
     */
    public function getServiceTel()
    {
        return $this->execTranAupayInput->getServiceTel();
    }

    /**
     * au PAY取引登録入力パラメータ設定
     *
     * @param EntryTranAupayInput entryTranAupayInput  取引登録入力パラメータ
     */
    public function setEntryTranAupayInput(&$entryTranAupayInput)
    {
        $this->entryTranAupayInput = $entryTranAupayInput;
    }

    /**
     * au PAY実行入力パラメータ設定
     *
     * @param ExecTranAupayInput  execTranAupayInput   決済実行入力パラメータ
     */
    public function setExecTranAupayInput(&$execTranAupayInput)
    {
        $this->execTranAupayInput = $execTranAupayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranAupayInput->setShopID($shopID);
        $this->execTranAupayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranAupayInput->setShopPass($shopPass);
        $this->execTranAupayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranAupayInput->setOrderID($orderID);
        $this->execTranAupayInput->setOrderID($orderID);

    }

    /**
     * 処理区分設定
     *
     * @param string $jobCd
     */
    public function setJobCd($jobCd)
    {
        $this->entryTranAupayInput->setJobCd($jobCd);
    }

    /**
     * 利用金額設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranAupayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranAupayInput->setTax($tax);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranAupayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranAupayInput->setAccessPass($accessPass);
    }

    /**
     * サイトID設定
     *
     * @param string $siteID
     */
    public function setSiteID($siteID)
    {
        $this->execTranAupayInput->setSiteID($siteID);
    }

    /**
     * サイトパスワード設定
     *
     * @param string $sitePass
     */
    public function setSitePass($sitePass)
    {
        $this->execTranAupayInput->setSitePass($sitePass);
    }

    /**
     * 会員ID設定
     *
     * @param string $memberID
     */
    public function setMemberID($memberID)
    {
        $this->execTranAupayInput->setMemberID($memberID);
    }

    /**
     * 会員名設定
     *
     * @param string $memberName
     */
    public function setMemberName($memberName)
    {
        $this->execTranAupayInput->setMemberName($memberName);
    }

    /**
     * 会員作成フラグ設定
     *
     * @param string $createMember
     */
    public function setCreateMember($createMember)
    {
        $this->execTranAupayInput->setCreateMember($createMember);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranAupayInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranAupayInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranAupayInput->setClientField3($clientField3);
    }

    /**
     * 摘要設定
     *
     * @param string $commodity
     */
    public function setCommodity($commodity)
    {
        $this->execTranAupayInput->setCommodity($commodity);
    }

    /**
     * 決済結果戻しURL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranAupayInput->setRetURL($retURL);
    }

    /**
     * 支払開始期限秒設定
     *
     * @param integer $paymentTermSec
     */
    public function setPaymentTermSec($paymentTermSec)
    {
        $this->execTranAupayInput->setPaymentTermSec($paymentTermSec);
    }

    /**
     * 表示サービス名設定
     *
     * @param string $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->execTranAupayInput->setServiceName($serviceName);
    }

    /**
     * 表示電話番号設定
     *
     * @param string $serviceTel
     */
    public function setServiceTel($serviceTel)
    {
        $this->execTranAupayInput->setServiceTel($serviceTel);
    }

}

?>
