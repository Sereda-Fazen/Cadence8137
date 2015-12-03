<?php
namespace Page;

class CheckoutGuestCreditCard
{

    /**
     * Payment Information
     */

    public static $creditCard = 'dl.sp-methods > dl.sp-methods';


    /**
     * Order
     */

    public static $waitOrderView = '#opc-review';
    public static $clickOrder = 'button.button.btn-checkout > span > span';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function creditCard(){
        $I = $this->tester;

        $I->waitForElementVisible(self::$creditCard,5);
    }
    public function orderView(){
        $I = $this->tester;

        $I->waitForElementVisible(self::$clickOrder, 20);
        $I->scrollDown(250);
        $I->click(self::$clickOrder);

    }







































}