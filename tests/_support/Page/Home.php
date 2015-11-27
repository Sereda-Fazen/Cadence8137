<?php
namespace Page;

class Home
{
    public static $URL = '/';

    /**
     * Header
     */
    public static $logo = 'img';
    public static $myAcc = 'My Account';
    public static $logIn = 'li.last > a';


    /**
     * Search
     */
    public static $search = 'i.fa.fa-search';
    public static $input = '#search';
    public static $list = '//*[@id="search_autocomplete"]/ul/li[6]';


    /**
     * Cart
     */
    public static $cart = 'span.icon-cart.first';
    public static $viewCart = '//*[@id="cart-listing"]/div[2]/button';



    /**
     * Main menu
     */

    public static $men = 'li.megamenu-horizontal.parent > a';

    /**
     * Slide
     */

    public static $slide = 'li.item > a > img';



    /**
     * Content
     */


    public static $link = 'div.owl-wrapper > div:first-child > div.item > div.product-content-wrapper > div.product-content > h3.product-name.single-line-name > a';
    public static $cancel = 'i.fa.fa-times';
    public static $addToCart = 'div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span';
    public static $zoom = 'div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > a.product-image > img.lazyOwl';

    /**
     * Watch links
     */

    public static $gim = 'div.giftHim.PromoHomeImg > a > img';
    public static $featured = 'div.ShopCategories > div:nth-of-type(1) > a > img';
    public static $show = 'div.ShopCategories > div:nth-of-type(1) > div.Catdetail > a.shopNow';

    public  static $winter = 'div.winterWatch.PromoHomeImg';




    /**
     * Subscription
     */

    public static $sub = 'div.std > div.BeforeFooterNewsletter > form > div.block-content > div.input-box > input.input-text.required-entry.validate-email';
    public static $clickSub = 'div.std > div.BeforeFooterNewsletter > form > div.block-content > div.input-box > button.button';
    public static $msg = 'li.success-msg';




    /**
     * Footer
     */

    public static $lastLink = 'div.footer > li.last > a';

    public static $facebook = 'span.icon.fa.fa-facebook';
    public static $instagram = 'span.icon.fa.fa-instagram';
    public static $twitter = 'span.icon.fa.fa-twitter';
    public static $pinterest = 'span.icon.fa.fa-pinterest';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function homePageHeader() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$logo);
        $I->click(self::$myAcc);
        $I->click(self::$logIn);


    }
    public function homePageSearch($search) {
        $I = $this->tester;

        $I->moveMouseOver(self::$search);
        $I->fillField(self::$input, $search);
        $I->waitForElement(self::$list, 2);
        $I->click(self::$list);
    }

    public function homeHeaderCart(){
        $I = $this->tester;

        $I->moveMouseOver(self::$cart);
        $I->click(self::$viewCart);
    }

    public function homePageMainMenu() {
        $I = $this->tester;
        $I->click(self::$men);
    }
    public function homeSlide(){
        $I = $this->tester;
        $I->click(self::$slide);
        $I->click(self::$logo);
    }
    public function homePageSubscription($email) {
        $I = $this->tester;

        $I->fillField(self::$sub, $email);
        $I->click(self::$clickSub);
        $I->waitForElement(self::$msg, 4);
    }
    public function homePageContent() {
        $I = $this->tester;

        $I->click(self::$link);
        $I->click(self::$logo);
        $I->click(self::$addToCart);
        $I->waitForElement(self::$cancel, 2);
        $I->click(self::$cancel);
        $I->click(self::$logo);
        $I->click(self::$zoom);
        $I->click(self::$logo);

    }
    public function homePageLinks()
    {
        $I = $this->tester;

        $I->click(self::$gim);
        $I->click(self::$logo);
        $I->click(self::$featured);
        $I->click(self::$logo);
        $I->click(self::$show);
        $I->click(self::$logo);
        $I->click(self::$featured);
        $I->click(self::$winter);
    }

    public function homePageFooter() {
        $I = $this->tester;

        $I->click(self::$facebook);
        $I->click(self::$instagram);
        $I->click(self::$twitter);
        $I->click(self::$pinterest);
    }


}