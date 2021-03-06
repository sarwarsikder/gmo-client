<?php
namespace Kcsl\GmoClient\com\gmo_pg\client\output;

use Kcsl\GmoClient\com\gmo_pg\client\output\BaseOutput;
require_once ('../common/Gmopg_Const.php');

//require_once ('com/gmo_pg/client/output/BaseOutput.php');
//require_once ('com/gmo_pg/client/common/Gmopg_Const.php');
/**
 * <b>取引照会マルチ　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchTradeMultiOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderId;

	/**
	 * @var string 取引ステータス
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
	private $accessId;

	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;

	/**
	 * @var  string 商品コード
	 */
	private $itemCode;

	/**
	 * @var string 通貨コード
	 */
	private $currency;

	/**
	 * @var integer 利用金額
	 */
	private $amount;

	/**
	 * @var integer 税送料
	 */
	private $tax;

	/**
	 * @var BigDecimal 利用金額
	 */
	private $amountBigDecimal;

	/**
	 * @var BigDecimal 税送料
	 */
	private $taxBigDecimal;

	/**
	 * @var string サイトID
	 */
	private $siteId;

	/**
	 * @var string 会員ID
	 */
	private $memberId;

	/**
	 * @var string カード番号
	 */
	private $cardNo;

	/**
	 * @var string カード有効期限
	 */
	private $expire;

	/**
	 * @var string 支払い方法
	 */
	private $method;

	/**
	 * @var integer 支払回数
	 */
	private $payTimes;

	/**
	 * @var string 仕向先コード
	 */
	private $forward;

	/**
	 * @var string トランザクションID
	 */
	private $transactionId;

	/**
	 * @var string 承認番号
	 */
	private $approve;

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
	 * 決済方法
	 * 0：クレジット
	 * 1：モバイルSuica
	 * 2：モバイルEdy
	 * 3：コンビニ
	 * 4：Pay-easy
	 * 5：Paypal
	 * 7：Webmoney
	 * 8：au簡単決済
	 * 9：ドコモ払い
	 * 10：ドコモ継続決済
	 * 11：ソフトバンクケータイ支払い決済
	 * 12：じぶん銀行決済
	 * 13：au継続課金
	 * 41：多通貨クレジット決済（DCC)
	 * 30：PGプリカ
	 * 14：JCBプリカ
	 * 16：NET CASH
	 * 18：楽天ID
	 * 19：多通貨クレジットカード
	 * 20：LINE Pay
	 * 21：ネット銀聯
	 * 22：ソフトバンク継続
	 * 23：銀行振込(バーチャル口座)
	 * 24：リクルートかんたん支払い
	 * 25：リクルートかんたん支払い継続課金
	 * 26：自動売上
	 * 27：ブランドトークン決済
	 * 28：口振セレクト
	 * 29：Paid
	 * 31：ドコモ払い_随時決済
	 * 33：auかんたん決済支払い（利用承諾）
	 * 34：ソフトバンクまとめて支払い(Ｂ)(利用承諾)
	 * 35：Paysle
	 * 36：GANB
	 * 38：Amazon Pay
	 * 39：FamiPay
	 * 40：エポスかんたん決済
	 * 43：メルペイ
	 * 44：PS後払い
	 * 45：PayPay
	 * 47：d払い(ミニアプリ)
	 * 48：PayPay随時(利用承諾)
	 * 49：au PAY
	 * 50：楽天ペイ

	 *
	 * @var string
	 */
	private $payType;

	private $cvsCode;
	private $cvsConfNo;
	private $cvsReceiptNo;
	private $edyReceiptNo;
	private $edyOrderNo;
	private $suicaReceiptNo;
	private $suicaOrderNo;
	private $custId;
	private $bkCode;
	private $confNo;
	private $paymentTerm;
	private $encryptReceiptNo;
	private $payeasyPaymentURL;

	/**
	 * @var string WebMoney管理番号
	 */
	private $webmoneyMangementNo;

	/**
	 * @var string WebMoney決済コード
	 */
	private $webmoneySettleCode;

	/**
	 * @var string auかんたん決済決済情報番号
	 */
	private $auPayInfoNo;

	/**
	 * @var string auかんたん決済支払方法
	 */
	private $auPayMethod;

	/**
	 * @var string auかんたん決済キャンセル金額
	 */
	private $auCancelAmount;

	/**
	 * @var string auかんたん決済キャンセル税送料
	 */
	private $auCancelTax;

	/**
	 * @var string ドコモ決済番号
	 */
	private $docomoSettlementCode;

	/**
	 * @var string ドコモキャンセル金額
	 */
	private $docomoCancelAmount;

	/**
	 * @var string ドコモキャンセル税送料
	 */
	private $docomoCancelTax;

	/**
	 * @var string ドコモ増加金額
	 */
	private $docomoIncreaseAmount;

	/**
	 * @var string ドコモ増加税送料
	 */
	private $docomoIncreaseTax;

	/**
	 * @var string ソフトバンク処理トラッキングID
	 */
	private $sbTrackingId;

	/**
	 * @var integer ソフトバンクキャンセル金額
	 */
	private $sbCancelAmount;

	/**
	 * @var integer ソフトバンクキャンセル税送料
	 */
	private $sbCancelTax;

	/**
	 * @var じぶん銀行受付番号
	 */
	private $jibunReceiptNo;

	/**
	 * @var integer au継続 初回課金利用金額
	 */
	private $firstAmount;
	/**
	 * @var integer au継続 初回課金税送料
	 */
	private $firstTax;
	/**
	 * @var string au継続 課金タイミング区分
	 */
	private $accountTimingKbn;
	/**
	 * @var string au継続 課金タイミング
	 */
	private $accountTiming;
	/**
	 * @var string au継続 初回課金日
	 */
	private $firstAccountDate;
	/**
	 * @var string au継続 エラーコード
	 */
	private $auContinuaceErrCode;
	/**
	 * @var string au継続 エラー詳細
	 */
	private $auContinuaceErrInfo;
	/**
	 * @var string au継続 au継続課金ID
	 */
	private $auContinueAccountId;
	/**
	 * @var string 最終処理日時
	 */
	private $processLastDate;
	/**
	 * @var integer Dcc 増額金額の累積
	 */
	private $totalIncreaseAmount;
	/**
	 * @var integer Dcc 増額税送料の累積
	 */
	private $totalIncreaseTax;
	/**
	 * @var bigDecimal Dcc DCC金額
	 */
	private $dccAmount;
	/**
	 * @var string Dcc FX追跡番号(FTN)
	 */
	private $dccFtn;
	/**
	 * @var string Paypal 決済タイプ
	 */
	private $paypalPaymentType;
	/**
	 * @var string Paypal 支払同意現状態
	 */
	private $paypalAgreementCurrentstatus;
	/**
	 * @var string Paypal 支払同意ＩＤ
	 */
	private $paypalAgreementId;
	/**
	 * @var string Paypal 随時決済用支払同意ＩＤ
	 */
	private $paypalBillingAgreementId;
	/**
	 * @var string Paypal 利用承諾日付
	 */
	private $paypalAgreementStartDate;
	/**
	 * @var string Paypal 利用終了日付
	 */
	private $paypalAgreementEndDate;
	/**
	 * @var string JcbPreca 伝票番号
	 */
	private $jcbPrecaSalesCode;
	/**
	 * @var string Netcash NET CASH決済方法
	 */
	private $netCashPayType;
	/**
	 * @var string RakutenId 注文日
	 */
	private $orderDate;
	/**
	 * @var string RakutenId 完了日
	 */
	private $completionDate;
	/**
	 * @var integer RakutenId クーポン金額
	 */
	private $rakutenidCouponFee;
	/**
	 * @var string RakutenId サブスクリプションID
	 */
	private $subscriptionId;
	/**
	 * @var string RakutenId 決済用サブスクリプションID
	 */
	private $settlementSubscriptionId;
	/**
	 * @var string Linepay LINE Pay商品名
	 */
	private $linepayProductName;
	/**
	 * @var bigDecimal Linepay LINE Payキャンセル金額
	 */
	private $linepayCancelAmount;
	/**
	 * @var bigDecimal Linepay LINE Payキャンセル税送料
	 */
	private $linepayCancelTax;
	/**
	 * @var string Linepay LINE Pay支払手段
	 */
	private $linepayPayMethod;
	/**
	 * @var string Linepay RegKey
	 */
	private $linepayRegKey;
	/**
	 * @var string Linepay 決済用RegKey
	 */
	private $linepaySettlementRegKey;
	/**
	 * @var string Unionpay 商品名
	 */
	private $commodityName;
	/**
	 * @var string SbContinuance 課金開始月
	 */
	private $sbStartChargeMonth;
	/**
	 * @var bigDecimal Virtualaccount 振込要求金額
	 */
	private $vaRequestAmount;
	/**
	 * @var string Virtualaccount 取引有効期限
	 */
	private $vaExpireDate;
	/**
	 * @var string Virtualaccount 取引事由
	 */
	private $vaTradeReason;
	/**
	 * @var string Virtualaccount 振込依頼者氏名
	 */
	private $vaTradeClientName;
	/**
	 * @var string Virtualaccount 振込依頼者メールアドレス
	 */
	private $vaTradeClientMailaddress;
	/**
	 * @var string Virtualaccount 銀行コード
	 */
	private $vaBankCode;
	/**
	 * @var string Virtualaccount 銀行名
	 */
	private $vaBankName;
	/**
	 * @var string Virtualaccount 支店コード
	 */
	private $vaBranchCode;
	/**
	 * @var string Virtualaccount 支店名
	 */
	private $vaBranchName;
	/**
	 * @var string Virtualaccount 科目
	 */
	private $vaAccountType;
	/**
	 * @var string Virtualaccount 口座番号
	 */
	private $vaAccountNumber;
	/**
	 * @var string Virtualaccount 照会番号
	 */
	private $vaInInquiryNumber;
	/**
	 * @var string Virtualaccount 勘定日
	 */
	private $vaInSettlementDate;
	/**
	 * @var bigDecimal Virtualaccount 入金額
	 */
	private $vaInAmount;
	/**
	 * @var string Virtualaccount 振込依頼人コード
	 */
	private $vaInClientCode;
	/**
	 * @var string Virtualaccount 振込依頼人名
	 */
	private $vaInClientName;
	/**
	 * @var string Virtualaccount 摘要
	 */
	private $vaInSummary;
	/**
	 * @var string Virtualaccount 継続口座ID
	 */
	private $vaReserveID;
	/**
	 * @var string Virtualaccount 振込コード
	 */
	private $vaTradeCode;
	/**
	 * @var string Recruit 注文番号
	 */
	private $rcOrderId;
	/**
	 * @var string Recruit 顧客IDハッシュ値
	 */
	private $rcCustomerId;
	/**
	 * @var string Recruit 注文時刻
	 */
	private $rcOrderTime;
	/**
	 * @var string Recruit 行使ポイント数
	 */
	private $rcUsePoint;
	/**
	 * @var string Recruit リクルート原資クーポン割引額
	 */
	private $rcUseCoupon;
	/**
	 * @var string Recruit 加盟店様原資クーポン割引額
	 */
	private $rcUseShopCoupon;
	/**
	 * @var string Recruit オーソリ期限延長実施日
	 */
	private $rcUpdateAuthDay;
	/**
	 * @var string RecruitContinuance 契約番号
	 */
	private $rcContractId;
	/**
	 * @var string RecruitContinuance 課金開始月
	 */
	private $rcStartChargeMonth;
	/**
	 * @var string Brandtoken カード番号トークン
	 */
	private $cardNoToken;
	/**
	 * @var string Bankaccount 振替指定日
	 */
	private $baTargetDate;
	/**
	 * @var string Bankaccount 請求依頼受付終了日
	 */
	private $baRequestAcceptEndDate;
	/**
	 * @var string Bankaccount 振替結果反映予定日
	 */
	private $baTransferReturnDate;
	/**
	 * @var string Bankaccount 実引落日
	 */
	private $baWithdrawalDate;
	/**
	 * @var string Bankaccount 振替結果コード
	 */
	private $baResultCode;
	/**
	 * @var bigDecimal Paid Paidキャンセル金額
	 */
	private $paidCancelAmount;
	/**
	 * @var bigDecimal Paid Paidキャンセル税送料
	 */
	private $paidCancelTax;
	/**
	 * @var string Paid Paid取引先ID
	 */
	private $paidBuyerID;
	/**
	 * @var string Paid Paid伝票番号
	 */
	private $paidCode;
	/**
	 * @var string Paid 注文内容
	 */
	private $paidContents;
	/**
	 * @var string DocomoAccept ドコモ承諾番号
	 */
	private $docomoAcceptCode;
	/**
	 * @var string AuAccept au決済情報番号
	 */
	private $auAcceptCode;
	/**
	 * @var string SbAccept SB承諾番号
	 */
	private $sbAcceptCode;
	/**
	 * @var string Paysle 表示開始日
	 */
	private $paysleDisplayTerm;
	/**
	 * @var string Paysle 支払期限日
	 */
	private $payslePaymentTerm;
	/**
	 * @var string Paysle 購入者通知日
	 */
	private $paysleNotifyTerm;
	/**
	 * @var string Paysle 注文管理ID
	 */
	private $paysleOrderSerial;
	/**
	 * @var string Paysle バーコードイメージ横幅
	 */
	private $paysleBarcodeWidth;
	/**
	 * @var string Paysle バーコードイメージ縦幅
	 */
	private $paysleBarcodeHeight;
	/**
	 * @var string Paysle バーコードイメージ形式
	 */
	private $paysleBarcodeFormat;
	/**
	 * @var string Paysle バーコードデータ
	 */
	private $paysleBarcode;
	/**
	 * @var string Paysle 入金日時
	 */
	private $finishDate;
	/**
	 * @var string GANB 銀行コード
	 */
	private $ganbBankCode;
	/**
	 * @var string GANB 銀行名 
	 */
	private $ganbBankName;
	/**
	 * @var string GANB 支店コード
	 */
	private $ganbBranchCode;
	/**
	 * @var string GANB 支店名
	 */
	private $ganbBranchName;
	/**
	 * @var string GANB 預金種別
	 */
	private $ganbAccountType;
	/**
	 * @var string GANB 口座番号
	 */
	private $ganbAccountNumber;
	/**
	 * @var string GANB 口座名義
	 */
	private $ganbAccountHolderName;
	/**
	 * @var string GANB 取引有効日数
	 */
	private $ganbExpireDays;
	/**
	 * @var string GANB 取引有効期限
	 */
	private $ganbExpireDate;
	/**
	 * @var string GANB 取引事由
	 */
	private $ganbTradeReason;
	/**
	 * @var string GANB 取引依頼人名
	 */
	private $ganbTradeClientName;
	/**
	 * @var string GANB 累計額
	 */
	private $ganbTotalTransferAmount;
	/**
	 * @var string GANB 累計回数
	 */
	private $ganbTotalTransferCount;
	/**
	 * @var string GANB 最終振込額
	 */
	private $ganbLatestTransferAmount;
	/**
	 * @var string GANB 最終振込日
	 */
	private $ganbLatestTransferDate;
	/**
	 * @var string GANB 最終振込依頼人名
	 */
	private $ganbLatestTransferName;
	/**
	 * @var string GANB 最終仕向銀行名
	 */
	private $ganbLatestTransferBankName;
	/**
	 * @var string Amazonpay AmazonオーダーリファレンスID
	 */
	private $amazonOrderReferenceID;
	/**
	 * @var integer Amazonpay キャンセル金額
	 */
	private $amazonPayCancelAmount;
	/**
	 * @var integer Amazonpay キャンセル税送料金額
	 */
	private $amazonPayCancelTax;
	/**
	 * @var string Amazonpay AmazonビリングアグリーメントID
	 */
	private $amazonBillingAgreementID;
	/**
	 * @var string Famipay 売上No
	 */
	private $uriageNO;
	/**
	 * @var string Famipay 認証連携トークン
	 */
	private $authToken;
	/**
	 * @var string Epospay エポスかんたん決済取引ID
	 */
	private $eposTradeID;
	/**
	 * @var integer Epospay 利用クーポン額
	 */
	private $eposUseCouponAmount;
	/**
	 * @var integer Epospay 利用エポスポイント
	 */
	private $eposUsePoint;
	/**
	 * @var integer Epospay キャンセル金額の累積
	 */
	private $totalCancelAmount;
	/**
	 * @var integer Epospay キャンセル税送料金額の累積
	 */
	private $totalCancelTax;
	/**
	 * @var integer Merpay キャンセル金額の累計
	 */
	private $merpayCancelAmount;
	/**
	 * @var integer Merpay キャンセル税送料の累計
	 */
	private $merpayCancelTax;
	/**
	 * @var string Merpay メルペイ取引番号
	 */
	private $merpayInquiryCode;
	/**
	 * @var string Merpay サブスクリプションタイプ
	 */
	private $merpaySubscriptionType;
	/**
	 * @var string Merpay サブスクリプションＩＤ
	 */
	private $merpaySubscriptionId;
	/**
	 * @var string Merpay サブスクリプション現状態
	 */
	private $merpaySubscriptionCurrentStatus;
	/**
	 * @var string Merpay サブスクリプション利用承諾日時
	 */
	private $merpaySubscriptionStartDate;
	/**
	 * @var string Merpay サブスクリプション利用終了日時
	 */
	private $merpaySubscriptionEndDate;
	/**
	 * @var string Merpay 随時決済で用いたサブスクリプションＩＤ
	 */
	private $merpaySettlementSubscriptionId;
	/**
	 * @var integer Postpay キャンセル金額
	 */
	private $postpayCancelAmount;
	/**
	 * @var integer Postpay キャンセル税送料
	 */
	private $postpayCancelTax;
	/**
	 * @var string Postpay 後払い取引ID
	 */
	private $postpayTransactionId;
	/**
	 * @var string Postpay 目視審査結果理由
	 */
	private $postpayCreditResultManualReason;
	/**
	 * @var string Postpay 強制キャンセル予定日
	 */
	private $forceCancelDate;
	/**
	 * @var string Postpay 入金状況
	 */
	private $postpayPaymentStatus;
	/**
	 * @var string Postpay 入金処理日（速報）
	 */
	private $postpayPaymentDateFast;
	/**
	 * @var string Postpay 入金処理日（確報）
	 */
	private $postpayPaymentDateConf;
	/**
	 * @var integer Paypay キャンセル金額
	 */
	private $payPayCancelAmount;
	/**
	 * @var integer Paypay キャンセル税送料
	 */
	private $payPayCancelTax;
	/**
	 * @var string Paypay PayPayトラッキングＩＤ
	 */
	private $payPayTrackingID;
	/**
	 * @var string Paypay PayPay決済番号
	 */
	private $payPayOrderID;
	/**
	 * @var string PaypayAccept PayPay承諾番号
	 */
	private $payPayAcceptCode;
	/**
	 * @var integer Aupay キャンセル金額
	 */
	private $aupayCancelAmount;
	/**
	 * @var integer Aupay キャンセル税送料
	 */
	private $aupayCancelTax;
	/**
	 * @var string Rakutenpay 楽天チャージID
	 */
	private $rakutenChargeID;
	/**
	 * @var string Rakutenpay 再オーソリ期限
	 */
	private $reauthLimitDate;
	/**
	 * @var string Rakutenpay 実売上期限
	 */
	private $salesLimitDate;
	/**
	 * @var string Rakutenpay 金額変更期限
	 */
	private $changeLimitDate;
	/**
	 * @var string Rakutenpay キャンセル期限
	 */
	private $cancelLimitDate;
	/**
	 * @var integer Rakutenpay 楽天ペイで使用されたポイント
	 */
	private $rakutenPoint;


	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params 出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
        if (is_null($params)) {
            return;
        }

        // マップの展開
        $this->setOrderId($params->get('OrderID'));
        $this->setStatus($params->get('Status'));
        $this->setProcessDate($params->get('ProcessDate'));
       	$this->setJobCd($params->get('JobCd'));
       	$this->setAccessId($params->get('AccessID'));
       	$this->setAccessPass($params->get('AccessPass'));
       	$this->setItemCode($params->get('ItemCode'));
       	$this->setCurrency($params->get('Currency'));

       	$amount = $params->get('Amount');
       	$tax = $params->get('Tax');
       	$useBigDecimalAmount = $this->useBigDecimalAmount($params->get('PayType'));
		if ($useBigDecimalAmount === false) {
			$this->setAmount(is_numeric($amount) ? $amount : null);
            $this->setTax(is_numeric($tax) ? $tax : null);
		} else {
			$this->setAmountBigDecimal(is_numeric($amount) ? $amount : null);
        	$this->setTaxBigDecimal(is_numeric($tax) ? $tax : null);
		}

        $this->setSiteId($params->get('SiteID'));
        $this->setMemberId($params->get('MemberID'));
        $this->setCardNo($params->get('CardNo'));
        $this->setExpire($params->get('Expire'));
        $this->setMethod($params->get('Method'));
        $times = $params->get('PayTimes');
        if (!is_null($times) && 0 != strlen($times)) {
            // 数値の場合のみ値をセットする
            $this->setPayTimes(is_numeric($times) ? $times : null);
        }
        $this->setForward($params->get('Forward'));
        $this->setTranId($params->get('TranID'));

        $this->setApprovalNo($params->get('Approve'));
        $this->setClientField1($params->get('ClientField1'));
        $this->setClientField2($params->get('ClientField2'));
        $this->setClientField3($params->get('ClientField3'));

        $this->setPayType($params->get('PayType'));
		$this->setCvsCode($params->get('CvsCode'));
		$this->setCvsConfNo($params->get('CvsConfNo'));
		$this->setCvsReceiptNo($params->get('CvsReceiptNo'));
		$this->setEdyReceiptNo($params->get('EdyReceiptNo'));
		$this->setEdyOrderNo($params->get('EdyOrderNo'));
		$this->setSuicaReceiptNo($params->get('SuicaReceiptNo'));
		$this->setSuicaOrderNo($params->get('SuicaOrderNo'));
		$this->setCustId($params->get('CustId'));
		$this->setBkCode($params->get('BkCode'));
		$this->setConfNo($params->get('ConfNo'));
		$this->setPaymentTerm($params->get('PaymentTerm'));
		$this->setEncryptReceiptNo($params->get('EncryptReceiptNo'));
		$this->setPayeasyPaymentURL($params->get('PayeasyPaymentURL'));

		$this->setWebMoneyManagementNo($params->get('WebMoneyManagementNo'));
		$this->setWebMoneySettleCode($params->get('WebMoneySettleCode'));

		$this->setAuPayInfoNo($params->get('AuPayInfoNo'));
		$this->setAuPayMethod($params->get('AuPayMethod'));
		$this->setAuCancelAmount($params->get('AuCancelAmount'));
		$this->setAuCancelTax($params->get('AuCancelTax'));

		$this->setDocomoSettlementCode($params->get('DocomoSettlementCode'));
		$this->setDocomoCancelAmount($params->get('DocomoCancelAmount'));
		$this->setDocomoCancelTax($params->get('DocomoCancelTax'));
		$this->setDocomoIncreaseAmount($params->get('DocomoIncreaseAmount'));
		$this->setDocomoIncreaseTax($params->get('DocomoIncreaseTax'));

		$this->setSbTrackingId($params->get('SbTrackingId'));
		$this->setSbCancelAmount($params->get('SbCancelAmount'));
		$this->setSbCancelTax($params->get('SbCancelTax'));


		$this->setFirstAmount($params->get('FirstAmount'));
		$this->setFirstTax($params->get('FirstTax'));
		$this->setAccountTimingKbn($params->get('AccountTimingKbn'));
		$this->setAccountTiming($params->get('AccountTiming'));
		$this->setFirstAccountDate($params->get('FirstAccountDate'));
		$this->setAuContinuanceErrCode($params->get('AuContinuanceErrCode'));
		$this->setAuContinuanceErrInfo($params->get('AuContinuanceErrInfo'));
		$this->setAuContinueAccountId($params->get('AuContinueAccountId'));
		$this->setProcessLastDate($params->get('ProcessLastDate'));

		$this->setJibunReceiptNo($params->get('JibunReceiptNo'));

		$this->setTotalIncreaseAmount($params->get('TotalIncreaseAmount'));
		$this->setTotalIncreaseTax($params->get('TotalIncreaseTax'));
		$this->setDccAmount($params->get('DccAmount'));
		$this->setDccFtn($params->get('DccFtn'));
		$this->setPaypalPaymentType($params->get('PaypalPaymentType'));
		$this->setPaypalAgreementCurrentstatus($params->get('PaypalAgreementCurrentstatus'));
		$this->setPaypalAgreementId($params->get('PaypalAgreementID'));
		$this->setPaypalBillingAgreementId($params->get('PaypalBillingAgreementID'));
		$this->setPaypalAgreementStartDate($params->get('PaypalAgreementStartDate'));
		$this->setPaypalAgreementEndDate($params->get('PaypalAgreementEndDate'));

		$this->setJcbPrecaSalesCode($params->get('JcbPrecaSalesCode'));
		$this->setNetCashPayType($params->get('NetCashPayType'));
		$this->setOrderDate($params->get('OrderDate'));
		$this->setCompletionDate($params->get('CompletionDate'));
		$this->setRakutenidCouponFee($params->get('RakutenidCouponFee'));
		$this->setSubscriptionId($params->get('SubscriptionId'));
		$this->setSettlementSubscriptionId($params->get('SettlementSubscriptionId'));
		$this->setLinepayProductName($params->get('LinepayProductName'));
		$this->setLinepayCancelAmount($params->get('LinepayCancelAmount'));
		$this->setLinepayCancelTax($params->get('LinepayCancelTax'));
		$this->setLinepayPayMethod($params->get('LinepayPayMethod'));
		$this->setLinepayRegKey($params->get('LinepayRegKey'));
		$this->setLinepaySettlementRegKey($params->get('LinepaySettlementRegKey'));
		$this->setCommodityName($params->get('CommodityName'));
		$this->setSbStartChargeMonth($params->get('SbStartChargeMonth'));
		$this->setVaRequestAmount($params->get('VaRequestAmount'));
		$this->setVaExpireDate($params->get('VaExpireDate'));
		$this->setVaTradeReason($params->get('VaTradeReason'));
		$this->setVaTradeClientName($params->get('VaTradeClientName'));
		$this->setVaTradeClientMailaddress($params->get('VaTradeClientMailaddress'));
		$this->setVaBankCode($params->get('VaBankCode'));
		$this->setVaBankName($params->get('VaBankName'));
		$this->setVaBranchCode($params->get('VaBranchCode'));
		$this->setVaBranchName($params->get('VaBranchName'));
		$this->setVaAccountType($params->get('VaAccountType'));
		$this->setVaAccountNumber($params->get('VaAccountNumber'));
		$this->setVaInInquiryNumber($params->get('VaInInquiryNumber'));
		$this->setVaInSettlementDate($params->get('VaInSettlementDate'));
		$this->setVaInAmount($params->get('VaInAmount'));
		$this->setVaInClientCode($params->get('VaInClientCode'));
		$this->setVaInClientName($params->get('VaInClientName'));
		$this->setVaInSummary($params->get('VaInSummary'));
		$this->setVaReserveID($params->get('VaReserveID'));
		$this->setVaTradeCode($params->get('VaTradeCode'));
		$this->setRcOrderId($params->get('RcOrderId'));
		$this->setRcCustomerId($params->get('RcCustomerId'));
		$this->setRcOrderTime($params->get('RcOrderTime'));
		$this->setRcUsePoint($params->get('RcUsePoint'));
		$this->setRcUseCoupon($params->get('RcUseCoupon'));
		$this->setRcUseShopCoupon($params->get('RcUseShopCoupon'));
		$this->setRcUpdateAuthDay($params->get('RcUpdateAuthDay'));
		$this->setRcContractId($params->get('RcContractId'));
		$this->setRcStartChargeMonth($params->get('RcStartChargeMonth'));
		$this->setCardNoToken($params->get('CardNoToken'));
		$this->setBaTargetDate($params->get('BaTargetDate'));
		$this->setBaRequestAcceptEndDate($params->get('BaRequestAcceptEndDate'));
		$this->setBaTransferReturnDate($params->get('BaTransferReturnDate'));
		$this->setBaWithdrawalDate($params->get('BaWithdrawalDate'));
		$this->setBaResultCode($params->get('BaResultCode'));
		$this->setPaidCancelAmount($params->get('PaidCancelAmount'));
		$this->setPaidCancelTax($params->get('PaidCancelTax'));
		$this->setPaidBuyerID($params->get('PaidBuyerID'));
		$this->setPaidCode($params->get('PaidCode'));
		$this->setPaidContents($params->get('PaidContents'));
		$this->setDocomoAcceptCode($params->get('DocomoAcceptCode'));
		$this->setAuAcceptCode($params->get('AuAcceptCode'));
		$this->setSbAcceptCode($params->get('SbAcceptCode'));
		$this->setPaysleDisplayTerm($params->get('PaysleDisplayTerm'));
		$this->setPayslePaymentTerm($params->get('PayslePaymentTerm'));
		$this->setPaysleNotifyTerm($params->get('PaysleNotifyTerm'));
		$this->setPaysleOrderSerial($params->get('PaysleOrderSerial'));
		$this->setPaysleBarcodeWidth($params->get('PaysleBarcodeWidth'));
		$this->setPaysleBarcodeHeight($params->get('PaysleBarcodeHeight'));
		$this->setPaysleBarcodeFormat($params->get('PaysleBarcodeFormat'));
		$this->setPaysleBarcode($params->get('PaysleBarcode'));
		$this->setFinishDate($params->get('FinishDate'));
		$this->setGanbBankCode($params->get('GanbBankCode'));
		$this->setGanbBankName($params->get('GanbBankName'));
		$this->setGanbBranchCode($params->get('GanbBranchCode'));
		$this->setGanbBranchName($params->get('GanbBranchName'));
		$this->setGanbAccountType($params->get('GanbAccountType'));
		$this->setGanbAccountNumber($params->get('GanbAccountNumber'));
		$this->setGanbAccountHolderName($params->get('GanbAccountHolderName'));
		$this->setGanbExpireDays($params->get('GanbExpireDays'));
		$this->setGanbExpireDate($params->get('GanbExpireDate'));
		$this->setGanbTradeReason($params->get('GanbTradeReason'));
		$this->setGanbTradeClientName($params->get('GanbTradeClientName'));
		$this->setGanbTotalTransferAmount($params->get('GanbTotalTransferAmount'));
		$this->setGanbTotalTransferCount($params->get('GanbTotalTransferCount'));
		$this->setGanbLatestTransferAmount($params->get('GanbLatestTransferAmount'));
		$this->setGanbLatestTransferDate($params->get('GanbLatestTransferDate'));
		$this->setGanbLatestTransferName($params->get('GanbLatestTransferName'));
		$this->setGanbLatestTransferBankName($params->get('GanbLatestTransferBankName'));
		$this->setAmazonOrderReferenceID($params->get('AmazonOrderReferenceID'));
		$this->setAmazonPayCancelAmount($params->get('AmazonPayCancelAmount'));
		$this->setAmazonPayCancelTax($params->get('AmazonPayCancelTax'));
		$this->setAmazonBillingAgreementID($params->get('AmazonBillingAgreementID'));
		$this->setUriageNO($params->get('UriageNO'));
		$this->setAuthToken($params->get('AuthToken'));
		$this->setEposTradeID($params->get('EposTradeID'));
		$this->setEposUseCouponAmount($params->get('EposUseCouponAmount'));
		$this->setEposUsePoint($params->get('EposUsePoint'));
		$this->setTotalCancelAmount($params->get('TotalCancelAmount'));
		$this->setTotalCancelTax($params->get('TotalCancelTax'));
		$this->setMerpayCancelAmount($params->get('MerpayCancelAmount'));
		$this->setMerpayCancelTax($params->get('MerpayCancelTax'));
		$this->setMerpayInquiryCode($params->get('MerpayInquiryCode'));
		$this->setMerpaySubscriptionType($params->get('MerpaySubscriptionType'));
		$this->setMerpaySubscriptionId($params->get('MerpaySubscriptionId'));
		$this->setMerpaySubscriptionCurrentStatus($params->get('MerpaySubscriptionCurrentStatus'));
		$this->setMerpaySubscriptionStartDate($params->get('MerpaySubscriptionStartDate'));
		$this->setMerpaySubscriptionEndDate($params->get('MerpaySubscriptionEndDate'));
		$this->setMerpaySettlementSubscriptionId($params->get('MerpaySettlementSubscriptionId'));
		$this->setPostpayCancelAmount($params->get('PostpayCancelAmount'));
		$this->setPostpayCancelTax($params->get('PostpayCancelTax'));
		$this->setPostpayTransactionId($params->get('PostpayTransactionId'));
		$this->setPostpayCreditResultManualReason($params->get('PostpayCreditResultManualReason'));
		$this->setForceCancelDate($params->get('ForceCancelDate'));
		$this->setPostpayPaymentStatus($params->get('PostpayPaymentStatus'));
		$this->setPostpayPaymentDateFast($params->get('PostpayPaymentDateFast'));
		$this->setPostpayPaymentDateConf($params->get('PostpayPaymentDateConf'));
		$this->setPayPayCancelAmount($params->get('PayPayCancelAmount'));
		$this->setPayPayCancelTax($params->get('PayPayCancelTax'));
		$this->setPayPayTrackingID($params->get('PayPayTrackingID'));
		$this->setPayPayOrderID($params->get('PayPayOrderID'));
		$this->setPayPayAcceptCode($params->get('PayPayAcceptCode'));
		$this->setAupayCancelAmount($params->get('AupayCancelAmount'));
		$this->setAupayCancelTax($params->get('AupayCancelTax'));
		$this->setRakutenChargeID($params->get('RakutenChargeID'));
		$this->setReauthLimitDate($params->get('ReauthLimitDate'));
		$this->setSalesLimitDate($params->get('SalesLimitDate'));
		$this->setChangeLimitDate($params->get('ChangeLimitDate'));
		$this->setCancelLimitDate($params->get('CancelLimitDate'));
		$this->setRakutenPoint($params->get('RakutenPoint'));

	}

	private function useBigDecimalAmount($payType) {
		$useBigDecimalAmount = false;
		$list = explode(",", USE_BIG_DECIMAL_AMOUNT_PAY_TYPES);
		for ($counter = 0; $counter < count($list); $counter++) {
			$useBigDecimalAmountPayType = $list[$counter];
			if ($useBigDecimalAmountPayType == $payType) {
				$useBigDecimalAmount = true;
				break;
			}
		}
		return $useBigDecimalAmount;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getProcessDate(){
		return $this->processDate;
	}

	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd(){
		return $this->jobCd;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId(){
		return $this->accessId;
	}

	/**
	 * 取引パスワード取得
	 * @return strig 取引パスワード
	 */
	public function getAccessPass(){
		return $this->accessPass;
	}

	/**
	 * 商品コード取得
	 * @return string 商品コード
	 */
	public function getItemCode(){
		return $this->itemCode;
	}
	/**
	 * 通貨コード取得
	 * @return string 通貨コード
	 */
	public function getCurrency() {
	    return $this->currency;
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount(){
		return $this->amount;
	}

	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax(){
		return $this->tax;
	}

	/**
	 * 利用金額取得
	 * @return BigDecimal 利用金額
	 */
	public function getAmountBigDecimal(){
		return $this->amountBigDecimal;
	}

	/**
	 * 税送料取得
	 * @return BigDecimal 税送料
	 */
	public function getTaxBigDecimal(){
		return $this->taxBigDecimal;
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteId(){
		return $this->siteId;
	}

	/**
	 * 会員ID
	 * @return string 会員ID
	 */
	public function getMemberId(){
		return $this->memberId;
	}

	/**
	 * カード番号取得
	 * @return string カード番号(下4桁表示、以外マスク)
	 */
	public function getCardNo(){
		return $this->cardNo;
	}

	/**
	 * カード有効期限取得
	 * @return string カード有効期限
	 */
	public function getExpire(){
		return $this->expire;
	}

	/**
	 * 支払い方法取得
	 * @return string 支払方法コード
	 */
	public function getMethod() {
		return $this->method;
	}

	/**
	 * 支払回数取得
	 * @return integer 支払回数
	 */
	public function getPayTimes() {
		return $this->payTimes;
	}

	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward(){
		return $this->forward;
	}

	/**
	 * トランザクションID取得
	 * @return　string トランザクションID
	 */
	public function getTranId(){
		return $this->transactionId;
	}

	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprovalNo(){
		return $this->approve;
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * 決済手段取得
	 * @return  　string $string  決済手段
	 */
	public function getPayType(){
		return $this->payType ;
	}


	/**
	 * 支払先コンビニ会社コード 取得
	 * @return  　string $string  支払先コンビニ会社コード
	 */
	public function getCvsCode(){
		return $this->cvsCode ;
	}
	/**
	 * 支払先確認番号 取得
	 * @return  　string $string  支払先確認番号
	 */
	public function getCvsConfNo(){
		return $this->cvsConfNo ;
	}

	/**
	 * 支払先コンビニ受付番号 取得
	 * @return  　string $string  支払先コンビニ会受付番号
	 */
	public function getCvsReceiptNo(){
		return $this->cvsReceiptNo ;
	}
	/**
	 * Edy受付番号 取得
	 * @return  　string $string  Edy受付番号
	 */
	public function getEdyReceiptNo(){
		return $this->edyReceiptNo ;
	}
	/**
	 * Edy注文番号 取得
	 * @return  　string $string  Edy注文番号
	 */
	public function getEdyOrderNo(){
		return $this->edyOrderNo ;
	}
	/**
	 * Suica受付番号 取得
	 * @return  　string $string  Suica受付番号
	 */
	public function getSuicaReceiptNo(){
		return $this->suicaReceiptNo ;
	}
	/**
	 * Suica注文番号 取得
	 * @return  　string $string  Suica注文番号
	 */
	public function getSuicaOrderNo(){
		return $this->suicaOrderNo ;
	}
	/**
	 * Pay-easyお客様番号  取得
	 * @return  　string $string  Pay-easyお客様番号
	 */
	public function getCustId(){
		return $this->custId ;
	}
	/**
	 * Pay-easy収納機関番号  取得
	 * @return  　string $string  Pay-easy収納機関番号
	 */
	public function getBkCode(){
		return $this->bkCode ;
	}
	/**
	 * Pay-easy確認番号  取得
	 * @return  　string $string  Pay-easy確認番号
	 */
	public function getConfNo(){
		return $this->confNo ;
	}
	/**
	 * Pay-easy暗号化決済番号  取得
	 * @return  　string $string  Pay-easy暗号化決済番号
	 */
	public function getEncryptReceiptNo(){
		return $this->encryptReceiptNo ;
	}
	/**
	 * Pay-easy金融機関選択画面URL  取得
	 * @return  　string $string  Pay-easy金融機関選択画面URL
	 */
	public function getPayeasyPaymentURL() {
		return $this->payeasyPaymentURL;
	}
	/**
	 * 支払期限日時  取得
	 * @return  　string $string  支払期限日時
	 */
	public function getPaymentTerm(){
		return $this->paymentTerm ;
	}
	/**
	 * WebMoney管理番号 取得
	 * @return  　string $string  WebMoney管理番号
	 */
	public function getWebmoneyManagementNo(){
		return $this->webmoneyManagementNo;
	}
	/**
	 * WebMoney決済コード 取得
	 * @return  　string $string  WebMoney決済コード
	 */
	public function getWebmoneySettleCode(){
		return $this->webmoneySettleCode;
	}

	/**
	 * auかんたん決済決済情報番号 取得
	 * @return  　string $string  auかんたん決済情報番号
	 */
	public function getAuPayInfoNo(){
		return $this->auPayInfoNo;
	}

	/**
	 * auかんたん決済支払方法 取得
	 * @return  　string $string  auかんたん決済支払方法
	 */
	public function getAuPayMethod(){
		return $this->auPayMethod;
	}

	/**
	 * auかんたん決済キャンセル金額 取得
	 * @return  　string $string  auかんたん決済キャンセル金額
	 */
	public function getAuCancelAmount(){
		return $this->auCancelAmount;
	}

	/**
	 * auかんたん決済キャンセル税送料 取得
	 * @return  　string $string  auかんたん決済キャンセル税送料
	 */
	public function getAuCancelTax(){
		return $this->auCancelTax;
	}


	/**
	 * オーダーID設定
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * ステータス設定
	 * @param string $status ステータス
	 */
	public function setStatus($status){
		$this->status = $status;
	}

	/**
	 * 処理日時設定
	 * @param string $processDate 処理日時
	 */
	public function setProcessDate($processDate){
		$this->processDate = $processDate;
	}

	/**
	 * 処理区分設定
	 * @param string $jobCd 処理区分
	 */
	public function setJobCd($jobCd){
		$this->jobCd = $jobCd;
	}

	/**
	 * 取引ID設定
	 * @param string $accessId 取引ID
	 */
	public function setAccessId($accessId){
		$this->accessId = $accessId;
	}

	/**
	 * 取引パスワード設定
	 * @param string $accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass){
		$this->accessPass = $accessPass;
	}

	/**
	 * 商品コード設定
	 * @param string $itemCode 商品コード
	 */
	public function setItemCode( $itemCode){
		$this->itemCode = $itemCode;
	}
	/**
	 * 通貨コード設定
	 * @param string
	 */
	public function setCurrency( $currency ) {
	    $this->currency = $currency;
	}

	/**
	 * 利用金額設定
	 * @param string $amount 利用金額
	 */
	public function setAmount($amount){
		$this->amount = $amount;
	}

	/**
	 * 税送料設定
	 * @param string $tax 税送料
	 */
	public function setTax($tax){
		$this->tax = $tax;
	}

	/**
	 * 利用金額設定
	 * @param string $amountBigDecimal 利用金額
	 */
	public function setAmountBigDecimal($amountBigDecimal){
		$this->amountBigDecimal = $amountBigDecimal;
	}

	/**
	 * 税送料設定
	 * @param string $taxBigDecimal 税送料
	 */
	public function setTaxBigDecimal($taxBigDecimal){
		$this->taxBigDecimal = $taxBigDecimal;
	}

	/**
	 * サイトID設定
	 * @param string $siteId サイトID
	 */
	public function setSiteId($siteId){
		$this->siteId = $siteId;
	}

	/**
	 * 会員ID設定
	 * @param string $memberId 会員ID
	 */
	public function setMemberId($memberId){
		$this->memberId = $memberId;
	}

	/**
	 * カード番号設定
	 * @param string $cardNo カード番号(下4桁表示、以外マスク)
	 */
	public function setCardNo($cardNo){
		$this->cardNo = $cardNo;
	}

	/**
	 * カード有効期限設定
	 * @param string $expire カード有効期限
	 */
	public function setExpire( $expire ){
		$this->expire = $expire;
	}

	/**
	 * 支払い方法設定
	 * @param string $method 支払方法コード
	 */
	public function setMethod($method) {
		$this->method = $method;
	}

	/**
	 * 支払回数設定
	 * @param string $payTimes 支払回数
	 */
	public function setPayTimes( $payTimes ) {
		$this->payTimes = $payTimes;
	}

	/**
	 * 仕向先コード設定
	 * @param string $forward 仕向け先コード
	 */
	public function setForward($forward){
		$this->forward = $forward;
	}

	/**
	 * トランザクションID設定
	 * @param string $transactionId トランザクションID
	 */
	public function setTranId($transactionId){
		$this->transactionId = $transactionId;
	}

	/**
	 * 承認番号設定
	 * @param string $approve 承認番号
	 */
	public function setApprovalNo($approve){
		$this->approve = $approve;
	}

	/**
	 * 加盟店自由項目1設定
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

	/**
	 * 決済手段設定
	 * @param  　string $string  決済手段
	 */
	public function setPayType($string){
		$this->payType = $string;
	}

	/**
	 * 支払先コンビニ会社コード 設定
	 * @param  　string $string  支払先コンビニ会社コー
	 */
	public function setCvsCode($string){
		$this->cvsCode = $string;
	}
	/**
	 * コンビニ確認番号 設定
	 * @param  　string $string  コンビニ確認番号
	 */
	public function setCvsConfNo($string){
		$this->cvsConfNo = $string;
	}
	/**
	 * 支払先コンビニ受付番号 設定
	 * @param  　string $string  支払先コンビニ受付番号
	 */
	public function setCvsReceiptNo($string){
		$this->cvsReceiptNo = $string;
	}
	/**
	 * Edy受付番号 設定
	 * @param  　string $string  Edy受付番号
	 */
	public function setEdyReceiptNo($string){
		$this->edyReceiptNo = $string;
	}
	/**
	 * Edy注文番号   設定
	 * @param  　string $string  Edy注文番号
	 */
	public function setEdyOrderNo($string){
		$this->edyOrderNo = $string;
	}
	/**
	 * Suica受付番号 設定
	 * @param  　string $string  Suica受付番号
	 */
	public function setSuicaReceiptNo($string){
		$this->suicaReceiptNo = $string;
	}
	/**
	 * Suica注文番号 設定
	 * @param  　string $string  Suica注文番号
	 */
	public function setSuicaOrderNo($string){
		$this->suicaOrderNo = $string;
	}
	/**
	 * Pay-easyお客様番号 設定
	 * @param  　string $string  Pay-easyお客様番号
	 */
	public function setCustId($string){
		$this->custId = $string;
	}
	/**
	 * Pay-easy収納機関番号 設定
	 * @param  　string $string  Pay-easy収納機関番号
	 */
	public function setBkCode($string){
		$this->bkCode = $string;
	}
	/**
	 * Pay-easy確認番号 設定
	 * @param  　string $string  Pay-easy確認番号
	 */
	public function setConfNo($string){
		$this->confNo = $string;
	}
	/**
	 * 支払期限日時 設定
	 * @param  　string $string  支払期限日時
	 */
	public function setPaymentTerm($string){
		$this->paymentTerm = $string;
	}
	/**
	 * 暗号化決済番号 設定
	 * @param  　string $string  暗号化決済番号
	 */
	public function setEncryptReceiptNo($string){
		$this->encryptReceiptNo = $string;
	}
	/**
	 * 金融機関選択画面URL  設定
	 * @param  　string $string  金融機関選択画面URL
	 */
	public function setPayeasyPaymentURL($string) {
		$this->payeasyPaymentURL = $string;
	}
	/**
	 * WebMoney管理番号 設定
	 * @param  　string $string  WebMoney管理番号
	 */
	public function setWebmoneyManagementNo($string){
		$this->webmoneyManagementNo = $string;
	}
	/**
	 * WebMoney決済コード 設定
	 * @param  　string $string  WebMoney決済コード
	 */
	public function setWebmoneySettleCode($string){
		$this->webmoneySettleCode = $string;
	}

	/**
	 * auかんたん決済決済情報番号 設定
	 * @param  　string $string  auかんたん決済情報番号
	 */
	public function setAuPayInfoNo($string){
		$this->auPayInfoNo = $string;
	}

	/**
	 * auかんたん決済支払方法 設定
	 * @param  　string $string  auかんたん決済支払方法
	 */
	public function setAuPayMethod($string){
		$this->auPayMethod = $string;
	}

	/**
	 * auかんたん決済キャンセル金額 設定
	 * @param  　string $string  auかんたん決済キャンセル金額
	 */
	public function setAuCancelAmount($string){
		$this->auCancelAmount = $string;
	}

	/**
	 * auかんたん決済キャンセル税送料 設定
	 * @param  　string $string  auかんたん決済キャンセル税送料
	 */
	public function setAuCancelTax($string){
		$this->auCancelTax = $string;
	}

	/**
	 * ドコモ決済番号取得
	 * @return string ドコモ決済番号
	 */
	public function getDocomoSettlementCode() {
		return $this->docomoSettlementCode;
	}

	/**
	 * ドコモキャンセル金額取得
	 * @return integer ドコモキャンセル金額
	 */
	public function getDocomoCancelAmount() {
		return $this->docomoCancelAmount;
	}

	/**
	 * ドコモキャンセル税送料取得
	 * @return integer ドコモキャンセル税送料
	 */
	public function getDocomoCancelTax() {
		return $this->docomoCancelTax;
	}

	/**
	 * ドコモ増加金額取得
	 * @return integer ドコモ増加金額
	 */
	public function getDocomoIncreaseAmount() {
		return $this->docomoIncreaseAmount;
	}

	/**
	 * ドコモ増加税送料取得
	 * @return integer ドコモ増加税送料
	 */
	public function getDocomoIncreaseTax() {
		return $this->docomoIncreaseTax;
	}

	/**
	 * ドコモ決済番号設定
	 *
	 * @param string $docomoSettlementCode
	 */
	public function setDocomoSettlementCode($docomoSettlementCode) {
		$this->docomoSettlementCode = $docomoSettlementCode;
	}

	/**
	 * ドコモキャンセル金額設定
	 *
	 * @param integer $docomoCancelAmount
	 */
	public function setDocomoCancelAmount($docomoCancelAmount) {
		$this->docomoCancelAmount = $docomoCancelAmount;
	}

	/**
	 * ドコモキャンセル税送料設定
	 *
	 * @param integer $docomoCancelTax
	 */
	public function setDocomoCancelTax($docomoCancelTax) {
		$this->docomoCancelTax = $docomoCancelTax;
	}

	/**
	 * ドコモ増加金額設定
	 *
	 * @param integer $docomoIncreaseAmount
	 */
	public function setDocomoIncreaseAmount($docomoIncreaseAmount) {
		$this->docomoIncreaseAmount = $docomoIncreaseAmount;
	}

	/**
	 * ドコモ増加税送料設定
	 *
	 * @param integer $docomoIncreaseTax
	 */
	public function setDocomoIncreaseTax($docomoIncreaseTax) {
		$this->docomoIncreaseTax = $docomoIncreaseTax;
	}

	/**
	 * ソフトバンク処理トラッキングID取得
	 * @return string ソフトバンク処理トラッキングID
	 */
	public function getSbTrackingId() {
		return $this->sbTrackingId;
	}

	/**
	 * ソフトバンクキャンセル金額取得
	 * @return integer ソフトバンクキャンセル金額
	 */
	public function getSbCancelAmount() {
		return $this->sbCancelAmount;
	}
	/**
	 * ソフトバンクキャンセル税送料取得
	 * @return integer ソフトバンクキャンセル税送料
	 */
	public function getSbCancelTax() {
		return $this->sbCancelTax;
	}

	/**
	 * ソフトバンク処理トラッキングID設定
	 *
	 * @param integer $sbTrackingId
	 */
	public function setSbTrackingId($sbTrackingId) {
		$this->sbTrackingId = $sbTrackingId;
	}

	/**
	 * ソフトバンクキャンセル金額設定
	 *
	 * @param integer $sbCancelAmount
	 */
	public function setSbCancelAmount($sbCancelAmount) {
		$this->sbCancelAmount = $sbCancelAmount;
	}

	/**
	 * ソフトバンクキャンセル税送料設定
	 *
	 * @param integer $sbCancelTax
	 */
	public function setSbCancelTax($sbCancelTax) {
		$this->sbCancelTax = $sbCancelTax;
	}
	/**
	 * じぶん銀行受付番号取得
	 * @return じぶん銀行受付番号
	 */
	public function getJibunReceiptNo(){
		return $this->jibunReceiptNo;
	}

	/**
	 * じぶん銀行受付番号設定
	 * @param  $jibunReceiptNo
	 */
	public function setJibunReceiptNo($jibunReceiptNo){
		$this->jibunReceiptNo = $jibunReceiptNo;
	}




	/**
	 * au継続課金 初回課金利用金額取得
	 * @return integer 初回課金利用金額
	 */
	public function getFirstAmount(){
		return $this->firstAmount;
	}

	/**
	 * au継続課金 初回課金利用金額設定
	 * @param integer $firstAmount
	 */
	public function setFirstAmount($firstAmount){
		$this->firstAmount = $firstAmount;
	}

	/**
	 * au継続課金 初回課金税送料取得
	 * @return integer 初回課金税送料
	 */
	public function getFirstTax(){
		return $this->firstTax;
	}

	/**
	 * au継続課金 初回課金税送料設定
	 * @param integer $firstTax
	 */
	public function setFirstTax($firstTax){
		$this->firstTax = $firstTax;
	}

	/**
	 * au継続課金 課金タイミング区分取得
	 * @return string 課金タイミング区分
	 */
	public function getAccountTimingKbn(){
		return $this->accountTimingKbn;
	}

	/**
	 * au継続課金 課金タイミング区分設定
	 * @param string $accountTimingKbn
	 */
	public function setAccountTimingKbn($accountTimingKbn){
		$this->accountTimingKbn = $accountTimingKbn;
	}


	/**
	 * au継続課金 課金タイミング取得
	 * @return string 課金タイミング
	 */
	public function getAccountTiming(){
		return $this->accountTiming;
	}

	/**
	 * au継続課金 課金タイミング設定
	 * @param string $accountTiming
	 */
	public function setAccountTiming($accountTiming){
		$this->accountTiming= $accountTiming;
	}

	/**
	 * au継続課金 初回課金日取得
	 * @return string 初回課金日
	 */
	public function getFirstAccountDate(){
		return $this->firstAccountDate;
	}

	/**
	 * au継続課金 初回課金日設定
	 * @param string $firstAccountDate
	 */
	public function setFirstAccountDate($firstAccountDate){
		$this->firstAccountDate= $firstAccountDate;
	}


	/**
	 * au継続課金 エラーコード
	 * @return string エラーコード
	 */
	public function getAuContinuanceErrCode(){
		return $this->auContinuaceErrCode;
	}

	/**
	 * au継続課金 エラーコード
	 * @param string $auContinuaceErrCode
	 */
	public function setAuContinuanceErrCode($auContinuaceErrCode){
		$this->auContinuaceErrCode= $auContinuaceErrCode;
	}


	/**
	 * au継続課金 エラー詳細
	 * @return string エラー詳細
	 */
	public function getAuContinuanceErrInfo(){
		return $this->auContinuaceErrInfo;
	}

	/**
	 * au継続課金 エラー詳細
	 * @param string $auContinuaceErrInfo
	 */
	public function setAuContinuanceErrInfo($auContinuaceErrInfo){
		$this->auContinuaceErrInfo= $auContinuaceErrInfo;
	}



	/**
	 * au継続課金 au継続課金ID取得
	 * @return string au継続課金ID
	 */
	public function getAuContinueAccountId(){
		return $this->auContinueAccountId;
	}

	/**
	 * au継続課金 au継続課金ID設定
	 * @param string $auContinueAccountId
	 */
	public function setAuContinueAccountId($auContinueAccountId){
		$this->auContinueAccountId=$auContinueAccountId;
	}

	/**
	 * 最終処理日時 取得
	 * @return string $最終処理日時
	 */
	public function getProcessLastDate(){
		return $this->processLastDate;
	}

	/**
	 * 最終処理日時 設定
	 * @param string $processLastDate
	 */
	public function setProcessLastDate($processLastDate){
		$this->processLastDate = $processLastDate;
	}

	/**
	 * Dcc 増額金額の累積 取得
	 * @return integer $増額金額の累積
	 */
	public function getTotalIncreaseAmount(){
		return $this->totalIncreaseAmount;
	}

	/**
	 * Dcc 増額税送料の累積 取得
	 * @return integer $増額税送料の累積
	 */
	public function getTotalIncreaseTax(){
		return $this->totalIncreaseTax;
	}

	/**
	 * Dcc DCC金額 取得
	 * @return bigDecimal $DCC金額
	 */
	public function getDccAmount(){
		return $this->dccAmount;
	}

	/**
	 * Dcc FX追跡番号(FTN) 取得
	 * @return string $FX追跡番号(FTN)
	 */
	public function getDccFtn(){
		return $this->dccFtn;
	}

	/**
	 * Dcc 増額金額の累積 設定
	 * @param integer $totalIncreaseAmount
	 */
	public function setTotalIncreaseAmount($totalIncreaseAmount){
		$this->totalIncreaseAmount = $totalIncreaseAmount;
	}

	/**
	 * Dcc 増額税送料の累積 設定
	 * @param integer $totalIncreaseTax
	 */
	public function setTotalIncreaseTax($totalIncreaseTax){
		$this->totalIncreaseTax = $totalIncreaseTax;
	}

	/**
	 * Dcc DCC金額 設定
	 * @param bigDecimal $dccAmount
	 */
	public function setDccAmount($dccAmount){
		$this->dccAmount = $dccAmount;
	}

	/**
	 * Dcc FX追跡番号(FTN) 設定
	 * @param string $dccFtn
	 */
	public function setDccFtn($dccFtn){
		$this->dccFtn = $dccFtn;
	}

	/**
	 * Paypal 決済タイプ 取得
     * @return string $決済タイプ
     */
    public function getPaypalPaymentType(){
        return $this->paypalPaymentType;
    }

    /**
	 * Paypal 支払同意現状態 取得
     * @return string $支払同意現状態
     */
    public function getPaypalAgreementCurrentstatus(){
        return $this->paypalAgreementCurrentstatus;
    }

    /**
	 * Paypal 支払同意ＩＤ 取得
     * @return string $支払同意ＩＤ
     */
    public function getPaypalAgreementId(){
        return $this->paypalAgreementId;
    }

    /**
	 * Paypal 随時決済用支払同意ＩＤ 取得
     * @return string $随時決済用支払同意ＩＤ
     */
    public function getPaypalBillingAgreementId(){
        return $this->paypalBillingAgreementId;
    }

    /**
	 * Paypal 利用承諾日付 取得
     * @return string $利用承諾日付
     */
    public function getPaypalAgreementStartDate(){
        return $this->paypalAgreementStartDate;
    }

    /**
	 * Paypal 利用終了日付 取得
     * @return string $利用終了日付
     */
    public function getPaypalAgreementEndDate(){
        return $this->paypalAgreementEndDate;
    }

    /**
     * Paypal 決済タイプ 設定
     * @param string $paypalPaymentType
     */
    public function setPaypalPaymentType($paypalPaymentType){
        $this->paypalPaymentType = $paypalPaymentType;
    }

    /**
     * Paypal 支払同意現状態 設定
     * @param string $paypalAgreementCurrentstatus
     */
    public function setPaypalAgreementCurrentstatus($paypalAgreementCurrentstatus){
        $this->paypalAgreementCurrentstatus = $paypalAgreementCurrentstatus;
    }

    /**
     * Paypal 支払同意ＩＤ 設定
     * @param string $paypalAgreementId
     */
    public function setPaypalAgreementId($paypalAgreementId){
        $this->paypalAgreementId = $paypalAgreementId;
    }

    /**
     * Paypal 随時決済用支払同意ＩＤ 設定
     * @param string $paypalBillingAgreementId
     */
    public function setPaypalBillingAgreementId($paypalBillingAgreementId){
        $this->paypalBillingAgreementId = $paypalBillingAgreementId;
    }

    /**
     * Paypal 利用承諾日付 設定
     * @param string $paypalAgreementStartDate
     */
    public function setPaypalAgreementStartDate($paypalAgreementStartDate){
        $this->paypalAgreementStartDate = $paypalAgreementStartDate;
    }

    /**
     * Paypal 利用終了日付 設定
     * @param string $paypalAgreementEndDate
     */
    public function setPaypalAgreementEndDate($paypalAgreementEndDate){
        $this->paypalAgreementEndDate = $paypalAgreementEndDate;
    }

	/**
	 * JcbPreca 伝票番号 取得
	 * @return string $伝票番号
	 */
	public function getJcbPrecaSalesCode(){
		return $this->jcbPrecaSalesCode;
	}
	/**
	 * Netcash NET CASH決済方法 取得
	 * @return string $NET CASH決済方法
	 */
	public function getNetCashPayType(){
		return $this->netCashPayType;
	}
	/**
	 * RakutenId 注文日 取得
	 * @return string $注文日
	 */
	public function getOrderDate(){
		return $this->orderDate;
	}
	/**
	 * RakutenId 完了日 取得
	 * @return string $完了日
	 */
	public function getCompletionDate(){
		return $this->completionDate;
	}
	/**
	 * RakutenId クーポン金額 取得
	 * @return integer $クーポン金額
	 */
	public function getRakutenidCouponFee(){
		return $this->rakutenidCouponFee;
	}
	/**
	 * RakutenId サブスクリプションID 取得
	 * @return string $サブスクリプションID
	 */
	public function getSubscriptionId(){
		return $this->subscriptionId;
	}
	/**
	 * RakutenId 決済用サブスクリプションID 取得
	 * @return string $決済用サブスクリプションID
	 */
	public function getSettlementSubscriptionId(){
		return $this->settlementSubscriptionId;
	}
	/**
	 * Linepay LINE Pay商品名 取得
	 * @return string $LINE Pay商品名
	 */
	public function getLinepayProductName(){
		return $this->linepayProductName;
	}
	/**
	 * Linepay LINE Payキャンセル金額 取得
	 * @return bigDecimal $LINE Payキャンセル金額
	 */
	public function getLinepayCancelAmount(){
		return $this->linepayCancelAmount;
	}
	/**
	 * Linepay LINE Payキャンセル税送料 取得
	 * @return bigDecimal $LINE Payキャンセル税送料
	 */
	public function getLinepayCancelTax(){
		return $this->linepayCancelTax;
	}
	/**
	 * Linepay LINE Pay支払手段 取得
	 * @return string $LINE Pay支払手段
	 */
	public function getLinepayPayMethod(){
		return $this->linepayPayMethod;
	}
	/**
	 * Linepay RegKey 取得
	 * @return string $RegKey
	 */
	public function getLinepayRegKey(){
		return $this->linepayRegKey;
	}
	/**
	 * Linepay 決済用RegKey 取得
	 * @return string $決済用RegKey
	 */
	public function getLinepaySettlementRegKey(){
		return $this->linepaySettlementRegKey;
	}
	/**
	 * Unionpay 商品名 取得
	 * @return string $商品名
	 */
	public function getCommodityName(){
		return $this->commodityName;
	}
	/**
	 * SbContinuance 課金開始月 取得
	 * @return string $課金開始月
	 */
	public function getSbStartChargeMonth(){
		return $this->sbStartChargeMonth;
	}
	/**
	 * Virtualaccount 振込要求金額 取得
	 * @return bigDecimal $振込要求金額
	 */
	public function getVaRequestAmount(){
		return $this->vaRequestAmount;
	}
	/**
	 * Virtualaccount 取引有効期限 取得
	 * @return string $取引有効期限
	 */
	public function getVaExpireDate(){
		return $this->vaExpireDate;
	}
	/**
	 * Virtualaccount 取引事由 取得
	 * @return string $取引事由
	 */
	public function getVaTradeReason(){
		return $this->vaTradeReason;
	}
	/**
	 * Virtualaccount 振込依頼者氏名 取得
	 * @return string $振込依頼者氏名
	 */
	public function getVaTradeClientName(){
		return $this->vaTradeClientName;
	}
	/**
	 * Virtualaccount 振込依頼者メールアドレス 取得
	 * @return string $振込依頼者メールアドレス
	 */
	public function getVaTradeClientMailaddress(){
		return $this->vaTradeClientMailaddress;
	}
	/**
	 * Virtualaccount 銀行コード 取得
	 * @return string $銀行コード
	 */
	public function getVaBankCode(){
		return $this->vaBankCode;
	}
	/**
	 * Virtualaccount 銀行名 取得
	 * @return string $銀行名
	 */
	public function getVaBankName(){
		return $this->vaBankName;
	}
	/**
	 * Virtualaccount 支店コード 取得
	 * @return string $支店コード
	 */
	public function getVaBranchCode(){
		return $this->vaBranchCode;
	}
	/**
	 * Virtualaccount 支店名 取得
	 * @return string $支店名
	 */
	public function getVaBranchName(){
		return $this->vaBranchName;
	}
	/**
	 * Virtualaccount 科目 取得
	 * @return string $科目
	 */
	public function getVaAccountType(){
		return $this->vaAccountType;
	}
	/**
	 * Virtualaccount 口座番号 取得
	 * @return string $口座番号
	 */
	public function getVaAccountNumber(){
		return $this->vaAccountNumber;
	}
	/**
	 * Virtualaccount 照会番号 取得
	 * @return string $照会番号
	 */
	public function getVaInInquiryNumber(){
		return $this->vaInInquiryNumber;
	}
	/**
	 * Virtualaccount 勘定日 取得
	 * @return string $勘定日
	 */
	public function getVaInSettlementDate(){
		return $this->vaInSettlementDate;
	}
	/**
	 * Virtualaccount 入金額 取得
	 * @return bigDecimal $入金額
	 */
	public function getVaInAmount(){
		return $this->vaInAmount;
	}
	/**
	 * Virtualaccount 振込依頼人コード 取得
	 * @return string $振込依頼人コード
	 */
	public function getVaInClientCode(){
		return $this->vaInClientCode;
	}
	/**
	 * Virtualaccount 振込依頼人名 取得
	 * @return string $振込依頼人名
	 */
	public function getVaInClientName(){
		return $this->vaInClientName;
	}
	/**
	 * Virtualaccount 摘要 取得
	 * @return string $摘要
	 */
	public function getVaInSummary(){
		return $this->vaInSummary;
	}
	/**
	 * Virtualaccount 継続口座ID 取得
	 * @return string $継続口座ID
	 */
	public function getVaReserveID(){
		return $this->vaReserveID;
	}
	/**
	 * Virtualaccount 振込コード 取得
	 * @return string $振込コード
	 */
	public function getVaTradeCode(){
		return $this->vaTradeCode;
	}
	/**
	 * Recruit 注文番号 取得
	 * @return string $注文番号
	 */
	public function getRcOrderId(){
		return $this->rcOrderId;
	}
	/**
	 * Recruit 顧客IDハッシュ値 取得
	 * @return string $顧客IDハッシュ値
	 */
	public function getRcCustomerId(){
		return $this->rcCustomerId;
	}
	/**
	 * Recruit 注文時刻 取得
	 * @return string $注文時刻
	 */
	public function getRcOrderTime(){
		return $this->rcOrderTime;
	}
	/**
	 * Recruit 行使ポイント数 取得
	 * @return string $行使ポイント数
	 */
	public function getRcUsePoint(){
		return $this->rcUsePoint;
	}
	/**
	 * Recruit リクルート原資クーポン割引額 取得
	 * @return string $リクルート原資クーポン割引額
	 */
	public function getRcUseCoupon(){
		return $this->rcUseCoupon;
	}
	/**
	 * Recruit 加盟店様原資クーポン割引額 取得
	 * @return string $加盟店様原資クーポン割引額
	 */
	public function getRcUseShopCoupon(){
		return $this->rcUseShopCoupon;
	}
	/**
	 * Recruit オーソリ期限延長実施日 取得
	 * @return string $オーソリ期限延長実施日
	 */
	public function getRcUpdateAuthDay(){
		return $this->rcUpdateAuthDay;
	}
	/**
	 * RecruitContinuance 契約番号 取得
	 * @return string $契約番号
	 */
	public function getRcContractId(){
		return $this->rcContractId;
	}
	/**
	 * RecruitContinuance 課金開始月 取得
	 * @return string $課金開始月
	 */
	public function getRcStartChargeMonth(){
		return $this->rcStartChargeMonth;
	}
	/**
	 * Brandtoken カード番号トークン 取得
	 * @return string $カード番号トークン
	 */
	public function getCardNoToken(){
		return $this->cardNoToken;
	}
	/**
	 * Bankaccount 振替指定日 取得
	 * @return string $振替指定日
	 */
	public function getBaTargetDate(){
		return $this->baTargetDate;
	}
	/**
	 * Bankaccount 請求依頼受付終了日 取得
	 * @return string $請求依頼受付終了日
	 */
	public function getBaRequestAcceptEndDate(){
		return $this->baRequestAcceptEndDate;
	}
	/**
	 * Bankaccount 振替結果反映予定日 取得
	 * @return string $振替結果反映予定日
	 */
	public function getBaTransferReturnDate(){
		return $this->baTransferReturnDate;
	}
	/**
	 * Bankaccount 実引落日 取得
	 * @return string $実引落日
	 */
	public function getBaWithdrawalDate(){
		return $this->baWithdrawalDate;
	}
	/**
	 * Bankaccount 振替結果コード 取得
	 * @return string $振替結果コード
	 */
	public function getBaResultCode(){
		return $this->baResultCode;
	}
	/**
	 * Paid Paidキャンセル金額 取得
	 * @return bigDecimal $Paidキャンセル金額
	 */
	public function getPaidCancelAmount(){
		return $this->paidCancelAmount;
	}
	/**
	 * Paid Paidキャンセル税送料 取得
	 * @return bigDecimal $Paidキャンセル税送料
	 */
	public function getPaidCancelTax(){
		return $this->paidCancelTax;
	}
	/**
	 * Paid Paid取引先ID 取得
	 * @return string $Paid取引先ID
	 */
	public function getPaidBuyerID(){
		return $this->paidBuyerID;
	}
	/**
	 * Paid Paid伝票番号 取得
	 * @return string $Paid伝票番号
	 */
	public function getPaidCode(){
		return $this->paidCode;
	}
	/**
	 * Paid 注文内容 取得
	 * @return string $注文内容
	 */
	public function getPaidContents(){
		return $this->paidContents;
	}
	/**
	 * DocomoAccept ドコモ承諾番号 取得
	 * @return string $ドコモ承諾番号
	 */
	public function getDocomoAcceptCode(){
		return $this->docomoAcceptCode;
	}
	/**
	 * AuAccept au決済情報番号 取得
	 * @return string $au決済情報番号
	 */
	public function getAuAcceptCode(){
		return $this->auAcceptCode;
	}
	/**
	 * SbAccept SB承諾番号 取得
	 * @return string $SB承諾番号
	 */
	public function getSbAcceptCode(){
		return $this->sbAcceptCode;
	}
	/**
	 * Paysle 表示開始日 取得
	 * @return string $表示開始日
	 */
	public function getPaysleDisplayTerm(){
		return $this->paysleDisplayTerm;
	}
	/**
	 * Paysle 支払期限日 取得
	 * @return string $支払期限日
	 */
	public function getPayslePaymentTerm(){
		return $this->payslePaymentTerm;
	}
	/**
	 * Paysle 購入者通知日 取得
	 * @return string $購入者通知日
	 */
	public function getPaysleNotifyTerm(){
		return $this->paysleNotifyTerm;
	}
	/**
	 * Paysle 注文管理ID 取得
	 * @return string $注文管理ID
	 */
	public function getPaysleOrderSerial(){
		return $this->paysleOrderSerial;
	}
	/**
	 * Paysle バーコードイメージ横幅 取得
	 * @return string $バーコードイメージ横幅
	 */
	public function getPaysleBarcodeWidth(){
		return $this->paysleBarcodeWidth;
	}
	/**
	 * Paysle バーコードイメージ縦幅 取得
	 * @return string $バーコードイメージ縦幅
	 */
	public function getPaysleBarcodeHeight(){
		return $this->paysleBarcodeHeight;
	}
	/**
	 * Paysle バーコードイメージ形式 取得
	 * @return string $バーコードイメージ形式
	 */
	public function getPaysleBarcodeFormat(){
		return $this->paysleBarcodeFormat;
	}
	/**
	 * Paysle バーコードデータ 取得
	 * @return string $バーコードデータ
	 */
	public function getPaysleBarcode(){
		return $this->paysleBarcode;
	}
	/**
	 * Paysle 入金日時 取得
	 * @return string $入金日時
	 */
	public function getFinishDate(){
		return $this->finishDate;
	}
	/**
	 * GANB 銀行コード 取得
	 * @return string $銀行コード
	 */
	public function getGanbBankCode(){
		return $this->ganbBankCode;
	}
	/**
	 * GANB 銀行名  取得
	 * @return string $銀行名 
	 */
	public function getGanbBankName(){
		return $this->ganbBankName;
	}
	/**
	 * GANB 支店コード 取得
	 * @return string $支店コード
	 */
	public function getGanbBranchCode(){
		return $this->ganbBranchCode;
	}
	/**
	 * GANB 支店名 取得
	 * @return string $支店名
	 */
	public function getGanbBranchName(){
		return $this->ganbBranchName;
	}
	/**
	 * GANB 預金種別 取得
	 * @return string $預金種別
	 */
	public function getGanbAccountType(){
		return $this->ganbAccountType;
	}
	/**
	 * GANB 口座番号 取得
	 * @return string $口座番号
	 */
	public function getGanbAccountNumber(){
		return $this->ganbAccountNumber;
	}
	/**
	 * GANB 口座名義 取得
	 * @return string $口座名義
	 */
	public function getGanbAccountHolderName(){
		return $this->ganbAccountHolderName;
	}
	/**
	 * GANB 取引有効日数 取得
	 * @return string $取引有効日数
	 */
	public function getGanbExpireDays(){
		return $this->ganbExpireDays;
	}
	/**
	 * GANB 取引有効期限 取得
	 * @return string $取引有効期限
	 */
	public function getGanbExpireDate(){
		return $this->ganbExpireDate;
	}
	/**
	 * GANB 取引事由 取得
	 * @return string $取引事由
	 */
	public function getGanbTradeReason(){
		return $this->ganbTradeReason;
	}
	/**
	 * GANB 取引依頼人名 取得
	 * @return string $取引依頼人名
	 */
	public function getGanbTradeClientName(){
		return $this->ganbTradeClientName;
	}
	/**
	 * GANB 累計額 取得
	 * @return string $累計額
	 */
	public function getGanbTotalTransferAmount(){
		return $this->ganbTotalTransferAmount;
	}
	/**
	 * GANB 累計回数 取得
	 * @return string $累計回数
	 */
	public function getGanbTotalTransferCount(){
		return $this->ganbTotalTransferCount;
	}
	/**
	 * GANB 最終振込額 取得
	 * @return string $最終振込額
	 */
	public function getGanbLatestTransferAmount(){
		return $this->ganbLatestTransferAmount;
	}
	/**
	 * GANB 最終振込日 取得
	 * @return string $最終振込日
	 */
	public function getGanbLatestTransferDate(){
		return $this->ganbLatestTransferDate;
	}
	/**
	 * GANB 最終振込依頼人名 取得
	 * @return string $最終振込依頼人名
	 */
	public function getGanbLatestTransferName(){
		return $this->ganbLatestTransferName;
	}
	/**
	 * GANB 最終仕向銀行名 取得
	 * @return string $最終仕向銀行名
	 */
	public function getGanbLatestTransferBankName(){
		return $this->ganbLatestTransferBankName;
	}
	/**
	 * Amazonpay AmazonオーダーリファレンスID 取得
	 * @return string $AmazonオーダーリファレンスID
	 */
	public function getAmazonOrderReferenceID(){
		return $this->amazonOrderReferenceID;
	}
	/**
	 * Amazonpay キャンセル金額 取得
	 * @return integer $キャンセル金額
	 */
	public function getAmazonPayCancelAmount(){
		return $this->amazonPayCancelAmount;
	}
	/**
	 * Amazonpay キャンセル税送料金額 取得
	 * @return integer $キャンセル税送料金額
	 */
	public function getAmazonPayCancelTax(){
		return $this->amazonPayCancelTax;
	}
	/**
	 * Amazonpay AmazonビリングアグリーメントID 取得
	 * @return string $AmazonビリングアグリーメントID
	 */
	public function getAmazonBillingAgreementID(){
		return $this->amazonBillingAgreementID;
	}
	/**
	 * Famipay 売上No 取得
	 * @return string $売上No
	 */
	public function getUriageNO(){
		return $this->uriageNO;
	}
	/**
	 * Famipay 認証連携トークン 取得
	 * @return string $認証連携トークン
	 */
	public function getAuthToken(){
		return $this->authToken;
	}
	/**
	 * Epospay エポスかんたん決済取引ID 取得
	 * @return string $エポスかんたん決済取引ID
	 */
	public function getEposTradeID(){
		return $this->eposTradeID;
	}
	/**
	 * Epospay 利用クーポン額 取得
	 * @return integer $利用クーポン額
	 */
	public function getEposUseCouponAmount(){
		return $this->eposUseCouponAmount;
	}
	/**
	 * Epospay 利用エポスポイント 取得
	 * @return integer $利用エポスポイント
	 */
	public function getEposUsePoint(){
		return $this->eposUsePoint;
	}
	/**
	 * Epospay キャンセル金額の累積 取得
	 * @return integer $キャンセル金額の累積
	 */
	public function getTotalCancelAmount(){
		return $this->totalCancelAmount;
	}
	/**
	 * Epospay キャンセル税送料金額の累積 取得
	 * @return integer $キャンセル税送料金額の累積
	 */
	public function getTotalCancelTax(){
		return $this->totalCancelTax;
	}
	/**
	 * Merpay キャンセル金額の累計 取得
	 * @return integer $キャンセル金額の累計
	 */
	public function getMerpayCancelAmount(){
		return $this->merpayCancelAmount;
	}
	/**
	 * Merpay キャンセル税送料の累計 取得
	 * @return integer $キャンセル税送料の累計
	 */
	public function getMerpayCancelTax(){
		return $this->merpayCancelTax;
	}
	/**
	 * Merpay メルペイ取引番号 取得
	 * @return string $メルペイ取引番号
	 */
	public function getMerpayInquiryCode(){
		return $this->merpayInquiryCode;
	}
	/**
	 * Merpay サブスクリプションタイプ 取得
	 * @return string $サブスクリプションタイプ
	 */
	public function getMerpaySubscriptionType(){
		return $this->merpaySubscriptionType;
	}
	/**
	 * Merpay サブスクリプションＩＤ 取得
	 * @return string $サブスクリプションＩＤ
	 */
	public function getMerpaySubscriptionId(){
		return $this->merpaySubscriptionId;
	}
	/**
	 * Merpay サブスクリプション現状態 取得
	 * @return string $サブスクリプション現状態
	 */
	public function getMerpaySubscriptionCurrentStatus(){
		return $this->merpaySubscriptionCurrentStatus;
	}
	/**
	 * Merpay サブスクリプション利用承諾日時 取得
	 * @return string $サブスクリプション利用承諾日時
	 */
	public function getMerpaySubscriptionStartDate(){
		return $this->merpaySubscriptionStartDate;
	}
	/**
	 * Merpay サブスクリプション利用終了日時 取得
	 * @return string $サブスクリプション利用終了日時
	 */
	public function getMerpaySubscriptionEndDate(){
		return $this->merpaySubscriptionEndDate;
	}
	/**
	 * Merpay 随時決済で用いたサブスクリプションＩＤ 取得
	 * @return string $随時決済で用いたサブスクリプションＩＤ
	 */
	public function getMerpaySettlementSubscriptionId(){
		return $this->merpaySettlementSubscriptionId;
	}
	/**
	 * Postpay キャンセル金額 取得
	 * @return integer $キャンセル金額
	 */
	public function getPostpayCancelAmount(){
		return $this->postpayCancelAmount;
	}
	/**
	 * Postpay キャンセル税送料 取得
	 * @return integer $キャンセル税送料
	 */
	public function getPostpayCancelTax(){
		return $this->postpayCancelTax;
	}
	/**
	 * Postpay 後払い取引ID 取得
	 * @return string $後払い取引ID
	 */
	public function getPostpayTransactionId(){
		return $this->postpayTransactionId;
	}
	/**
	 * Postpay 目視審査結果理由 取得
	 * @return string $目視審査結果理由
	 */
	public function getPostpayCreditResultManualReason(){
		return $this->postpayCreditResultManualReason;
	}
	/**
	 * Postpay 強制キャンセル予定日 取得
	 * @return string $強制キャンセル予定日
	 */
	public function getForceCancelDate(){
		return $this->forceCancelDate;
	}
	/**
	 * Postpay 入金状況 取得
	 * @return string $入金状況
	 */
	public function getPostpayPaymentStatus(){
		return $this->postpayPaymentStatus;
	}
	/**
	 * Postpay 入金処理日（速報） 取得
	 * @return string $入金処理日（速報）
	 */
	public function getPostpayPaymentDateFast(){
		return $this->postpayPaymentDateFast;
	}
	/**
	 * Postpay 入金処理日（確報） 取得
	 * @return string $入金処理日（確報）
	 */
	public function getPostpayPaymentDateConf(){
		return $this->postpayPaymentDateConf;
	}
	/**
	 * Paypay キャンセル金額 取得
	 * @return integer $キャンセル金額
	 */
	public function getPayPayCancelAmount(){
		return $this->payPayCancelAmount;
	}
	/**
	 * Paypay キャンセル税送料 取得
	 * @return integer $キャンセル税送料
	 */
	public function getPayPayCancelTax(){
		return $this->payPayCancelTax;
	}
	/**
	 * Paypay PayPayトラッキングＩＤ 取得
	 * @return string $PayPayトラッキングＩＤ
	 */
	public function getPayPayTrackingID(){
		return $this->payPayTrackingID;
	}
	/**
	 * Paypay PayPay決済番号 取得
	 * @return string $PayPay決済番号
	 */
	public function getPayPayOrderID(){
		return $this->payPayOrderID;
	}
	/**
	 * PaypayAccept PayPay承諾番号 取得
	 * @return string $PayPay承諾番号
	 */
	public function getPayPayAcceptCode(){
		return $this->payPayAcceptCode;
	}
	/**
	 * Aupay キャンセル金額 取得
	 * @return integer $キャンセル金額
	 */
	public function getAupayCancelAmount(){
		return $this->aupayCancelAmount;
	}
	/**
	 * Aupay キャンセル税送料 取得
	 * @return integer $キャンセル税送料
	 */
	public function getAupayCancelTax(){
		return $this->aupayCancelTax;
	}
	/**
	 * Rakutenpay 楽天チャージID 取得
	 * @return string $楽天チャージID
	 */
	public function getRakutenChargeID(){
		return $this->rakutenChargeID;
	}
	/**
	 * Rakutenpay 再オーソリ期限 取得
	 * @return string $再オーソリ期限
	 */
	public function getReauthLimitDate(){
		return $this->reauthLimitDate;
	}
	/**
	 * Rakutenpay 実売上期限 取得
	 * @return string $実売上期限
	 */
	public function getSalesLimitDate(){
		return $this->salesLimitDate;
	}
	/**
	 * Rakutenpay 金額変更期限 取得
	 * @return string $金額変更期限
	 */
	public function getChangeLimitDate(){
		return $this->changeLimitDate;
	}
	/**
	 * Rakutenpay キャンセル期限 取得
	 * @return string $キャンセル期限
	 */
	public function getCancelLimitDate(){
		return $this->cancelLimitDate;
	}
	/**
	 * Rakutenpay 楽天ペイで使用されたポイント 取得
	 * @return integer $楽天ペイで使用されたポイント
	 */
	public function getRakutenPoint(){
		return $this->rakutenPoint;
	}

	/**
	 * JcbPreca 伝票番号 設定
	 * @param string $jcbPrecaSalesCode
	 */
	public function setJcbPrecaSalesCode($jcbPrecaSalesCode){
		$this->jcbPrecaSalesCode = $jcbPrecaSalesCode;
	}
	/**
	 * Netcash NET CASH決済方法 設定
	 * @param string $netCashPayType
	 */
	public function setNetCashPayType($netCashPayType){
		$this->netCashPayType = $netCashPayType;
	}
	/**
	 * RakutenId 注文日 設定
	 * @param string $orderDate
	 */
	public function setOrderDate($orderDate){
		$this->orderDate = $orderDate;
	}
	/**
	 * RakutenId 完了日 設定
	 * @param string $completionDate
	 */
	public function setCompletionDate($completionDate){
		$this->completionDate = $completionDate;
	}
	/**
	 * RakutenId クーポン金額 設定
	 * @param integer $rakutenidCouponFee
	 */
	public function setRakutenidCouponFee($rakutenidCouponFee){
		$this->rakutenidCouponFee = $rakutenidCouponFee;
	}
	/**
	 * RakutenId サブスクリプションID 設定
	 * @param string $subscriptionId
	 */
	public function setSubscriptionId($subscriptionId){
		$this->subscriptionId = $subscriptionId;
	}
	/**
	 * RakutenId 決済用サブスクリプションID 設定
	 * @param string $settlementSubscriptionId
	 */
	public function setSettlementSubscriptionId($settlementSubscriptionId){
		$this->settlementSubscriptionId = $settlementSubscriptionId;
	}
	/**
	 * Linepay LINE Pay商品名 設定
	 * @param string $linepayProductName
	 */
	public function setLinepayProductName($linepayProductName){
		$this->linepayProductName = $linepayProductName;
	}
	/**
	 * Linepay LINE Payキャンセル金額 設定
	 * @param bigDecimal $linepayCancelAmount
	 */
	public function setLinepayCancelAmount($linepayCancelAmount){
		$this->linepayCancelAmount = $linepayCancelAmount;
	}
	/**
	 * Linepay LINE Payキャンセル税送料 設定
	 * @param bigDecimal $linepayCancelTax
	 */
	public function setLinepayCancelTax($linepayCancelTax){
		$this->linepayCancelTax = $linepayCancelTax;
	}
	/**
	 * Linepay LINE Pay支払手段 設定
	 * @param string $linepayPayMethod
	 */
	public function setLinepayPayMethod($linepayPayMethod){
		$this->linepayPayMethod = $linepayPayMethod;
	}
	/**
	 * Linepay RegKey 設定
	 * @param string $linepayRegKey
	 */
	public function setLinepayRegKey($linepayRegKey){
		$this->linepayRegKey = $linepayRegKey;
	}
	/**
	 * Linepay 決済用RegKey 設定
	 * @param string $linepaySettlementRegKey
	 */
	public function setLinepaySettlementRegKey($linepaySettlementRegKey){
		$this->linepaySettlementRegKey = $linepaySettlementRegKey;
	}
	/**
	 * Unionpay 商品名 設定
	 * @param string $commodityName
	 */
	public function setCommodityName($commodityName){
		$this->commodityName = $commodityName;
	}
	/**
	 * SbContinuance 課金開始月 設定
	 * @param string $sbStartChargeMonth
	 */
	public function setSbStartChargeMonth($sbStartChargeMonth){
		$this->sbStartChargeMonth = $sbStartChargeMonth;
	}
	/**
	 * Virtualaccount 振込要求金額 設定
	 * @param bigDecimal $vaRequestAmount
	 */
	public function setVaRequestAmount($vaRequestAmount){
		$this->vaRequestAmount = $vaRequestAmount;
	}
	/**
	 * Virtualaccount 取引有効期限 設定
	 * @param string $vaExpireDate
	 */
	public function setVaExpireDate($vaExpireDate){
		$this->vaExpireDate = $vaExpireDate;
	}
	/**
	 * Virtualaccount 取引事由 設定
	 * @param string $vaTradeReason
	 */
	public function setVaTradeReason($vaTradeReason){
		$this->vaTradeReason = $vaTradeReason;
	}
	/**
	 * Virtualaccount 振込依頼者氏名 設定
	 * @param string $vaTradeClientName
	 */
	public function setVaTradeClientName($vaTradeClientName){
		$this->vaTradeClientName = $vaTradeClientName;
	}
	/**
	 * Virtualaccount 振込依頼者メールアドレス 設定
	 * @param string $vaTradeClientMailaddress
	 */
	public function setVaTradeClientMailaddress($vaTradeClientMailaddress){
		$this->vaTradeClientMailaddress = $vaTradeClientMailaddress;
	}
	/**
	 * Virtualaccount 銀行コード 設定
	 * @param string $vaBankCode
	 */
	public function setVaBankCode($vaBankCode){
		$this->vaBankCode = $vaBankCode;
	}
	/**
	 * Virtualaccount 銀行名 設定
	 * @param string $vaBankName
	 */
	public function setVaBankName($vaBankName){
		$this->vaBankName = $vaBankName;
	}
	/**
	 * Virtualaccount 支店コード 設定
	 * @param string $vaBranchCode
	 */
	public function setVaBranchCode($vaBranchCode){
		$this->vaBranchCode = $vaBranchCode;
	}
	/**
	 * Virtualaccount 支店名 設定
	 * @param string $vaBranchName
	 */
	public function setVaBranchName($vaBranchName){
		$this->vaBranchName = $vaBranchName;
	}
	/**
	 * Virtualaccount 科目 設定
	 * @param string $vaAccountType
	 */
	public function setVaAccountType($vaAccountType){
		$this->vaAccountType = $vaAccountType;
	}
	/**
	 * Virtualaccount 口座番号 設定
	 * @param string $vaAccountNumber
	 */
	public function setVaAccountNumber($vaAccountNumber){
		$this->vaAccountNumber = $vaAccountNumber;
	}
	/**
	 * Virtualaccount 照会番号 設定
	 * @param string $vaInInquiryNumber
	 */
	public function setVaInInquiryNumber($vaInInquiryNumber){
		$this->vaInInquiryNumber = $vaInInquiryNumber;
	}
	/**
	 * Virtualaccount 勘定日 設定
	 * @param string $vaInSettlementDate
	 */
	public function setVaInSettlementDate($vaInSettlementDate){
		$this->vaInSettlementDate = $vaInSettlementDate;
	}
	/**
	 * Virtualaccount 入金額 設定
	 * @param bigDecimal $vaInAmount
	 */
	public function setVaInAmount($vaInAmount){
		$this->vaInAmount = $vaInAmount;
	}
	/**
	 * Virtualaccount 振込依頼人コード 設定
	 * @param string $vaInClientCode
	 */
	public function setVaInClientCode($vaInClientCode){
		$this->vaInClientCode = $vaInClientCode;
	}
	/**
	 * Virtualaccount 振込依頼人名 設定
	 * @param string $vaInClientName
	 */
	public function setVaInClientName($vaInClientName){
		$this->vaInClientName = $vaInClientName;
	}
	/**
	 * Virtualaccount 摘要 設定
	 * @param string $vaInSummary
	 */
	public function setVaInSummary($vaInSummary){
		$this->vaInSummary = $vaInSummary;
	}
	/**
	 * Virtualaccount 継続口座ID 設定
	 * @param string $vaReserveID
	 */
	public function setVaReserveID($vaReserveID){
		$this->vaReserveID = $vaReserveID;
	}
	/**
	 * Virtualaccount 振込コード 設定
	 * @param string $vaTradeCode
	 */
	public function setVaTradeCode($vaTradeCode){
		$this->vaTradeCode = $vaTradeCode;
	}
	/**
	 * Recruit 注文番号 設定
	 * @param string $rcOrderId
	 */
	public function setRcOrderId($rcOrderId){
		$this->rcOrderId = $rcOrderId;
	}
	/**
	 * Recruit 顧客IDハッシュ値 設定
	 * @param string $rcCustomerId
	 */
	public function setRcCustomerId($rcCustomerId){
		$this->rcCustomerId = $rcCustomerId;
	}
	/**
	 * Recruit 注文時刻 設定
	 * @param string $rcOrderTime
	 */
	public function setRcOrderTime($rcOrderTime){
		$this->rcOrderTime = $rcOrderTime;
	}
	/**
	 * Recruit 行使ポイント数 設定
	 * @param string $rcUsePoint
	 */
	public function setRcUsePoint($rcUsePoint){
		$this->rcUsePoint = $rcUsePoint;
	}
	/**
	 * Recruit リクルート原資クーポン割引額 設定
	 * @param string $rcUseCoupon
	 */
	public function setRcUseCoupon($rcUseCoupon){
		$this->rcUseCoupon = $rcUseCoupon;
	}
	/**
	 * Recruit 加盟店様原資クーポン割引額 設定
	 * @param string $rcUseShopCoupon
	 */
	public function setRcUseShopCoupon($rcUseShopCoupon){
		$this->rcUseShopCoupon = $rcUseShopCoupon;
	}
	/**
	 * Recruit オーソリ期限延長実施日 設定
	 * @param string $rcUpdateAuthDay
	 */
	public function setRcUpdateAuthDay($rcUpdateAuthDay){
		$this->rcUpdateAuthDay = $rcUpdateAuthDay;
	}
	/**
	 * RecruitContinuance 契約番号 設定
	 * @param string $rcContractId
	 */
	public function setRcContractId($rcContractId){
		$this->rcContractId = $rcContractId;
	}
	/**
	 * RecruitContinuance 課金開始月 設定
	 * @param string $rcStartChargeMonth
	 */
	public function setRcStartChargeMonth($rcStartChargeMonth){
		$this->rcStartChargeMonth = $rcStartChargeMonth;
	}
	/**
	 * Brandtoken カード番号トークン 設定
	 * @param string $cardNoToken
	 */
	public function setCardNoToken($cardNoToken){
		$this->cardNoToken = $cardNoToken;
	}
	/**
	 * Bankaccount 振替指定日 設定
	 * @param string $baTargetDate
	 */
	public function setBaTargetDate($baTargetDate){
		$this->baTargetDate = $baTargetDate;
	}
	/**
	 * Bankaccount 請求依頼受付終了日 設定
	 * @param string $baRequestAcceptEndDate
	 */
	public function setBaRequestAcceptEndDate($baRequestAcceptEndDate){
		$this->baRequestAcceptEndDate = $baRequestAcceptEndDate;
	}
	/**
	 * Bankaccount 振替結果反映予定日 設定
	 * @param string $baTransferReturnDate
	 */
	public function setBaTransferReturnDate($baTransferReturnDate){
		$this->baTransferReturnDate = $baTransferReturnDate;
	}
	/**
	 * Bankaccount 実引落日 設定
	 * @param string $baWithdrawalDate
	 */
	public function setBaWithdrawalDate($baWithdrawalDate){
		$this->baWithdrawalDate = $baWithdrawalDate;
	}
	/**
	 * Bankaccount 振替結果コード 設定
	 * @param string $baResultCode
	 */
	public function setBaResultCode($baResultCode){
		$this->baResultCode = $baResultCode;
	}
	/**
	 * Paid Paidキャンセル金額 設定
	 * @param bigDecimal $paidCancelAmount
	 */
	public function setPaidCancelAmount($paidCancelAmount){
		$this->paidCancelAmount = $paidCancelAmount;
	}
	/**
	 * Paid Paidキャンセル税送料 設定
	 * @param bigDecimal $paidCancelTax
	 */
	public function setPaidCancelTax($paidCancelTax){
		$this->paidCancelTax = $paidCancelTax;
	}
	/**
	 * Paid Paid取引先ID 設定
	 * @param string $paidBuyerID
	 */
	public function setPaidBuyerID($paidBuyerID){
		$this->paidBuyerID = $paidBuyerID;
	}
	/**
	 * Paid Paid伝票番号 設定
	 * @param string $paidCode
	 */
	public function setPaidCode($paidCode){
		$this->paidCode = $paidCode;
	}
	/**
	 * Paid 注文内容 設定
	 * @param string $paidContents
	 */
	public function setPaidContents($paidContents){
		$this->paidContents = $paidContents;
	}
	/**
	 * DocomoAccept ドコモ承諾番号 設定
	 * @param string $docomoAcceptCode
	 */
	public function setDocomoAcceptCode($docomoAcceptCode){
		$this->docomoAcceptCode = $docomoAcceptCode;
	}
	/**
	 * AuAccept au決済情報番号 設定
	 * @param string $auAcceptCode
	 */
	public function setAuAcceptCode($auAcceptCode){
		$this->auAcceptCode = $auAcceptCode;
	}
	/**
	 * SbAccept SB承諾番号 設定
	 * @param string $sbAcceptCode
	 */
	public function setSbAcceptCode($sbAcceptCode){
		$this->sbAcceptCode = $sbAcceptCode;
	}
	/**
	 * Paysle 表示開始日 設定
	 * @param string $paysleDisplayTerm
	 */
	public function setPaysleDisplayTerm($paysleDisplayTerm){
		$this->paysleDisplayTerm = $paysleDisplayTerm;
	}
	/**
	 * Paysle 支払期限日 設定
	 * @param string $payslePaymentTerm
	 */
	public function setPayslePaymentTerm($payslePaymentTerm){
		$this->payslePaymentTerm = $payslePaymentTerm;
	}
	/**
	 * Paysle 購入者通知日 設定
	 * @param string $paysleNotifyTerm
	 */
	public function setPaysleNotifyTerm($paysleNotifyTerm){
		$this->paysleNotifyTerm = $paysleNotifyTerm;
	}
	/**
	 * Paysle 注文管理ID 設定
	 * @param string $paysleOrderSerial
	 */
	public function setPaysleOrderSerial($paysleOrderSerial){
		$this->paysleOrderSerial = $paysleOrderSerial;
	}
	/**
	 * Paysle バーコードイメージ横幅 設定
	 * @param string $paysleBarcodeWidth
	 */
	public function setPaysleBarcodeWidth($paysleBarcodeWidth){
		$this->paysleBarcodeWidth = $paysleBarcodeWidth;
	}
	/**
	 * Paysle バーコードイメージ縦幅 設定
	 * @param string $paysleBarcodeHeight
	 */
	public function setPaysleBarcodeHeight($paysleBarcodeHeight){
		$this->paysleBarcodeHeight = $paysleBarcodeHeight;
	}
	/**
	 * Paysle バーコードイメージ形式 設定
	 * @param string $paysleBarcodeFormat
	 */
	public function setPaysleBarcodeFormat($paysleBarcodeFormat){
		$this->paysleBarcodeFormat = $paysleBarcodeFormat;
	}
	/**
	 * Paysle バーコードデータ 設定
	 * @param string $paysleBarcode
	 */
	public function setPaysleBarcode($paysleBarcode){
		$this->paysleBarcode = $paysleBarcode;
	}
	/**
	 * Paysle 入金日時 設定
	 * @param string $finishDate
	 */
	public function setFinishDate($finishDate){
		$this->finishDate = $finishDate;
	}
	/**
	 * GANB 銀行コード 設定
	 * @param string $ganbBankCode
	 */
	public function setGanbBankCode($ganbBankCode){
		$this->ganbBankCode = $ganbBankCode;
	}
	/**
	 * GANB 銀行名  設定
	 * @param string $ganbBankName
	 */
	public function setGanbBankName($ganbBankName){
		$this->ganbBankName = $ganbBankName;
	}
	/**
	 * GANB 支店コード 設定
	 * @param string $ganbBranchCode
	 */
	public function setGanbBranchCode($ganbBranchCode){
		$this->ganbBranchCode = $ganbBranchCode;
	}
	/**
	 * GANB 支店名 設定
	 * @param string $ganbBranchName
	 */
	public function setGanbBranchName($ganbBranchName){
		$this->ganbBranchName = $ganbBranchName;
	}
	/**
	 * GANB 預金種別 設定
	 * @param string $ganbAccountType
	 */
	public function setGanbAccountType($ganbAccountType){
		$this->ganbAccountType = $ganbAccountType;
	}
	/**
	 * GANB 口座番号 設定
	 * @param string $ganbAccountNumber
	 */
	public function setGanbAccountNumber($ganbAccountNumber){
		$this->ganbAccountNumber = $ganbAccountNumber;
	}
	/**
	 * GANB 口座名義 設定
	 * @param string $ganbAccountHolderName
	 */
	public function setGanbAccountHolderName($ganbAccountHolderName){
		$this->ganbAccountHolderName = $ganbAccountHolderName;
	}
	/**
	 * GANB 取引有効日数 設定
	 * @param string $ganbExpireDays
	 */
	public function setGanbExpireDays($ganbExpireDays){
		$this->ganbExpireDays = $ganbExpireDays;
	}
	/**
	 * GANB 取引有効期限 設定
	 * @param string $ganbExpireDate
	 */
	public function setGanbExpireDate($ganbExpireDate){
		$this->ganbExpireDate = $ganbExpireDate;
	}
	/**
	 * GANB 取引事由 設定
	 * @param string $ganbTradeReason
	 */
	public function setGanbTradeReason($ganbTradeReason){
		$this->ganbTradeReason = $ganbTradeReason;
	}
	/**
	 * GANB 取引依頼人名 設定
	 * @param string $ganbTradeClientName
	 */
	public function setGanbTradeClientName($ganbTradeClientName){
		$this->ganbTradeClientName = $ganbTradeClientName;
	}
	/**
	 * GANB 累計額 設定
	 * @param string $ganbTotalTransferAmount
	 */
	public function setGanbTotalTransferAmount($ganbTotalTransferAmount){
		$this->ganbTotalTransferAmount = $ganbTotalTransferAmount;
	}
	/**
	 * GANB 累計回数 設定
	 * @param string $ganbTotalTransferCount
	 */
	public function setGanbTotalTransferCount($ganbTotalTransferCount){
		$this->ganbTotalTransferCount = $ganbTotalTransferCount;
	}
	/**
	 * GANB 最終振込額 設定
	 * @param string $ganbLatestTransferAmount
	 */
	public function setGanbLatestTransferAmount($ganbLatestTransferAmount){
		$this->ganbLatestTransferAmount = $ganbLatestTransferAmount;
	}
	/**
	 * GANB 最終振込日 設定
	 * @param string $ganbLatestTransferDate
	 */
	public function setGanbLatestTransferDate($ganbLatestTransferDate){
		$this->ganbLatestTransferDate = $ganbLatestTransferDate;
	}
	/**
	 * GANB 最終振込依頼人名 設定
	 * @param string $ganbLatestTransferName
	 */
	public function setGanbLatestTransferName($ganbLatestTransferName){
		$this->ganbLatestTransferName = $ganbLatestTransferName;
	}
	/**
	 * GANB 最終仕向銀行名 設定
	 * @param string $ganbLatestTransferBankName
	 */
	public function setGanbLatestTransferBankName($ganbLatestTransferBankName){
		$this->ganbLatestTransferBankName = $ganbLatestTransferBankName;
	}
	/**
	 * Amazonpay AmazonオーダーリファレンスID 設定
	 * @param string $amazonOrderReferenceID
	 */
	public function setAmazonOrderReferenceID($amazonOrderReferenceID){
		$this->amazonOrderReferenceID = $amazonOrderReferenceID;
	}
	/**
	 * Amazonpay キャンセル金額 設定
	 * @param integer $amazonPayCancelAmount
	 */
	public function setAmazonPayCancelAmount($amazonPayCancelAmount){
		$this->amazonPayCancelAmount = $amazonPayCancelAmount;
	}
	/**
	 * Amazonpay キャンセル税送料金額 設定
	 * @param integer $amazonPayCancelTax
	 */
	public function setAmazonPayCancelTax($amazonPayCancelTax){
		$this->amazonPayCancelTax = $amazonPayCancelTax;
	}
	/**
	 * Amazonpay AmazonビリングアグリーメントID 設定
	 * @param string $amazonBillingAgreementID
	 */
	public function setAmazonBillingAgreementID($amazonBillingAgreementID){
		$this->amazonBillingAgreementID = $amazonBillingAgreementID;
	}
	/**
	 * Famipay 売上No 設定
	 * @param string $uriageNO
	 */
	public function setUriageNO($uriageNO){
		$this->uriageNO = $uriageNO;
	}
	/**
	 * Famipay 認証連携トークン 設定
	 * @param string $authToken
	 */
	public function setAuthToken($authToken){
		$this->authToken = $authToken;
	}
	/**
	 * Epospay エポスかんたん決済取引ID 設定
	 * @param string $eposTradeID
	 */
	public function setEposTradeID($eposTradeID){
		$this->eposTradeID = $eposTradeID;
	}
	/**
	 * Epospay 利用クーポン額 設定
	 * @param integer $eposUseCouponAmount
	 */
	public function setEposUseCouponAmount($eposUseCouponAmount){
		$this->eposUseCouponAmount = $eposUseCouponAmount;
	}
	/**
	 * Epospay 利用エポスポイント 設定
	 * @param integer $eposUsePoint
	 */
	public function setEposUsePoint($eposUsePoint){
		$this->eposUsePoint = $eposUsePoint;
	}
	/**
	 * Epospay キャンセル金額の累積 設定
	 * @param integer $totalCancelAmount
	 */
	public function setTotalCancelAmount($totalCancelAmount){
		$this->totalCancelAmount = $totalCancelAmount;
	}
	/**
	 * Epospay キャンセル税送料金額の累積 設定
	 * @param integer $totalCancelTax
	 */
	public function setTotalCancelTax($totalCancelTax){
		$this->totalCancelTax = $totalCancelTax;
	}
	/**
	 * Merpay キャンセル金額の累計 設定
	 * @param integer $merpayCancelAmount
	 */
	public function setMerpayCancelAmount($merpayCancelAmount){
		$this->merpayCancelAmount = $merpayCancelAmount;
	}
	/**
	 * Merpay キャンセル税送料の累計 設定
	 * @param integer $merpayCancelTax
	 */
	public function setMerpayCancelTax($merpayCancelTax){
		$this->merpayCancelTax = $merpayCancelTax;
	}
	/**
	 * Merpay メルペイ取引番号 設定
	 * @param string $merpayInquiryCode
	 */
	public function setMerpayInquiryCode($merpayInquiryCode){
		$this->merpayInquiryCode = $merpayInquiryCode;
	}
	/**
	 * Merpay サブスクリプションタイプ 設定
	 * @param string $merpaySubscriptionType
	 */
	public function setMerpaySubscriptionType($merpaySubscriptionType){
		$this->merpaySubscriptionType = $merpaySubscriptionType;
	}
	/**
	 * Merpay サブスクリプションＩＤ 設定
	 * @param string $merpaySubscriptionId
	 */
	public function setMerpaySubscriptionId($merpaySubscriptionId){
		$this->merpaySubscriptionId = $merpaySubscriptionId;
	}
	/**
	 * Merpay サブスクリプション現状態 設定
	 * @param string $merpaySubscriptionCurrentStatus
	 */
	public function setMerpaySubscriptionCurrentStatus($merpaySubscriptionCurrentStatus){
		$this->merpaySubscriptionCurrentStatus = $merpaySubscriptionCurrentStatus;
	}
	/**
	 * Merpay サブスクリプション利用承諾日時 設定
	 * @param string $merpaySubscriptionStartDate
	 */
	public function setMerpaySubscriptionStartDate($merpaySubscriptionStartDate){
		$this->merpaySubscriptionStartDate = $merpaySubscriptionStartDate;
	}
	/**
	 * Merpay サブスクリプション利用終了日時 設定
	 * @param string $merpaySubscriptionEndDate
	 */
	public function setMerpaySubscriptionEndDate($merpaySubscriptionEndDate){
		$this->merpaySubscriptionEndDate = $merpaySubscriptionEndDate;
	}
	/**
	 * Merpay 随時決済で用いたサブスクリプションＩＤ 設定
	 * @param string $merpaySettlementSubscriptionId
	 */
	public function setMerpaySettlementSubscriptionId($merpaySettlementSubscriptionId){
		$this->merpaySettlementSubscriptionId = $merpaySettlementSubscriptionId;
	}
	/**
	 * Postpay キャンセル金額 設定
	 * @param integer $postpayCancelAmount
	 */
	public function setPostpayCancelAmount($postpayCancelAmount){
		$this->postpayCancelAmount = $postpayCancelAmount;
	}
	/**
	 * Postpay キャンセル税送料 設定
	 * @param integer $postpayCancelTax
	 */
	public function setPostpayCancelTax($postpayCancelTax){
		$this->postpayCancelTax = $postpayCancelTax;
	}
	/**
	 * Postpay 後払い取引ID 設定
	 * @param string $postpayTransactionId
	 */
	public function setPostpayTransactionId($postpayTransactionId){
		$this->postpayTransactionId = $postpayTransactionId;
	}
	/**
	 * Postpay 目視審査結果理由 設定
	 * @param string $postpayCreditResultManualReason
	 */
	public function setPostpayCreditResultManualReason($postpayCreditResultManualReason){
		$this->postpayCreditResultManualReason = $postpayCreditResultManualReason;
	}
	/**
	 * Postpay 強制キャンセル予定日 設定
	 * @param string $forceCancelDate
	 */
	public function setForceCancelDate($forceCancelDate){
		$this->forceCancelDate = $forceCancelDate;
	}
	/**
	 * Postpay 入金状況 設定
	 * @param string $postpayPaymentStatus
	 */
	public function setPostpayPaymentStatus($postpayPaymentStatus){
		$this->postpayPaymentStatus = $postpayPaymentStatus;
	}
	/**
	 * Postpay 入金処理日（速報） 設定
	 * @param string $postpayPaymentDateFast
	 */
	public function setPostpayPaymentDateFast($postpayPaymentDateFast){
		$this->postpayPaymentDateFast = $postpayPaymentDateFast;
	}
	/**
	 * Postpay 入金処理日（確報） 設定
	 * @param string $postpayPaymentDateConf
	 */
	public function setPostpayPaymentDateConf($postpayPaymentDateConf){
		$this->postpayPaymentDateConf = $postpayPaymentDateConf;
	}
	/**
	 * Paypay キャンセル金額 設定
	 * @param integer $payPayCancelAmount
	 */
	public function setPayPayCancelAmount($payPayCancelAmount){
		$this->payPayCancelAmount = $payPayCancelAmount;
	}
	/**
	 * Paypay キャンセル税送料 設定
	 * @param integer $payPayCancelTax
	 */
	public function setPayPayCancelTax($payPayCancelTax){
		$this->payPayCancelTax = $payPayCancelTax;
	}
	/**
	 * Paypay PayPayトラッキングＩＤ 設定
	 * @param string $payPayTrackingID
	 */
	public function setPayPayTrackingID($payPayTrackingID){
		$this->payPayTrackingID = $payPayTrackingID;
	}
	/**
	 * Paypay PayPay決済番号 設定
	 * @param string $payPayOrderID
	 */
	public function setPayPayOrderID($payPayOrderID){
		$this->payPayOrderID = $payPayOrderID;
	}
	/**
	 * PaypayAccept PayPay承諾番号 設定
	 * @param string $payPayAcceptCode
	 */
	public function setPayPayAcceptCode($payPayAcceptCode){
		$this->payPayAcceptCode = $payPayAcceptCode;
	}
	/**
	 * Aupay キャンセル金額 設定
	 * @param integer $aupayCancelAmount
	 */
	public function setAupayCancelAmount($aupayCancelAmount){
		$this->aupayCancelAmount = $aupayCancelAmount;
	}
	/**
	 * Aupay キャンセル税送料 設定
	 * @param integer $aupayCancelTax
	 */
	public function setAupayCancelTax($aupayCancelTax){
		$this->aupayCancelTax = $aupayCancelTax;
	}
	/**
	 * Rakutenpay 楽天チャージID 設定
	 * @param string $rakutenChargeID
	 */
	public function setRakutenChargeID($rakutenChargeID){
		$this->rakutenChargeID = $rakutenChargeID;
	}
	/**
	 * Rakutenpay 再オーソリ期限 設定
	 * @param string $reauthLimitDate
	 */
	public function setReauthLimitDate($reauthLimitDate){
		$this->reauthLimitDate = $reauthLimitDate;
	}
	/**
	 * Rakutenpay 実売上期限 設定
	 * @param string $salesLimitDate
	 */
	public function setSalesLimitDate($salesLimitDate){
		$this->salesLimitDate = $salesLimitDate;
	}
	/**
	 * Rakutenpay 金額変更期限 設定
	 * @param string $changeLimitDate
	 */
	public function setChangeLimitDate($changeLimitDate){
		$this->changeLimitDate = $changeLimitDate;
	}
	/**
	 * Rakutenpay キャンセル期限 設定
	 * @param string $cancelLimitDate
	 */
	public function setCancelLimitDate($cancelLimitDate){
		$this->cancelLimitDate = $cancelLimitDate;
	}
	/**
	 * Rakutenpay 楽天ペイで使用されたポイント 設定
	 * @param integer $rakutenPoint
	 */
	public function setRakutenPoint($rakutenPoint){
		$this->rakutenPoint = $rakutenPoint;
	}


	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
	    $str  = 'OrderID=' . $this->getOrderId();
        $str .= '&';
	    $str .= 'Status=' . $this->getStatus();
        $str .= '&';
	    $str .= 'ProcessDate=' . $this->getProcessDate();
        $str .= '&';
	    $str .= 'JobCd=' . $this->getJobCd();
        $str .= '&';
	    $str .= 'AccessID=' . $this->getAccessId();
        $str .= '&';
	    $str .= 'AccessPass=' . $this->getAccessPass();
        $str .= '&';
	    $str .= 'ItemCode=' . $this->getItemCode();
        $str .= '&';
        $str .= 'Amount=' . $this->getAmount();
        $str .= '&';
	    $str .= 'Tax=' . $this->getTax();
        $str .= '&';
	    $str .= 'AmountBigDecimal=' . $this->getAmountBigDecimal();
        $str .= '&';
	    $str .= 'TaxBigDecimal=' . $this->getTaxBigDecimal();
        $str .= '&';
	    $str .= 'SiteID=' . $this->getSiteId();
        $str .= '&';
	    $str .= 'MemberID=' . $this->getMemberId();
        $str .= '&';
	    $str .= 'CardNo=' . $this->getCardNo();
        $str .= '&';
	    $str .= 'Expire=' . $this->getExpire();
        $str .= '&';
        $str .= 'Method=' . $this->getMethod();
        $str .= '&';
        $str .= 'PayTimes=' . $this->getPayTimes();
        $str .= '&';
        $str .= 'Forward=' . $this->getForward();
        $str .= '&';
        $str .= 'TranID=' . $this->getTranId();
        $str .= '&';
        $str .= 'Approve=' . $this->getApprovalNo();
        $str .= '&';
        $str .= 'ClientField1=' . $this->getClientField1();
        $str .= '&';
        $str .= 'ClientField2=' . $this->getClientField2();
        $str .= '&';
        $str .= 'ClientField3=' . $this->getClientField3();
		$str .= '&';
        $str .= 'PayType=' . $this->getPayType();
		$str .= '&';
        $str .= 'CvsCode=' . $this->getCvsCode();
		$str .= '&';
        $str .= 'CvsConfNo=' . $this->getCvsConfNo();
		$str .= '&';
        $str .= 'CvsReceiptNo=' . $this->getCvsReceiptNo();
		$str .= '&';
        $str .= 'EdyReceiptNo=' . $this->getEdyReceiptNo();
		$str .= '&';
        $str .= 'EdyOrderNo=' . $this->getEdyOrderNo();
		$str .= '&';
        $str .= 'SuicaReceiptNo=' . $this->getSuicaReceiptNo();
		$str .= '&';
        $str .= 'SuicaOrderNo=' . $this->getSuicaOrderNo();
		$str .= '&';
        $str .= 'CustId=' . $this->getCustId();
		$str .= '&';
        $str .= 'BkCode=' . $this->getBkCode();
		$str .= '&';
        $str .= 'ConfNo=' . $this->getConfNo();
		$str .= '&';
        $str .= 'PaymentTerm=' . $this->getPaymentTerm();
        $str .= '&';
        $str .= 'EncryptReceiptNo=' . $this->getEncryptReceiptNo();
        $str .= '&';
        $str .= 'PayeasyPaymentURL=' . $this->getPayeasyPaymentURL();
        $str .= '&';
        $str .= 'WebMoneyManagementNo=' . $this->getWebMoneyManagementNo();
        $str .= '&';
        $str .= 'WebMoneySettleCode=' . $this->getWebMoneySettleCode();
        $str .= '&';
		$str .= 'AuPayInfoNo=' . $this->getAuPayInfoNo();
        $str .= '&';
		$str .= 'AuPayMethod=' . $this->getAuPayMethod();
        $str .= '&';
		$str .= 'AuCancelAmount=' . $this->getAuCancelAmount();
        $str .= '&';
		$str .= 'AuCancelTax=' . $this->getAuCancelTax();
		$str .= '&';
		$str .= 'DocomoSettlementCode=' . $this->encodeStr($this->getDocomoSettlementCode());
		$str .= '&';
		$str .= 'DocomoCancelAmount=' . $this->encodeStr($this->getDocomoCancelAmount());
		$str .= '&';
		$str .= 'DocomoCancelTax=' . $this->encodeStr($this->getDocomoCancelTax());
		$str .= '&';
		$str .= 'DocomoIncreaseAmount=' . $this->encodeStr($this->getDocomoIncreaseAmount());
		$str .= '&';
		$str .= 'DocomoIncreaseTax=' . $this->encodeStr($this->getDocomoIncreaseTax());
		$str .= '&';
		$str .= 'SbTrackingId=' . $this->encodeStr($this->getSbTrackingId());
		$str .= '&';
		$str .= 'SbCancelAmount=' . $this->encodeStr($this->getSbCancelAmount());
		$str .= '&';
		$str .= 'SbCancelTax=' . $this->encodeStr($this->getSbCancelTax());
		$str .= '&';
		$str .= 'JibunReceiptNo=' . $this->getJibunReceiptNo();
		$str .= '&';
		$str .= 'FirstAmount=' . $this->getFirstAmount();
		$str .= '&';
		$str .= 'FirstTax=' . $this->getFirstTax();
		$str .= '&';
		$str .= 'AccountTimingKbn=' . $this->getAccountTimingKbn();
		$str .= '&';
		$str .= 'AccountTiming=' . $this->getAccountTiming();
		$str .= '&';
		$str .= 'FirstAccountDate=' . $this->getFirstAccountDate();
		$str .= '&';
		$str .= 'AuContinuaceErrCode=' . $this->getAuContinuanceErrCode();
		$str .= '&';
		$str .= 'AuContinuaceErrInfo=' . $this->getAuContinuanceErrInfo();
		$str .= '&';
		$str .= 'AuContinueAccountId=' . $this->getAuContinueAccountId();
		$str .= '&';
		$str .= 'ProcessLastDate=' . $this->getProcessLastDate();
		$str .= '&';
		$str .= 'TotalIncreaseAmount=' . $this->getTotalIncreaseAmount();
		$str .= '&';
		$str .= 'TotalIncreaseTax=' . $this->getTotalIncreaseTax();
		$str .= '&';
		$str .= 'DccAmount=' . $this->getDccAmount();
		$str .= '&';
		$str .= 'DccFtn=' . $this->getDccFtn();
		$str .= '&';
		$str .= 'PaypalPaymentType=' . $this->getPaypalPaymentType();
		$str .= '&';
		$str .= 'PaypalAgreementCurrentstatus=' . $this->getPaypalAgreementCurrentstatus();
		$str .= '&';
		$str .= 'PaypalAgreementID=' . $this->getPaypalAgreementId();
		$str .= '&';
		$str .= 'PaypalBillingAgreementID=' . $this->getPaypalBillingAgreementId();
		$str .= '&';
		$str .= 'PaypalAgreementStartDate=' . $this->getPaypalAgreementStartDate();
		$str .= '&';
		$str .= 'PaypalAgreementEndDate=' . $this->getPaypalAgreementEndDate();

		$str .= '&';
		$str .= 'JcbPrecaSalesCode=' . $this->getJcbPrecaSalesCode();
		$str .= '&';
		$str .= 'NetCashPayType=' . $this->getNetCashPayType();
		$str .= '&';
		$str .= 'OrderDate=' . $this->getOrderDate();
		$str .= '&';
		$str .= 'CompletionDate=' . $this->getCompletionDate();
		$str .= '&';
		$str .= 'RakutenidCouponFee=' . $this->getRakutenidCouponFee();
		$str .= '&';
		$str .= 'SubscriptionId=' . $this->getSubscriptionId();
		$str .= '&';
		$str .= 'SettlementSubscriptionId=' . $this->getSettlementSubscriptionId();
		$str .= '&';
		$str .= 'LinepayProductName=' . $this->getLinepayProductName();
		$str .= '&';
		$str .= 'LinepayCancelAmount=' . $this->getLinepayCancelAmount();
		$str .= '&';
		$str .= 'LinepayCancelTax=' . $this->getLinepayCancelTax();
		$str .= '&';
		$str .= 'LinepayPayMethod=' . $this->getLinepayPayMethod();
		$str .= '&';
		$str .= 'LinepayRegKey=' . $this->getLinepayRegKey();
		$str .= '&';
		$str .= 'LinepaySettlementRegKey=' . $this->getLinepaySettlementRegKey();
		$str .= '&';
		$str .= 'CommodityName=' . $this->getCommodityName();
		$str .= '&';
		$str .= 'SbStartChargeMonth=' . $this->getSbStartChargeMonth();
		$str .= '&';
		$str .= 'VaRequestAmount=' . $this->getVaRequestAmount();
		$str .= '&';
		$str .= 'VaExpireDate=' . $this->getVaExpireDate();
		$str .= '&';
		$str .= 'VaTradeReason=' . $this->getVaTradeReason();
		$str .= '&';
		$str .= 'VaTradeClientName=' . $this->getVaTradeClientName();
		$str .= '&';
		$str .= 'VaTradeClientMailaddress=' . $this->getVaTradeClientMailaddress();
		$str .= '&';
		$str .= 'VaBankCode=' . $this->getVaBankCode();
		$str .= '&';
		$str .= 'VaBankName=' . $this->getVaBankName();
		$str .= '&';
		$str .= 'VaBranchCode=' . $this->getVaBranchCode();
		$str .= '&';
		$str .= 'VaBranchName=' . $this->getVaBranchName();
		$str .= '&';
		$str .= 'VaAccountType=' . $this->getVaAccountType();
		$str .= '&';
		$str .= 'VaAccountNumber=' . $this->getVaAccountNumber();
		$str .= '&';
		$str .= 'VaInInquiryNumber=' . $this->getVaInInquiryNumber();
		$str .= '&';
		$str .= 'VaInSettlementDate=' . $this->getVaInSettlementDate();
		$str .= '&';
		$str .= 'VaInAmount=' . $this->getVaInAmount();
		$str .= '&';
		$str .= 'VaInClientCode=' . $this->getVaInClientCode();
		$str .= '&';
		$str .= 'VaInClientName=' . $this->getVaInClientName();
		$str .= '&';
		$str .= 'VaInSummary=' . $this->getVaInSummary();
		$str .= '&';
		$str .= 'VaReserveID=' . $this->getVaReserveID();
		$str .= '&';
		$str .= 'VaTradeCode=' . $this->getVaTradeCode();
		$str .= '&';
		$str .= 'RcOrderId=' . $this->getRcOrderId();
		$str .= '&';
		$str .= 'RcCustomerId=' . $this->getRcCustomerId();
		$str .= '&';
		$str .= 'RcOrderTime=' . $this->getRcOrderTime();
		$str .= '&';
		$str .= 'RcUsePoint=' . $this->getRcUsePoint();
		$str .= '&';
		$str .= 'RcUseCoupon=' . $this->getRcUseCoupon();
		$str .= '&';
		$str .= 'RcUseShopCoupon=' . $this->getRcUseShopCoupon();
		$str .= '&';
		$str .= 'RcUpdateAuthDay=' . $this->getRcUpdateAuthDay();
		$str .= '&';
		$str .= 'RcContractId=' . $this->getRcContractId();
		$str .= '&';
		$str .= 'RcStartChargeMonth=' . $this->getRcStartChargeMonth();
		$str .= '&';
		$str .= 'CardNoToken=' . $this->getCardNoToken();
		$str .= '&';
		$str .= 'BaTargetDate=' . $this->getBaTargetDate();
		$str .= '&';
		$str .= 'BaRequestAcceptEndDate=' . $this->getBaRequestAcceptEndDate();
		$str .= '&';
		$str .= 'BaTransferReturnDate=' . $this->getBaTransferReturnDate();
		$str .= '&';
		$str .= 'BaWithdrawalDate=' . $this->getBaWithdrawalDate();
		$str .= '&';
		$str .= 'BaResultCode=' . $this->getBaResultCode();
		$str .= '&';
		$str .= 'PaidCancelAmount=' . $this->getPaidCancelAmount();
		$str .= '&';
		$str .= 'PaidCancelTax=' . $this->getPaidCancelTax();
		$str .= '&';
		$str .= 'PaidBuyerID=' . $this->getPaidBuyerID();
		$str .= '&';
		$str .= 'PaidCode=' . $this->getPaidCode();
		$str .= '&';
		$str .= 'PaidContents=' . $this->getPaidContents();
		$str .= '&';
		$str .= 'DocomoAcceptCode=' . $this->getDocomoAcceptCode();
		$str .= '&';
		$str .= 'AuAcceptCode=' . $this->getAuAcceptCode();
		$str .= '&';
		$str .= 'SbAcceptCode=' . $this->getSbAcceptCode();
		$str .= '&';
		$str .= 'PaysleDisplayTerm=' . $this->getPaysleDisplayTerm();
		$str .= '&';
		$str .= 'PayslePaymentTerm=' . $this->getPayslePaymentTerm();
		$str .= '&';
		$str .= 'PaysleNotifyTerm=' . $this->getPaysleNotifyTerm();
		$str .= '&';
		$str .= 'PaysleOrderSerial=' . $this->getPaysleOrderSerial();
		$str .= '&';
		$str .= 'PaysleBarcodeWidth=' . $this->getPaysleBarcodeWidth();
		$str .= '&';
		$str .= 'PaysleBarcodeHeight=' . $this->getPaysleBarcodeHeight();
		$str .= '&';
		$str .= 'PaysleBarcodeFormat=' . $this->getPaysleBarcodeFormat();
		$str .= '&';
		$str .= 'PaysleBarcode=' . $this->getPaysleBarcode();
		$str .= '&';
		$str .= 'FinishDate=' . $this->getFinishDate();
		$str .= '&';
		$str .= 'GanbBankCode=' . $this->getGanbBankCode();
		$str .= '&';
		$str .= 'GanbBankName=' . $this->getGanbBankName();
		$str .= '&';
		$str .= 'GanbBranchCode=' . $this->getGanbBranchCode();
		$str .= '&';
		$str .= 'GanbBranchName=' . $this->getGanbBranchName();
		$str .= '&';
		$str .= 'GanbAccountType=' . $this->getGanbAccountType();
		$str .= '&';
		$str .= 'GanbAccountNumber=' . $this->getGanbAccountNumber();
		$str .= '&';
		$str .= 'GanbAccountHolderName=' . $this->getGanbAccountHolderName();
		$str .= '&';
		$str .= 'GanbExpireDays=' . $this->getGanbExpireDays();
		$str .= '&';
		$str .= 'GanbExpireDate=' . $this->getGanbExpireDate();
		$str .= '&';
		$str .= 'GanbTradeReason=' . $this->getGanbTradeReason();
		$str .= '&';
		$str .= 'GanbTradeClientName=' . $this->getGanbTradeClientName();
		$str .= '&';
		$str .= 'GanbTotalTransferAmount=' . $this->getGanbTotalTransferAmount();
		$str .= '&';
		$str .= 'GanbTotalTransferCount=' . $this->getGanbTotalTransferCount();
		$str .= '&';
		$str .= 'GanbLatestTransferAmount=' . $this->getGanbLatestTransferAmount();
		$str .= '&';
		$str .= 'GanbLatestTransferDate=' . $this->getGanbLatestTransferDate();
		$str .= '&';
		$str .= 'GanbLatestTransferName=' . $this->getGanbLatestTransferName();
		$str .= '&';
		$str .= 'GanbLatestTransferBankName=' . $this->getGanbLatestTransferBankName();
		$str .= '&';
		$str .= 'AmazonOrderReferenceID=' . $this->getAmazonOrderReferenceID();
		$str .= '&';
		$str .= 'AmazonPayCancelAmount=' . $this->getAmazonPayCancelAmount();
		$str .= '&';
		$str .= 'AmazonPayCancelTax=' . $this->getAmazonPayCancelTax();
		$str .= '&';
		$str .= 'AmazonBillingAgreementID=' . $this->getAmazonBillingAgreementID();
		$str .= '&';
		$str .= 'UriageNO=' . $this->getUriageNO();
		$str .= '&';
		$str .= 'AuthToken=' . $this->getAuthToken();
		$str .= '&';
		$str .= 'EposTradeID=' . $this->getEposTradeID();
		$str .= '&';
		$str .= 'EposUseCouponAmount=' . $this->getEposUseCouponAmount();
		$str .= '&';
		$str .= 'EposUsePoint=' . $this->getEposUsePoint();
		$str .= '&';
		$str .= 'TotalCancelAmount=' . $this->getTotalCancelAmount();
		$str .= '&';
		$str .= 'TotalCancelTax=' . $this->getTotalCancelTax();
		$str .= '&';
		$str .= 'MerpayCancelAmount=' . $this->getMerpayCancelAmount();
		$str .= '&';
		$str .= 'MerpayCancelTax=' . $this->getMerpayCancelTax();
		$str .= '&';
		$str .= 'MerpayInquiryCode=' . $this->getMerpayInquiryCode();
		$str .= '&';
		$str .= 'MerpaySubscriptionType=' . $this->getMerpaySubscriptionType();
		$str .= '&';
		$str .= 'MerpaySubscriptionId=' . $this->getMerpaySubscriptionId();
		$str .= '&';
		$str .= 'MerpaySubscriptionCurrentStatus=' . $this->getMerpaySubscriptionCurrentStatus();
		$str .= '&';
		$str .= 'MerpaySubscriptionStartDate=' . $this->getMerpaySubscriptionStartDate();
		$str .= '&';
		$str .= 'MerpaySubscriptionEndDate=' . $this->getMerpaySubscriptionEndDate();
		$str .= '&';
		$str .= 'MerpaySettlementSubscriptionId=' . $this->getMerpaySettlementSubscriptionId();
		$str .= '&';
		$str .= 'PostpayCancelAmount=' . $this->getPostpayCancelAmount();
		$str .= '&';
		$str .= 'PostpayCancelTax=' . $this->getPostpayCancelTax();
		$str .= '&';
		$str .= 'PostpayTransactionId=' . $this->getPostpayTransactionId();
		$str .= '&';
		$str .= 'PostpayCreditResultManualReason=' . $this->getPostpayCreditResultManualReason();
		$str .= '&';
		$str .= 'ForceCancelDate=' . $this->getForceCancelDate();
		$str .= '&';
		$str .= 'PostpayPaymentStatus=' . $this->getPostpayPaymentStatus();
		$str .= '&';
		$str .= 'PostpayPaymentDateFast=' . $this->getPostpayPaymentDateFast();
		$str .= '&';
		$str .= 'PostpayPaymentDateConf=' . $this->getPostpayPaymentDateConf();
		$str .= '&';
		$str .= 'PayPayCancelAmount=' . $this->getPayPayCancelAmount();
		$str .= '&';
		$str .= 'PayPayCancelTax=' . $this->getPayPayCancelTax();
		$str .= '&';
		$str .= 'PayPayTrackingID=' . $this->getPayPayTrackingID();
		$str .= '&';
		$str .= 'PayPayOrderID=' . $this->getPayPayOrderID();
		$str .= '&';
		$str .= 'PayPayAcceptCode=' . $this->getPayPayAcceptCode();
		$str .= '&';
		$str .= 'AupayCancelAmount=' . $this->getAupayCancelAmount();
		$str .= '&';
		$str .= 'AupayCancelTax=' . $this->getAupayCancelTax();
		$str .= '&';
		$str .= 'RakutenChargeID=' . $this->getRakutenChargeID();
		$str .= '&';
		$str .= 'ReauthLimitDate=' . $this->getReauthLimitDate();
		$str .= '&';
		$str .= 'SalesLimitDate=' . $this->getSalesLimitDate();
		$str .= '&';
		$str .= 'ChangeLimitDate=' . $this->getChangeLimitDate();
		$str .= '&';
		$str .= 'CancelLimitDate=' . $this->getCancelLimitDate();
		$str .= '&';
		$str .= 'RakutenPoint=' . $this->getRakutenPoint();


        if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
