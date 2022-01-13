<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\BaseInput;

#require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>メルペイ決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranMerpayInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 個人情報利用フラグ
	 */
	private $deliveryAddressFlag;
	/**
	 * @var string 商品名
	 */
	private $itemName;
	/**
	 * @var string 商品説明
	 */
	private $itemDescription;
	/**
	 * @var string 商品画像URL1
	 */
	private $itemImageUrl1;
	/**
	 * @var string 商品画像URL2
	 */
	private $itemImageUrl2;
	/**
	 * @var string 商品画像URL3
	 */
	private $itemImageUrl3;
	/**
	 * @var string 商品画像URL4
	 */
	private $itemImageUrl4;
	/**
	 * @var string 商品画像URL5
	 */
	private $itemImageUrl5;
	/**
	 * @var string 商品画像URL6
	 */
	private $itemImageUrl6;
	/**
	 * @var string 商品画像URL7
	 */
	private $itemImageUrl7;
	/**
	 * @var string 商品画像URL8
	 */
	private $itemImageUrl8;
	/**
	 * @var string 商品画像URL9
	 */
	private $itemImageUrl9;
	/**
	 * @var string カテゴリ名
	 */
	private $itemCategory;
	/**
	 * @var string サイズ
	 */
	private $itemSize;
	/**
	 * @var string ブランド名
	 */
	private $itemBrand;
	/**
	 * @var string 色
	 */
	private $itemColor;
	/**
	 * @var string 定価
	 */
	private $itemListPrice;
	/**
	 * @var string 購入時価格
	 */
	private $itemUnitPrice;
	/**
	 * @var string 購入数
	 */
	private $itemQuantity;
	/**
	 * @var string 製品管理コード（SKU）
	 */
	private $itemItemCode;
	/**
	 * @var string JANコード
	 */
	private $itemJanCode;
	/**
	 * @var string 商品カテゴリID
	 */
	private $itemCategoryId;
	/**
	 * @var string 商品情報一覧
	 */
	private $multiItem;
	/**
	 * @var string ユーザーエージェント
	 */
	private $httpUserAgent;
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
	 * @var string 税送料計算URL
	 */
	private $taxCalcURL;
	/**
	 * @var string 決済完了後の戻り先URL
	 */
	private $retURL;
	/**
	 * @var string ユーザー端末情報
	 */
	private $userInfo;
	/**
	 * @var string サブスクリプションタイプ
	 */
	private $subscriptionType;
	/**
	 * @var string サブスクリプション名称
	 */
	private $subscriptionName;
	/**
	 * @var string サブスクリプション説明
	 */
	private $subscriptionDescription;
	/**
	 * @var string 決済用サブスクリプションID
	 */
	private $settlementSubscriptionId;


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
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 個人情報利用フラグ取得
	 * @return string 個人情報利用フラグ
	 */
	public function getDeliveryAddressFlag() {
		return $this->deliveryAddressFlag;
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getItemName() {
		return $this->itemName;
	}
	/**
	 * 商品説明取得
	 * @return string 商品説明
	 */
	public function getItemDescription() {
		return $this->itemDescription;
	}
	/**
	 * 商品画像URL1取得
	 * @return string 商品画像URL1
	 */
	public function getItemImageUrl1() {
		return $this->itemImageUrl1;
	}
	/**
	 * 商品画像URL2取得
	 * @return string 商品画像URL2
	 */
	public function getItemImageUrl2() {
		return $this->itemImageUrl2;
	}
	/**
	 * 商品画像URL3取得
	 * @return string 商品画像URL3
	 */
	public function getItemImageUrl3() {
		return $this->itemImageUrl3;
	}
	/**
	 * 商品画像URL4取得
	 * @return string 商品画像URL4
	 */
	public function getItemImageUrl4() {
		return $this->itemImageUrl4;
	}
	/**
	 * 商品画像URL5取得
	 * @return string 商品画像URL5
	 */
	public function getItemImageUrl5() {
		return $this->itemImageUrl5;
	}
	/**
	 * 商品画像URL6取得
	 * @return string 商品画像URL6
	 */
	public function getItemImageUrl6() {
		return $this->itemImageUrl6;
	}
	/**
	 * 商品画像URL7取得
	 * @return string 商品画像URL7
	 */
	public function getItemImageUrl7() {
		return $this->itemImageUrl7;
	}
	/**
	 * 商品画像URL8取得
	 * @return string 商品画像URL8
	 */
	public function getItemImageUrl8() {
		return $this->itemImageUrl8;
	}
	/**
	 * 商品画像URL9取得
	 * @return string 商品画像URL9
	 */
	public function getItemImageUrl9() {
		return $this->itemImageUrl9;
	}
	/**
	 * カテゴリ名取得
	 * @return string カテゴリ名
	 */
	public function getItemCategory() {
		return $this->itemCategory;
	}
	/**
	 * サイズ取得
	 * @return string サイズ
	 */
	public function getItemSize() {
		return $this->itemSize;
	}
	/**
	 * ブランド名取得
	 * @return string ブランド名
	 */
	public function getItemBrand() {
		return $this->itemBrand;
	}
	/**
	 * 色取得
	 * @return string 色
	 */
	public function getItemColor() {
		return $this->itemColor;
	}
	/**
	 * 定価取得
	 * @return string 定価
	 */
	public function getItemListPrice() {
		return $this->itemListPrice;
	}
	/**
	 * 購入時価格取得
	 * @return string 購入時価格
	 */
	public function getItemUnitPrice() {
		return $this->itemUnitPrice;
	}
	/**
	 * 購入数取得
	 * @return string 購入数
	 */
	public function getItemQuantity() {
		return $this->itemQuantity;
	}
	/**
	 * 製品管理コード（SKU）取得
	 * @return string 製品管理コード（SKU）
	 */
	public function getItemItemCode() {
		return $this->itemItemCode;
	}
	/**
	 * JANコード取得
	 * @return string JANコード
	 */
	public function getItemJanCode() {
		return $this->itemJanCode;
	}
	/**
	 * 商品カテゴリID取得
	 * @return string 商品カテゴリID
	 */
	public function getItemCategoryId() {
		return $this->itemCategoryId;
	}
	/**
	 * 商品情報一覧取得
	 * @return string 商品情報一覧
	 */
	public function getMultiItem() {
		return $this->multiItem;
	}
	/**
	 * ユーザーエージェント取得
	 * @return string ユーザーエージェント
	 */
	public function getHttpUserAgent() {
		return $this->httpUserAgent;
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
	 * 税送料計算URL取得
	 * @return string 税送料計算URL
	 */
	public function getTaxCalcURL() {
		return $this->taxCalcURL;
	}
	/**
	 * 決済完了後の戻り先URL取得
	 * @return string 決済完了後の戻り先URL
	 */
	public function getRetURL() {
		return $this->retURL;
	}
	/**
	 * ユーザー端末情報取得
	 * @return string ユーザー端末情報
	 */
	public function getUserInfo() {
		return $this->userInfo;
	}
	/**
	 * サブスクリプションタイプ取得
	 * @return string サブスクリプションタイプ
	 */
	public function getSubscriptionType() {
		return $this->subscriptionType;
	}
	/**
	 * サブスクリプション名称取得
	 * @return string サブスクリプション名称
	 */
	public function getSubscriptionName() {
		return $this->subscriptionName;
	}
	/**
	 * サブスクリプション説明取得
	 * @return string サブスクリプション説明
	 */
	public function getSubscriptionDescription() {
		return $this->subscriptionDescription;
	}
	/**
	 * 決済用サブスクリプションID取得
	 * @return string 決済用サブスクリプションID
	 */
	public function getSettlementSubscriptionId() {
		return $this->settlementSubscriptionId;
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
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * 個人情報利用フラグ設定
	 *
	 * @param string $deliveryAddressFlag
	 */
	public function setDeliveryAddressFlag($deliveryAddressFlag) {
		$this->deliveryAddressFlag = $deliveryAddressFlag;
	}
	/**
	 * 商品名設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}
	/**
	 * 商品説明設定
	 *
	 * @param string $itemDescription
	 */
	public function setItemDescription($itemDescription) {
		$this->itemDescription = $itemDescription;
	}
	/**
	 * 商品画像URL1設定
	 *
	 * @param string $itemImageUrl1
	 */
	public function setItemImageUrl1($itemImageUrl1) {
		$this->itemImageUrl1 = $itemImageUrl1;
	}
	/**
	 * 商品画像URL2設定
	 *
	 * @param string $itemImageUrl2
	 */
	public function setItemImageUrl2($itemImageUrl2) {
		$this->itemImageUrl2 = $itemImageUrl2;
	}
	/**
	 * 商品画像URL3設定
	 *
	 * @param string $itemImageUrl3
	 */
	public function setItemImageUrl3($itemImageUrl3) {
		$this->itemImageUrl3 = $itemImageUrl3;
	}
	/**
	 * 商品画像URL4設定
	 *
	 * @param string $itemImageUrl4
	 */
	public function setItemImageUrl4($itemImageUrl4) {
		$this->itemImageUrl4 = $itemImageUrl4;
	}
	/**
	 * 商品画像URL5設定
	 *
	 * @param string $itemImageUrl5
	 */
	public function setItemImageUrl5($itemImageUrl5) {
		$this->itemImageUrl5 = $itemImageUrl5;
	}
	/**
	 * 商品画像URL6設定
	 *
	 * @param string $itemImageUrl6
	 */
	public function setItemImageUrl6($itemImageUrl6) {
		$this->itemImageUrl6 = $itemImageUrl6;
	}
	/**
	 * 商品画像URL7設定
	 *
	 * @param string $itemImageUrl7
	 */
	public function setItemImageUrl7($itemImageUrl7) {
		$this->itemImageUrl7 = $itemImageUrl7;
	}
	/**
	 * 商品画像URL8設定
	 *
	 * @param string $itemImageUrl8
	 */
	public function setItemImageUrl8($itemImageUrl8) {
		$this->itemImageUrl8 = $itemImageUrl8;
	}
	/**
	 * 商品画像URL9設定
	 *
	 * @param string $itemImageUrl9
	 */
	public function setItemImageUrl9($itemImageUrl9) {
		$this->itemImageUrl9 = $itemImageUrl9;
	}
	/**
	 * カテゴリ名設定
	 *
	 * @param string $itemCategory
	 */
	public function setItemCategory($itemCategory) {
		$this->itemCategory = $itemCategory;
	}
	/**
	 * サイズ設定
	 *
	 * @param string $itemSize
	 */
	public function setItemSize($itemSize) {
		$this->itemSize = $itemSize;
	}
	/**
	 * ブランド名設定
	 *
	 * @param string $itemBrand
	 */
	public function setItemBrand($itemBrand) {
		$this->itemBrand = $itemBrand;
	}
	/**
	 * 色設定
	 *
	 * @param string $itemColor
	 */
	public function setItemColor($itemColor) {
		$this->itemColor = $itemColor;
	}
	/**
	 * 定価設定
	 *
	 * @param string $itemListPrice
	 */
	public function setItemListPrice($itemListPrice) {
		$this->itemListPrice = $itemListPrice;
	}
	/**
	 * 購入時価格設定
	 *
	 * @param string $itemUnitPrice
	 */
	public function setItemUnitPrice($itemUnitPrice) {
		$this->itemUnitPrice = $itemUnitPrice;
	}
	/**
	 * 購入数設定
	 *
	 * @param string $itemQuantity
	 */
	public function setItemQuantity($itemQuantity) {
		$this->itemQuantity = $itemQuantity;
	}
	/**
	 * 製品管理コード（SKU）設定
	 *
	 * @param string $itemItemCode
	 */
	public function setItemItemCode($itemItemCode) {
		$this->itemItemCode = $itemItemCode;
	}
	/**
	 * JANコード設定
	 *
	 * @param string $itemJanCode
	 */
	public function setItemJanCode($itemJanCode) {
		$this->itemJanCode = $itemJanCode;
	}
	/**
	 * 商品カテゴリID設定
	 *
	 * @param string $itemCategoryId
	 */
	public function setItemCategoryId($itemCategoryId) {
		$this->itemCategoryId = $itemCategoryId;
	}
	/**
	 * 商品情報一覧設定
	 *
	 * @param string $multiItem
	 */
	public function setMultiItem($multiItem) {
		$this->multiItem = $multiItem;
	}
	/**
	 * ユーザーエージェント設定
	 *
	 * @param string $httpUserAgent
	 */
	public function setHttpUserAgent($httpUserAgent) {
		$this->httpUserAgent = $httpUserAgent;
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
	 * 税送料計算URL設定
	 *
	 * @param string $taxCalcURL
	 */
	public function setTaxCalcURL($taxCalcURL) {
		$this->taxCalcURL = $taxCalcURL;
	}
	/**
	 * 決済完了後の戻り先URL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->retURL = $retURL;
	}
	/**
	 * ユーザー端末情報設定
	 *
	 * @param string $userInfo
	 */
	public function setUserInfo($userInfo) {
		$this->userInfo = $userInfo;
	}
	/**
	 * サブスクリプションタイプ設定
	 *
	 * @param string $subscriptionType
	 */
	public function setSubscriptionType($subscriptionType) {
		$this->subscriptionType = $subscriptionType;
	}
	/**
	 * サブスクリプション名称設定
	 *
	 * @param string $subscriptionName
	 */
	public function setSubscriptionName($subscriptionName) {
		$this->subscriptionName = $subscriptionName;
	}
	/**
	 * サブスクリプション説明設定
	 *
	 * @param string $subscriptionDescription
	 */
	public function setSubscriptionDescription($subscriptionDescription) {
		$this->subscriptionDescription = $subscriptionDescription;
	}
	/**
	 * 決済用サブスクリプションID設定
	 *
	 * @param string $settlementSubscriptionId
	 */
	public function setSettlementSubscriptionId($settlementSubscriptionId) {
		$this->settlementSubscriptionId = $settlementSubscriptionId;
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
		$this->setAccessID($this->getStringValue($params, 'AccessID', $this->getAccessID()));
		$this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setDeliveryAddressFlag($this->getStringValue($params, 'DeliveryAddressFlag', $this->getDeliveryAddressFlag()));
		$this->setItemName($this->getStringValue($params, 'ItemName', $this->getItemName()));
		$this->setItemDescription($this->getStringValue($params, 'ItemDescription', $this->getItemDescription()));
		$this->setItemImageUrl1($this->getStringValue($params, 'ItemImageUrl1', $this->getItemImageUrl1()));
		$this->setItemImageUrl2($this->getStringValue($params, 'ItemImageUrl2', $this->getItemImageUrl2()));
		$this->setItemImageUrl3($this->getStringValue($params, 'ItemImageUrl3', $this->getItemImageUrl3()));
		$this->setItemImageUrl4($this->getStringValue($params, 'ItemImageUrl4', $this->getItemImageUrl4()));
		$this->setItemImageUrl5($this->getStringValue($params, 'ItemImageUrl5', $this->getItemImageUrl5()));
		$this->setItemImageUrl6($this->getStringValue($params, 'ItemImageUrl6', $this->getItemImageUrl6()));
		$this->setItemImageUrl7($this->getStringValue($params, 'ItemImageUrl7', $this->getItemImageUrl7()));
		$this->setItemImageUrl8($this->getStringValue($params, 'ItemImageUrl8', $this->getItemImageUrl8()));
		$this->setItemImageUrl9($this->getStringValue($params, 'ItemImageUrl9', $this->getItemImageUrl9()));
		$this->setItemCategory($this->getStringValue($params, 'ItemCategory', $this->getItemCategory()));
		$this->setItemSize($this->getStringValue($params, 'ItemSize', $this->getItemSize()));
		$this->setItemBrand($this->getStringValue($params, 'ItemBrand', $this->getItemBrand()));
		$this->setItemColor($this->getStringValue($params, 'ItemColor', $this->getItemColor()));
		$this->setItemListPrice($this->getStringValue($params, 'ItemListPrice', $this->getItemListPrice()));
		$this->setItemUnitPrice($this->getStringValue($params, 'ItemUnitPrice', $this->getItemUnitPrice()));
		$this->setItemQuantity($this->getStringValue($params, 'ItemQuantity', $this->getItemQuantity()));
		$this->setItemItemCode($this->getStringValue($params, 'ItemItemCode', $this->getItemItemCode()));
		$this->setItemJanCode($this->getStringValue($params, 'ItemJanCode', $this->getItemJanCode()));
		$this->setItemCategoryId($this->getStringValue($params, 'ItemCategoryId', $this->getItemCategoryId()));
		$this->setMultiItem($this->getStringValue($params, 'MultiItem', $this->getMultiItem()));
		$this->setHttpUserAgent($this->getStringValue($params, 'HttpUserAgent', $this->getHttpUserAgent()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
		$this->setTaxCalcURL($this->getStringValue($params, 'TaxCalcURL', $this->getTaxCalcURL()));
		$this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
		$this->setUserInfo($this->getStringValue($params, 'UserInfo', $this->getUserInfo()));
		$this->setSubscriptionType($this->getStringValue($params, 'SubscriptionType', $this->getSubscriptionType()));
		$this->setSubscriptionName($this->getStringValue($params, 'SubscriptionName', $this->getSubscriptionName()));
		$this->setSubscriptionDescription($this->getStringValue($params, 'SubscriptionDescription', $this->getSubscriptionDescription()));
		$this->setSettlementSubscriptionId($this->getStringValue($params, 'SettlementSubscriptionId', $this->getSettlementSubscriptionId()));

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
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'DeliveryAddressFlag=' . $this->encodeStr($this->getDeliveryAddressFlag());
		$str .='&';
		$str .= 'ItemName=' . $this->encodeStr($this->getItemName());
		$str .='&';
		$str .= 'ItemDescription=' . $this->encodeStr($this->getItemDescription());
		$str .='&';
		$str .= 'ItemImageUrl1=' . $this->encodeStr($this->getItemImageUrl1());
		$str .='&';
		$str .= 'ItemImageUrl2=' . $this->encodeStr($this->getItemImageUrl2());
		$str .='&';
		$str .= 'ItemImageUrl3=' . $this->encodeStr($this->getItemImageUrl3());
		$str .='&';
		$str .= 'ItemImageUrl4=' . $this->encodeStr($this->getItemImageUrl4());
		$str .='&';
		$str .= 'ItemImageUrl5=' . $this->encodeStr($this->getItemImageUrl5());
		$str .='&';
		$str .= 'ItemImageUrl6=' . $this->encodeStr($this->getItemImageUrl6());
		$str .='&';
		$str .= 'ItemImageUrl7=' . $this->encodeStr($this->getItemImageUrl7());
		$str .='&';
		$str .= 'ItemImageUrl8=' . $this->encodeStr($this->getItemImageUrl8());
		$str .='&';
		$str .= 'ItemImageUrl9=' . $this->encodeStr($this->getItemImageUrl9());
		$str .='&';
		$str .= 'ItemCategory=' . $this->encodeStr($this->getItemCategory());
		$str .='&';
		$str .= 'ItemSize=' . $this->encodeStr($this->getItemSize());
		$str .='&';
		$str .= 'ItemBrand=' . $this->encodeStr($this->getItemBrand());
		$str .='&';
		$str .= 'ItemColor=' . $this->encodeStr($this->getItemColor());
		$str .='&';
		$str .= 'ItemListPrice=' . $this->encodeStr($this->getItemListPrice());
		$str .='&';
		$str .= 'ItemUnitPrice=' . $this->encodeStr($this->getItemUnitPrice());
		$str .='&';
		$str .= 'ItemQuantity=' . $this->encodeStr($this->getItemQuantity());
		$str .='&';
		$str .= 'ItemItemCode=' . $this->encodeStr($this->getItemItemCode());
		$str .='&';
		$str .= 'ItemJanCode=' . $this->encodeStr($this->getItemJanCode());
		$str .='&';
		$str .= 'ItemCategoryId=' . $this->encodeStr($this->getItemCategoryId());
		$str .='&';
		$str .= 'MultiItem=' . $this->encodeStr($this->getMultiItem());
		$str .='&';
		$str .= 'HttpUserAgent=' . $this->encodeStr($this->getHttpUserAgent());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'TaxCalcURL=' . $this->encodeStr($this->getTaxCalcURL());
		$str .='&';
		$str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
		$str .='&';
		$str .= 'UserInfo=' . $this->encodeStr($this->getUserInfo());
		$str .='&';
		$str .= 'SubscriptionType=' . $this->encodeStr($this->getSubscriptionType());
		$str .='&';
		$str .= 'SubscriptionName=' . $this->encodeStr($this->getSubscriptionName());
		$str .='&';
		$str .= 'SubscriptionDescription=' . $this->encodeStr($this->getSubscriptionDescription());
		$str .='&';
		$str .= 'SettlementSubscriptionId=' . $this->encodeStr($this->getSettlementSubscriptionId());

	    return $str;
	}


}
?>
