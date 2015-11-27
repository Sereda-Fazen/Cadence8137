<?php
namespace Page;

class CheckoutGuest
{
    /**
     * Add to cart
     */

    public static $URL = '/';
    public static $addToCart = 'ul.products-grid.first.odd > li.item.first > div.actions > button.button.btn-cart > span > span';
    public static $wait = 'li.success-msg';

    /**
     *  Choose Guest
     */

    public static $processOrder = 'div.totals > ul.checkout-types > li > button.button.btn-proceed-checkout.btn-checkout > span > span';
    public static $checkForGuest = '#login\3Aguest';
    public static $continue = '#onepage-guest-register-button > span > span';
    public static $waitBilling = '#checkout-step-billing';

    /**
     * Billing information
     */

    public static $billingInfo = '#checkout-step-shipping_method';

    /**
     * Shipping method
     */

    public static $shippingMethod = '#shipping-method-buttons-container > button.button > span > span';
    public static $waitShipping = '#checkout-step-payment';


    /**
     * Payment Information
     */

    public static $useGiffCard = '#giftvoucher';
    public static $giffVoucher = '#giftvoucher_code';
    public static $giffAddClick = '#giftvoucher_add > span > span';
    public static $waitMsg = '#ul.success-msg';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function checkoutAddToCart() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$addToCart);
        $I->waitForElement(self::$wait, 2);
    }

    public function checkoutChooseGuest() {
        $I = $this->tester;

        $I->click(self::$processOrder);
        $I->click(self::$checkForGuest);
        $I->click(self::$continue);
        $I->waitForElement(self::$waitBilling, 5);
    }

    public function billingInfo () {
        $I = $this->tester;

        $I->waitForElementVisible(self::$billingInfo, 5);
    }
    public function shippingMethod () {
        $I = $this->tester;

        $I->click(self::$shippingMethod);
        $I->waitForElementVisible(self::$waitShipping, 5);
    }
    public function paymentInformation ($numGiffCard) {
        $I = $this->tester;

        $I->click(self::$useGiffCard);
        $I->waitForElementVisible(self::$giffVoucher, 3);
        $I->fillField(self::$giffVoucher, $numGiffCard);
        $I->click(self::$giffAddClick);
        $I->waitForElementVisible(self::$waitMsg);
    }








}