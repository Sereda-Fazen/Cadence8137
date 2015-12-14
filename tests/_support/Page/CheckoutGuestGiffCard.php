<?php
namespace Page;

class CheckoutGuestGiffCard
{

    /**
     * Payment Information
     */

    public static $checkBox = '#giftvoucher';
    public static $wait = 'dt.form-group.giftvoucher';
    public static $useGiffCard = 'dt.form-group.giftvoucher > label';
    public static $giffVoucher = '#giftvoucher_code';
    public static $giffAddClick = '#giftvoucher_add > span > span';
    public static $waitMsg = 'ul.success-msg';
    public static $clickPay = '#payment-buttons-container > button.button.continueRed > span > span';

    /**
     * Order
     */

    public static $waitOrderView = '#opc-review';
    public static $clickOrder = 'button.button.btn-checkout > span > span';

    public static $alertPop = 'There was an error processing your order.';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function paymentInformation ($numGiffCard) {
        $I = $this->tester;


        $I->click(self::$checkBox);
        $I->waitForElement(self::$giffVoucher,3);
        $I->waitForElement(self::$wait,5);
        $I->click(self::$useGiffCard);
        $I->waitForElementVisible(self::$giffVoucher, 5);
        $I->fillField(self::$giffVoucher, $numGiffCard);
        $I->click(self::$giffAddClick);
        $I->waitForElement(self::$waitMsg);
        $I->click(self::$clickPay);
        $I->waitForElementVisible(self::$waitOrderView,10);
    }

    public function orderView(){
        $I = $this->tester;

        $I->waitForElementVisible(self::$clickOrder, 8);
        $I->scrollDown(250);
        $I->click(self::$clickOrder);


    }







































}