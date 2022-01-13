<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/

/**
 * <b>楽天ペイ取引情報照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchTradeRakutenpayOutput extends BaseOutput
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
     * @var string 処理区分
     */
    private $jobCd;
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
     * @var string 楽天チャージID
     */
    private $rakutenChargeID;
    /**
     * @var string 再オーソリ期限
     */
    private $reauthLimitDate;
    /**
     * @var string 実売上期限
     */
    private $salesLimitDate;
    /**
     * @var string 金額変更期限
     */
    private $changeLimitDate;
    /**
     * @var string キャンセル期限
     */
    private $cancelLimitDate;
    /**
     * @var integer 楽天ペイで使用されたポイント
     */
    private $rakutenPoint;


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
        $this->setJobCd($params->get('JobCd'));
        $this->setAccessID($params->get('AccessID'));
        $this->setAccessPass($params->get('AccessPass'));
        $this->setAmount($params->get('Amount'));
        $this->setTax($params->get('Tax'));
        $this->setClientField1($params->get('ClientField1'));
        $this->setClientField2($params->get('ClientField2'));
        $this->setClientField3($params->get('ClientField3'));
        $this->setPayType($params->get('PayType'));
        $this->setRakutenChargeID($params->get('RakutenChargeID'));
        $this->setReauthLimitDate($params->get('ReauthLimitDate'));
        $this->setSalesLimitDate($params->get('SalesLimitDate'));
        $this->setChangeLimitDate($params->get('ChangeLimitDate'));
        $this->setCancelLimitDate($params->get('CancelLimitDate'));
        $this->setRakutenPoint($params->get('RakutenPoint'));

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
     * 処理区分取得
     * @return string 処理区分
     */
    public function getJobCd()
    {
        return $this->jobCd;
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
     * 楽天チャージID取得
     * @return string 楽天チャージID
     */
    public function getRakutenChargeID()
    {
        return $this->rakutenChargeID;
    }

    /**
     * 再オーソリ期限取得
     * @return string 再オーソリ期限
     */
    public function getReauthLimitDate()
    {
        return $this->reauthLimitDate;
    }

    /**
     * 実売上期限取得
     * @return string 実売上期限
     */
    public function getSalesLimitDate()
    {
        return $this->salesLimitDate;
    }

    /**
     * 金額変更期限取得
     * @return string 金額変更期限
     */
    public function getChangeLimitDate()
    {
        return $this->changeLimitDate;
    }

    /**
     * キャンセル期限取得
     * @return string キャンセル期限
     */
    public function getCancelLimitDate()
    {
        return $this->cancelLimitDate;
    }

    /**
     * 楽天ペイで使用されたポイント取得
     * @return integer 楽天ペイで使用されたポイント
     */
    public function getRakutenPoint()
    {
        return $this->rakutenPoint;
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
     * 処理区分設定
     *
     * @param string $jobCd
     */
    public function setJobCd($jobCd)
    {
        $this->jobCd = $jobCd;
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
     * 楽天チャージID設定
     *
     * @param string $rakutenChargeID
     */
    public function setRakutenChargeID($rakutenChargeID)
    {
        $this->rakutenChargeID = $rakutenChargeID;
    }

    /**
     * 再オーソリ期限設定
     *
     * @param string $reauthLimitDate
     */
    public function setReauthLimitDate($reauthLimitDate)
    {
        $this->reauthLimitDate = $reauthLimitDate;
    }

    /**
     * 実売上期限設定
     *
     * @param string $salesLimitDate
     */
    public function setSalesLimitDate($salesLimitDate)
    {
        $this->salesLimitDate = $salesLimitDate;
    }

    /**
     * 金額変更期限設定
     *
     * @param string $changeLimitDate
     */
    public function setChangeLimitDate($changeLimitDate)
    {
        $this->changeLimitDate = $changeLimitDate;
    }

    /**
     * キャンセル期限設定
     *
     * @param string $cancelLimitDate
     */
    public function setCancelLimitDate($cancelLimitDate)
    {
        $this->cancelLimitDate = $cancelLimitDate;
    }

    /**
     * 楽天ペイで使用されたポイント設定
     *
     * @param integer $rakutenPoint
     */
    public function setRakutenPoint($rakutenPoint)
    {
        $this->rakutenPoint = $rakutenPoint;
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
        $str .= 'JobCd=' . $this->encodeStr($this->getJobCd());
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
        $str .= 'RakutenChargeID=' . $this->encodeStr($this->getRakutenChargeID());
        $str .= '&';
        $str .= 'ReauthLimitDate=' . $this->encodeStr($this->getReauthLimitDate());
        $str .= '&';
        $str .= 'SalesLimitDate=' . $this->encodeStr($this->getSalesLimitDate());
        $str .= '&';
        $str .= 'ChangeLimitDate=' . $this->encodeStr($this->getChangeLimitDate());
        $str .= '&';
        $str .= 'CancelLimitDate=' . $this->encodeStr($this->getCancelLimitDate());
        $str .= '&';
        $str .= 'RakutenPoint=' . $this->encodeStr($this->getRakutenPoint());


        if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
    }

}

?>
