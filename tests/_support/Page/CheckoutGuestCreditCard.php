<?php
namespace Page;

class CheckoutGuestCreditCard
{
    /**
     * Add to cart
     */

    public static $URL = '/';

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
     * Order
     */

    public static $order = 'button.button.btn-proceed-checkout.btn-checkout > span > span';
    public static $waitOrder = '#opc-login > div.step-title';



    public static $ship = '#checkout-step-shipping_method';
    public static $back = '#shipping-method-buttons-container > button.button.continueRed > span > span';
    public static $waitShipping = '#checkout-step-payment';

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

    public function checkoutAddToCart() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$addToCart);
        $I->wait(2);
        $I->click(self::$continue);
        $I->moveMouseOver(self::$cart);
        $I->waitForElement(self::$showBlock);
    }

    public function checkoutShoppingCart() {
        $I = $this->tester;

        $I->click(self::$viewInBlock);
        $I->waitForElement(self::$shopping);

    }

    public function checkout(){
        $I = $this->tester;

        $I->click(self::$order);
        $I->waitForElement(self::$waitOrder);
    }

    public function shippingMethod () {
        $I = $this->tester;

        $I->waitForElement(self::$ship);
        $I->waitForElementVisible(self::$back, 5);
        $I->click(self::$back);
        $I->waitForElement(self::$waitShipping, 3);
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
        $I->waitAlertAndCancel();

    }







































}