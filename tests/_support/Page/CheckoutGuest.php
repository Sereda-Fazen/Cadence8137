<?php
namespace Page;

class CheckoutGuest
{
    /**
     * Add to cart
     */

    public static $URL = '/';
    public static $page = '/checkout/cart/';

    public static $addToCart = 'div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span';
    public static $cart = 'span.icon-cart.first';
    public static $continue = 'a.close.continue';
    public static $showBlock = 'div.block-cart.dropdown-menu';



    /**
     *  Shopping cart
     */

    public static $viewInBlock = '//*[@id="cart-listing"]/div[3]/button[1]';
    public static $shopping = 'div.main';
    public static $returnShoppingCart = '/checkout/cart/';

    public static $waitBilling = '#checkout-step-billing';

    /**
     * Shopping functional links
     */

    public static $clickImg = 'tr.first.last.odd > td:nth-of-type(1) > a.product-image > img';
    public static $clickName = 'h2.product-name > a';

    /**
     * Shopping edit delete
     */

    public static $clickEdit = 'td.last > a.btn-edit';

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
        $I->click(self::$continue);
        $I->moveMouseOver(self::$cart);
        $I->waitForElement(self::$showBlock);
    }
    public function checkoutShoppingCart() {
        $I = $this->tester;

        $I->click(self::$viewInBlock);
        $I->waitForElement(self::$shopping);
       // $I->waitForElement(self::$showCart);
    }

    public function checkShoppingCart() {
        $I = $this->tester;

        $I->click(self::$clickImg);
        $I->moveBack();
        $I->click(self::$clickName);
        $I->moveBack();
    }

    public function checkEdit(){
        $I = $this->tester;

        $I->click(self::$clickEdit);


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