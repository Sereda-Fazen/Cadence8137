<?php
namespace Page;

class Home
{
    public static $URL = '/';

    /**
     * Header
     */
    public static $logo = 'a.logo > img';
    public static $myAcc = 'My Account';
    public static $myCheck = 'Check Gift Card';
    public static $myCart = 'My Cart';
    public static $checkout = 'Checkout';
    public static $logIn = 'ul.links > li.last';
    public static $localisation = '#select-language';
    public static $chooseLocal = '//*[@id="select-language"]/option[2]';
    public static $chooseLocalEn = '//*[@id="select-language"]/option[1]';

    /**
     * Search
     */
    public static $search1 = '#search';
    public static $searchBut = 'div.form-search > button.button > span > span';
    public static $search2 = '#search_autocomplete > ul';


    /**
     * Main menu
     */

    public static $men = 'li.first.level-top > a.level-top > span';
    public static $sale = 'li.last.level-top > a.level-top > span';

    public static $clickGiffCard = 'span > a > span';

    /**
     * Subscription
     */

    public static $sub = '#email';
    public static $clickSub = 'div.input-box > button.button';
    public static $text = 'Thanks for signing up for exclusive';
    public static $contin = 'html/body/div[1]/div/div[5]/div/div[2]/a';

    /**
     * Content
     */


    public static $link = 'ul.products-grid.first.odd > li.item.first > h2.product-name > a';
    public static $addToCart = 'div.category-products > ul:nth-of-type(2) > li.item.first > div.actions > button.button.btn-cart > span';
    public static $zoom = 'ul.products-grid.first.odd > li.item.first > div.MagicToolboxContainer > a.MagicZoom > div.MagicZoomPup';

    /**
     * Footer
     */

    public static $lastLink = 'div.footer > li.last > a';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function homePageHeader() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);

        $I->click(self::$logo);
        $I->click(self::$myAcc);
        $I->click(self::$myCheck);
        $I->click(self::$myCart);
        $I->click(self::$checkout);
        $I->click(self::$logIn);
        $I->click(self::$localisation);
        $I->click(self::$chooseLocal);
        $I->click(self::$localisation);
        $I->click(self::$chooseLocalEn);

    }
    public function homePageSearch($search1) {
        $I = $this->tester;

        $I->fillField(self::$search1, $search1);
        $I->click(self::$searchBut);
    }
    public function homePageSearch2($search2) {
        $I = $this->tester;

        $I->fillField(self::$search1, $search2);
        $I->waitForElement(self::$search2);
        $I->click(self::$search2);
    }
    public function homePageMainMenu() {
        $I = $this->tester;

        $I->click(self::$men);
        $I->click(self::$sale);
        $I->click(self::$clickGiffCard);
    }
    public function homePageSubscription($email) {
        $I = $this->tester;

        $I->fillField(self::$sub, $email);
        $I->click(self::$clickSub);
        $I->waitForText(self::$text, 4);
        $I->click(self::$contin);
    }
    public function homePageContent() {
        $I = $this->tester;


        $I->click(self::$link);
        $I->click(self::$logo);
        $I->click(self::$addToCart);
        $I->click(self::$logo);

    }
    public function homePageFooter() {
        $I = $this->tester;

        $I->click(self::$lastLink);
    }


}