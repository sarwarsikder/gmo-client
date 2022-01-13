<?php
namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once('com/gmo_pg/client/input/BaseInput.php');

/**
 * <b>一括決済サービス売上データ変更　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class AlterBulkPaymentInput extends BaseInput
{

    /**
     * @var string ショップID
     */
    private $shopID;
    /**
     * @var string ショップパスワード
     */
    private $shopPass;
    /**
     * @var string 処理指定日
     */
    private $targetDate;
    /**
     * @var integer レコード通番
     */
    private $recordNumber;
    /**
     * @var string オーダーID
     */
    private $orderID;
    /**
     * @var integer 利用金額
     */
    private $amount;
    /**
     * @var integer 税送料
     */
    private $tax;
    /**
     * @var string 加盟店自由項目1
     */
    private $clientField1;
    /**
     * @var string 加盟店自由項目2
     */
    private $clientField2;
    /**
     * @var string 加盟店自由項目3
     */
    private $clientField3;


    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        parent::__construct($params);
    }


    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->shopID;
    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->shopPass;
    }

    /**
     * 処理指定日取得
     * @return string 処理指定日
     */
    public function getTargetDate()
    {
        return $this->targetDate;
    }

    /**
     * レコード通番取得
     * @return integer レコード通番
     */
    public function getRecordNumber()
    {
        return $this->recordNumber;
    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * 利用金額取得
     * @return integer 利用金額
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->clientField1;
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->clientField2;
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->clientField3;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->shopID = $shopID;
    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->shopPass = $shopPass;
    }

    /**
     * 処理指定日設定
     *
     * @param string $targetDate
     */
    public function setTargetDate($targetDate)
    {
        $this->targetDate = $targetDate;
    }

    /**
     * レコード通番設定
     *
     * @param integer $recordNumber
     */
    public function setRecordNumber($recordNumber)
    {
        $this->recordNumber = $recordNumber;
    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    /**
     * 利用金額設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->clientField1 = $clientField1;
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->clientField2 = $clientField2;
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->clientField3 = $clientField3;
    }


    /**
     * デフォルト値設定
     */
    public function setDefaultValues()
    {

    }

    /**
     * 入力パラメータ群の値を設定する
     *
     * @param IgnoreCaseMap $params 入力パラメータ
     */
    public function setInputValues($params)
    {
        // 入力パラメータがnullの場合は設定処理を行わない
        if (is_null($params)) {
            return;
        }

        $this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
        $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
        $this->setTargetDate($this->getStringValue($params, 'TargetDate', $this->getTargetDate()));
        $this->setRecordNumber($this->getStringValue($params, 'RecordNumber', $this->getRecordNumber()));
        $this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
        $this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
        $this->setTax($this->getStringValue($params, 'Tax', $this->getTax()));
        $this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
        $this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
        $this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));

    }

    /**
     * 文字列表現
     * @return string 接続文字列表現
     */
    public function toString()
    {
        $str = '';
        $str .= 'ShopID=' . $this->encodeStr($this->getShopID());
        $str .= '&';
        $str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
        $str .= '&';
        $str .= 'TargetDate=' . $this->encodeStr($this->getTargetDate());
        $str .= '&';
        $str .= 'RecordNumber=' . $this->encodeStr($this->getRecordNumber());
        $str .= '&';
        $str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
        $str .= '&';
        $str .= 'Amount=' . $this->encodeStr($this->getAmount());
        $str .= '&';
        $str .= 'Tax=' . $this->encodeStr($this->getTax());
        $str .= '&';
        $str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
        $str .= '&';
        $str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
        $str .= '&';
        $str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());

        return $str;
    }


}

?>
