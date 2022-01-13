<?php
namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/

/**
 * <b>多通貨クレジット決済（DCC)取引登録　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryTranDccOutput extends BaseOutput
{

    /**
     * @var string オーダーID
     */
    private $orderID;
    /**
     * @var string 取引ID
     */
    private $accessID;
    /**
     * @var string 取引パスワード
     */
    private $accessPass;
    /**
     * @var string 支払通貨コード
     */
    private $dccCurrency;
    /**
     * @var bigDecimal 支払通貨決済額
     */
    private $dccAmount;
    /**
     * @var bigDecimal 為替レート
     */
    private $dccRate;
    /**
     * @var string FX追跡番号(FTN)
     */
    private $ftn;


    /**
     * コンストラクタ
     *
     * @param IgnoreCaseMap $params 出力パラメータ
     */
    public function __construct($params = null)
    {
        parent::__construct($params);

        // 引数が無い場合は戻る
        if (is_null($params)) {
            return;
        }

        // マップの展開
        $this->setOrderID($params->get('OrderID'));
        $this->setAccessID($params->get('AccessID'));
        $this->setAccessPass($params->get('AccessPass'));
        $this->setDccCurrency($params->get('DccCurrency'));
        $this->setDccAmount($params->get('DccAmount'));
        $this->setDccRate($params->get('DccRate'));
        $this->setFtn($params->get('Ftn'));

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
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->accessID;
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->accessPass;
    }

    /**
     * 支払通貨コード取得
     * @return string 支払通貨コード
     */
    public function getDccCurrency()
    {
        return $this->dccCurrency;
    }

    /**
     * 支払通貨決済額取得
     * @return bigDecimal 支払通貨決済額
     */
    public function getDccAmount()
    {
        return $this->dccAmount;
    }

    /**
     * 為替レート取得
     * @return bigDecimal 為替レート
     */
    public function getDccRate()
    {
        return $this->dccRate;
    }

    /**
     * FX追跡番号(FTN)取得
     * @return string FX追跡番号(FTN)
     */
    public function getFtn()
    {
        return $this->ftn;
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
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->accessID = $accessID;
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->accessPass = $accessPass;
    }

    /**
     * 支払通貨コード設定
     *
     * @param string $dccCurrency
     */
    public function setDccCurrency($dccCurrency)
    {
        $this->dccCurrency = $dccCurrency;
    }

    /**
     * 支払通貨決済額設定
     *
     * @param bigDecimal $dccAmount
     */
    public function setDccAmount($dccAmount)
    {
        $this->dccAmount = $dccAmount;
    }

    /**
     * 為替レート設定
     *
     * @param bigDecimal $dccRate
     */
    public function setDccRate($dccRate)
    {
        $this->dccRate = $dccRate;
    }

    /**
     * FX追跡番号(FTN)設定
     *
     * @param string $ftn
     */
    public function setFtn($ftn)
    {
        $this->ftn = $ftn;
    }

    /**
     * 文字列表現
     * <p>
     *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
     * </p>
     * @return string 出力パラメータの文字列表現
     */
    public function toString()
    {
        $str = '';
        $str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
        $str .= '&';
        $str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
        $str .= '&';
        $str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
        $str .= '&';
        $str .= 'DccCurrency=' . $this->encodeStr($this->getDccCurrency());
        $str .= '&';
        $str .= 'DccAmount=' . $this->encodeStr($this->getDccAmount());
        $str .= '&';
        $str .= 'DccRate=' . $this->encodeStr($this->getDccRate());
        $str .= '&';
        $str .= 'Ftn=' . $this->encodeStr($this->getFtn());


        if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
    }

}

?>
