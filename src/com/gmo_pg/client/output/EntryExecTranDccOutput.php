<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryTranDccOutput;
use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranDccOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranDccOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranDccOutput.php';*/

/**
 * <b>多通貨クレジット決済（DCC)登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDccOutput
{

    /**
     * @var EntryTranDccOutput 多通貨クレジット決済（DCC)登録出力パラメータ
     */
    private $entryTranDccOutput;/*@var $entryTranDccOutput EntryTranDccOutput */

    /**
     * @var ExecTranDccOutput 多通貨クレジット決済（DCC)実行出力パラメータ
     */
    private $execTranDccOutput;/*@var $execTranDccOutput ExecTranDccOutput */

    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranDccOutput = new EntryTranDccOutput($params);
        $this->execTranDccOutput = new ExecTranDccOutput($params);
    }

    /**
     * 多通貨クレジット決済（DCC)登録出力パラメータ取得
     * @return EntryTranDccOutput 多通貨クレジット決済（DCC)登録出力パラメータ
     */
    public function &getEntryTranDccOutput()
    {
        return $this->entryTranDccOutput;
    }

    /**
     * 多通貨クレジット決済（DCC)実行出力パラメータ取得
     * @return ExecTranDccOutput 多通貨クレジット決済（DCC)実行出力パラメータ
     */
    public function &getExecTranDccOutput()
    {
        return $this->execTranDccOutput;
    }

    /**
     * 多通貨クレジット決済（DCC)登録出力パラメータ設定
     *
     * @param EntryTranDccOutput $entryTranDccOutput 多通貨クレジット決済（DCC)登録出力パラメータ
     */
    public function setEntryTranDccOutput(&$entryTranDccOutput)
    {
        $this->entryTranDccOutput = $entryTranDccOutput;
    }

    /**
     * 多通貨クレジット決済（DCC)決済実行出力パラメータ設定
     *
     * @param ExecTranDccOutput $execTranDccOutput 多通貨クレジット決済（DCC)実行出力パラメータ
     */
    public function setExecTranDccOutput(&$execTranDccOutput)
    {
        $this->execTranDccOutput = $execTranDccOutput;
    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranDccOutput->getOrderID();

    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->entryTranDccOutput->getAccessID();

    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->entryTranDccOutput->getAccessPass();

    }

    /**
     * 支払通貨コード取得
     * @return string 支払通貨コード
     */
    public function getDccCurrency()
    {
        return $this->entryTranDccOutput->getDccCurrency();

    }

    /**
     * 支払通貨決済額取得
     * @return bigDecimal 支払通貨決済額
     */
    public function getDccAmount()
    {
        return $this->entryTranDccOutput->getDccAmount();

    }

    /**
     * 為替レート取得
     * @return bigDecimal 為替レート
     */
    public function getDccRate()
    {
        return $this->entryTranDccOutput->getDccRate();

    }

    /**
     * FX追跡番号(FTN)取得
     * @return string FX追跡番号(FTN)
     */
    public function getFtn()
    {
        return $this->entryTranDccOutput->getFtn();

    }

    /**
     * ACS呼出判定取得
     * @return string ACS呼出判定
     */
    public function getACS()
    {
        return $this->execTranDccOutput->getACS();

    }

    /**
     * ACS認証ページURL取得
     * @return string ACS認証ページURL
     */
    public function getACSUrl()
    {
        return $this->execTranDccOutput->getACSUrl();

    }

    /**
     * 3DS要求電文取得
     * @return string 3DS要求電文
     */
    public function getPaReq()
    {
        return $this->execTranDccOutput->getPaReq();

    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getMD()
    {
        return $this->execTranDccOutput->getMD();

    }

    /**
     * 支払方法取得
     * @return string 支払方法
     */
    public function getMethod()
    {
        return $this->execTranDccOutput->getMethod();

    }

    /**
     * DCCトランザクションID取得
     * @return string DCCトランザクションID
     */
    public function getDccTranID()
    {
        return $this->execTranDccOutput->getDccTranID();

    }

    /**
     * 決済日付取得
     * @return string 決済日付
     */
    public function getTranDate()
    {
        return $this->execTranDccOutput->getTranDate();

    }

    /**
     * MD5ハッシュ取得
     * @return string MD5ハッシュ
     */
    public function getCheckString()
    {
        return $this->execTranDccOutput->getCheckString();

    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranDccOutput->getClientField1();

    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranDccOutput->getClientField2();

    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranDccOutput->getClientField3();

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranDccOutput->setOrderID($orderID);
        $this->execTranDccOutput->setOrderID($orderID);

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->entryTranDccOutput->setAccessID($accessID);

    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranDccOutput->setAccessPass($accessPass);

    }

    /**
     * 支払通貨コード設定
     *
     * @param string $dccCurrency
     */
    public function setDccCurrency($dccCurrency)
    {
        $this->entryTranDccOutput->setDccCurrency($dccCurrency);
        $this->execTranDccOutput->setDccCurrency($dccCurrency);

    }

    /**
     * 支払通貨決済額設定
     *
     * @param bigDecimal $dccAmount
     */
    public function setDccAmount($dccAmount)
    {
        $this->entryTranDccOutput->setDccAmount($dccAmount);
        $this->execTranDccOutput->setDccAmount($dccAmount);

    }

    /**
     * 為替レート設定
     *
     * @param bigDecimal $dccRate
     */
    public function setDccRate($dccRate)
    {
        $this->entryTranDccOutput->setDccRate($dccRate);
        $this->execTranDccOutput->setDccRate($dccRate);

    }

    /**
     * FX追跡番号(FTN)設定
     *
     * @param string $ftn
     */
    public function setFtn($ftn)
    {
        $this->entryTranDccOutput->setFtn($ftn);
        $this->execTranDccOutput->setFtn($ftn);

    }

    /**
     * ACS呼出判定設定
     *
     * @param string $aCS
     */
    public function setACS($aCS)
    {
        $this->execTranDccOutput->setACS($aCS);

    }

    /**
     * ACS認証ページURL設定
     *
     * @param string $aCSUrl
     */
    public function setACSUrl($aCSUrl)
    {
        $this->execTranDccOutput->setACSUrl($aCSUrl);

    }

    /**
     * 3DS要求電文設定
     *
     * @param string $paReq
     */
    public function setPaReq($paReq)
    {
        $this->execTranDccOutput->setPaReq($paReq);

    }

    /**
     * 取引ID設定
     *
     * @param string $mD
     */
    public function setMD($mD)
    {
        $this->execTranDccOutput->setMD($mD);

    }

    /**
     * 支払方法設定
     *
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->execTranDccOutput->setMethod($method);

    }

    /**
     * DCCトランザクションID設定
     *
     * @param string $dccTranID
     */
    public function setDccTranID($dccTranID)
    {
        $this->execTranDccOutput->setDccTranID($dccTranID);

    }

    /**
     * 決済日付設定
     *
     * @param string $tranDate
     */
    public function setTranDate($tranDate)
    {
        $this->execTranDccOutput->setTranDate($tranDate);

    }

    /**
     * MD5ハッシュ設定
     *
     * @param string $checkString
     */
    public function setCheckString($checkString)
    {
        $this->execTranDccOutput->setCheckString($checkString);

    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranDccOutput->setClientField1($clientField1);

    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranDccOutput->setClientField2($clientField2);

    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranDccOutput->setClientField3($clientField3);

    }

    /**
     * 取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranDccOutput->getErrList();
    }

    /**
     * 決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranDccOutput->getErrList();
    }

    /**
     * 取引登録エラー発生判定
     * @return boolean 取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranDccOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * 決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranDccOutput->getErrList();
        return 0 < count($execErrList);
    }

    /**
     * エラー発生判定
     * @return boolean エラー発生有無(true=エラー発生)
     */
    public function isErrorOccurred()
    {
        return $this->isEntryErrorOccurred() || $this->isExecErrorOccurred();
    }

}

?>
