namespace GmoPG\com\gmo_pg\client\output;

use GmoPG\com\gmo_pg\client\output\BaseOutput;

/*require_once('com/gmo_pg/client/output/BaseOutput.php');*/
/**
 * <b>エポスかんたん決済金額変更　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EpospayChangeOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var integer 変更後利用金額 
	 */
	private $changeAmount;
	/**
	 * @var integer 変更後税送料
	 */
	private $changeTax;


	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params  出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
            return;
        }

        // マップの展開
		$this->setOrderID($params->get('OrderID'));
		$this->setStatus($params->get('Status'));
		$this->setChangeAmount($params->get('ChangeAmount'));
		$this->setChangeTax($params->get('ChangeTax'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 変更後利用金額 取得
	 * @return integer 変更後利用金額 
	 */
	public function getChangeAmount() {
		return $this->changeAmount;
	}
	/**
	 * 変更後税送料取得
	 * @return integer 変更後税送料
	 */
	public function getChangeTax() {
		return $this->changeTax;
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
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 変更後利用金額 設定
	 *
	 * @param integer $changeAmount
	 */
	public function setChangeAmount($changeAmount) {
		$this->changeAmount = $changeAmount;
	}
	/**
	 * 変更後税送料設定
	 *
	 * @param integer $changeTax
	 */
	public function setChangeTax($changeTax) {
		$this->changeTax = $changeTax;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'ChangeAmount=' . $this->encodeStr($this->getChangeAmount());
		$str .='&';
		$str .= 'ChangeTax=' . $this->encodeStr($this->getChangeTax());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
