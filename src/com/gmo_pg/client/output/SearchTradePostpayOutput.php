<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/

/**
 * <b>PS後払い取引情報照会 - PS後払い　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchTradePostpayOutput extends BaseOutput
{

    /**
     * @var string 現状態
     */
    private $status;
    /**
     * @var string 処理日時
     */
    private $processDate;
    /**
     * @var string 取引ID
     */
    private $accessID;
    /**
     * @var string 取引パスワード
     */
    private $accessPass;
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
     * @var string 決済方法
     */
    private $payType;
    /**
     * @var integer キャンセル金額
     */
    private $postpayCancelAmount;
    /**
     * @var integer キャンセル税送料
     */
    private $postpayCancelTax;
    /**
     * @var string 後払い取引ID
     */
    private $postpayTransactionId;
    /**
     * @var string 目視審査結果理由
     */
    private $postpayCreditResultManualReason;
    /**
     * @var string 強制キャンセル予定日
     */
    private $forceCancelDate;
    /**
     * @var string 入金状況
     */
    private $postpayPaymentStatus;
    /**
     * @var string 入金処理日（速報）
     */
    private $postpayPaymentDateFast;
    /**
     * @var string 入金処理日（確報）
     */
    private $postpayPaymentDateConf;


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
        $this->setStatus($params->get('Status'));
        $this->setProcessDate($params->get('ProcessDate'));
        $this->setAccessID($params->get('AccessID'));
        $this->setAccessPass($params->get('AccessPass'));
        $this->setAmount($params->get('Amount'));
        $this->setTax($params->get('Tax'));
        $this->setClientField1($params->get('ClientField1'));
        $this->setClientField2($params->get('ClientField2'));
        $this->setClientField3($params->get('ClientField3'));
        $this->setPayType($params->get('PayType'));
        $this->setPostpayCancelAmount($params->get('PostpayCancelAmount'));
        $this->setPostpayCancelTax($params->get('PostpayCancelTax'));
        $this->setPostpayTransactionId($params->get('PostpayTransactionId'));
        $this->setPostpayCreditResultManualReason($params->get('PostpayCreditResultManualReason'));
        $this->setForceCancelDate($params->get('ForceCancelDate'));
        $this->setPostpayPaymentStatus($params->get('PostpayPaymentStatus'));
        $this->setPostpayPaymentDateFast($params->get('PostpayPaymentDateFast'));
        $this->setPostpayPaymentDateConf($params->get('PostpayPaymentDateConf'));

    }

    /**
     * 現状態取得
     * @return string 現状態
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 処理日時取得
     * @return string 処理日時
     */
    public function getProcessDate()
    {
        return $this->processDate;
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
     * 決済方法取得
     * @return string 決済方法
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * キャンセル金額取得
     * @return integer キャンセル金額
     */
    public function getPostpayCancelAmount()
    {
        return $this->postpayCancelAmount;
    }

    /**
     * キャンセル税送料取得
     * @return integer キャンセル税送料
     */
    public function getPostpayCancelTax()
    {
        return $this->postpayCancelTax;
    }

    /**
     * 後払い取引ID取得
     * @return string 後払い取引ID
     */
    public function getPostpayTransactionId()
    {
        return $this->postpayTransactionId;
    }

    /**
     * 目視審査結果理由取得
     * @return string 目視審査結果理由
     */
    public function getPostpayCreditResultManualReason()
    {
        return $this->postpayCreditResultManualReason;
    }

    /**
     * 強制キャンセル予定日取得
     * @return string 強制キャンセル予定日
     */
    public function getForceCancelDate()
    {
        return $this->forceCancelDate;
    }

    /**
     * 入金状況取得
     * @return string 入金状況
     */
    public function getPostpayPaymentStatus()
    {
        return $this->postpayPaymentStatus;
    }

    /**
     * 入金処理日（速報）取得
     * @return string 入金処理日（速報）
     */
    public function getPostpayPaymentDateFast()
    {
        return $this->postpayPaymentDateFast;
    }

    /**
     * 入金処理日（確報）取得
     * @return string 入金処理日（確報）
     */
    public function getPostpayPaymentDateConf()
    {
        return $this->postpayPaymentDateConf;
    }

    /**
     * 現状態設定
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 処理日時設定
     *
     * @param string $processDate
     */
    public function setProcessDate($processDate)
    {
        $this->processDate = $processDate;
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
     * 決済方法設定
     *
     * @param string $payType
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    }

    /**
     * キャンセル金額設定
     *
     * @param integer $postpayCancelAmount
     */
    public function setPostpayCancelAmount($postpayCancelAmount)
    {
        $this->postpayCancelAmount = $postpayCancelAmount;
    }

    /**
     * キャンセル税送料設定
     *
     * @param integer $postpayCancelTax
     */
    public function setPostpayCancelTax($postpayCancelTax)
    {
        $this->postpayCancelTax = $postpayCancelTax;
    }

    /**
     * 後払い取引ID設定
     *
     * @param string $postpayTransactionId
     */
    public function setPostpayTransactionId($postpayTransactionId)
    {
        $this->postpayTransactionId = $postpayTransactionId;
    }

    /**
     * 目視審査結果理由設定
     *
     * @param string $postpayCreditResultManualReason
     */
    public function setPostpayCreditResultManualReason($postpayCreditResultManualReason)
    {
        $this->postpayCreditResultManualReason = $postpayCreditResultManualReason;
    }

    /**
     * 強制キャンセル予定日設定
     *
     * @param string $forceCancelDate
     */
    public function setForceCancelDate($forceCancelDate)
    {
        $this->forceCancelDate = $forceCancelDate;
    }

    /**
     * 入金状況設定
     *
     * @param string $postpayPaymentStatus
     */
    public function setPostpayPaymentStatus($postpayPaymentStatus)
    {
        $this->postpayPaymentStatus = $postpayPaymentStatus;
    }

    /**
     * 入金処理日（速報）設定
     *
     * @param string $postpayPaymentDateFast
     */
    public function setPostpayPaymentDateFast($postpayPaymentDateFast)
    {
        $this->postpayPaymentDateFast = $postpayPaymentDateFast;
    }

    /**
     * 入金処理日（確報）設定
     *
     * @param string $postpayPaymentDateConf
     */
    public function setPostpayPaymentDateConf($postpayPaymentDateConf)
    {
        $this->postpayPaymentDateConf = $postpayPaymentDateConf;
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
        $str .= 'Status=' . $this->encodeStr($this->getStatus());
        $str .= '&';
        $str .= 'ProcessDate=' . $this->encodeStr($this->getProcessDate());
        $str .= '&';
        $str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
        $str .= '&';
        $str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
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
        $str .= '&';
        $str .= 'PayType=' . $this->encodeStr($this->getPayType());
        $str .= '&';
        $str .= 'PostpayCancelAmount=' . $this->encodeStr($this->getPostpayCancelAmount());
        $str .= '&';
        $str .= 'PostpayCancelTax=' . $this->encodeStr($this->getPostpayCancelTax());
        $str .= '&';
        $str .= 'PostpayTransactionId=' . $this->encodeStr($this->getPostpayTransactionId());
        $str .= '&';
        $str .= 'PostpayCreditResultManualReason=' . $this->encodeStr($this->getPostpayCreditResultManualReason());
        $str .= '&';
        $str .= 'ForceCancelDate=' . $this->encodeStr($this->getForceCancelDate());
        $str .= '&';
        $str .= 'PostpayPaymentStatus=' . $this->encodeStr($this->getPostpayPaymentStatus());
        $str .= '&';
        $str .= 'PostpayPaymentDateFast=' . $this->encodeStr($this->getPostpayPaymentDateFast());
        $str .= '&';
        $str .= 'PostpayPaymentDateConf=' . $this->encodeStr($this->getPostpayPaymentDateConf());


        if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
    }

}

?>
