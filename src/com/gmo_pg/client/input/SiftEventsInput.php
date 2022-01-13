<?php

namespace GmoPG\com\gmo_pg\client\input;

use GmoPG\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>siftイベント実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SiftEventsInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string イベントタイプ
	 */
	private $type;
	/**
	 * @var string ユーザID
	 */
	private $userId;
	/**
	 * @var string セッションID
	 */
	private $sessionId;
	/**
	 * @var string 注文ID
	 */
	private $orderID;
	/**
	 * @var string ユーザメールアドレス
	 */
	private $userEmail;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;
	/**
	 * @var string カード登録連番モード
	 */
	private $seqMode;
	/**
	 * @var string カード登録連番
	 */
	private $cardSeq;
	/**
	 * @var string トークン
	 */
	private $token;
	/**
	 * @var string 金額
	 */
	private $amount;
	/**
	 * @var string 通貨コード
	 */
	private $currencyCode;
	/**
	 * @var string 請求先住所_氏名
	 */
	private $billingAddress_Name;
	/**
	 * @var string 請求先住所_番地_1行目
	 */
	private $billingAddress_Address1;
	/**
	 * @var string 請求先住所_番地_2行目
	 */
	private $billingAddress_Address2;
	/**
	 * @var string 請求先住所_市町村
	 */
	private $billingAddress_City;
	/**
	 * @var string 請求先住所_都道府県
	 */
	private $billingAddress_Region;
	/**
	 * @var string 請求先住所_国
	 */
	private $billingAddress_Country;
	/**
	 * @var string 請求先住所_郵便番号
	 */
	private $billingAddress_Zipcode;
	/**
	 * @var string 請求先住所_電話番号
	 */
	private $billingAddress_Phone;
	/**
	 * @var string 支払い情報_支払い方法
	 */
	private $paymentMethods_PaymentType;
	/**
	 * @var string 支払い情報_銀行識別番号
	 */
	private $paymentMethods_CardBin;
	/**
	 * @var string 支払い情報_カード番号下四桁
	 */
	private $paymentMethods_CardLast4;
	/**
	 * @var string 支払い情報_支払方法の検証結果
	 */
	private $paymentMethods_VerificationStatus;
	/**
	 * @var string 支払い情報_ABA Routing Number又はSWIFT code
	 */
	private $paymentMethods_RoutingNumber;
	/**
	 * @var string 支払い情報_支払い不承認時応答コード
	 */
	private $paymentMethods_DeclineReasonCode;
	/**
	 * @var string 支払い情報_支払い方法
	 */
	private $paymentMethod_PaymentType;
	/**
	 * @var string 支払い情報_銀行識別番号
	 */
	private $paymentMethod_CardBin;
	/**
	 * @var string 支払い情報_カード番号下四桁
	 */
	private $paymentMethod_CardLast4;
	/**
	 * @var string 支払い情報_支払方法の検証結果 

	 */
	private $paymentMethod_VerificationStatus;
	/**
	 * @var string 支払い情報_ABA Routing Number又はSWIFT code
	 */
	private $paymentMethod_RoutingNumber;
	/**
	 * @var string 支払い情報_支払い不承認時応答コード
	 */
	private $paymentMethod_DeclineReasonCode;
	/**
	 * @var string 配送先住所_氏名
	 */
	private $shippingAddress_Name;
	/**
	 * @var string 配送先住所_番地_1行目
	 */
	private $shippingAddress_Address1;
	/**
	 * @var string 配送先住所_番地_2行目
	 */
	private $shippingAddress_Address2;
	/**
	 * @var string 配送先住所_市町村
	 */
	private $shippingAddress_City;
	/**
	 * @var string 配送先住所_都道府県
	 */
	private $shippingAddress_Region;
	/**
	 * @var string 配送先住所_国
	 */
	private $shippingAddress_Country;
	/**
	 * @var string 配送先住所_郵便番号
	 */
	private $shippingAddress_Zipcode;
	/**
	 * @var string 配送先住所_電話番号
	 */
	private $shippingAddress_Phone;
	/**
	 * @var string 優先/迅速配送リクエストフラグ
	 */
	private $expeditedShipping;
	/**
	 * @var string 注文商品情報_商品ID
	 */
	private $items_ItemId;
	/**
	 * @var string 注文商品情報_商品名
	 */
	private $items_ProductTitle;
	/**
	 * @var string 注文商品情報_商品単価
	 */
	private $items_Price;
	/**
	 * @var string 注文商品情報_商品単価通貨コード
	 */
	private $items_CurrencyCode;
	/**
	 * @var string 注文商品情報_商品数
	 */
	private $items_Quantity;
	/**
	 * @var string 注文商品情報_ユニバーサル・プロダクト・コード
	 */
	private $items_Upc;
	/**
	 * @var string 注文商品情報_ストック・キーピング・ユニット
	 */
	private $items_Sku;
	/**
	 * @var string 注文商品情報_国際標準図書番号
	 */
	private $items_Isbn;
	/**
	 * @var string 注文商品情報_ブランド名
	 */
	private $items_Brand;
	/**
	 * @var string 注文商品情報_メーカー名
	 */
	private $items_Manufacturer;
	/**
	 * @var string 注文商品情報_カテゴリ名
	 */
	private $items_Category;
	/**
	 * @var string 注文商品情報_タグ名 
	 */
	private $items_Tags;
	/**
	 * @var string 注文商品情報_商品の色
	 */
	private $items_Color;
	/**
	 * @var string 注文商品情報_商品のサイズ
	 */
	private $items_Size;
	/**
	 * @var string 予約注文情報_予約種別
	 */
	private $bookings_BookingType;
	/**
	 * @var string 予約注文情報_説明
	 */
	private $bookings_Title;
	/**
	 * @var string 予約注文情報_開始日時
	 */
	private $bookings_StartTime;
	/**
	 * @var string 予約注文情報_終了日時
	 */
	private $bookings_EndTime;
	/**
	 * @var string 予約注文情報_価格
	 */
	private $bookings_Price;
	/**
	 * @var string 予約注文情報_予約通貨コード
	 */
	private $bookings_CurrencyCode;
	/**
	 * @var string 予約注文情報_予約数
	 */
	private $bookings_Quantity;
	/**
	 * @var string 予約注文情報_お客様情報_予約者名
	 */
	private $bookings_Guests_Name;
	/**
	 * @var string 予約注文情報_お客様情報_お客様メールアドレス
	 */
	private $bookings_Guests_Email;
	/**
	 * @var string 予約注文情報_お客様情報_お客様電話番号
	 */
	private $bookings_Guests_Phone;
	/**
	 * @var string 予約注文情報_お客様情報_ロイヤリティプログラム名
	 */
	private $bookings_Guests_LoyaltyProgram;
	/**
	 * @var string 予約注文情報_お客様情報_ロイヤリティプログラムメンバーシップID
	 */
	private $bookings_Guests_LoyaltyProgramId;
	/**
	 * @var string 予約注文情報_お客様情報_生年月日
	 */
	private $bookings_Guests_BirthDate;
	/**
	 * @var string 予約注文情報_イベントID
	 */
	private $bookings_EventId;
	/**
	 * @var string 予約注文情報_会場ID
	 */
	private $bookings_VenueId;
	/**
	 * @var string 予約注文情報_会場住所_氏名
	 */
	private $bookings_Location_Name;
	/**
	 * @var string 予約注文情報_会場住所_番地_1行目
	 */
	private $bookings_Location_Address1;
	/**
	 * @var string 予約注文情報_会場住所_番地_2行目
	 */
	private $bookings_Location_Address2;
	/**
	 * @var string 予約注文情報_会場住所_市町村
	 */
	private $bookings_Location_City;
	/**
	 * @var string 予約注文情報_会場住所_都道府県
	 */
	private $bookings_Location_Region;
	/**
	 * @var string 予約注文情報_会場住所_国
	 */
	private $bookings_Location_Country;
	/**
	 * @var string 予約注文情報_会場住所_郵便番号
	 */
	private $bookings_Location_Zipcode;
	/**
	 * @var string 予約注文情報_会場住所_電話番号
	 */
	private $bookings_Location_Phone;
	/**
	 * @var string 予約注文情報_カテゴリ
	 */
	private $bookings_Category;
	/**
	 * @var string 予約注文情報_タグ
	 */
	private $bookings_Tags;
	/**
	 * @var string 予約注文情報_部屋タイプ
	 */
	private $bookings_RoomType;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_氏名
	 */
	private $bookings_Segments_DepartureAddress_Name;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_番地_1行目
	 */
	private $bookings_Segments_DepartureAddress_Address1;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_番地_2行目
	 */
	private $bookings_Segments_DepartureAddress_Address2;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_市町村
	 */
	private $bookings_Segments_DepartureAddress_City;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_都道府県
	 */
	private $bookings_Segments_DepartureAddress_Region;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_国
	 */
	private $bookings_Segments_DepartureAddress_Country;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_郵便番号
	 */
	private $bookings_Segments_DepartureAddress_Zipcode;
	/**
	 * @var string 予約注文情報_旅程情報_出発地点住所_電話番号
	 */
	private $bookings_Segments_DepartureAddress_Phone;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_氏名
	 */
	private $bookings_Segments_ArrivalAddress_Name;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_番地_1行目
	 */
	private $bookings_Segments_ArrivalAddress_Address1;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_番地_2行目
	 */
	private $bookings_Segments_ArrivalAddress_Address2;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_市町村
	 */
	private $bookings_Segments_ArrivalAddress_City;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_都道府県
	 */
	private $bookings_Segments_ArrivalAddress_Region;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_国
	 */
	private $bookings_Segments_ArrivalAddress_Country;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_郵便番号
	 */
	private $bookings_Segments_ArrivalAddress_Zipcode;
	/**
	 * @var string 予約注文情報_旅程情報_到着地点住所_電話番号
	 */
	private $bookings_Segments_ArrivalAddress_Phone;
	/**
	 * @var string 予約注文情報_旅程情報_出発時間
	 */
	private $bookings_Segments_StartTime;
	/**
	 * @var string 予約注文情報_旅程情報_到着時間
	 */
	private $bookings_Segments_EndTime;
	/**
	 * @var string 予約注文情報_旅程情報_移動手段番号
	 */
	private $bookings_Segments_VesselNumber;
	/**
	 * @var string 予約注文情報_旅程情報_出発空港IATAコード
	 */
	private $bookings_Segments_DepartureAirportCode;
	/**
	 * @var string 予約注文情報_旅程情報_到着空港IATAコード
	 */
	private $bookings_Segments_ArrivalAirportCode;
	/**
	 * @var string 予約注文情報_旅程情報_旅行クラス
	 */
	private $bookings_Segments_FareClass;
	/**
	 * @var string 販売者
	 */
	private $sellerUserId;
	/**
	 * @var string プロモーション_プロモーションID
	 */
	private $promotions_PromotionId;
	/**
	 * @var string プロモーション_プロモーションステータス
	 */
	private $promotions_Status;
	/**
	 * @var string プロモーション_プロモーション追加失敗理由
	 */
	private $promotions_FailureReason;
	/**
	 * @var string プロモーション_プロモーション説明
	 */
	private $promotions_Description;
	/**
	 * @var string プロモーション_紹介者ユーザID
	 */
	private $promotions_ReferrerUserId;
	/**
	 * @var string プロモーション_金銭的割引情報_割引率
	 */
	private $promotions_Discount_PercentageOff;
	/**
	 * @var string プロモーション_金銭的割引情報_割引金額
	 */
	private $promotions_Discount_Amount;
	/**
	 * @var string プロモーション_金銭的割引情報_割引金額通貨コード
	 */
	private $promotions_Discount_CurrencyCode;
	/**
	 * @var string プロモーション_金銭的割引情報_プロモーション適用最低金額
	 */
	private $promotions_Discount_MinimumPurchaseAmount;
	/**
	 * @var string プロモーション_クレジットポイント_クレジット量
	 */
	private $promotions_CreditPoint_Amount;
	/**
	 * @var string プロモーション_クレジットポイント_クレジットポイントタイプ
	 */
	private $promotions_CreditPoint_CreditPointType;
	/**
	 * @var string 配送方法
	 */
	private $shippingMethod;
	/**
	 * @var string ブラウザ情報_ユーザーエージェント
	 */
	private $browser_UserAgent;
	/**
	 * @var string アプリ情報-OS
	 */
	private $app_Os;
	/**
	 * @var string アプリ情報-OSバージョン
	 */
	private $app_OsVersion;
	/**
	 * @var string アプリ情報-デバイス製造元
	 */
	private $app_DeviceManufacturer;
	/**
	 * @var string アプリ情報-デバイスのモデル
	 */
	private $app_DeviceModel;
	/**
	 * @var string アプリ情報-デバイスID
	 */
	private $app_DeviceUniqueId;
	/**
	 * @var string アプリ情報-アプリケーション名
	 */
	private $app_AppName;
	/**
	 * @var string アプリ情報-アプリケーションバージョン
	 */
	private $app_AppVersion;
	/**
	 * @var string 取引区分
	 */
	private $transactionType;
	/**
	 * @var string 取引ステータス
	 */
	private $transactionStatus;
	/**
	 * @var string 送金先ユーザID
	 */
	private $transferRecipientUserId;
	/**
	 * @var string チャージバックの現在の状態
	 */
	private $chargebackState;
	/**
	 * @var string チャージバック理由
	 */
	private $chargebackReason;
	/**
	 * @var string デシジョンID
	 */
	private $decisionId;
	/**
	 * @var string デシジョンの出典
	 */
	private $source;
	/**
	 * @var string 分析者
	 */
	private $analyst;
	/**
	 * @var string デシジョン適用日時
	 */
	private $time;
	/**
	 * @var string デシジョン説明
	 */
	private $description;
	/**
	 * @var string siftオーダーID
	 */
	private $siftOrderID;
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
	 * @var string 決済手段
	 */
	private $payType;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}
	/**
	 * イベントタイプ取得
	 * @return string イベントタイプ
	 */
	public function getType() {
		return $this->type;
	}
	/**
	 * ユーザID取得
	 * @return string ユーザID
	 */
	public function getUserId() {
		return $this->userId;
	}
	/**
	 * セッションID取得
	 * @return string セッションID
	 */
	public function getSessionId() {
		return $this->sessionId;
	}
	/**
	 * 注文ID取得
	 * @return string 注文ID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * ユーザメールアドレス取得
	 * @return string ユーザメールアドレス
	 */
	public function getUserEmail() {
		return $this->userEmail;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}
	/**
	 * カード登録連番モード取得
	 * @return string カード登録連番モード
	 */
	public function getSeqMode() {
		return $this->seqMode;
	}
	/**
	 * カード登録連番取得
	 * @return string カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->token;
	}
	/**
	 * 金額取得
	 * @return string 金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 通貨コード取得
	 * @return string 通貨コード
	 */
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	/**
	 * 請求先住所_氏名取得
	 * @return string 請求先住所_氏名
	 */
	public function getBillingAddress_Name() {
		return $this->billingAddress_Name;
	}
	/**
	 * 請求先住所_番地_1行目取得
	 * @return string 請求先住所_番地_1行目
	 */
	public function getBillingAddress_Address1() {
		return $this->billingAddress_Address1;
	}
	/**
	 * 請求先住所_番地_2行目取得
	 * @return string 請求先住所_番地_2行目
	 */
	public function getBillingAddress_Address2() {
		return $this->billingAddress_Address2;
	}
	/**
	 * 請求先住所_市町村取得
	 * @return string 請求先住所_市町村
	 */
	public function getBillingAddress_City() {
		return $this->billingAddress_City;
	}
	/**
	 * 請求先住所_都道府県取得
	 * @return string 請求先住所_都道府県
	 */
	public function getBillingAddress_Region() {
		return $this->billingAddress_Region;
	}
	/**
	 * 請求先住所_国取得
	 * @return string 請求先住所_国
	 */
	public function getBillingAddress_Country() {
		return $this->billingAddress_Country;
	}
	/**
	 * 請求先住所_郵便番号取得
	 * @return string 請求先住所_郵便番号
	 */
	public function getBillingAddress_Zipcode() {
		return $this->billingAddress_Zipcode;
	}
	/**
	 * 請求先住所_電話番号取得
	 * @return string 請求先住所_電話番号
	 */
	public function getBillingAddress_Phone() {
		return $this->billingAddress_Phone;
	}
	/**
	 * 支払い情報_支払い方法取得
	 * @return string 支払い情報_支払い方法
	 */
	public function getPaymentMethods_PaymentType() {
		return $this->paymentMethods_PaymentType;
	}
	/**
	 * 支払い情報_銀行識別番号取得
	 * @return string 支払い情報_銀行識別番号
	 */
	public function getPaymentMethods_CardBin() {
		return $this->paymentMethods_CardBin;
	}
	/**
	 * 支払い情報_カード番号下四桁取得
	 * @return string 支払い情報_カード番号下四桁
	 */
	public function getPaymentMethods_CardLast4() {
		return $this->paymentMethods_CardLast4;
	}
	/**
	 * 支払い情報_支払方法の検証結果取得
	 * @return string 支払い情報_支払方法の検証結果
	 */
	public function getPaymentMethods_VerificationStatus() {
		return $this->paymentMethods_VerificationStatus;
	}
	/**
	 * 支払い情報_ABA Routing Number又はSWIFT code取得
	 * @return string 支払い情報_ABA Routing Number又はSWIFT code
	 */
	public function getPaymentMethods_RoutingNumber() {
		return $this->paymentMethods_RoutingNumber;
	}
	/**
	 * 支払い情報_支払い不承認時応答コード取得
	 * @return string 支払い情報_支払い不承認時応答コード
	 */
	public function getPaymentMethods_DeclineReasonCode() {
		return $this->paymentMethods_DeclineReasonCode;
	}
	/**
	 * 支払い情報_支払い方法取得
	 * @return string 支払い情報_支払い方法
	 */
	public function getPaymentMethod_PaymentType() {
		return $this->paymentMethod_PaymentType;
	}
	/**
	 * 支払い情報_銀行識別番号取得
	 * @return string 支払い情報_銀行識別番号
	 */
	public function getPaymentMethod_CardBin() {
		return $this->paymentMethod_CardBin;
	}
	/**
	 * 支払い情報_カード番号下四桁取得
	 * @return string 支払い情報_カード番号下四桁
	 */
	public function getPaymentMethod_CardLast4() {
		return $this->paymentMethod_CardLast4;
	}
	/**
	 * 支払い情報_支払方法の検証結果 
取得
	 * @return string 支払い情報_支払方法の検証結果 

	 */
	public function getPaymentMethod_VerificationStatus() {
		return $this->paymentMethod_VerificationStatus;
	}
	/**
	 * 支払い情報_ABA Routing Number又はSWIFT code取得
	 * @return string 支払い情報_ABA Routing Number又はSWIFT code
	 */
	public function getPaymentMethod_RoutingNumber() {
		return $this->paymentMethod_RoutingNumber;
	}
	/**
	 * 支払い情報_支払い不承認時応答コード取得
	 * @return string 支払い情報_支払い不承認時応答コード
	 */
	public function getPaymentMethod_DeclineReasonCode() {
		return $this->paymentMethod_DeclineReasonCode;
	}
	/**
	 * 配送先住所_氏名取得
	 * @return string 配送先住所_氏名
	 */
	public function getShippingAddress_Name() {
		return $this->shippingAddress_Name;
	}
	/**
	 * 配送先住所_番地_1行目取得
	 * @return string 配送先住所_番地_1行目
	 */
	public function getShippingAddress_Address1() {
		return $this->shippingAddress_Address1;
	}
	/**
	 * 配送先住所_番地_2行目取得
	 * @return string 配送先住所_番地_2行目
	 */
	public function getShippingAddress_Address2() {
		return $this->shippingAddress_Address2;
	}
	/**
	 * 配送先住所_市町村取得
	 * @return string 配送先住所_市町村
	 */
	public function getShippingAddress_City() {
		return $this->shippingAddress_City;
	}
	/**
	 * 配送先住所_都道府県取得
	 * @return string 配送先住所_都道府県
	 */
	public function getShippingAddress_Region() {
		return $this->shippingAddress_Region;
	}
	/**
	 * 配送先住所_国取得
	 * @return string 配送先住所_国
	 */
	public function getShippingAddress_Country() {
		return $this->shippingAddress_Country;
	}
	/**
	 * 配送先住所_郵便番号取得
	 * @return string 配送先住所_郵便番号
	 */
	public function getShippingAddress_Zipcode() {
		return $this->shippingAddress_Zipcode;
	}
	/**
	 * 配送先住所_電話番号取得
	 * @return string 配送先住所_電話番号
	 */
	public function getShippingAddress_Phone() {
		return $this->shippingAddress_Phone;
	}
	/**
	 * 優先/迅速配送リクエストフラグ取得
	 * @return string 優先/迅速配送リクエストフラグ
	 */
	public function getExpeditedShipping() {
		return $this->expeditedShipping;
	}
	/**
	 * 注文商品情報_商品ID取得
	 * @return string 注文商品情報_商品ID
	 */
	public function getItems_ItemId() {
		return $this->items_ItemId;
	}
	/**
	 * 注文商品情報_商品名取得
	 * @return string 注文商品情報_商品名
	 */
	public function getItems_ProductTitle() {
		return $this->items_ProductTitle;
	}
	/**
	 * 注文商品情報_商品単価取得
	 * @return string 注文商品情報_商品単価
	 */
	public function getItems_Price() {
		return $this->items_Price;
	}
	/**
	 * 注文商品情報_商品単価通貨コード取得
	 * @return string 注文商品情報_商品単価通貨コード
	 */
	public function getItems_CurrencyCode() {
		return $this->items_CurrencyCode;
	}
	/**
	 * 注文商品情報_商品数取得
	 * @return string 注文商品情報_商品数
	 */
	public function getItems_Quantity() {
		return $this->items_Quantity;
	}
	/**
	 * 注文商品情報_ユニバーサル・プロダクト・コード取得
	 * @return string 注文商品情報_ユニバーサル・プロダクト・コード
	 */
	public function getItems_Upc() {
		return $this->items_Upc;
	}
	/**
	 * 注文商品情報_ストック・キーピング・ユニット取得
	 * @return string 注文商品情報_ストック・キーピング・ユニット
	 */
	public function getItems_Sku() {
		return $this->items_Sku;
	}
	/**
	 * 注文商品情報_国際標準図書番号取得
	 * @return string 注文商品情報_国際標準図書番号
	 */
	public function getItems_Isbn() {
		return $this->items_Isbn;
	}
	/**
	 * 注文商品情報_ブランド名取得
	 * @return string 注文商品情報_ブランド名
	 */
	public function getItems_Brand() {
		return $this->items_Brand;
	}
	/**
	 * 注文商品情報_メーカー名取得
	 * @return string 注文商品情報_メーカー名
	 */
	public function getItems_Manufacturer() {
		return $this->items_Manufacturer;
	}
	/**
	 * 注文商品情報_カテゴリ名取得
	 * @return string 注文商品情報_カテゴリ名
	 */
	public function getItems_Category() {
		return $this->items_Category;
	}
	/**
	 * 注文商品情報_タグ名 取得
	 * @return string 注文商品情報_タグ名 
	 */
	public function getItems_Tags() {
		return $this->items_Tags;
	}
	/**
	 * 注文商品情報_商品の色取得
	 * @return string 注文商品情報_商品の色
	 */
	public function getItems_Color() {
		return $this->items_Color;
	}
	/**
	 * 注文商品情報_商品のサイズ取得
	 * @return string 注文商品情報_商品のサイズ
	 */
	public function getItems_Size() {
		return $this->items_Size;
	}
	/**
	 * 予約注文情報_予約種別取得
	 * @return string 予約注文情報_予約種別
	 */
	public function getBookings_BookingType() {
		return $this->bookings_BookingType;
	}
	/**
	 * 予約注文情報_説明取得
	 * @return string 予約注文情報_説明
	 */
	public function getBookings_Title() {
		return $this->bookings_Title;
	}
	/**
	 * 予約注文情報_開始日時取得
	 * @return string 予約注文情報_開始日時
	 */
	public function getBookings_StartTime() {
		return $this->bookings_StartTime;
	}
	/**
	 * 予約注文情報_終了日時取得
	 * @return string 予約注文情報_終了日時
	 */
	public function getBookings_EndTime() {
		return $this->bookings_EndTime;
	}
	/**
	 * 予約注文情報_価格取得
	 * @return string 予約注文情報_価格
	 */
	public function getBookings_Price() {
		return $this->bookings_Price;
	}
	/**
	 * 予約注文情報_予約通貨コード取得
	 * @return string 予約注文情報_予約通貨コード
	 */
	public function getBookings_CurrencyCode() {
		return $this->bookings_CurrencyCode;
	}
	/**
	 * 予約注文情報_予約数取得
	 * @return string 予約注文情報_予約数
	 */
	public function getBookings_Quantity() {
		return $this->bookings_Quantity;
	}
	/**
	 * 予約注文情報_お客様情報_予約者名取得
	 * @return string 予約注文情報_お客様情報_予約者名
	 */
	public function getBookings_Guests_Name() {
		return $this->bookings_Guests_Name;
	}
	/**
	 * 予約注文情報_お客様情報_お客様メールアドレス取得
	 * @return string 予約注文情報_お客様情報_お客様メールアドレス
	 */
	public function getBookings_Guests_Email() {
		return $this->bookings_Guests_Email;
	}
	/**
	 * 予約注文情報_お客様情報_お客様電話番号取得
	 * @return string 予約注文情報_お客様情報_お客様電話番号
	 */
	public function getBookings_Guests_Phone() {
		return $this->bookings_Guests_Phone;
	}
	/**
	 * 予約注文情報_お客様情報_ロイヤリティプログラム名取得
	 * @return string 予約注文情報_お客様情報_ロイヤリティプログラム名
	 */
	public function getBookings_Guests_LoyaltyProgram() {
		return $this->bookings_Guests_LoyaltyProgram;
	}
	/**
	 * 予約注文情報_お客様情報_ロイヤリティプログラムメンバーシップID取得
	 * @return string 予約注文情報_お客様情報_ロイヤリティプログラムメンバーシップID
	 */
	public function getBookings_Guests_LoyaltyProgramId() {
		return $this->bookings_Guests_LoyaltyProgramId;
	}
	/**
	 * 予約注文情報_お客様情報_生年月日取得
	 * @return string 予約注文情報_お客様情報_生年月日
	 */
	public function getBookings_Guests_BirthDate() {
		return $this->bookings_Guests_BirthDate;
	}
	/**
	 * 予約注文情報_イベントID取得
	 * @return string 予約注文情報_イベントID
	 */
	public function getBookings_EventId() {
		return $this->bookings_EventId;
	}
	/**
	 * 予約注文情報_会場ID取得
	 * @return string 予約注文情報_会場ID
	 */
	public function getBookings_VenueId() {
		return $this->bookings_VenueId;
	}
	/**
	 * 予約注文情報_会場住所_氏名取得
	 * @return string 予約注文情報_会場住所_氏名
	 */
	public function getBookings_Location_Name() {
		return $this->bookings_Location_Name;
	}
	/**
	 * 予約注文情報_会場住所_番地_1行目取得
	 * @return string 予約注文情報_会場住所_番地_1行目
	 */
	public function getBookings_Location_Address1() {
		return $this->bookings_Location_Address1;
	}
	/**
	 * 予約注文情報_会場住所_番地_2行目取得
	 * @return string 予約注文情報_会場住所_番地_2行目
	 */
	public function getBookings_Location_Address2() {
		return $this->bookings_Location_Address2;
	}
	/**
	 * 予約注文情報_会場住所_市町村取得
	 * @return string 予約注文情報_会場住所_市町村
	 */
	public function getBookings_Location_City() {
		return $this->bookings_Location_City;
	}
	/**
	 * 予約注文情報_会場住所_都道府県取得
	 * @return string 予約注文情報_会場住所_都道府県
	 */
	public function getBookings_Location_Region() {
		return $this->bookings_Location_Region;
	}
	/**
	 * 予約注文情報_会場住所_国取得
	 * @return string 予約注文情報_会場住所_国
	 */
	public function getBookings_Location_Country() {
		return $this->bookings_Location_Country;
	}
	/**
	 * 予約注文情報_会場住所_郵便番号取得
	 * @return string 予約注文情報_会場住所_郵便番号
	 */
	public function getBookings_Location_Zipcode() {
		return $this->bookings_Location_Zipcode;
	}
	/**
	 * 予約注文情報_会場住所_電話番号取得
	 * @return string 予約注文情報_会場住所_電話番号
	 */
	public function getBookings_Location_Phone() {
		return $this->bookings_Location_Phone;
	}
	/**
	 * 予約注文情報_カテゴリ取得
	 * @return string 予約注文情報_カテゴリ
	 */
	public function getBookings_Category() {
		return $this->bookings_Category;
	}
	/**
	 * 予約注文情報_タグ取得
	 * @return string 予約注文情報_タグ
	 */
	public function getBookings_Tags() {
		return $this->bookings_Tags;
	}
	/**
	 * 予約注文情報_部屋タイプ取得
	 * @return string 予約注文情報_部屋タイプ
	 */
	public function getBookings_RoomType() {
		return $this->bookings_RoomType;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_氏名取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_氏名
	 */
	public function getBookings_Segments_DepartureAddress_Name() {
		return $this->bookings_Segments_DepartureAddress_Name;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_番地_1行目取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_番地_1行目
	 */
	public function getBookings_Segments_DepartureAddress_Address1() {
		return $this->bookings_Segments_DepartureAddress_Address1;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_番地_2行目取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_番地_2行目
	 */
	public function getBookings_Segments_DepartureAddress_Address2() {
		return $this->bookings_Segments_DepartureAddress_Address2;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_市町村取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_市町村
	 */
	public function getBookings_Segments_DepartureAddress_City() {
		return $this->bookings_Segments_DepartureAddress_City;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_都道府県取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_都道府県
	 */
	public function getBookings_Segments_DepartureAddress_Region() {
		return $this->bookings_Segments_DepartureAddress_Region;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_国取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_国
	 */
	public function getBookings_Segments_DepartureAddress_Country() {
		return $this->bookings_Segments_DepartureAddress_Country;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_郵便番号取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_郵便番号
	 */
	public function getBookings_Segments_DepartureAddress_Zipcode() {
		return $this->bookings_Segments_DepartureAddress_Zipcode;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_電話番号取得
	 * @return string 予約注文情報_旅程情報_出発地点住所_電話番号
	 */
	public function getBookings_Segments_DepartureAddress_Phone() {
		return $this->bookings_Segments_DepartureAddress_Phone;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_氏名取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_氏名
	 */
	public function getBookings_Segments_ArrivalAddress_Name() {
		return $this->bookings_Segments_ArrivalAddress_Name;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_番地_1行目取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_番地_1行目
	 */
	public function getBookings_Segments_ArrivalAddress_Address1() {
		return $this->bookings_Segments_ArrivalAddress_Address1;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_番地_2行目取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_番地_2行目
	 */
	public function getBookings_Segments_ArrivalAddress_Address2() {
		return $this->bookings_Segments_ArrivalAddress_Address2;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_市町村取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_市町村
	 */
	public function getBookings_Segments_ArrivalAddress_City() {
		return $this->bookings_Segments_ArrivalAddress_City;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_都道府県取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_都道府県
	 */
	public function getBookings_Segments_ArrivalAddress_Region() {
		return $this->bookings_Segments_ArrivalAddress_Region;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_国取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_国
	 */
	public function getBookings_Segments_ArrivalAddress_Country() {
		return $this->bookings_Segments_ArrivalAddress_Country;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_郵便番号取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_郵便番号
	 */
	public function getBookings_Segments_ArrivalAddress_Zipcode() {
		return $this->bookings_Segments_ArrivalAddress_Zipcode;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_電話番号取得
	 * @return string 予約注文情報_旅程情報_到着地点住所_電話番号
	 */
	public function getBookings_Segments_ArrivalAddress_Phone() {
		return $this->bookings_Segments_ArrivalAddress_Phone;
	}
	/**
	 * 予約注文情報_旅程情報_出発時間取得
	 * @return string 予約注文情報_旅程情報_出発時間
	 */
	public function getBookings_Segments_StartTime() {
		return $this->bookings_Segments_StartTime;
	}
	/**
	 * 予約注文情報_旅程情報_到着時間取得
	 * @return string 予約注文情報_旅程情報_到着時間
	 */
	public function getBookings_Segments_EndTime() {
		return $this->bookings_Segments_EndTime;
	}
	/**
	 * 予約注文情報_旅程情報_移動手段番号取得
	 * @return string 予約注文情報_旅程情報_移動手段番号
	 */
	public function getBookings_Segments_VesselNumber() {
		return $this->bookings_Segments_VesselNumber;
	}
	/**
	 * 予約注文情報_旅程情報_出発空港IATAコード取得
	 * @return string 予約注文情報_旅程情報_出発空港IATAコード
	 */
	public function getBookings_Segments_DepartureAirportCode() {
		return $this->bookings_Segments_DepartureAirportCode;
	}
	/**
	 * 予約注文情報_旅程情報_到着空港IATAコード取得
	 * @return string 予約注文情報_旅程情報_到着空港IATAコード
	 */
	public function getBookings_Segments_ArrivalAirportCode() {
		return $this->bookings_Segments_ArrivalAirportCode;
	}
	/**
	 * 予約注文情報_旅程情報_旅行クラス取得
	 * @return string 予約注文情報_旅程情報_旅行クラス
	 */
	public function getBookings_Segments_FareClass() {
		return $this->bookings_Segments_FareClass;
	}
	/**
	 * 販売者取得
	 * @return string 販売者
	 */
	public function getSellerUserId() {
		return $this->sellerUserId;
	}
	/**
	 * プロモーション_プロモーションID取得
	 * @return string プロモーション_プロモーションID
	 */
	public function getPromotions_PromotionId() {
		return $this->promotions_PromotionId;
	}
	/**
	 * プロモーション_プロモーションステータス取得
	 * @return string プロモーション_プロモーションステータス
	 */
	public function getPromotions_Status() {
		return $this->promotions_Status;
	}
	/**
	 * プロモーション_プロモーション追加失敗理由取得
	 * @return string プロモーション_プロモーション追加失敗理由
	 */
	public function getPromotions_FailureReason() {
		return $this->promotions_FailureReason;
	}
	/**
	 * プロモーション_プロモーション説明取得
	 * @return string プロモーション_プロモーション説明
	 */
	public function getPromotions_Description() {
		return $this->promotions_Description;
	}
	/**
	 * プロモーション_紹介者ユーザID取得
	 * @return string プロモーション_紹介者ユーザID
	 */
	public function getPromotions_ReferrerUserId() {
		return $this->promotions_ReferrerUserId;
	}
	/**
	 * プロモーション_金銭的割引情報_割引率取得
	 * @return string プロモーション_金銭的割引情報_割引率
	 */
	public function getPromotions_Discount_PercentageOff() {
		return $this->promotions_Discount_PercentageOff;
	}
	/**
	 * プロモーション_金銭的割引情報_割引金額取得
	 * @return string プロモーション_金銭的割引情報_割引金額
	 */
	public function getPromotions_Discount_Amount() {
		return $this->promotions_Discount_Amount;
	}
	/**
	 * プロモーション_金銭的割引情報_割引金額通貨コード取得
	 * @return string プロモーション_金銭的割引情報_割引金額通貨コード
	 */
	public function getPromotions_Discount_CurrencyCode() {
		return $this->promotions_Discount_CurrencyCode;
	}
	/**
	 * プロモーション_金銭的割引情報_プロモーション適用最低金額取得
	 * @return string プロモーション_金銭的割引情報_プロモーション適用最低金額
	 */
	public function getPromotions_Discount_MinimumPurchaseAmount() {
		return $this->promotions_Discount_MinimumPurchaseAmount;
	}
	/**
	 * プロモーション_クレジットポイント_クレジット量取得
	 * @return string プロモーション_クレジットポイント_クレジット量
	 */
	public function getPromotions_CreditPoint_Amount() {
		return $this->promotions_CreditPoint_Amount;
	}
	/**
	 * プロモーション_クレジットポイント_クレジットポイントタイプ取得
	 * @return string プロモーション_クレジットポイント_クレジットポイントタイプ
	 */
	public function getPromotions_CreditPoint_CreditPointType() {
		return $this->promotions_CreditPoint_CreditPointType;
	}
	/**
	 * 配送方法取得
	 * @return string 配送方法
	 */
	public function getShippingMethod() {
		return $this->shippingMethod;
	}
	/**
	 * ブラウザ情報_ユーザーエージェント取得
	 * @return string ブラウザ情報_ユーザーエージェント
	 */
	public function getBrowser_UserAgent() {
		return $this->browser_UserAgent;
	}
	/**
	 * アプリ情報-OS取得
	 * @return string アプリ情報-OS
	 */
	public function getApp_Os() {
		return $this->app_Os;
	}
	/**
	 * アプリ情報-OSバージョン取得
	 * @return string アプリ情報-OSバージョン
	 */
	public function getApp_OsVersion() {
		return $this->app_OsVersion;
	}
	/**
	 * アプリ情報-デバイス製造元取得
	 * @return string アプリ情報-デバイス製造元
	 */
	public function getApp_DeviceManufacturer() {
		return $this->app_DeviceManufacturer;
	}
	/**
	 * アプリ情報-デバイスのモデル取得
	 * @return string アプリ情報-デバイスのモデル
	 */
	public function getApp_DeviceModel() {
		return $this->app_DeviceModel;
	}
	/**
	 * アプリ情報-デバイスID取得
	 * @return string アプリ情報-デバイスID
	 */
	public function getApp_DeviceUniqueId() {
		return $this->app_DeviceUniqueId;
	}
	/**
	 * アプリ情報-アプリケーション名取得
	 * @return string アプリ情報-アプリケーション名
	 */
	public function getApp_AppName() {
		return $this->app_AppName;
	}
	/**
	 * アプリ情報-アプリケーションバージョン取得
	 * @return string アプリ情報-アプリケーションバージョン
	 */
	public function getApp_AppVersion() {
		return $this->app_AppVersion;
	}
	/**
	 * 取引区分取得
	 * @return string 取引区分
	 */
	public function getTransactionType() {
		return $this->transactionType;
	}
	/**
	 * 取引ステータス取得
	 * @return string 取引ステータス
	 */
	public function getTransactionStatus() {
		return $this->transactionStatus;
	}
	/**
	 * 送金先ユーザID取得
	 * @return string 送金先ユーザID
	 */
	public function getTransferRecipientUserId() {
		return $this->transferRecipientUserId;
	}
	/**
	 * チャージバックの現在の状態取得
	 * @return string チャージバックの現在の状態
	 */
	public function getChargebackState() {
		return $this->chargebackState;
	}
	/**
	 * チャージバック理由取得
	 * @return string チャージバック理由
	 */
	public function getChargebackReason() {
		return $this->chargebackReason;
	}
	/**
	 * デシジョンID取得
	 * @return string デシジョンID
	 */
	public function getDecisionId() {
		return $this->decisionId;
	}
	/**
	 * デシジョンの出典取得
	 * @return string デシジョンの出典
	 */
	public function getSource() {
		return $this->source;
	}
	/**
	 * 分析者取得
	 * @return string 分析者
	 */
	public function getAnalyst() {
		return $this->analyst;
	}
	/**
	 * デシジョン適用日時取得
	 * @return string デシジョン適用日時
	 */
	public function getTime() {
		return $this->time;
	}
	/**
	 * デシジョン説明取得
	 * @return string デシジョン説明
	 */
	public function getDescription() {
		return $this->description;
	}
	/**
	 * siftオーダーID取得
	 * @return string siftオーダーID
	 */
	public function getSiftOrderID() {
		return $this->siftOrderID;
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
	 * @return string 決済手段
	 */
	public function getPayType() {
		return $this->payType;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->shopID = $shopID;
	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}
	/**
	 * イベントタイプ設定
	 *
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}
	/**
	 * ユーザID設定
	 *
	 * @param string $userId
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}
	/**
	 * セッションID設定
	 *
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
	}
	/**
	 * 注文ID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * ユーザメールアドレス設定
	 *
	 * @param string $userEmail
	 */
	public function setUserEmail($userEmail) {
		$this->userEmail = $userEmail;
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}
	/**
	 * カード登録連番モード設定
	 *
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode) {
		$this->seqMode = $seqMode;
	}
	/**
	 * カード登録連番設定
	 *
	 * @param string $cardSeq
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
	}
	/**
	 * 金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * 通貨コード設定
	 *
	 * @param string $currencyCode
	 */
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
	}
	/**
	 * 請求先住所_氏名設定
	 *
	 * @param string $billingAddress_Name
	 */
	public function setBillingAddress_Name($billingAddress_Name) {
		$this->billingAddress_Name = $billingAddress_Name;
	}
	/**
	 * 請求先住所_番地_1行目設定
	 *
	 * @param string $billingAddress_Address1
	 */
	public function setBillingAddress_Address1($billingAddress_Address1) {
		$this->billingAddress_Address1 = $billingAddress_Address1;
	}
	/**
	 * 請求先住所_番地_2行目設定
	 *
	 * @param string $billingAddress_Address2
	 */
	public function setBillingAddress_Address2($billingAddress_Address2) {
		$this->billingAddress_Address2 = $billingAddress_Address2;
	}
	/**
	 * 請求先住所_市町村設定
	 *
	 * @param string $billingAddress_City
	 */
	public function setBillingAddress_City($billingAddress_City) {
		$this->billingAddress_City = $billingAddress_City;
	}
	/**
	 * 請求先住所_都道府県設定
	 *
	 * @param string $billingAddress_Region
	 */
	public function setBillingAddress_Region($billingAddress_Region) {
		$this->billingAddress_Region = $billingAddress_Region;
	}
	/**
	 * 請求先住所_国設定
	 *
	 * @param string $billingAddress_Country
	 */
	public function setBillingAddress_Country($billingAddress_Country) {
		$this->billingAddress_Country = $billingAddress_Country;
	}
	/**
	 * 請求先住所_郵便番号設定
	 *
	 * @param string $billingAddress_Zipcode
	 */
	public function setBillingAddress_Zipcode($billingAddress_Zipcode) {
		$this->billingAddress_Zipcode = $billingAddress_Zipcode;
	}
	/**
	 * 請求先住所_電話番号設定
	 *
	 * @param string $billingAddress_Phone
	 */
	public function setBillingAddress_Phone($billingAddress_Phone) {
		$this->billingAddress_Phone = $billingAddress_Phone;
	}
	/**
	 * 支払い情報_支払い方法設定
	 *
	 * @param string $paymentMethods_PaymentType
	 */
	public function setPaymentMethods_PaymentType($paymentMethods_PaymentType) {
		$this->paymentMethods_PaymentType = $paymentMethods_PaymentType;
	}
	/**
	 * 支払い情報_銀行識別番号設定
	 *
	 * @param string $paymentMethods_CardBin
	 */
	public function setPaymentMethods_CardBin($paymentMethods_CardBin) {
		$this->paymentMethods_CardBin = $paymentMethods_CardBin;
	}
	/**
	 * 支払い情報_カード番号下四桁設定
	 *
	 * @param string $paymentMethods_CardLast4
	 */
	public function setPaymentMethods_CardLast4($paymentMethods_CardLast4) {
		$this->paymentMethods_CardLast4 = $paymentMethods_CardLast4;
	}
	/**
	 * 支払い情報_支払方法の検証結果設定
	 *
	 * @param string $paymentMethods_VerificationStatus
	 */
	public function setPaymentMethods_VerificationStatus($paymentMethods_VerificationStatus) {
		$this->paymentMethods_VerificationStatus = $paymentMethods_VerificationStatus;
	}
	/**
	 * 支払い情報_ABA Routing Number又はSWIFT code設定
	 *
	 * @param string $paymentMethods_RoutingNumber
	 */
	public function setPaymentMethods_RoutingNumber($paymentMethods_RoutingNumber) {
		$this->paymentMethods_RoutingNumber = $paymentMethods_RoutingNumber;
	}
	/**
	 * 支払い情報_支払い不承認時応答コード設定
	 *
	 * @param string $paymentMethods_DeclineReasonCode
	 */
	public function setPaymentMethods_DeclineReasonCode($paymentMethods_DeclineReasonCode) {
		$this->paymentMethods_DeclineReasonCode = $paymentMethods_DeclineReasonCode;
	}
	/**
	 * 支払い情報_支払い方法設定
	 *
	 * @param string $paymentMethod_PaymentType
	 */
	public function setPaymentMethod_PaymentType($paymentMethod_PaymentType) {
		$this->paymentMethod_PaymentType = $paymentMethod_PaymentType;
	}
	/**
	 * 支払い情報_銀行識別番号設定
	 *
	 * @param string $paymentMethod_CardBin
	 */
	public function setPaymentMethod_CardBin($paymentMethod_CardBin) {
		$this->paymentMethod_CardBin = $paymentMethod_CardBin;
	}
	/**
	 * 支払い情報_カード番号下四桁設定
	 *
	 * @param string $paymentMethod_CardLast4
	 */
	public function setPaymentMethod_CardLast4($paymentMethod_CardLast4) {
		$this->paymentMethod_CardLast4 = $paymentMethod_CardLast4;
	}
	/**
	 * 支払い情報_支払方法の検証結果 
設定
	 *
	 * @param string $paymentMethod_VerificationStatus
	 */
	public function setPaymentMethod_VerificationStatus($paymentMethod_VerificationStatus) {
		$this->paymentMethod_VerificationStatus = $paymentMethod_VerificationStatus;
	}
	/**
	 * 支払い情報_ABA Routing Number又はSWIFT code設定
	 *
	 * @param string $paymentMethod_RoutingNumber
	 */
	public function setPaymentMethod_RoutingNumber($paymentMethod_RoutingNumber) {
		$this->paymentMethod_RoutingNumber = $paymentMethod_RoutingNumber;
	}
	/**
	 * 支払い情報_支払い不承認時応答コード設定
	 *
	 * @param string $paymentMethod_DeclineReasonCode
	 */
	public function setPaymentMethod_DeclineReasonCode($paymentMethod_DeclineReasonCode) {
		$this->paymentMethod_DeclineReasonCode = $paymentMethod_DeclineReasonCode;
	}
	/**
	 * 配送先住所_氏名設定
	 *
	 * @param string $shippingAddress_Name
	 */
	public function setShippingAddress_Name($shippingAddress_Name) {
		$this->shippingAddress_Name = $shippingAddress_Name;
	}
	/**
	 * 配送先住所_番地_1行目設定
	 *
	 * @param string $shippingAddress_Address1
	 */
	public function setShippingAddress_Address1($shippingAddress_Address1) {
		$this->shippingAddress_Address1 = $shippingAddress_Address1;
	}
	/**
	 * 配送先住所_番地_2行目設定
	 *
	 * @param string $shippingAddress_Address2
	 */
	public function setShippingAddress_Address2($shippingAddress_Address2) {
		$this->shippingAddress_Address2 = $shippingAddress_Address2;
	}
	/**
	 * 配送先住所_市町村設定
	 *
	 * @param string $shippingAddress_City
	 */
	public function setShippingAddress_City($shippingAddress_City) {
		$this->shippingAddress_City = $shippingAddress_City;
	}
	/**
	 * 配送先住所_都道府県設定
	 *
	 * @param string $shippingAddress_Region
	 */
	public function setShippingAddress_Region($shippingAddress_Region) {
		$this->shippingAddress_Region = $shippingAddress_Region;
	}
	/**
	 * 配送先住所_国設定
	 *
	 * @param string $shippingAddress_Country
	 */
	public function setShippingAddress_Country($shippingAddress_Country) {
		$this->shippingAddress_Country = $shippingAddress_Country;
	}
	/**
	 * 配送先住所_郵便番号設定
	 *
	 * @param string $shippingAddress_Zipcode
	 */
	public function setShippingAddress_Zipcode($shippingAddress_Zipcode) {
		$this->shippingAddress_Zipcode = $shippingAddress_Zipcode;
	}
	/**
	 * 配送先住所_電話番号設定
	 *
	 * @param string $shippingAddress_Phone
	 */
	public function setShippingAddress_Phone($shippingAddress_Phone) {
		$this->shippingAddress_Phone = $shippingAddress_Phone;
	}
	/**
	 * 優先/迅速配送リクエストフラグ設定
	 *
	 * @param string $expeditedShipping
	 */
	public function setExpeditedShipping($expeditedShipping) {
		$this->expeditedShipping = $expeditedShipping;
	}
	/**
	 * 注文商品情報_商品ID設定
	 *
	 * @param string $items_ItemId
	 */
	public function setItems_ItemId($items_ItemId) {
		$this->items_ItemId = $items_ItemId;
	}
	/**
	 * 注文商品情報_商品名設定
	 *
	 * @param string $items_ProductTitle
	 */
	public function setItems_ProductTitle($items_ProductTitle) {
		$this->items_ProductTitle = $items_ProductTitle;
	}
	/**
	 * 注文商品情報_商品単価設定
	 *
	 * @param string $items_Price
	 */
	public function setItems_Price($items_Price) {
		$this->items_Price = $items_Price;
	}
	/**
	 * 注文商品情報_商品単価通貨コード設定
	 *
	 * @param string $items_CurrencyCode
	 */
	public function setItems_CurrencyCode($items_CurrencyCode) {
		$this->items_CurrencyCode = $items_CurrencyCode;
	}
	/**
	 * 注文商品情報_商品数設定
	 *
	 * @param string $items_Quantity
	 */
	public function setItems_Quantity($items_Quantity) {
		$this->items_Quantity = $items_Quantity;
	}
	/**
	 * 注文商品情報_ユニバーサル・プロダクト・コード設定
	 *
	 * @param string $items_Upc
	 */
	public function setItems_Upc($items_Upc) {
		$this->items_Upc = $items_Upc;
	}
	/**
	 * 注文商品情報_ストック・キーピング・ユニット設定
	 *
	 * @param string $items_Sku
	 */
	public function setItems_Sku($items_Sku) {
		$this->items_Sku = $items_Sku;
	}
	/**
	 * 注文商品情報_国際標準図書番号設定
	 *
	 * @param string $items_Isbn
	 */
	public function setItems_Isbn($items_Isbn) {
		$this->items_Isbn = $items_Isbn;
	}
	/**
	 * 注文商品情報_ブランド名設定
	 *
	 * @param string $items_Brand
	 */
	public function setItems_Brand($items_Brand) {
		$this->items_Brand = $items_Brand;
	}
	/**
	 * 注文商品情報_メーカー名設定
	 *
	 * @param string $items_Manufacturer
	 */
	public function setItems_Manufacturer($items_Manufacturer) {
		$this->items_Manufacturer = $items_Manufacturer;
	}
	/**
	 * 注文商品情報_カテゴリ名設定
	 *
	 * @param string $items_Category
	 */
	public function setItems_Category($items_Category) {
		$this->items_Category = $items_Category;
	}
	/**
	 * 注文商品情報_タグ名 設定
	 *
	 * @param string $items_Tags
	 */
	public function setItems_Tags($items_Tags) {
		$this->items_Tags = $items_Tags;
	}
	/**
	 * 注文商品情報_商品の色設定
	 *
	 * @param string $items_Color
	 */
	public function setItems_Color($items_Color) {
		$this->items_Color = $items_Color;
	}
	/**
	 * 注文商品情報_商品のサイズ設定
	 *
	 * @param string $items_Size
	 */
	public function setItems_Size($items_Size) {
		$this->items_Size = $items_Size;
	}
	/**
	 * 予約注文情報_予約種別設定
	 *
	 * @param string $bookings_BookingType
	 */
	public function setBookings_BookingType($bookings_BookingType) {
		$this->bookings_BookingType = $bookings_BookingType;
	}
	/**
	 * 予約注文情報_説明設定
	 *
	 * @param string $bookings_Title
	 */
	public function setBookings_Title($bookings_Title) {
		$this->bookings_Title = $bookings_Title;
	}
	/**
	 * 予約注文情報_開始日時設定
	 *
	 * @param string $bookings_StartTime
	 */
	public function setBookings_StartTime($bookings_StartTime) {
		$this->bookings_StartTime = $bookings_StartTime;
	}
	/**
	 * 予約注文情報_終了日時設定
	 *
	 * @param string $bookings_EndTime
	 */
	public function setBookings_EndTime($bookings_EndTime) {
		$this->bookings_EndTime = $bookings_EndTime;
	}
	/**
	 * 予約注文情報_価格設定
	 *
	 * @param string $bookings_Price
	 */
	public function setBookings_Price($bookings_Price) {
		$this->bookings_Price = $bookings_Price;
	}
	/**
	 * 予約注文情報_予約通貨コード設定
	 *
	 * @param string $bookings_CurrencyCode
	 */
	public function setBookings_CurrencyCode($bookings_CurrencyCode) {
		$this->bookings_CurrencyCode = $bookings_CurrencyCode;
	}
	/**
	 * 予約注文情報_予約数設定
	 *
	 * @param string $bookings_Quantity
	 */
	public function setBookings_Quantity($bookings_Quantity) {
		$this->bookings_Quantity = $bookings_Quantity;
	}
	/**
	 * 予約注文情報_お客様情報_予約者名設定
	 *
	 * @param string $bookings_Guests_Name
	 */
	public function setBookings_Guests_Name($bookings_Guests_Name) {
		$this->bookings_Guests_Name = $bookings_Guests_Name;
	}
	/**
	 * 予約注文情報_お客様情報_お客様メールアドレス設定
	 *
	 * @param string $bookings_Guests_Email
	 */
	public function setBookings_Guests_Email($bookings_Guests_Email) {
		$this->bookings_Guests_Email = $bookings_Guests_Email;
	}
	/**
	 * 予約注文情報_お客様情報_お客様電話番号設定
	 *
	 * @param string $bookings_Guests_Phone
	 */
	public function setBookings_Guests_Phone($bookings_Guests_Phone) {
		$this->bookings_Guests_Phone = $bookings_Guests_Phone;
	}
	/**
	 * 予約注文情報_お客様情報_ロイヤリティプログラム名設定
	 *
	 * @param string $bookings_Guests_LoyaltyProgram
	 */
	public function setBookings_Guests_LoyaltyProgram($bookings_Guests_LoyaltyProgram) {
		$this->bookings_Guests_LoyaltyProgram = $bookings_Guests_LoyaltyProgram;
	}
	/**
	 * 予約注文情報_お客様情報_ロイヤリティプログラムメンバーシップID設定
	 *
	 * @param string $bookings_Guests_LoyaltyProgramId
	 */
	public function setBookings_Guests_LoyaltyProgramId($bookings_Guests_LoyaltyProgramId) {
		$this->bookings_Guests_LoyaltyProgramId = $bookings_Guests_LoyaltyProgramId;
	}
	/**
	 * 予約注文情報_お客様情報_生年月日設定
	 *
	 * @param string $bookings_Guests_BirthDate
	 */
	public function setBookings_Guests_BirthDate($bookings_Guests_BirthDate) {
		$this->bookings_Guests_BirthDate = $bookings_Guests_BirthDate;
	}
	/**
	 * 予約注文情報_イベントID設定
	 *
	 * @param string $bookings_EventId
	 */
	public function setBookings_EventId($bookings_EventId) {
		$this->bookings_EventId = $bookings_EventId;
	}
	/**
	 * 予約注文情報_会場ID設定
	 *
	 * @param string $bookings_VenueId
	 */
	public function setBookings_VenueId($bookings_VenueId) {
		$this->bookings_VenueId = $bookings_VenueId;
	}
	/**
	 * 予約注文情報_会場住所_氏名設定
	 *
	 * @param string $bookings_Location_Name
	 */
	public function setBookings_Location_Name($bookings_Location_Name) {
		$this->bookings_Location_Name = $bookings_Location_Name;
	}
	/**
	 * 予約注文情報_会場住所_番地_1行目設定
	 *
	 * @param string $bookings_Location_Address1
	 */
	public function setBookings_Location_Address1($bookings_Location_Address1) {
		$this->bookings_Location_Address1 = $bookings_Location_Address1;
	}
	/**
	 * 予約注文情報_会場住所_番地_2行目設定
	 *
	 * @param string $bookings_Location_Address2
	 */
	public function setBookings_Location_Address2($bookings_Location_Address2) {
		$this->bookings_Location_Address2 = $bookings_Location_Address2;
	}
	/**
	 * 予約注文情報_会場住所_市町村設定
	 *
	 * @param string $bookings_Location_City
	 */
	public function setBookings_Location_City($bookings_Location_City) {
		$this->bookings_Location_City = $bookings_Location_City;
	}
	/**
	 * 予約注文情報_会場住所_都道府県設定
	 *
	 * @param string $bookings_Location_Region
	 */
	public function setBookings_Location_Region($bookings_Location_Region) {
		$this->bookings_Location_Region = $bookings_Location_Region;
	}
	/**
	 * 予約注文情報_会場住所_国設定
	 *
	 * @param string $bookings_Location_Country
	 */
	public function setBookings_Location_Country($bookings_Location_Country) {
		$this->bookings_Location_Country = $bookings_Location_Country;
	}
	/**
	 * 予約注文情報_会場住所_郵便番号設定
	 *
	 * @param string $bookings_Location_Zipcode
	 */
	public function setBookings_Location_Zipcode($bookings_Location_Zipcode) {
		$this->bookings_Location_Zipcode = $bookings_Location_Zipcode;
	}
	/**
	 * 予約注文情報_会場住所_電話番号設定
	 *
	 * @param string $bookings_Location_Phone
	 */
	public function setBookings_Location_Phone($bookings_Location_Phone) {
		$this->bookings_Location_Phone = $bookings_Location_Phone;
	}
	/**
	 * 予約注文情報_カテゴリ設定
	 *
	 * @param string $bookings_Category
	 */
	public function setBookings_Category($bookings_Category) {
		$this->bookings_Category = $bookings_Category;
	}
	/**
	 * 予約注文情報_タグ設定
	 *
	 * @param string $bookings_Tags
	 */
	public function setBookings_Tags($bookings_Tags) {
		$this->bookings_Tags = $bookings_Tags;
	}
	/**
	 * 予約注文情報_部屋タイプ設定
	 *
	 * @param string $bookings_RoomType
	 */
	public function setBookings_RoomType($bookings_RoomType) {
		$this->bookings_RoomType = $bookings_RoomType;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_氏名設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Name
	 */
	public function setBookings_Segments_DepartureAddress_Name($bookings_Segments_DepartureAddress_Name) {
		$this->bookings_Segments_DepartureAddress_Name = $bookings_Segments_DepartureAddress_Name;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_番地_1行目設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Address1
	 */
	public function setBookings_Segments_DepartureAddress_Address1($bookings_Segments_DepartureAddress_Address1) {
		$this->bookings_Segments_DepartureAddress_Address1 = $bookings_Segments_DepartureAddress_Address1;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_番地_2行目設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Address2
	 */
	public function setBookings_Segments_DepartureAddress_Address2($bookings_Segments_DepartureAddress_Address2) {
		$this->bookings_Segments_DepartureAddress_Address2 = $bookings_Segments_DepartureAddress_Address2;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_市町村設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_City
	 */
	public function setBookings_Segments_DepartureAddress_City($bookings_Segments_DepartureAddress_City) {
		$this->bookings_Segments_DepartureAddress_City = $bookings_Segments_DepartureAddress_City;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_都道府県設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Region
	 */
	public function setBookings_Segments_DepartureAddress_Region($bookings_Segments_DepartureAddress_Region) {
		$this->bookings_Segments_DepartureAddress_Region = $bookings_Segments_DepartureAddress_Region;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_国設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Country
	 */
	public function setBookings_Segments_DepartureAddress_Country($bookings_Segments_DepartureAddress_Country) {
		$this->bookings_Segments_DepartureAddress_Country = $bookings_Segments_DepartureAddress_Country;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_郵便番号設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Zipcode
	 */
	public function setBookings_Segments_DepartureAddress_Zipcode($bookings_Segments_DepartureAddress_Zipcode) {
		$this->bookings_Segments_DepartureAddress_Zipcode = $bookings_Segments_DepartureAddress_Zipcode;
	}
	/**
	 * 予約注文情報_旅程情報_出発地点住所_電話番号設定
	 *
	 * @param string $bookings_Segments_DepartureAddress_Phone
	 */
	public function setBookings_Segments_DepartureAddress_Phone($bookings_Segments_DepartureAddress_Phone) {
		$this->bookings_Segments_DepartureAddress_Phone = $bookings_Segments_DepartureAddress_Phone;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_氏名設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Name
	 */
	public function setBookings_Segments_ArrivalAddress_Name($bookings_Segments_ArrivalAddress_Name) {
		$this->bookings_Segments_ArrivalAddress_Name = $bookings_Segments_ArrivalAddress_Name;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_番地_1行目設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Address1
	 */
	public function setBookings_Segments_ArrivalAddress_Address1($bookings_Segments_ArrivalAddress_Address1) {
		$this->bookings_Segments_ArrivalAddress_Address1 = $bookings_Segments_ArrivalAddress_Address1;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_番地_2行目設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Address2
	 */
	public function setBookings_Segments_ArrivalAddress_Address2($bookings_Segments_ArrivalAddress_Address2) {
		$this->bookings_Segments_ArrivalAddress_Address2 = $bookings_Segments_ArrivalAddress_Address2;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_市町村設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_City
	 */
	public function setBookings_Segments_ArrivalAddress_City($bookings_Segments_ArrivalAddress_City) {
		$this->bookings_Segments_ArrivalAddress_City = $bookings_Segments_ArrivalAddress_City;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_都道府県設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Region
	 */
	public function setBookings_Segments_ArrivalAddress_Region($bookings_Segments_ArrivalAddress_Region) {
		$this->bookings_Segments_ArrivalAddress_Region = $bookings_Segments_ArrivalAddress_Region;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_国設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Country
	 */
	public function setBookings_Segments_ArrivalAddress_Country($bookings_Segments_ArrivalAddress_Country) {
		$this->bookings_Segments_ArrivalAddress_Country = $bookings_Segments_ArrivalAddress_Country;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_郵便番号設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Zipcode
	 */
	public function setBookings_Segments_ArrivalAddress_Zipcode($bookings_Segments_ArrivalAddress_Zipcode) {
		$this->bookings_Segments_ArrivalAddress_Zipcode = $bookings_Segments_ArrivalAddress_Zipcode;
	}
	/**
	 * 予約注文情報_旅程情報_到着地点住所_電話番号設定
	 *
	 * @param string $bookings_Segments_ArrivalAddress_Phone
	 */
	public function setBookings_Segments_ArrivalAddress_Phone($bookings_Segments_ArrivalAddress_Phone) {
		$this->bookings_Segments_ArrivalAddress_Phone = $bookings_Segments_ArrivalAddress_Phone;
	}
	/**
	 * 予約注文情報_旅程情報_出発時間設定
	 *
	 * @param string $bookings_Segments_StartTime
	 */
	public function setBookings_Segments_StartTime($bookings_Segments_StartTime) {
		$this->bookings_Segments_StartTime = $bookings_Segments_StartTime;
	}
	/**
	 * 予約注文情報_旅程情報_到着時間設定
	 *
	 * @param string $bookings_Segments_EndTime
	 */
	public function setBookings_Segments_EndTime($bookings_Segments_EndTime) {
		$this->bookings_Segments_EndTime = $bookings_Segments_EndTime;
	}
	/**
	 * 予約注文情報_旅程情報_移動手段番号設定
	 *
	 * @param string $bookings_Segments_VesselNumber
	 */
	public function setBookings_Segments_VesselNumber($bookings_Segments_VesselNumber) {
		$this->bookings_Segments_VesselNumber = $bookings_Segments_VesselNumber;
	}
	/**
	 * 予約注文情報_旅程情報_出発空港IATAコード設定
	 *
	 * @param string $bookings_Segments_DepartureAirportCode
	 */
	public function setBookings_Segments_DepartureAirportCode($bookings_Segments_DepartureAirportCode) {
		$this->bookings_Segments_DepartureAirportCode = $bookings_Segments_DepartureAirportCode;
	}
	/**
	 * 予約注文情報_旅程情報_到着空港IATAコード設定
	 *
	 * @param string $bookings_Segments_ArrivalAirportCode
	 */
	public function setBookings_Segments_ArrivalAirportCode($bookings_Segments_ArrivalAirportCode) {
		$this->bookings_Segments_ArrivalAirportCode = $bookings_Segments_ArrivalAirportCode;
	}
	/**
	 * 予約注文情報_旅程情報_旅行クラス設定
	 *
	 * @param string $bookings_Segments_FareClass
	 */
	public function setBookings_Segments_FareClass($bookings_Segments_FareClass) {
		$this->bookings_Segments_FareClass = $bookings_Segments_FareClass;
	}
	/**
	 * 販売者設定
	 *
	 * @param string $sellerUserId
	 */
	public function setSellerUserId($sellerUserId) {
		$this->sellerUserId = $sellerUserId;
	}
	/**
	 * プロモーション_プロモーションID設定
	 *
	 * @param string $promotions_PromotionId
	 */
	public function setPromotions_PromotionId($promotions_PromotionId) {
		$this->promotions_PromotionId = $promotions_PromotionId;
	}
	/**
	 * プロモーション_プロモーションステータス設定
	 *
	 * @param string $promotions_Status
	 */
	public function setPromotions_Status($promotions_Status) {
		$this->promotions_Status = $promotions_Status;
	}
	/**
	 * プロモーション_プロモーション追加失敗理由設定
	 *
	 * @param string $promotions_FailureReason
	 */
	public function setPromotions_FailureReason($promotions_FailureReason) {
		$this->promotions_FailureReason = $promotions_FailureReason;
	}
	/**
	 * プロモーション_プロモーション説明設定
	 *
	 * @param string $promotions_Description
	 */
	public function setPromotions_Description($promotions_Description) {
		$this->promotions_Description = $promotions_Description;
	}
	/**
	 * プロモーション_紹介者ユーザID設定
	 *
	 * @param string $promotions_ReferrerUserId
	 */
	public function setPromotions_ReferrerUserId($promotions_ReferrerUserId) {
		$this->promotions_ReferrerUserId = $promotions_ReferrerUserId;
	}
	/**
	 * プロモーション_金銭的割引情報_割引率設定
	 *
	 * @param string $promotions_Discount_PercentageOff
	 */
	public function setPromotions_Discount_PercentageOff($promotions_Discount_PercentageOff) {
		$this->promotions_Discount_PercentageOff = $promotions_Discount_PercentageOff;
	}
	/**
	 * プロモーション_金銭的割引情報_割引金額設定
	 *
	 * @param string $promotions_Discount_Amount
	 */
	public function setPromotions_Discount_Amount($promotions_Discount_Amount) {
		$this->promotions_Discount_Amount = $promotions_Discount_Amount;
	}
	/**
	 * プロモーション_金銭的割引情報_割引金額通貨コード設定
	 *
	 * @param string $promotions_Discount_CurrencyCode
	 */
	public function setPromotions_Discount_CurrencyCode($promotions_Discount_CurrencyCode) {
		$this->promotions_Discount_CurrencyCode = $promotions_Discount_CurrencyCode;
	}
	/**
	 * プロモーション_金銭的割引情報_プロモーション適用最低金額設定
	 *
	 * @param string $promotions_Discount_MinimumPurchaseAmount
	 */
	public function setPromotions_Discount_MinimumPurchaseAmount($promotions_Discount_MinimumPurchaseAmount) {
		$this->promotions_Discount_MinimumPurchaseAmount = $promotions_Discount_MinimumPurchaseAmount;
	}
	/**
	 * プロモーション_クレジットポイント_クレジット量設定
	 *
	 * @param string $promotions_CreditPoint_Amount
	 */
	public function setPromotions_CreditPoint_Amount($promotions_CreditPoint_Amount) {
		$this->promotions_CreditPoint_Amount = $promotions_CreditPoint_Amount;
	}
	/**
	 * プロモーション_クレジットポイント_クレジットポイントタイプ設定
	 *
	 * @param string $promotions_CreditPoint_CreditPointType
	 */
	public function setPromotions_CreditPoint_CreditPointType($promotions_CreditPoint_CreditPointType) {
		$this->promotions_CreditPoint_CreditPointType = $promotions_CreditPoint_CreditPointType;
	}
	/**
	 * 配送方法設定
	 *
	 * @param string $shippingMethod
	 */
	public function setShippingMethod($shippingMethod) {
		$this->shippingMethod = $shippingMethod;
	}
	/**
	 * ブラウザ情報_ユーザーエージェント設定
	 *
	 * @param string $browser_UserAgent
	 */
	public function setBrowser_UserAgent($browser_UserAgent) {
		$this->browser_UserAgent = $browser_UserAgent;
	}
	/**
	 * アプリ情報-OS設定
	 *
	 * @param string $app_Os
	 */
	public function setApp_Os($app_Os) {
		$this->app_Os = $app_Os;
	}
	/**
	 * アプリ情報-OSバージョン設定
	 *
	 * @param string $app_OsVersion
	 */
	public function setApp_OsVersion($app_OsVersion) {
		$this->app_OsVersion = $app_OsVersion;
	}
	/**
	 * アプリ情報-デバイス製造元設定
	 *
	 * @param string $app_DeviceManufacturer
	 */
	public function setApp_DeviceManufacturer($app_DeviceManufacturer) {
		$this->app_DeviceManufacturer = $app_DeviceManufacturer;
	}
	/**
	 * アプリ情報-デバイスのモデル設定
	 *
	 * @param string $app_DeviceModel
	 */
	public function setApp_DeviceModel($app_DeviceModel) {
		$this->app_DeviceModel = $app_DeviceModel;
	}
	/**
	 * アプリ情報-デバイスID設定
	 *
	 * @param string $app_DeviceUniqueId
	 */
	public function setApp_DeviceUniqueId($app_DeviceUniqueId) {
		$this->app_DeviceUniqueId = $app_DeviceUniqueId;
	}
	/**
	 * アプリ情報-アプリケーション名設定
	 *
	 * @param string $app_AppName
	 */
	public function setApp_AppName($app_AppName) {
		$this->app_AppName = $app_AppName;
	}
	/**
	 * アプリ情報-アプリケーションバージョン設定
	 *
	 * @param string $app_AppVersion
	 */
	public function setApp_AppVersion($app_AppVersion) {
		$this->app_AppVersion = $app_AppVersion;
	}
	/**
	 * 取引区分設定
	 *
	 * @param string $transactionType
	 */
	public function setTransactionType($transactionType) {
		$this->transactionType = $transactionType;
	}
	/**
	 * 取引ステータス設定
	 *
	 * @param string $transactionStatus
	 */
	public function setTransactionStatus($transactionStatus) {
		$this->transactionStatus = $transactionStatus;
	}
	/**
	 * 送金先ユーザID設定
	 *
	 * @param string $transferRecipientUserId
	 */
	public function setTransferRecipientUserId($transferRecipientUserId) {
		$this->transferRecipientUserId = $transferRecipientUserId;
	}
	/**
	 * チャージバックの現在の状態設定
	 *
	 * @param string $chargebackState
	 */
	public function setChargebackState($chargebackState) {
		$this->chargebackState = $chargebackState;
	}
	/**
	 * チャージバック理由設定
	 *
	 * @param string $chargebackReason
	 */
	public function setChargebackReason($chargebackReason) {
		$this->chargebackReason = $chargebackReason;
	}
	/**
	 * デシジョンID設定
	 *
	 * @param string $decisionId
	 */
	public function setDecisionId($decisionId) {
		$this->decisionId = $decisionId;
	}
	/**
	 * デシジョンの出典設定
	 *
	 * @param string $source
	 */
	public function setSource($source) {
		$this->source = $source;
	}
	/**
	 * 分析者設定
	 *
	 * @param string $analyst
	 */
	public function setAnalyst($analyst) {
		$this->analyst = $analyst;
	}
	/**
	 * デシジョン適用日時設定
	 *
	 * @param string $time
	 */
	public function setTime($time) {
		$this->time = $time;
	}
	/**
	 * デシジョン説明設定
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}
	/**
	 * siftオーダーID設定
	 *
	 * @param string $siftOrderID
	 */
	public function setSiftOrderID($siftOrderID) {
		$this->siftOrderID = $siftOrderID;
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}
	/**
	 * 決済手段設定
	 *
	 * @param string $payType
	 */
	public function setPayType($payType) {
		$this->payType = $payType;
	}


	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setType($this->getStringValue($params, 'Type', $this->getType()));
		$this->setUserId($this->getStringValue($params, 'UserId', $this->getUserId()));
		$this->setSessionId($this->getStringValue($params, 'SessionId', $this->getSessionId()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setUserEmail($this->getStringValue($params, 'UserEmail', $this->getUserEmail()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setSeqMode($this->getStringValue($params, 'SeqMode', $this->getSeqMode()));
		$this->setCardSeq($this->getStringValue($params, 'CardSeq', $this->getCardSeq()));
		$this->setToken($this->getStringValue($params, 'Token', $this->getToken()));
		$this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
		$this->setCurrencyCode($this->getStringValue($params, 'CurrencyCode', $this->getCurrencyCode()));
		$this->setBillingAddress_Name($this->getStringValue($params, 'BillingAddress_Name', $this->getBillingAddress_Name()));
		$this->setBillingAddress_Address1($this->getStringValue($params, 'BillingAddress_Address1', $this->getBillingAddress_Address1()));
		$this->setBillingAddress_Address2($this->getStringValue($params, 'BillingAddress_Address2', $this->getBillingAddress_Address2()));
		$this->setBillingAddress_City($this->getStringValue($params, 'BillingAddress_City', $this->getBillingAddress_City()));
		$this->setBillingAddress_Region($this->getStringValue($params, 'BillingAddress_Region', $this->getBillingAddress_Region()));
		$this->setBillingAddress_Country($this->getStringValue($params, 'BillingAddress_Country', $this->getBillingAddress_Country()));
		$this->setBillingAddress_Zipcode($this->getStringValue($params, 'BillingAddress_Zipcode', $this->getBillingAddress_Zipcode()));
		$this->setBillingAddress_Phone($this->getStringValue($params, 'BillingAddress_Phone', $this->getBillingAddress_Phone()));
		$this->setPaymentMethods_PaymentType($this->getStringValue($params, 'PaymentMethods_PaymentType', $this->getPaymentMethods_PaymentType()));
		$this->setPaymentMethods_CardBin($this->getStringValue($params, 'PaymentMethods_CardBin', $this->getPaymentMethods_CardBin()));
		$this->setPaymentMethods_CardLast4($this->getStringValue($params, 'PaymentMethods_CardLast4', $this->getPaymentMethods_CardLast4()));
		$this->setPaymentMethods_VerificationStatus($this->getStringValue($params, 'PaymentMethods_VerificationStatus', $this->getPaymentMethods_VerificationStatus()));
		$this->setPaymentMethods_RoutingNumber($this->getStringValue($params, 'PaymentMethods_RoutingNumber', $this->getPaymentMethods_RoutingNumber()));
		$this->setPaymentMethods_DeclineReasonCode($this->getStringValue($params, 'PaymentMethods_DeclineReasonCode', $this->getPaymentMethods_DeclineReasonCode()));
		$this->setPaymentMethod_PaymentType($this->getStringValue($params, 'PaymentMethod_PaymentType', $this->getPaymentMethod_PaymentType()));
		$this->setPaymentMethod_CardBin($this->getStringValue($params, 'PaymentMethod_CardBin', $this->getPaymentMethod_CardBin()));
		$this->setPaymentMethod_CardLast4($this->getStringValue($params, 'PaymentMethod_CardLast4', $this->getPaymentMethod_CardLast4()));
		$this->setPaymentMethod_VerificationStatus($this->getStringValue($params, 'PaymentMethod_VerificationStatus', $this->getPaymentMethod_VerificationStatus()));
		$this->setPaymentMethod_RoutingNumber($this->getStringValue($params, 'PaymentMethod_RoutingNumber', $this->getPaymentMethod_RoutingNumber()));
		$this->setPaymentMethod_DeclineReasonCode($this->getStringValue($params, 'PaymentMethod_DeclineReasonCode', $this->getPaymentMethod_DeclineReasonCode()));
		$this->setShippingAddress_Name($this->getStringValue($params, 'ShippingAddress_Name', $this->getShippingAddress_Name()));
		$this->setShippingAddress_Address1($this->getStringValue($params, 'ShippingAddress_Address1', $this->getShippingAddress_Address1()));
		$this->setShippingAddress_Address2($this->getStringValue($params, 'ShippingAddress_Address2', $this->getShippingAddress_Address2()));
		$this->setShippingAddress_City($this->getStringValue($params, 'ShippingAddress_City', $this->getShippingAddress_City()));
		$this->setShippingAddress_Region($this->getStringValue($params, 'ShippingAddress_Region', $this->getShippingAddress_Region()));
		$this->setShippingAddress_Country($this->getStringValue($params, 'ShippingAddress_Country', $this->getShippingAddress_Country()));
		$this->setShippingAddress_Zipcode($this->getStringValue($params, 'ShippingAddress_Zipcode', $this->getShippingAddress_Zipcode()));
		$this->setShippingAddress_Phone($this->getStringValue($params, 'ShippingAddress_Phone', $this->getShippingAddress_Phone()));
		$this->setExpeditedShipping($this->getStringValue($params, 'ExpeditedShipping', $this->getExpeditedShipping()));
		$this->setItems_ItemId($this->getStringValue($params, 'Items_ItemId', $this->getItems_ItemId()));
		$this->setItems_ProductTitle($this->getStringValue($params, 'Items_ProductTitle', $this->getItems_ProductTitle()));
		$this->setItems_Price($this->getStringValue($params, 'Items_Price', $this->getItems_Price()));
		$this->setItems_CurrencyCode($this->getStringValue($params, 'Items_CurrencyCode', $this->getItems_CurrencyCode()));
		$this->setItems_Quantity($this->getStringValue($params, 'Items_Quantity', $this->getItems_Quantity()));
		$this->setItems_Upc($this->getStringValue($params, 'Items_Upc', $this->getItems_Upc()));
		$this->setItems_Sku($this->getStringValue($params, 'Items_Sku', $this->getItems_Sku()));
		$this->setItems_Isbn($this->getStringValue($params, 'Items_Isbn', $this->getItems_Isbn()));
		$this->setItems_Brand($this->getStringValue($params, 'Items_Brand', $this->getItems_Brand()));
		$this->setItems_Manufacturer($this->getStringValue($params, 'Items_Manufacturer', $this->getItems_Manufacturer()));
		$this->setItems_Category($this->getStringValue($params, 'Items_Category', $this->getItems_Category()));
		$this->setItems_Tags($this->getStringValue($params, 'Items_Tags', $this->getItems_Tags()));
		$this->setItems_Color($this->getStringValue($params, 'Items_Color', $this->getItems_Color()));
		$this->setItems_Size($this->getStringValue($params, 'Items_Size', $this->getItems_Size()));
		$this->setBookings_BookingType($this->getStringValue($params, 'Bookings_BookingType', $this->getBookings_BookingType()));
		$this->setBookings_Title($this->getStringValue($params, 'Bookings_Title', $this->getBookings_Title()));
		$this->setBookings_StartTime($this->getStringValue($params, 'Bookings_StartTime', $this->getBookings_StartTime()));
		$this->setBookings_EndTime($this->getStringValue($params, 'Bookings_EndTime', $this->getBookings_EndTime()));
		$this->setBookings_Price($this->getStringValue($params, 'Bookings_Price', $this->getBookings_Price()));
		$this->setBookings_CurrencyCode($this->getStringValue($params, 'Bookings_CurrencyCode', $this->getBookings_CurrencyCode()));
		$this->setBookings_Quantity($this->getStringValue($params, 'Bookings_Quantity', $this->getBookings_Quantity()));
		$this->setBookings_Guests_Name($this->getStringValue($params, 'Bookings_Guests_Name', $this->getBookings_Guests_Name()));
		$this->setBookings_Guests_Email($this->getStringValue($params, 'Bookings_Guests_Email', $this->getBookings_Guests_Email()));
		$this->setBookings_Guests_Phone($this->getStringValue($params, 'Bookings_Guests_Phone', $this->getBookings_Guests_Phone()));
		$this->setBookings_Guests_LoyaltyProgram($this->getStringValue($params, 'Bookings_Guests_LoyaltyProgram', $this->getBookings_Guests_LoyaltyProgram()));
		$this->setBookings_Guests_LoyaltyProgramId($this->getStringValue($params, 'Bookings_Guests_LoyaltyProgramId', $this->getBookings_Guests_LoyaltyProgramId()));
		$this->setBookings_Guests_BirthDate($this->getStringValue($params, 'Bookings_Guests_BirthDate', $this->getBookings_Guests_BirthDate()));
		$this->setBookings_EventId($this->getStringValue($params, 'Bookings_EventId', $this->getBookings_EventId()));
		$this->setBookings_VenueId($this->getStringValue($params, 'Bookings_VenueId', $this->getBookings_VenueId()));
		$this->setBookings_Location_Name($this->getStringValue($params, 'Bookings_Location_Name', $this->getBookings_Location_Name()));
		$this->setBookings_Location_Address1($this->getStringValue($params, 'Bookings_Location_Address1', $this->getBookings_Location_Address1()));
		$this->setBookings_Location_Address2($this->getStringValue($params, 'Bookings_Location_Address2', $this->getBookings_Location_Address2()));
		$this->setBookings_Location_City($this->getStringValue($params, 'Bookings_Location_City', $this->getBookings_Location_City()));
		$this->setBookings_Location_Region($this->getStringValue($params, 'Bookings_Location_Region', $this->getBookings_Location_Region()));
		$this->setBookings_Location_Country($this->getStringValue($params, 'Bookings_Location_Country', $this->getBookings_Location_Country()));
		$this->setBookings_Location_Zipcode($this->getStringValue($params, 'Bookings_Location_Zipcode', $this->getBookings_Location_Zipcode()));
		$this->setBookings_Location_Phone($this->getStringValue($params, 'Bookings_Location_Phone', $this->getBookings_Location_Phone()));
		$this->setBookings_Category($this->getStringValue($params, 'Bookings_Category', $this->getBookings_Category()));
		$this->setBookings_Tags($this->getStringValue($params, 'Bookings_Tags', $this->getBookings_Tags()));
		$this->setBookings_RoomType($this->getStringValue($params, 'Bookings_RoomType', $this->getBookings_RoomType()));
		$this->setBookings_Segments_DepartureAddress_Name($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Name', $this->getBookings_Segments_DepartureAddress_Name()));
		$this->setBookings_Segments_DepartureAddress_Address1($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Address1', $this->getBookings_Segments_DepartureAddress_Address1()));
		$this->setBookings_Segments_DepartureAddress_Address2($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Address2', $this->getBookings_Segments_DepartureAddress_Address2()));
		$this->setBookings_Segments_DepartureAddress_City($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_City', $this->getBookings_Segments_DepartureAddress_City()));
		$this->setBookings_Segments_DepartureAddress_Region($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Region', $this->getBookings_Segments_DepartureAddress_Region()));
		$this->setBookings_Segments_DepartureAddress_Country($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Country', $this->getBookings_Segments_DepartureAddress_Country()));
		$this->setBookings_Segments_DepartureAddress_Zipcode($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Zipcode', $this->getBookings_Segments_DepartureAddress_Zipcode()));
		$this->setBookings_Segments_DepartureAddress_Phone($this->getStringValue($params, 'Bookings_Segments_DepartureAddress_Phone', $this->getBookings_Segments_DepartureAddress_Phone()));
		$this->setBookings_Segments_ArrivalAddress_Name($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Name', $this->getBookings_Segments_ArrivalAddress_Name()));
		$this->setBookings_Segments_ArrivalAddress_Address1($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Address1', $this->getBookings_Segments_ArrivalAddress_Address1()));
		$this->setBookings_Segments_ArrivalAddress_Address2($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Address2', $this->getBookings_Segments_ArrivalAddress_Address2()));
		$this->setBookings_Segments_ArrivalAddress_City($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_City', $this->getBookings_Segments_ArrivalAddress_City()));
		$this->setBookings_Segments_ArrivalAddress_Region($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Region', $this->getBookings_Segments_ArrivalAddress_Region()));
		$this->setBookings_Segments_ArrivalAddress_Country($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Country', $this->getBookings_Segments_ArrivalAddress_Country()));
		$this->setBookings_Segments_ArrivalAddress_Zipcode($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Zipcode', $this->getBookings_Segments_ArrivalAddress_Zipcode()));
		$this->setBookings_Segments_ArrivalAddress_Phone($this->getStringValue($params, 'Bookings_Segments_ArrivalAddress_Phone', $this->getBookings_Segments_ArrivalAddress_Phone()));
		$this->setBookings_Segments_StartTime($this->getStringValue($params, 'Bookings_Segments_StartTime', $this->getBookings_Segments_StartTime()));
		$this->setBookings_Segments_EndTime($this->getStringValue($params, 'Bookings_Segments_EndTime', $this->getBookings_Segments_EndTime()));
		$this->setBookings_Segments_VesselNumber($this->getStringValue($params, 'Bookings_Segments_VesselNumber', $this->getBookings_Segments_VesselNumber()));
		$this->setBookings_Segments_DepartureAirportCode($this->getStringValue($params, 'Bookings_Segments_DepartureAirportCode', $this->getBookings_Segments_DepartureAirportCode()));
		$this->setBookings_Segments_ArrivalAirportCode($this->getStringValue($params, 'Bookings_Segments_ArrivalAirportCode', $this->getBookings_Segments_ArrivalAirportCode()));
		$this->setBookings_Segments_FareClass($this->getStringValue($params, 'Bookings_Segments_FareClass', $this->getBookings_Segments_FareClass()));
		$this->setSellerUserId($this->getStringValue($params, 'SellerUserId', $this->getSellerUserId()));
		$this->setPromotions_PromotionId($this->getStringValue($params, 'Promotions_PromotionId', $this->getPromotions_PromotionId()));
		$this->setPromotions_Status($this->getStringValue($params, 'Promotions_Status', $this->getPromotions_Status()));
		$this->setPromotions_FailureReason($this->getStringValue($params, 'Promotions_FailureReason', $this->getPromotions_FailureReason()));
		$this->setPromotions_Description($this->getStringValue($params, 'Promotions_Description', $this->getPromotions_Description()));
		$this->setPromotions_ReferrerUserId($this->getStringValue($params, 'Promotions_ReferrerUserId', $this->getPromotions_ReferrerUserId()));
		$this->setPromotions_Discount_PercentageOff($this->getStringValue($params, 'Promotions_Discount_PercentageOff', $this->getPromotions_Discount_PercentageOff()));
		$this->setPromotions_Discount_Amount($this->getStringValue($params, 'Promotions_Discount_Amount', $this->getPromotions_Discount_Amount()));
		$this->setPromotions_Discount_CurrencyCode($this->getStringValue($params, 'Promotions_Discount_CurrencyCode', $this->getPromotions_Discount_CurrencyCode()));
		$this->setPromotions_Discount_MinimumPurchaseAmount($this->getStringValue($params, 'Promotions_Discount_MinimumPurchaseAmount', $this->getPromotions_Discount_MinimumPurchaseAmount()));
		$this->setPromotions_CreditPoint_Amount($this->getStringValue($params, 'Promotions_CreditPoint_Amount', $this->getPromotions_CreditPoint_Amount()));
		$this->setPromotions_CreditPoint_CreditPointType($this->getStringValue($params, 'Promotions_CreditPoint_CreditPointType', $this->getPromotions_CreditPoint_CreditPointType()));
		$this->setShippingMethod($this->getStringValue($params, 'ShippingMethod', $this->getShippingMethod()));
		$this->setBrowser_UserAgent($this->getStringValue($params, 'Browser_UserAgent', $this->getBrowser_UserAgent()));
		$this->setApp_Os($this->getStringValue($params, 'App_Os', $this->getApp_Os()));
		$this->setApp_OsVersion($this->getStringValue($params, 'App_OsVersion', $this->getApp_OsVersion()));
		$this->setApp_DeviceManufacturer($this->getStringValue($params, 'App_DeviceManufacturer', $this->getApp_DeviceManufacturer()));
		$this->setApp_DeviceModel($this->getStringValue($params, 'App_DeviceModel', $this->getApp_DeviceModel()));
		$this->setApp_DeviceUniqueId($this->getStringValue($params, 'App_DeviceUniqueId', $this->getApp_DeviceUniqueId()));
		$this->setApp_AppName($this->getStringValue($params, 'App_AppName', $this->getApp_AppName()));
		$this->setApp_AppVersion($this->getStringValue($params, 'App_AppVersion', $this->getApp_AppVersion()));
		$this->setTransactionType($this->getStringValue($params, 'TransactionType', $this->getTransactionType()));
		$this->setTransactionStatus($this->getStringValue($params, 'TransactionStatus', $this->getTransactionStatus()));
		$this->setTransferRecipientUserId($this->getStringValue($params, 'TransferRecipientUserId', $this->getTransferRecipientUserId()));
		$this->setChargebackState($this->getStringValue($params, 'ChargebackState', $this->getChargebackState()));
		$this->setChargebackReason($this->getStringValue($params, 'ChargebackReason', $this->getChargebackReason()));
		$this->setDecisionId($this->getStringValue($params, 'DecisionId', $this->getDecisionId()));
		$this->setSource($this->getStringValue($params, 'Source', $this->getSource()));
		$this->setAnalyst($this->getStringValue($params, 'Analyst', $this->getAnalyst()));
		$this->setTime($this->getStringValue($params, 'Time', $this->getTime()));
		$this->setDescription($this->getStringValue($params, 'Description', $this->getDescription()));
		$this->setSiftOrderID($this->getStringValue($params, 'SiftOrderID', $this->getSiftOrderID()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
		$this->setPayType($this->getStringValue($params, 'PayType', $this->getPayType()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .='&';
		$str .= 'Type=' . $this->encodeStr($this->getType());
		$str .='&';
		$str .= 'UserId=' . $this->encodeStr($this->getUserId());
		$str .='&';
		$str .= 'SessionId=' . $this->encodeStr($this->getSessionId());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'UserEmail=' . $this->encodeStr($this->getUserEmail());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
		$str .='&';
		$str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
		$str .='&';
		$str .= 'Token=' . $this->encodeStr($this->getToken());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'CurrencyCode=' . $this->encodeStr($this->getCurrencyCode());
		$str .='&';
		$str .= 'BillingAddress_Name=' . $this->encodeStr($this->getBillingAddress_Name());
		$str .='&';
		$str .= 'BillingAddress_Address1=' . $this->encodeStr($this->getBillingAddress_Address1());
		$str .='&';
		$str .= 'BillingAddress_Address2=' . $this->encodeStr($this->getBillingAddress_Address2());
		$str .='&';
		$str .= 'BillingAddress_City=' . $this->encodeStr($this->getBillingAddress_City());
		$str .='&';
		$str .= 'BillingAddress_Region=' . $this->encodeStr($this->getBillingAddress_Region());
		$str .='&';
		$str .= 'BillingAddress_Country=' . $this->encodeStr($this->getBillingAddress_Country());
		$str .='&';
		$str .= 'BillingAddress_Zipcode=' . $this->encodeStr($this->getBillingAddress_Zipcode());
		$str .='&';
		$str .= 'BillingAddress_Phone=' . $this->encodeStr($this->getBillingAddress_Phone());
		$str .='&';
		$str .= 'PaymentMethods_PaymentType=' . $this->encodeStr($this->getPaymentMethods_PaymentType());
		$str .='&';
		$str .= 'PaymentMethods_CardBin=' . $this->encodeStr($this->getPaymentMethods_CardBin());
		$str .='&';
		$str .= 'PaymentMethods_CardLast4=' . $this->encodeStr($this->getPaymentMethods_CardLast4());
		$str .='&';
		$str .= 'PaymentMethods_VerificationStatus=' . $this->encodeStr($this->getPaymentMethods_VerificationStatus());
		$str .='&';
		$str .= 'PaymentMethods_RoutingNumber=' . $this->encodeStr($this->getPaymentMethods_RoutingNumber());
		$str .='&';
		$str .= 'PaymentMethods_DeclineReasonCode=' . $this->encodeStr($this->getPaymentMethods_DeclineReasonCode());
		$str .='&';
		$str .= 'PaymentMethod_PaymentType=' . $this->encodeStr($this->getPaymentMethod_PaymentType());
		$str .='&';
		$str .= 'PaymentMethod_CardBin=' . $this->encodeStr($this->getPaymentMethod_CardBin());
		$str .='&';
		$str .= 'PaymentMethod_CardLast4=' . $this->encodeStr($this->getPaymentMethod_CardLast4());
		$str .='&';
		$str .= 'PaymentMethod_VerificationStatus=' . $this->encodeStr($this->getPaymentMethod_VerificationStatus());
		$str .='&';
		$str .= 'PaymentMethod_RoutingNumber=' . $this->encodeStr($this->getPaymentMethod_RoutingNumber());
		$str .='&';
		$str .= 'PaymentMethod_DeclineReasonCode=' . $this->encodeStr($this->getPaymentMethod_DeclineReasonCode());
		$str .='&';
		$str .= 'ShippingAddress_Name=' . $this->encodeStr($this->getShippingAddress_Name());
		$str .='&';
		$str .= 'ShippingAddress_Address1=' . $this->encodeStr($this->getShippingAddress_Address1());
		$str .='&';
		$str .= 'ShippingAddress_Address2=' . $this->encodeStr($this->getShippingAddress_Address2());
		$str .='&';
		$str .= 'ShippingAddress_City=' . $this->encodeStr($this->getShippingAddress_City());
		$str .='&';
		$str .= 'ShippingAddress_Region=' . $this->encodeStr($this->getShippingAddress_Region());
		$str .='&';
		$str .= 'ShippingAddress_Country=' . $this->encodeStr($this->getShippingAddress_Country());
		$str .='&';
		$str .= 'ShippingAddress_Zipcode=' . $this->encodeStr($this->getShippingAddress_Zipcode());
		$str .='&';
		$str .= 'ShippingAddress_Phone=' . $this->encodeStr($this->getShippingAddress_Phone());
		$str .='&';
		$str .= 'ExpeditedShipping=' . $this->encodeStr($this->getExpeditedShipping());
		$str .='&';
		$str .= 'Items_ItemId=' . $this->encodeStr($this->getItems_ItemId());
		$str .='&';
		$str .= 'Items_ProductTitle=' . $this->encodeStr($this->getItems_ProductTitle());
		$str .='&';
		$str .= 'Items_Price=' . $this->encodeStr($this->getItems_Price());
		$str .='&';
		$str .= 'Items_CurrencyCode=' . $this->encodeStr($this->getItems_CurrencyCode());
		$str .='&';
		$str .= 'Items_Quantity=' . $this->encodeStr($this->getItems_Quantity());
		$str .='&';
		$str .= 'Items_Upc=' . $this->encodeStr($this->getItems_Upc());
		$str .='&';
		$str .= 'Items_Sku=' . $this->encodeStr($this->getItems_Sku());
		$str .='&';
		$str .= 'Items_Isbn=' . $this->encodeStr($this->getItems_Isbn());
		$str .='&';
		$str .= 'Items_Brand=' . $this->encodeStr($this->getItems_Brand());
		$str .='&';
		$str .= 'Items_Manufacturer=' . $this->encodeStr($this->getItems_Manufacturer());
		$str .='&';
		$str .= 'Items_Category=' . $this->encodeStr($this->getItems_Category());
		$str .='&';
		$str .= 'Items_Tags=' . $this->encodeStr($this->getItems_Tags());
		$str .='&';
		$str .= 'Items_Color=' . $this->encodeStr($this->getItems_Color());
		$str .='&';
		$str .= 'Items_Size=' . $this->encodeStr($this->getItems_Size());
		$str .='&';
		$str .= 'Bookings_BookingType=' . $this->encodeStr($this->getBookings_BookingType());
		$str .='&';
		$str .= 'Bookings_Title=' . $this->encodeStr($this->getBookings_Title());
		$str .='&';
		$str .= 'Bookings_StartTime=' . $this->encodeStr($this->getBookings_StartTime());
		$str .='&';
		$str .= 'Bookings_EndTime=' . $this->encodeStr($this->getBookings_EndTime());
		$str .='&';
		$str .= 'Bookings_Price=' . $this->encodeStr($this->getBookings_Price());
		$str .='&';
		$str .= 'Bookings_CurrencyCode=' . $this->encodeStr($this->getBookings_CurrencyCode());
		$str .='&';
		$str .= 'Bookings_Quantity=' . $this->encodeStr($this->getBookings_Quantity());
		$str .='&';
		$str .= 'Bookings_Guests_Name=' . $this->encodeStr($this->getBookings_Guests_Name());
		$str .='&';
		$str .= 'Bookings_Guests_Email=' . $this->encodeStr($this->getBookings_Guests_Email());
		$str .='&';
		$str .= 'Bookings_Guests_Phone=' . $this->encodeStr($this->getBookings_Guests_Phone());
		$str .='&';
		$str .= 'Bookings_Guests_LoyaltyProgram=' . $this->encodeStr($this->getBookings_Guests_LoyaltyProgram());
		$str .='&';
		$str .= 'Bookings_Guests_LoyaltyProgramId=' . $this->encodeStr($this->getBookings_Guests_LoyaltyProgramId());
		$str .='&';
		$str .= 'Bookings_Guests_BirthDate=' . $this->encodeStr($this->getBookings_Guests_BirthDate());
		$str .='&';
		$str .= 'Bookings_EventId=' . $this->encodeStr($this->getBookings_EventId());
		$str .='&';
		$str .= 'Bookings_VenueId=' . $this->encodeStr($this->getBookings_VenueId());
		$str .='&';
		$str .= 'Bookings_Location_Name=' . $this->encodeStr($this->getBookings_Location_Name());
		$str .='&';
		$str .= 'Bookings_Location_Address1=' . $this->encodeStr($this->getBookings_Location_Address1());
		$str .='&';
		$str .= 'Bookings_Location_Address2=' . $this->encodeStr($this->getBookings_Location_Address2());
		$str .='&';
		$str .= 'Bookings_Location_City=' . $this->encodeStr($this->getBookings_Location_City());
		$str .='&';
		$str .= 'Bookings_Location_Region=' . $this->encodeStr($this->getBookings_Location_Region());
		$str .='&';
		$str .= 'Bookings_Location_Country=' . $this->encodeStr($this->getBookings_Location_Country());
		$str .='&';
		$str .= 'Bookings_Location_Zipcode=' . $this->encodeStr($this->getBookings_Location_Zipcode());
		$str .='&';
		$str .= 'Bookings_Location_Phone=' . $this->encodeStr($this->getBookings_Location_Phone());
		$str .='&';
		$str .= 'Bookings_Category=' . $this->encodeStr($this->getBookings_Category());
		$str .='&';
		$str .= 'Bookings_Tags=' . $this->encodeStr($this->getBookings_Tags());
		$str .='&';
		$str .= 'Bookings_RoomType=' . $this->encodeStr($this->getBookings_RoomType());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Name=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Name());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Address1=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Address1());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Address2=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Address2());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_City=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_City());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Region=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Region());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Country=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Country());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Zipcode=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Zipcode());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAddress_Phone=' . $this->encodeStr($this->getBookings_Segments_DepartureAddress_Phone());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Name=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Name());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Address1=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Address1());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Address2=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Address2());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_City=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_City());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Region=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Region());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Country=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Country());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Zipcode=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Zipcode());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAddress_Phone=' . $this->encodeStr($this->getBookings_Segments_ArrivalAddress_Phone());
		$str .='&';
		$str .= 'Bookings_Segments_StartTime=' . $this->encodeStr($this->getBookings_Segments_StartTime());
		$str .='&';
		$str .= 'Bookings_Segments_EndTime=' . $this->encodeStr($this->getBookings_Segments_EndTime());
		$str .='&';
		$str .= 'Bookings_Segments_VesselNumber=' . $this->encodeStr($this->getBookings_Segments_VesselNumber());
		$str .='&';
		$str .= 'Bookings_Segments_DepartureAirportCode=' . $this->encodeStr($this->getBookings_Segments_DepartureAirportCode());
		$str .='&';
		$str .= 'Bookings_Segments_ArrivalAirportCode=' . $this->encodeStr($this->getBookings_Segments_ArrivalAirportCode());
		$str .='&';
		$str .= 'Bookings_Segments_FareClass=' . $this->encodeStr($this->getBookings_Segments_FareClass());
		$str .='&';
		$str .= 'SellerUserId=' . $this->encodeStr($this->getSellerUserId());
		$str .='&';
		$str .= 'Promotions_PromotionId=' . $this->encodeStr($this->getPromotions_PromotionId());
		$str .='&';
		$str .= 'Promotions_Status=' . $this->encodeStr($this->getPromotions_Status());
		$str .='&';
		$str .= 'Promotions_FailureReason=' . $this->encodeStr($this->getPromotions_FailureReason());
		$str .='&';
		$str .= 'Promotions_Description=' . $this->encodeStr($this->getPromotions_Description());
		$str .='&';
		$str .= 'Promotions_ReferrerUserId=' . $this->encodeStr($this->getPromotions_ReferrerUserId());
		$str .='&';
		$str .= 'Promotions_Discount_PercentageOff=' . $this->encodeStr($this->getPromotions_Discount_PercentageOff());
		$str .='&';
		$str .= 'Promotions_Discount_Amount=' . $this->encodeStr($this->getPromotions_Discount_Amount());
		$str .='&';
		$str .= 'Promotions_Discount_CurrencyCode=' . $this->encodeStr($this->getPromotions_Discount_CurrencyCode());
		$str .='&';
		$str .= 'Promotions_Discount_MinimumPurchaseAmount=' . $this->encodeStr($this->getPromotions_Discount_MinimumPurchaseAmount());
		$str .='&';
		$str .= 'Promotions_CreditPoint_Amount=' . $this->encodeStr($this->getPromotions_CreditPoint_Amount());
		$str .='&';
		$str .= 'Promotions_CreditPoint_CreditPointType=' . $this->encodeStr($this->getPromotions_CreditPoint_CreditPointType());
		$str .='&';
		$str .= 'ShippingMethod=' . $this->encodeStr($this->getShippingMethod());
		$str .='&';
		$str .= 'Browser_UserAgent=' . $this->encodeStr($this->getBrowser_UserAgent());
		$str .='&';
		$str .= 'App_Os=' . $this->encodeStr($this->getApp_Os());
		$str .='&';
		$str .= 'App_OsVersion=' . $this->encodeStr($this->getApp_OsVersion());
		$str .='&';
		$str .= 'App_DeviceManufacturer=' . $this->encodeStr($this->getApp_DeviceManufacturer());
		$str .='&';
		$str .= 'App_DeviceModel=' . $this->encodeStr($this->getApp_DeviceModel());
		$str .='&';
		$str .= 'App_DeviceUniqueId=' . $this->encodeStr($this->getApp_DeviceUniqueId());
		$str .='&';
		$str .= 'App_AppName=' . $this->encodeStr($this->getApp_AppName());
		$str .='&';
		$str .= 'App_AppVersion=' . $this->encodeStr($this->getApp_AppVersion());
		$str .='&';
		$str .= 'TransactionType=' . $this->encodeStr($this->getTransactionType());
		$str .='&';
		$str .= 'TransactionStatus=' . $this->encodeStr($this->getTransactionStatus());
		$str .='&';
		$str .= 'TransferRecipientUserId=' . $this->encodeStr($this->getTransferRecipientUserId());
		$str .='&';
		$str .= 'ChargebackState=' . $this->encodeStr($this->getChargebackState());
		$str .='&';
		$str .= 'ChargebackReason=' . $this->encodeStr($this->getChargebackReason());
		$str .='&';
		$str .= 'DecisionId=' . $this->encodeStr($this->getDecisionId());
		$str .='&';
		$str .= 'Source=' . $this->encodeStr($this->getSource());
		$str .='&';
		$str .= 'Analyst=' . $this->encodeStr($this->getAnalyst());
		$str .='&';
		$str .= 'Time=' . $this->encodeStr($this->getTime());
		$str .='&';
		$str .= 'Description=' . $this->encodeStr($this->getDescription());
		$str .='&';
		$str .= 'SiftOrderID=' . $this->encodeStr($this->getSiftOrderID());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'PayType=' . $this->encodeStr($this->getPayType());

	    return $str;
	}


}
?>
