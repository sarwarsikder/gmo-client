<?php

namespace Kcsl\GmoClient\com\gmo_pg\client\input;

use Kcsl\GmoClient\com\gmo_pg\client\input\EntryTranMerpayInput;
use Kcsl\GmoClient\com\gmo_pg\client\input\ExecTranMerpayInput;

/*require_once 'com/gmo_pg/client/input/EntryTranMerpayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranMerpayInput.php';*/

/**
 * <b>メルペイ登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranMerpayInput
{

    /**
     * @var EntryTranMerpayInput メルペイ登録入力パラメータ
     */
    private $entryTranMerpayInput;
    /* @var $entryTranInput EntryTranMerpayInput */

    /**
     * @var ExecTranMerpayInput メルペイ実行入力パラメータ
     */
    private $execTranMerpayInput;
    /* @var $execTranInput ExecTranMerpayInput */

    /**
     * コンストラクタ
     *
     * @param array $params 入力パラメータ
     */
    public function __construct($params = null)
    {
        $this->entryTranMerpayInput = new EntryTranMerpayInput($params);
        $this->execTranMerpayInput = new ExecTranMerpayInput($params);
    }

    /**
     * メルペイ取引登録入力パラメータ取得
     *
     * @return EntryTranMerpayInput 取引登録時パラメータ
     */
    public function &getEntryTranMerpayInput()
    {
        return $this->entryTranMerpayInput;
    }

    /**
     * メルペイ実行入力パラメータ取得
     * @return ExecTranMerpayInput 決済実行時パラメータ
     */
    public function &getExecTranMerpayInput()
    {
        return $this->execTranMerpayInput;
    }

    /**
     * ショップID取得
     * @return string ショップID
     */
    public function getShopID()
    {
        return $this->entryTranMerpayInput->getShopID();

    }

    /**
     * ショップパスワード取得
     * @return string ショップパスワード
     */
    public function getShopPass()
    {
        return $this->entryTranMerpayInput->getShopPass();

    }

    /**
     * オーダーID取得
     * @return string オーダーID
     */
    public function getOrderID()
    {
        return $this->entryTranMerpayInput->getOrderID();

    }

    /**
     * 処理区分取得
     * @return string 処理区分
     */
    public function getJobCd()
    {
        return $this->entryTranMerpayInput->getJobCd();
    }

    /**
     * 利用金額取得
     * @return integer 利用金額
     */
    public function getAmount()
    {
        return $this->entryTranMerpayInput->getAmount();
    }

    /**
     * 税送料取得
     * @return integer 税送料
     */
    public function getTax()
    {
        return $this->entryTranMerpayInput->getTax();
    }

    /**
     * 取引ID取得
     * @return string 取引ID
     */
    public function getAccessID()
    {
        return $this->execTranMerpayInput->getAccessID();
    }

    /**
     * 取引パスワード取得
     * @return string 取引パスワード
     */
    public function getAccessPass()
    {
        return $this->execTranMerpayInput->getAccessPass();
    }

    /**
     * 個人情報利用フラグ取得
     * @return string 個人情報利用フラグ
     */
    public function getDeliveryAddressFlag()
    {
        return $this->execTranMerpayInput->getDeliveryAddressFlag();
    }

    /**
     * 商品名取得
     * @return string 商品名
     */
    public function getItemName()
    {
        return $this->execTranMerpayInput->getItemName();
    }

    /**
     * 商品説明取得
     * @return string 商品説明
     */
    public function getItemDescription()
    {
        return $this->execTranMerpayInput->getItemDescription();
    }

    /**
     * 商品画像URL1取得
     * @return string 商品画像URL1
     */
    public function getItemImageUrl1()
    {
        return $this->execTranMerpayInput->getItemImageUrl1();
    }

    /**
     * 商品画像URL2取得
     * @return string 商品画像URL2
     */
    public function getItemImageUrl2()
    {
        return $this->execTranMerpayInput->getItemImageUrl2();
    }

    /**
     * 商品画像URL3取得
     * @return string 商品画像URL3
     */
    public function getItemImageUrl3()
    {
        return $this->execTranMerpayInput->getItemImageUrl3();
    }

    /**
     * 商品画像URL4取得
     * @return string 商品画像URL4
     */
    public function getItemImageUrl4()
    {
        return $this->execTranMerpayInput->getItemImageUrl4();
    }

    /**
     * 商品画像URL5取得
     * @return string 商品画像URL5
     */
    public function getItemImageUrl5()
    {
        return $this->execTranMerpayInput->getItemImageUrl5();
    }

    /**
     * 商品画像URL6取得
     * @return string 商品画像URL6
     */
    public function getItemImageUrl6()
    {
        return $this->execTranMerpayInput->getItemImageUrl6();
    }

    /**
     * 商品画像URL7取得
     * @return string 商品画像URL7
     */
    public function getItemImageUrl7()
    {
        return $this->execTranMerpayInput->getItemImageUrl7();
    }

    /**
     * 商品画像URL8取得
     * @return string 商品画像URL8
     */
    public function getItemImageUrl8()
    {
        return $this->execTranMerpayInput->getItemImageUrl8();
    }

    /**
     * 商品画像URL9取得
     * @return string 商品画像URL9
     */
    public function getItemImageUrl9()
    {
        return $this->execTranMerpayInput->getItemImageUrl9();
    }

    /**
     * カテゴリ名取得
     * @return string カテゴリ名
     */
    public function getItemCategory()
    {
        return $this->execTranMerpayInput->getItemCategory();
    }

    /**
     * サイズ取得
     * @return string サイズ
     */
    public function getItemSize()
    {
        return $this->execTranMerpayInput->getItemSize();
    }

    /**
     * ブランド名取得
     * @return string ブランド名
     */
    public function getItemBrand()
    {
        return $this->execTranMerpayInput->getItemBrand();
    }

    /**
     * 色取得
     * @return string 色
     */
    public function getItemColor()
    {
        return $this->execTranMerpayInput->getItemColor();
    }

    /**
     * 定価取得
     * @return string 定価
     */
    public function getItemListPrice()
    {
        return $this->execTranMerpayInput->getItemListPrice();
    }

    /**
     * 購入時価格取得
     * @return string 購入時価格
     */
    public function getItemUnitPrice()
    {
        return $this->execTranMerpayInput->getItemUnitPrice();
    }

    /**
     * 購入数取得
     * @return string 購入数
     */
    public function getItemQuantity()
    {
        return $this->execTranMerpayInput->getItemQuantity();
    }

    /**
     * 製品管理コード（SKU）取得
     * @return string 製品管理コード（SKU）
     */
    public function getItemItemCode()
    {
        return $this->execTranMerpayInput->getItemItemCode();
    }

    /**
     * JANコード取得
     * @return string JANコード
     */
    public function getItemJanCode()
    {
        return $this->execTranMerpayInput->getItemJanCode();
    }

    /**
     * 商品カテゴリID取得
     * @return string 商品カテゴリID
     */
    public function getItemCategoryId()
    {
        return $this->execTranMerpayInput->getItemCategoryId();
    }

    /**
     * 商品情報一覧取得
     * @return string 商品情報一覧
     */
    public function getMultiItem()
    {
        return $this->execTranMerpayInput->getMultiItem();
    }

    /**
     * ユーザーエージェント取得
     * @return string ユーザーエージェント
     */
    public function getHttpUserAgent()
    {
        return $this->execTranMerpayInput->getHttpUserAgent();
    }

    /**
     * 加盟店自由項目1取得
     * @return string 加盟店自由項目1
     */
    public function getClientField1()
    {
        return $this->execTranMerpayInput->getClientField1();
    }

    /**
     * 加盟店自由項目2取得
     * @return string 加盟店自由項目2
     */
    public function getClientField2()
    {
        return $this->execTranMerpayInput->getClientField2();
    }

    /**
     * 加盟店自由項目3取得
     * @return string 加盟店自由項目3
     */
    public function getClientField3()
    {
        return $this->execTranMerpayInput->getClientField3();
    }

    /**
     * 税送料計算URL取得
     * @return string 税送料計算URL
     */
    public function getTaxCalcURL()
    {
        return $this->execTranMerpayInput->getTaxCalcURL();
    }

    /**
     * 決済完了後の戻り先URL取得
     * @return string 決済完了後の戻り先URL
     */
    public function getRetURL()
    {
        return $this->execTranMerpayInput->getRetURL();
    }

    /**
     * ユーザー端末情報取得
     * @return string ユーザー端末情報
     */
    public function getUserInfo()
    {
        return $this->execTranMerpayInput->getUserInfo();
    }

    /**
     * サブスクリプションタイプ取得
     * @return string サブスクリプションタイプ
     */
    public function getSubscriptionType()
    {
        return $this->execTranMerpayInput->getSubscriptionType();
    }

    /**
     * サブスクリプション名称取得
     * @return string サブスクリプション名称
     */
    public function getSubscriptionName()
    {
        return $this->execTranMerpayInput->getSubscriptionName();
    }

    /**
     * サブスクリプション説明取得
     * @return string サブスクリプション説明
     */
    public function getSubscriptionDescription()
    {
        return $this->execTranMerpayInput->getSubscriptionDescription();
    }

    /**
     * 決済用サブスクリプションID取得
     * @return string 決済用サブスクリプションID
     */
    public function getSettlementSubscriptionId()
    {
        return $this->execTranMerpayInput->getSettlementSubscriptionId();
    }

    /**
     * メルペイ取引登録入力パラメータ設定
     *
     * @param EntryTranMerpayInput entryTranMerpayInput  取引登録入力パラメータ
     */
    public function setEntryTranMerpayInput(&$entryTranMerpayInput)
    {
        $this->entryTranMerpayInput = $entryTranMerpayInput;
    }

    /**
     * メルペイ実行入力パラメータ設定
     *
     * @param ExecTranMerpayInput  execTranMerpayInput   決済実行入力パラメータ
     */
    public function setExecTranMerpayInput(&$execTranMerpayInput)
    {
        $this->execTranMerpayInput = $execTranMerpayInput;
    }

    /**
     * ショップID設定
     *
     * @param string $shopID
     */
    public function setShopID($shopID)
    {
        $this->entryTranMerpayInput->setShopID($shopID);
        $this->execTranMerpayInput->setShopID($shopID);

    }

    /**
     * ショップパスワード設定
     *
     * @param string $shopPass
     */
    public function setShopPass($shopPass)
    {
        $this->entryTranMerpayInput->setShopPass($shopPass);
        $this->execTranMerpayInput->setShopPass($shopPass);

    }

    /**
     * オーダーID設定
     *
     * @param string $orderID
     */
    public function setOrderID($orderID)
    {
        $this->entryTranMerpayInput->setOrderID($orderID);
        $this->execTranMerpayInput->setOrderID($orderID);

    }

    /**
     * 処理区分設定
     *
     * @param string $jobCd
     */
    public function setJobCd($jobCd)
    {
        $this->entryTranMerpayInput->setJobCd($jobCd);
    }

    /**
     * 利用金額設定
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->entryTranMerpayInput->setAmount($amount);
    }

    /**
     * 税送料設定
     *
     * @param integer $tax
     */
    public function setTax($tax)
    {
        $this->entryTranMerpayInput->setTax($tax);
    }

    /**
     * 取引ID設定
     *
     * @param string $accessID
     */
    public function setAccessID($accessID)
    {
        $this->execTranMerpayInput->setAccessID($accessID);
    }

    /**
     * 取引パスワード設定
     *
     * @param string $accessPass
     */
    public function setAccessPass($accessPass)
    {
        $this->execTranMerpayInput->setAccessPass($accessPass);
    }

    /**
     * 個人情報利用フラグ設定
     *
     * @param string $deliveryAddressFlag
     */
    public function setDeliveryAddressFlag($deliveryAddressFlag)
    {
        $this->execTranMerpayInput->setDeliveryAddressFlag($deliveryAddressFlag);
    }

    /**
     * 商品名設定
     *
     * @param string $itemName
     */
    public function setItemName($itemName)
    {
        $this->execTranMerpayInput->setItemName($itemName);
    }

    /**
     * 商品説明設定
     *
     * @param string $itemDescription
     */
    public function setItemDescription($itemDescription)
    {
        $this->execTranMerpayInput->setItemDescription($itemDescription);
    }

    /**
     * 商品画像URL1設定
     *
     * @param string $itemImageUrl1
     */
    public function setItemImageUrl1($itemImageUrl1)
    {
        $this->execTranMerpayInput->setItemImageUrl1($itemImageUrl1);
    }

    /**
     * 商品画像URL2設定
     *
     * @param string $itemImageUrl2
     */
    public function setItemImageUrl2($itemImageUrl2)
    {
        $this->execTranMerpayInput->setItemImageUrl2($itemImageUrl2);
    }

    /**
     * 商品画像URL3設定
     *
     * @param string $itemImageUrl3
     */
    public function setItemImageUrl3($itemImageUrl3)
    {
        $this->execTranMerpayInput->setItemImageUrl3($itemImageUrl3);
    }

    /**
     * 商品画像URL4設定
     *
     * @param string $itemImageUrl4
     */
    public function setItemImageUrl4($itemImageUrl4)
    {
        $this->execTranMerpayInput->setItemImageUrl4($itemImageUrl4);
    }

    /**
     * 商品画像URL5設定
     *
     * @param string $itemImageUrl5
     */
    public function setItemImageUrl5($itemImageUrl5)
    {
        $this->execTranMerpayInput->setItemImageUrl5($itemImageUrl5);
    }

    /**
     * 商品画像URL6設定
     *
     * @param string $itemImageUrl6
     */
    public function setItemImageUrl6($itemImageUrl6)
    {
        $this->execTranMerpayInput->setItemImageUrl6($itemImageUrl6);
    }

    /**
     * 商品画像URL7設定
     *
     * @param string $itemImageUrl7
     */
    public function setItemImageUrl7($itemImageUrl7)
    {
        $this->execTranMerpayInput->setItemImageUrl7($itemImageUrl7);
    }

    /**
     * 商品画像URL8設定
     *
     * @param string $itemImageUrl8
     */
    public function setItemImageUrl8($itemImageUrl8)
    {
        $this->execTranMerpayInput->setItemImageUrl8($itemImageUrl8);
    }

    /**
     * 商品画像URL9設定
     *
     * @param string $itemImageUrl9
     */
    public function setItemImageUrl9($itemImageUrl9)
    {
        $this->execTranMerpayInput->setItemImageUrl9($itemImageUrl9);
    }

    /**
     * カテゴリ名設定
     *
     * @param string $itemCategory
     */
    public function setItemCategory($itemCategory)
    {
        $this->execTranMerpayInput->setItemCategory($itemCategory);
    }

    /**
     * サイズ設定
     *
     * @param string $itemSize
     */
    public function setItemSize($itemSize)
    {
        $this->execTranMerpayInput->setItemSize($itemSize);
    }

    /**
     * ブランド名設定
     *
     * @param string $itemBrand
     */
    public function setItemBrand($itemBrand)
    {
        $this->execTranMerpayInput->setItemBrand($itemBrand);
    }

    /**
     * 色設定
     *
     * @param string $itemColor
     */
    public function setItemColor($itemColor)
    {
        $this->execTranMerpayInput->setItemColor($itemColor);
    }

    /**
     * 定価設定
     *
     * @param string $itemListPrice
     */
    public function setItemListPrice($itemListPrice)
    {
        $this->execTranMerpayInput->setItemListPrice($itemListPrice);
    }

    /**
     * 購入時価格設定
     *
     * @param string $itemUnitPrice
     */
    public function setItemUnitPrice($itemUnitPrice)
    {
        $this->execTranMerpayInput->setItemUnitPrice($itemUnitPrice);
    }

    /**
     * 購入数設定
     *
     * @param string $itemQuantity
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->execTranMerpayInput->setItemQuantity($itemQuantity);
    }

    /**
     * 製品管理コード（SKU）設定
     *
     * @param string $itemItemCode
     */
    public function setItemItemCode($itemItemCode)
    {
        $this->execTranMerpayInput->setItemItemCode($itemItemCode);
    }

    /**
     * JANコード設定
     *
     * @param string $itemJanCode
     */
    public function setItemJanCode($itemJanCode)
    {
        $this->execTranMerpayInput->setItemJanCode($itemJanCode);
    }

    /**
     * 商品カテゴリID設定
     *
     * @param string $itemCategoryId
     */
    public function setItemCategoryId($itemCategoryId)
    {
        $this->execTranMerpayInput->setItemCategoryId($itemCategoryId);
    }

    /**
     * 商品情報一覧設定
     *
     * @param string $multiItem
     */
    public function setMultiItem($multiItem)
    {
        $this->execTranMerpayInput->setMultiItem($multiItem);
    }

    /**
     * ユーザーエージェント設定
     *
     * @param string $httpUserAgent
     */
    public function setHttpUserAgent($httpUserAgent)
    {
        $this->execTranMerpayInput->setHttpUserAgent($httpUserAgent);
    }

    /**
     * 加盟店自由項目1設定
     *
     * @param string $clientField1
     */
    public function setClientField1($clientField1)
    {
        $this->execTranMerpayInput->setClientField1($clientField1);
    }

    /**
     * 加盟店自由項目2設定
     *
     * @param string $clientField2
     */
    public function setClientField2($clientField2)
    {
        $this->execTranMerpayInput->setClientField2($clientField2);
    }

    /**
     * 加盟店自由項目3設定
     *
     * @param string $clientField3
     */
    public function setClientField3($clientField3)
    {
        $this->execTranMerpayInput->setClientField3($clientField3);
    }

    /**
     * 税送料計算URL設定
     *
     * @param string $taxCalcURL
     */
    public function setTaxCalcURL($taxCalcURL)
    {
        $this->execTranMerpayInput->setTaxCalcURL($taxCalcURL);
    }

    /**
     * 決済完了後の戻り先URL設定
     *
     * @param string $retURL
     */
    public function setRetURL($retURL)
    {
        $this->execTranMerpayInput->setRetURL($retURL);
    }

    /**
     * ユーザー端末情報設定
     *
     * @param string $userInfo
     */
    public function setUserInfo($userInfo)
    {
        $this->execTranMerpayInput->setUserInfo($userInfo);
    }

    /**
     * サブスクリプションタイプ設定
     *
     * @param string $subscriptionType
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->execTranMerpayInput->setSubscriptionType($subscriptionType);
    }

    /**
     * サブスクリプション名称設定
     *
     * @param string $subscriptionName
     */
    public function setSubscriptionName($subscriptionName)
    {
        $this->execTranMerpayInput->setSubscriptionName($subscriptionName);
    }

    /**
     * サブスクリプション説明設定
     *
     * @param string $subscriptionDescription
     */
    public function setSubscriptionDescription($subscriptionDescription)
    {
        $this->execTranMerpayInput->setSubscriptionDescription($subscriptionDescription);
    }

    /**
     * 決済用サブスクリプションID設定
     *
     * @param string $settlementSubscriptionId
     */
    public function setSettlementSubscriptionId($settlementSubscriptionId)
    {
        $this->execTranMerpayInput->setSettlementSubscriptionId($settlementSubscriptionId);
    }

}

?>
