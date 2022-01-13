<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\EntryTranPostpayOutput;
use GmoPG\com\gmo_pg\client\output\ExecTranPostpayOutput;

/*require_once 'com/gmo_pg/client/output/EntryTranPostpayOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPostpayOutput.php';*/

/**
 * <b>PS後払い登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPostpayOutput
{

    /**
     * @var EntryTranPostpayOutput PS後払い登録出力パラメータ
     */
    private $entryTranPostpayOutput;/*@var $entryTranPostpayOutput EntryTranPostpayOutput */

    /**
     * @var ExecTranPostpayOutput PS後払い実行出力パラメータ
     */
    private $execTranPostpayOutput;/*@var $execTranPostpayOutput ExecTranPostpayOutput */

    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranPostpayOutput = new EntryTranPostpayOutput($params);
        $this->execTranPostpayOutput = new ExecTranPostpayOutput($params);
    }

    /**
     * PS後払い登録出力パラメータ取得
     * @return EntryTranPostpayOutput PS後払い登録出力パラメータ
     */
    public function &getEntryTranPostpayOutput()
    {
        return $this->entryTranPostpayOutput;
    }

    /**
     * PS後払い実行出力パラメータ取得
     * @return ExecTranPostpayOutput PS後払い実行出力パラメータ
     */
    public function &getExecTranPostpayOutput()
    {
        return $this->execTranPostpayOutput;
    }

    /**
     * PS後払い登録出力パラメータ設定
     *
     * @param EntryTranPostpayOutput $entryTranPostpayOutput PS後払い登録出力パラメータ
     */
    public function setEntryTranPostpayOutput(&$entryTranPostpayOutput)
    {
        $this->entryTranPostpayOutput = $entryTranPostpayOutput;
    }

    /**
     * PS後払い決済実行出力パラメータ設定
     *
     * @param ExecTranPostpayOutput $execTranPostpayOutput PS後払い実行出力パラメータ
     */
    public function setExecTranPostpayOutput(&$execTranPostpayOutput)
    {
        $this->execTranPostpayOutput = $execTranPostpayOutput;
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->entryTranPostpayOutput->getAccessID();

    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->entryTranPostpayOutput->getAccessPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->execTranPostpayOutput->getOrderID();

    }

    /**
     * 現状態取得
     * @return string 現状態
     */
    public function getStatus()
    {
        return $this->execTranPostpayOutput->getStatus();

    }

    /**
     * 処理日時取得
     * @return string 処理日時
     */
    public function getTranDate()
    {
        return $this->execTranPostpayOutput->getTranDate();

    }

    /**
     * 後払い取引ID取得
     * @return string 後払い取引ID
     */
    public function getPostpayTransactionId()
    {
        return $this->execTranPostpayOutput->getPostpayTransactionId();

    }

    /**
     * 改ざんチェック文字列取得
     * @return string 改ざんチェック文字列
     */
    public function getCheckString()
    {
        return $this->execTranPostpayOutput->getCheckString();

    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranPostpayOutput->getClientField1();

    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranPostpayOutput->getClientField2();

    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->entryTranPostpayOutput->setAccessID($accessID);

    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->entryTranPostpayOutput->setAccessPass($accessPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->execTranPostpayOutput->setOrderID($orderID);

    }

    /**
     * 現状態設定
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->execTranPostpayOutput->setStatus($status);

    }

    /**
     * 処理日時設定
     *
     * @param string $tranDate
     */
    public function setTranDate($tranDate)
    {
        $this->execTranPostpayOutput->setTranDate($tranDate);

    }

    /**
     * 後払い取引ID設定
     *
     * @param string $postpayTransactionId
     */
    public function setPostpayTransactionId($postpayTransactionId)
    {
        $this->execTranPostpayOutput->setPostpayTransactionId($postpayTransactionId);

    }

    /**
     * 改ざんチェック文字列設定
     *
     * @param string $checkString
     */
    public function setCheckString($checkString)
    {
        $this->execTranPostpayOutput->setCheckString($checkString);

    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranPostpayOutput->setClientField1($clientField1);

    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranPostpayOutput->setClientField2($clientField2);

    }

    /**
     * 取引登録エラーリスト取得
     * @return  array エラーリスト
     */
    public function &getEntryErrList()
    {
        return $this->entryTranPostpayOutput->getErrList();
    }

    /**
     * 決済実行エラーリスト取得
     * @return array エラーリスト
     */
    public function &getExecErrList()
    {
        return $this->execTranPostpayOutput->getErrList();
    }

    /**
     * 取引登録エラー発生判定
     * @return boolean 取引登録時エラー有無(true=エラー発生)
     */
    public function isEntryErrorOccurred()
    {
        $entryErrList =& $this->entryTranPostpayOutput->getErrList();
        return 0 < count($entryErrList);
    }

    /**
     * 決済実行エラー発生判定
     * @return boolean 決済実行時エラー有無(true=エラー発生)
     */
    public function isExecErrorOccurred()
    {
        $execErrList =& $this->execTranPostpayOutput->getErrList();
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
