<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\EntryTranPaypalOutput;
use Kcsl\GmoClient\com\gmo_pg\client\output\ExecTranPaypalOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranPaypalOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPaypalOutput.php';*/

/**
 * <b>Paypal取引登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 12-24-2009 00:00:00
 */
class EntryExecTranPaypalOutput
{

    /**
     * @var EntryTranPaypalOutput Paypal取引登録出力パラメタ
     */
    private $entryTranPaypalOutput;

    /**
     * @var ExecTranPaypalOutput Paypal決済実行出力パラメタ
     */
    private $execTranPaypalOutput;

    /**
     * コンストラクタ
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranPaypalOutput = new EntryTranPaypalOutput($params);
        $this->execTranPaypalOutput = new ExecTranPaypalOutput($params);
    }

    /**
     * Paypal取引登録出力パラメタ取得
     * @return EntryTranPaypalOutput Paypal取引登録出力パラメタ
     */
    public function getEntryTranPaypalOutput()
    {
        return $this->entryTranPaypalOutput;
    }

    /**
     * Paypal決済実行出力パラメタ取得
     * @return ExecTranPaypalOutput Paypal決済実行出力パラメタ
     */
    public function getExecTranPaypalOutput()
    {
        return $this->execTranPaypalOutput;
    }

    /**
     * オーダID取得
     * @return string オーダID
     */
    public function getOrderId()
    {
        return $this->entryTranPaypalOutput->getOrderId();
    }

    /**
     * アクセスID取得
     * @return string アクセスID
     */
    public function getAccessId()
    {
        return $this->entryTranPaypalOutput->getAccessId();
    }

    /**
     * アクセスパス取得
     * @return string アクセスパス
     */
    public function getAccessPass()
    {
        return $this->entryTranPaypalOutput->getAccessPass();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranPaypalOutput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranPaypalOutput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranPaypalOutput->getClientField3();
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopId()
    {
        return $this->execTranPaypalOutput->getShopId();
    }

    /**
     * ステータス取得
     * @return string ステータス
     */
    public function getStatus()
    {
        return $this->execTranPaypalOutput->getStatus();
    }

    /**
     * 処理日時取得
     * @return string 処理日時
     */
    public function getTranDate()
    {
        return $this->execTranPaypalOutput->getTranDate();
    }

    /**
     * トランザクションID取得
     * @return string トランザクションID
     */
    public function getTranId()
    {
        return $this->execTranPaypalOutput->getTranId();
    }

    /**
     * 改ざんチェック文字列取得
     * @return string 改ざんチェック文字列
     */
    public function getCheckString()
    {
        return $this->execTranPaypalOutput->getCheckString();
    }

    /**
     * Paypal取引登録出力パラメータ設定
     *
     * @param EntryTranPaypalOutput $entryTranPaypalOutput Paypal取引登録出力パラメータ
     */
    public function setEntryTranPaypalOutput($entryTranPaypalOutput)
    {
        $this->entryTranPaypalOutput = $entryTranPaypalOutput;
    }

    /**
     * Paypal決済実行パラメータ設定
     *
     * @param ExecTranPaypalOutput $execTranPaypalOutput Paypal取引登録出力パラメータ
     */
    public function setExecTranPaypalOutput($execTranPaypalOutput)
    {
        $this->execTranPaypalOutput = $execTranPaypalOutput;
    }

    /**
     * オーダID設定
     * @param $orderId オーダID
     */
    public function setOrderId($orderId)
    {
        $this->entryTranPaypalOutput->setOrderId($orderId);
        $this->execTranPaypalOutput->setOrderId($orderId);
    }

    /**
     * アクセスID設定
     * @param $accessId アクセスID
     */
    public function setAccessId($accessId)
    {
        $this->entryTranPaypalOutput->setAccessId($accessId);
    }

    /**
     * アクセスパス設定
     * @param $accessPass アクセスパス
     * @return unknown_type
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranPaypalOutput->setAccessPass($accessPass);
    }

    /**
     * 加盟店自由項目1設定
     * @param $clientField1 加盟店自由項目1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranPaypalOutput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     * @param $clientField2 加盟店自由項目2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranPaypalOutput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     * @param $clientField3 加盟店自由項目3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranPaypalOutput->setClientField3($clientField3);
    }

    /**
     * ショップID設定
     *
     * @param string $shopId ショップID
     */
    public function setShopId($shopId)
    {
        $this->execTranPaypalOutput->setShopId($shopId);
    }

    /**
     * ステータス設定
     *
     * @param string $status ステータス
     */
    public function setStatus($status)
    {
        $this->execTranPaypalOutput->setStatus($status);
    }

    /**
     * 処理日時設定
     *
     * @param string $tranDate 処理日時
     */
    public function setTranDate($tranDate)
    {
        $this->execTranPaypalOutput->setTranDate($tranDate);
    }

    /**
     * トランザクションID設定
     *
     * @param string $tranId トランザクションID
     */
    public function setTranId($tranId)
    {
        $this->tranId = $tranId;
    }

    /**
     * 改ざんチェック文字列設定
     *
     * @param string $checkString 改ざんチェック文字列
     */
    public function setCheckString($checkString)
    {
        $this->checkString = $checkString;
    }

    /**
     * Paypal取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranPaypalOutput->getErrList();
    }

    /**
     * Paypal決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranPaypalOutput->getErrList();
    }

    /**
     * Paypal取引登録エラー発生判定
     * @return boolean Paypal取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranPaypalOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * Paypal決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranPaypalOutput->getErrList();
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