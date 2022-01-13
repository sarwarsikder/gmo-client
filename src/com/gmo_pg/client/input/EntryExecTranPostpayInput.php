<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranPostpayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranPostpayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranPostpayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranPostpayInput.php';*/

/**
 * <b>PS後払い登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPostpayInput
{

    /**
     * @var EntryTranPostpayInput PS後払い登録入力パラメータ
     */
    private $entryTranPostpayInput;
    /* @var $entryTranInput EntryTranPostpayInput */

    /**
     * @var ExecTranPostpayInput PS後払い実行入力パラメータ
     */
    private $execTranPostpayInput;
    /* @var $execTranInput ExecTranPostpayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranPostpayInput = new EntryTranPostpayInput($params);
        $this->execTranPostpayInput = new ExecTranPostpayInput($params);
    }

    /**
     * PS後払い取引登録入力パラメータ取得
     *
     * @return EntryTranPostpayInput 取引登録時パラメータ
     */
    public function &getEntryTranPostpayInput()
    {
        return $this->entryTranPostpayInput;
    }

    /**
     * PS後払い実行入力パラメータ取得
     * @return ExecTranPostpayInput 決済実行時パラメータ
     */
    public function &getExecTranPostpayInput()
    {
        return $this->execTranPostpayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranPostpayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranPostpayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranPostpayInput->getOrderID();

    }

    /**
     * 利用金額取得
     * @return integer 利用金額
     */
    public function getAmount()
    {
        return $this->entryTranPostpayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranPostpayInput->getTax();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranPostpayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranPostpayInput->getAccessPass();
    }

    /**
     * HttpHeaderAccept取得
     * @return string HttpHeaderAccept
     */
    public function getHttpHeaderAccept()
    {
        return $this->execTranPostpayInput->getHttpHeaderAccept();
    }

    /**
     * HttpHeaderAcceptCharset取得
     * @return string HttpHeaderAcceptCharset
     */
    public function getHttpHeaderAcceptCharset()
    {
        return $this->execTranPostpayInput->getHttpHeaderAcceptCharset();
    }

    /**
     * HttpHeaderAcceptEncoding取得
     * @return string HttpHeaderAcceptEncoding
     */
    public function getHttpHeaderAcceptEncoding()
    {
        return $this->execTranPostpayInput->getHttpHeaderAcceptEncoding();
    }

    /**
     * HttpHeaderAcceptLanguage取得
     * @return string HttpHeaderAcceptLanguage
     */
    public function getHttpHeaderAcceptLanguage()
    {
        return $this->execTranPostpayInput->getHttpHeaderAcceptLanguage();
    }

    /**
     * HttpHeaderClientIp取得
     * @return string HttpHeaderClientIp
     */
    public function getHttpHeaderClientIp()
    {
        return $this->execTranPostpayInput->getHttpHeaderClientIp();
    }

    /**
     * HttpHeaderConnection取得
     * @return string HttpHeaderConnection
     */
    public function getHttpHeaderConnection()
    {
        return $this->execTranPostpayInput->getHttpHeaderConnection();
    }

    /**
     * HttpHeaderDoNotTrack取得
     * @return string HttpHeaderDoNotTrack
     */
    public function getHttpHeaderDoNotTrack()
    {
        return $this->execTranPostpayInput->getHttpHeaderDoNotTrack();
    }

    /**
     * HttpHeaderHost取得
     * @return string HttpHeaderHost
     */
    public function getHttpHeaderHost()
    {
        return $this->execTranPostpayInput->getHttpHeaderHost();
    }

    /**
     * HttpHeaderReferrer取得
     * @return string HttpHeaderReferrer
     */
    public function getHttpHeaderReferrer()
    {
        return $this->execTranPostpayInput->getHttpHeaderReferrer();
    }

    /**
     * HttpHeaderUserAgent取得
     * @return string HttpHeaderUserAgent
     */
    public function getHttpHeaderUserAgent()
    {
        return $this->execTranPostpayInput->getHttpHeaderUserAgent();
    }

    /**
     * HttpHeaderKeepAlive取得
     * @return string HttpHeaderKeepAlive
     */
    public function getHttpHeaderKeepAlive()
    {
        return $this->execTranPostpayInput->getHttpHeaderKeepAlive();
    }

    /**
     * HttpHeaderUaCpu取得
     * @return string HttpHeaderUaCpu
     */
    public function getHttpHeaderUaCpu()
    {
        return $this->execTranPostpayInput->getHttpHeaderUaCpu();
    }

    /**
     * HttpHeaderVia取得
     * @return string HttpHeaderVia
     */
    public function getHttpHeaderVia()
    {
        return $this->execTranPostpayInput->getHttpHeaderVia();
    }

    /**
     * HttpHeaderXForwardedFor取得
     * @return string HttpHeaderXForwardedFor
     */
    public function getHttpHeaderXForwardedFor()
    {
        return $this->execTranPostpayInput->getHttpHeaderXForwardedFor();
    }

    /**
     * その他HttpHeader取得
     * @return string その他HttpHeader
     */
    public function getHttpHeaderOther()
    {
        return $this->execTranPostpayInput->getHttpHeaderOther();
    }

    /**
     * 購入者IPアドレス取得
     * @return string 購入者IPアドレス
     */
    public function getCustomerIp()
    {
        return $this->execTranPostpayInput->getCustomerIp();
    }

    /**
     * 端末識別ID取得
     * @return string 端末識別ID
     */
    public function getImei()
    {
        return $this->execTranPostpayInput->getImei();
    }

    /**
     * デバイス情報取得
     * @return string デバイス情報
     */
    public function getDeviceInfo()
    {
        return $this->execTranPostpayInput->getDeviceInfo();
    }

    /**
     * 購入者情報_加盟店注文日取得
     * @return string 購入者情報_加盟店注文日
     */
    public function getCustomerOrderDate()
    {
        return $this->execTranPostpayInput->getCustomerOrderDate();
    }

    /**
     * 購入者情報_氏名（漢字）取得
     * @return string 購入者情報_氏名（漢字）
     */
    public function getCustomerName()
    {
        return $this->execTranPostpayInput->getCustomerName();
    }

    /**
     * 購入者情報_氏名（カナ）取得
     * @return string 購入者情報_氏名（カナ）
     */
    public function getCustomerNameKana()
    {
        return $this->execTranPostpayInput->getCustomerNameKana();
    }

    /**
     * 購入者情報_郵便番号取得
     * @return string 購入者情報_郵便番号
     */
    public function getCustomerZipCode()
    {
        return $this->execTranPostpayInput->getCustomerZipCode();
    }

    /**
     * 購入者情報_住所取得
     * @return string 購入者情報_住所
     */
    public function getCustomerAddress()
    {
        return $this->execTranPostpayInput->getCustomerAddress();
    }

    /**
     * 購入者情報_会社名取得
     * @return string 購入者情報_会社名
     */
    public function getCustomerCompanyName()
    {
        return $this->execTranPostpayInput->getCustomerCompanyName();
    }

    /**
     * 購入者情報_部署名取得
     * @return string 購入者情報_部署名
     */
    public function getCustomerDepartmentName()
    {
        return $this->execTranPostpayInput->getCustomerDepartmentName();
    }

    /**
     * 購入者情報_電話番号1取得
     * @return string 購入者情報_電話番号1
     */
    public function getCustomerTel1()
    {
        return $this->execTranPostpayInput->getCustomerTel1();
    }

    /**
     * 購入者情報_電話番号2取得
     * @return string 購入者情報_電話番号2
     */
    public function getCustomerTel2()
    {
        return $this->execTranPostpayInput->getCustomerTel2();
    }

    /**
     * 購入者情報_メールアドレス1取得
     * @return string 購入者情報_メールアドレス1
     */
    public function getCustomerEmail1()
    {
        return $this->execTranPostpayInput->getCustomerEmail1();
    }

    /**
     * 購入者情報_メールアドレス2取得
     * @return string 購入者情報_メールアドレス2
     */
    public function getCustomerEmail2()
    {
        return $this->execTranPostpayInput->getCustomerEmail2();
    }

    /**
     * 購入者情報_決済種別取得
     * @return string 購入者情報_決済種別
     */
    public function getCustomerPaymentType()
    {
        return $this->execTranPostpayInput->getCustomerPaymentType();
    }

    /**
     * 購入者情報_性別取得
     * @return string 購入者情報_性別
     */
    public function getCustomerSex()
    {
        return $this->execTranPostpayInput->getCustomerSex();
    }

    /**
     * 購入者情報_誕生日取得
     * @return string 購入者情報_誕生日
     */
    public function getCustomerBirthday()
    {
        return $this->execTranPostpayInput->getCustomerBirthday();
    }

    /**
     * 購入者情報_会員登録日取得
     * @return string 購入者情報_会員登録日
     */
    public function getCustomerRegistDate()
    {
        return $this->execTranPostpayInput->getCustomerRegistDate();
    }

    /**
     * 購入者情報_購入回数取得
     * @return string 購入者情報_購入回数
     */
    public function getCustomerBuyCount()
    {
        return $this->execTranPostpayInput->getCustomerBuyCount();
    }

    /**
     * 購入者情報_購入金額総額取得
     * @return string 購入者情報_購入金額総額
     */
    public function getCustomerBuyAmountTotal()
    {
        return $this->execTranPostpayInput->getCustomerBuyAmountTotal();
    }

    /**
     * PS後払い取引登録入力パラメータ設定
     *
     * @param EntryTranPostpayInput entryTranPostpayInput  取引登録入力パラメータ
     */
    public function setEntryTranPostpayInput(&$entryTranPostpayInput)
    {
        $this->entryTranPostpayInput = $entryTranPostpayInput;
    }

    /**
     * PS後払い実行入力パラメータ設定
     *
     * @param ExecTranPostpayInput  execTranPostpayInput   決済実行入力パラメータ
     */
    public function setExecTranPostpayInput(&$execTranPostpayInput)
    {
        $this->execTranPostpayInput = $execTranPostpayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranPostpayInput->setShopID($shopID);
        $this->execTranPostpayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranPostpayInput->setShopPass($shopPass);
        $this->execTranPostpayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranPostpayInput->setOrderID($orderID);
        $this->execTranPostpayInput->setOrderID($orderID);

    }

    /**
     * 利用金額設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranPostpayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranPostpayInput->setTax($tax);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranPostpayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranPostpayInput->setAccessPass($accessPass);
    }

    /**
     * HttpHeaderAccept設定
     *
     * @param string $httpHeaderAccept
     */
    public function setHttpHeaderAccept($httpHeaderAccept)
    {
        $this->execTranPostpayInput->setHttpHeaderAccept($httpHeaderAccept);
    }

    /**
     * HttpHeaderAcceptCharset設定
     *
     * @param string $httpHeaderAcceptCharset
     */
    public function setHttpHeaderAcceptCharset($httpHeaderAcceptCharset)
    {
        $this->execTranPostpayInput->setHttpHeaderAcceptCharset($httpHeaderAcceptCharset);
    }

    /**
     * HttpHeaderAcceptEncoding設定
     *
     * @param string $httpHeaderAcceptEncoding
     */
    public function setHttpHeaderAcceptEncoding($httpHeaderAcceptEncoding)
    {
        $this->execTranPostpayInput->setHttpHeaderAcceptEncoding($httpHeaderAcceptEncoding);
    }

    /**
     * HttpHeaderAcceptLanguage設定
     *
     * @param string $httpHeaderAcceptLanguage
     */
    public function setHttpHeaderAcceptLanguage($httpHeaderAcceptLanguage)
    {
        $this->execTranPostpayInput->setHttpHeaderAcceptLanguage($httpHeaderAcceptLanguage);
    }

    /**
     * HttpHeaderClientIp設定
     *
     * @param string $httpHeaderClientIp
     */
    public function setHttpHeaderClientIp($httpHeaderClientIp)
    {
        $this->execTranPostpayInput->setHttpHeaderClientIp($httpHeaderClientIp);
    }

    /**
     * HttpHeaderConnection設定
     *
     * @param string $httpHeaderConnection
     */
    public function setHttpHeaderConnection($httpHeaderConnection)
    {
        $this->execTranPostpayInput->setHttpHeaderConnection($httpHeaderConnection);
    }

    /**
     * HttpHeaderDoNotTrack設定
     *
     * @param string $httpHeaderDoNotTrack
     */
    public function setHttpHeaderDoNotTrack($httpHeaderDoNotTrack)
    {
        $this->execTranPostpayInput->setHttpHeaderDoNotTrack($httpHeaderDoNotTrack);
    }

    /**
     * HttpHeaderHost設定
     *
     * @param string $httpHeaderHost
     */
    public function setHttpHeaderHost($httpHeaderHost)
    {
        $this->execTranPostpayInput->setHttpHeaderHost($httpHeaderHost);
    }

    /**
     * HttpHeaderReferrer設定
     *
     * @param string $httpHeaderReferrer
     */
    public function setHttpHeaderReferrer($httpHeaderReferrer)
    {
        $this->execTranPostpayInput->setHttpHeaderReferrer($httpHeaderReferrer);
    }

    /**
     * HttpHeaderUserAgent設定
     *
     * @param string $httpHeaderUserAgent
     */
    public function setHttpHeaderUserAgent($httpHeaderUserAgent)
    {
        $this->execTranPostpayInput->setHttpHeaderUserAgent($httpHeaderUserAgent);
    }

    /**
     * HttpHeaderKeepAlive設定
     *
     * @param string $httpHeaderKeepAlive
     */
    public function setHttpHeaderKeepAlive($httpHeaderKeepAlive)
    {
        $this->execTranPostpayInput->setHttpHeaderKeepAlive($httpHeaderKeepAlive);
    }

    /**
     * HttpHeaderUaCpu設定
     *
     * @param string $httpHeaderUaCpu
     */
    public function setHttpHeaderUaCpu($httpHeaderUaCpu)
    {
        $this->execTranPostpayInput->setHttpHeaderUaCpu($httpHeaderUaCpu);
    }

    /**
     * HttpHeaderVia設定
     *
     * @param string $httpHeaderVia
     */
    public function setHttpHeaderVia($httpHeaderVia)
    {
        $this->execTranPostpayInput->setHttpHeaderVia($httpHeaderVia);
    }

    /**
     * HttpHeaderXForwardedFor設定
     *
     * @param string $httpHeaderXForwardedFor
     */
    public function setHttpHeaderXForwardedFor($httpHeaderXForwardedFor)
    {
        $this->execTranPostpayInput->setHttpHeaderXForwardedFor($httpHeaderXForwardedFor);
    }

    /**
     * その他HttpHeader設定
     *
     * @param string $httpHeaderOther
     */
    public function setHttpHeaderOther($httpHeaderOther)
    {
        $this->execTranPostpayInput->setHttpHeaderOther($httpHeaderOther);
    }

    /**
     * 購入者IPアドレス設定
     *
     * @param string $customerIp
     */
    public function setCustomerIp($customerIp)
    {
        $this->execTranPostpayInput->setCustomerIp($customerIp);
    }

    /**
     * 端末識別ID設定
     *
     * @param string $imei
     */
    public function setImei($imei)
    {
        $this->execTranPostpayInput->setImei($imei);
    }

    /**
     * デバイス情報設定
     *
     * @param string $deviceInfo
     */
    public function setDeviceInfo($deviceInfo)
    {
        $this->execTranPostpayInput->setDeviceInfo($deviceInfo);
    }

    /**
     * 購入者情報_加盟店注文日設定
     *
     * @param string $customerOrderDate
     */
    public function setCustomerOrderDate($customerOrderDate)
    {
        $this->execTranPostpayInput->setCustomerOrderDate($customerOrderDate);
    }

    /**
     * 購入者情報_氏名（漢字）設定
     *
     * @param string $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->execTranPostpayInput->setCustomerName($customerName);
    }

    /**
     * 購入者情報_氏名（カナ）設定
     *
     * @param string $customerNameKana
     */
    public function setCustomerNameKana($customerNameKana)
    {
        $this->execTranPostpayInput->setCustomerNameKana($customerNameKana);
    }

    /**
     * 購入者情報_郵便番号設定
     *
     * @param string $customerZipCode
     */
    public function setCustomerZipCode($customerZipCode)
    {
        $this->execTranPostpayInput->setCustomerZipCode($customerZipCode);
    }

    /**
     * 購入者情報_住所設定
     *
     * @param string $customerAddress
     */
    public function setCustomerAddress($customerAddress)
    {
        $this->execTranPostpayInput->setCustomerAddress($customerAddress);
    }

    /**
     * 購入者情報_会社名設定
     *
     * @param string $customerCompanyName
     */
    public function setCustomerCompanyName($customerCompanyName)
    {
        $this->execTranPostpayInput->setCustomerCompanyName($customerCompanyName);
    }

    /**
     * 購入者情報_部署名設定
     *
     * @param string $customerDepartmentName
     */
    public function setCustomerDepartmentName($customerDepartmentName)
    {
        $this->execTranPostpayInput->setCustomerDepartmentName($customerDepartmentName);
    }

    /**
     * 購入者情報_電話番号1設定
     *
     * @param string $customerTel1
     */
    public function setCustomerTel1($customerTel1)
    {
        $this->execTranPostpayInput->setCustomerTel1($customerTel1);
    }

    /**
     * 購入者情報_電話番号2設定
     *
     * @param string $customerTel2
     */
    public function setCustomerTel2($customerTel2)
    {
        $this->execTranPostpayInput->setCustomerTel2($customerTel2);
    }

    /**
     * 購入者情報_メールアドレス1設定
     *
     * @param string $customerEmail1
     */
    public function setCustomerEmail1($customerEmail1)
    {
        $this->execTranPostpayInput->setCustomerEmail1($customerEmail1);
    }

    /**
     * 購入者情報_メールアドレス2設定
     *
     * @param string $customerEmail2
     */
    public function setCustomerEmail2($customerEmail2)
    {
        $this->execTranPostpayInput->setCustomerEmail2($customerEmail2);
    }

    /**
     * 購入者情報_決済種別設定
     *
     * @param string $customerPaymentType
     */
    public function setCustomerPaymentType($customerPaymentType)
    {
        $this->execTranPostpayInput->setCustomerPaymentType($customerPaymentType);
    }

    /**
     * 購入者情報_性別設定
     *
     * @param string $customerSex
     */
    public function setCustomerSex($customerSex)
    {
        $this->execTranPostpayInput->setCustomerSex($customerSex);
    }

    /**
     * 購入者情報_誕生日設定
     *
     * @param string $customerBirthday
     */
    public function setCustomerBirthday($customerBirthday)
    {
        $this->execTranPostpayInput->setCustomerBirthday($customerBirthday);
    }

    /**
     * 購入者情報_会員登録日設定
     *
     * @param string $customerRegistDate
     */
    public function setCustomerRegistDate($customerRegistDate)
    {
        $this->execTranPostpayInput->setCustomerRegistDate($customerRegistDate);
    }

    /**
     * 購入者情報_購入回数設定
     *
     * @param string $customerBuyCount
     */
    public function setCustomerBuyCount($customerBuyCount)
    {
        $this->execTranPostpayInput->setCustomerBuyCount($customerBuyCount);
    }

    /**
     * 購入者情報_購入金額総額設定
     *
     * @param string $customerBuyAmountTotal
     */
    public function setCustomerBuyAmountTotal($customerBuyAmountTotal)
    {
        $this->execTranPostpayInput->setCustomerBuyAmountTotal($customerBuyAmountTotal);
    }

}

?>
