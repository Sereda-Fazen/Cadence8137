<?php
namespace Step\Acceptance;

class LoginSteps extends \AcceptanceTester
{


    public function deleteCookies(){
        $I= $this;
        $I->seeCookie('dev1.cadencewatch.com');
        $I->resetCookie('dev1.cadencewatch.com');
        $I->reloadPage();
    }



    public function StepsLoginIn()
    {
        $I = $this;
        $I->amOnPage('/customer/account/login/');
        $I->fillField('#email', 'fazen7@mail.ru');
        $I->fillField('#pass', '123456');
        $I->click('Login');

    }

    public function subForm(){
        $I = $this;

        $I->fillField('//*[@id="newsletter"]', 'fazen7@mail.ru');
        $I->click('//*[@id="subs"]');
    }

    /*
        public function StepsMyAccount()
        {
            $I = $this;
            $I->amOnPage('customer/account/edit/');
            $I->fillField('#firstname', 'sasha');
            $I->fillField('#middlename', 'alex');
            $I->fillField('#lastname', 'sereda');
            $I->fillField('#email', 'fazen7@mail.ru');
            $I->click('#change_password');
            $I->fillField('#current_password','123456');
            $I->fillField('#password','1234567');
            $I->fillField('#confirmation','1234567');
            $I->click('div.buttons-set > button.button > span > span');
        }
    */
    public function giftCardEmpty()
    {

        $I = $this;
        for ($c = 4; $c >= 0; $c--) {
            $card = rand();
            $I->fillField('#gift-voucher-code', $card);
            $I->click('div.text-left > button:nth-of-type(1) > span > span');
            $I->waitForText('Gift card "' . $card . '" is invalid.You have ' . $c . ' time(s) remaining to re-enter Gift Card code.', 3, '.error-msg');
        }
        $I->fillField('#gift-voucher-code', $card);
        $I->click('div.text-left > button:nth-of-type(1) > span > span');


    }

    //Header

    public function getHeaderMenu()
    {

        $I = $this;
        for ($i = 2; $i <= 5; $i++) {
            $I->click('#mega-nav > li:nth-of-type(' . $i . ') > a');
        }
        $I->click('li.home > a');
    }

    public  function invalidURL(){
        $I = $this;
        $I->amOnPage('/testWrong/');
        $I->waitForElement('h3',3);
        $I->moveBack();


    }

    public function getFooterMenu()
    {
        $I = $this;
        for ($i = 1; $i <= 3; $i++) {
            $I->scrollDown(1000);
            $I->click('div.footer-primary.footer > div:nth-of-type(1) > div.accordion.mobile-accordion > div.block-content > ul.list.bullet.separator > li:nth-of-type(' . $i . ') > a');

        }
    }
    public function getFooterMenu1()
    {
        $I = $this;
        for ($j = 1; $j <= 3; $j++) {
            $I->scrollDown(2000);
            $I->click('div.footer-primary.footer > div:nth-of-type(2) > div.accordion.mobile-accordion > div.block-content > ul.list.bullet.separator > li:nth-of-type(' . $j . ') > a');

        }


    }
    public function getFooterMenu2()
    {
        $I = $this;
        for ($k = 1; $k <= 2; $k++) {
            $I->scrollDown(1000);
            $I->click('div.footer-primary.footer > div:nth-of-type(3) > div.accordion.mobile-accordion > div.block-content > ul.list.bullet.separator > li:nth-of-type(' . $k . ') > a');

        }
    }

    public function getSecondOpen() {

        $I = $this;
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });


    }





    public function getZoom()
    {
        $I = $this;

        $rows = count($I->grabMultiple('//div/div[3]/ul'));
        for ($r = 1; $r <= $rows; $r++) {

            $cels = count($I->grabMultiple('//div/div[3]/ul[' . $r . ']/li'));
            for ($c = 1; $c <= $cels; $c++) {
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 70, 150);
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 150, 30);
                $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 30, 70);

            }
        }
    }

    public function inputBillingGuestData()
    {

        $billing = '#billing\3A ';
        $I = $this;
        $I->fillField($billing . 'firstname', 'alex');
        $I->fillField($billing . 'lastname', 'sereda');
        $I->fillField($billing . 'email', 'sa@itsvit.org');
        $I->fillField('input.input-text.required-entry.validate-length', 'Dostoevskogo street 22V');
        $I->fillField($billing . 'city', 'Kharkov');
        $I->fillField($billing . 'postcode', '1rr354');
        $I->fillField($billing . 'postcode', '61007');
        $I->click('//*[@id="billing:country_id"]/option[231]');
        $I->fillField($billing . 'region', 'Kharkov');
        $I->fillField($billing . 'telephone', '80934568798');
        $I->click($billing . 'use_for_shipping_yes');
        $I->click('#billing-buttons-container > button.button > span > span');


    }


    /*
    public function getHeaderMenu()
    {

        $I = $this;

        for ($i = 2; $i <= 9; $i++) {
            $I->click('#nav > li:nth-of-type(' . $i . ') > a.level-top > span');
            $rows = count($I->grabMultiple('//div/div[3]/ul'));
            for ($r = 1; $r <= $rows; $r++) {

                $cels = count($I->grabMultiple('//div/div[3]/ul[' . $r . ']/li'));
                for ($c = 1; $c <= $cels; $c++) {
                    $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 70, 150);
                    $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 150, 30);
                    $I->moveMouseOver('//div/div[3]/ul[' . $r . ']/li[' . $c . ']', 30, 70);

                }
            }

        }
        $I->click('li.last.level-top > a.level-top > span');
        $rows = count($I->grabMultiple('//div/div[3]/ul'));
        for ($s = 1; $s <= $rows; $s++) {

            $cels = count($I->grabMultiple('//div/div[3]/ul[' . $s . ']/li'));
            for ($c = 1; $c <= $cels; $c++) {
                $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 70, 150);
                $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 150, 30);
                $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 30, 70);
            }
        }
        $I->click('li.home > a');

        $I->click('li.first.level-top > a.level-top > span');
        $rows = count($I->grabMultiple('//div/div[3]/ul'));
        for ($s = 1; $s <= $rows; $s++) {

            $cels = count($I->grabMultiple('//div/div[3]/ul[' . $s . ']/li'));
            for ($c = 1; $c <= $cels; $c++) {
                $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 70, 150);
                $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 150, 30);
                $I->moveMouseOver('//div/div[3]/ul[' . $s . ']/li[' . $c . ']', 30, 70);
            }
        }
        $I->click('li.home > a');
    }
    */

    public function mailAuth()
    {

        $I = $this;
        $I->wait(3);
        $I->amOnUrl("http://mail.ru");
        $I->fillField(['id' => 'mailbox__login'], 'fazen7');
        $I->wait(2);
        $I->fillField(['id' => 'mailbox__password'], 'seredafazen');
        $I->wait(2);
        $I->click(['id' => 'mailbox__auth__button']);
        $I->see('fazen7@mail.ru', 'div.w-x-ph__auth__dropdown__inner');
        $I->click('Cadence Watch Company');

    }

    public function remoteWindow(){
        $I = $this;
        $I->click('Reset Password');
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });
    }

    public function newPass() {
        $I = $this;
        $I->waitForText('Reset a Password', 15, 'h1');
        $I->fillField('#password', '123456');
        $I->fillField('#confirmation', '123456');
        $I->click('Reset a Password');

    }

    //pages

    public function menLinks(){
        $I = $this;
        $I->amOnPage('/');
        $I->click('li.parent > a');
    }



    public function linksMen() {
        $I = $this;
        $countLinks = count($I->grabMultiple('//*[@id="sidenav"]/li[1]/ul/li'));
        for ($index = 1; $index < $countLinks; $index++) {
            $I->click('#sidenav > li:nth-of-type(1) > ul > li:nth-of-type('.$index.') > a');
            $I->waitForElement('div.category-products > div.toolbar > div.sorter > div.item-left > p.amount');

        }

    }

    public function allShowingItem()
    {
        $I = $this;
        $show = count($I->grabMultiple('//*[@class = "category-products"]/div[1]//a[@class="show_icon "]'));
        for ($showItem = 1; $showItem <= $show; $showItem++) {
            $I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(' . $showItem . ')');
            $I->wait(2);
            $I->waitForElement('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(3)',2);

        }


        $I->selectOption('.//select[@onchange]', 'Name');
        $I->wait(2);
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',3);

        $I->selectOption('.//select[@onchange]', 'Price: Low to High');
        $I->wait(2);
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',3);

        $I->selectOption('.//select[@onchange]', 'Price: High to Low');
        $I->wait(2);
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',3);

        $I->selectOption('.//select[@onchange]', 'Band Type');
        $I->wait(2);
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',3);

        $I->selectOption('.//select[@onchange]', 'size');
        $I->wait(2);
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',3);

        $I->click('div.category-products > div.toolbar > div.sorter > div.sort-by.item-right > a > i.fa');
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd', 4);




    }

    public function checkGridButtonsForItems ()
    {
        $I = $this;
        $I->click('a.full.right');
        $classics = count($I->grabMultiple('html/body/div[1]/div/div[2]/div/div[2]/div[1]/div[2]/ul/li'));
        for ($c = 1; $c <= $classics; $c++) {
            $I->moveMouseOver('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type('.$c.') > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
            $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type('.$c.') > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span',2);

        }
    }
    public function checkListButtonsForItems(){
        $I = $this;
        $I->click('div.toolbar-bottom > div.toolbar > div.pager > p.view-mode.item-left > a.list');
        $I->scrollDown(100);
        $I->waitForElement('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');

        $I->click('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');
        $I->waitForElement('li.product > strong');

        $I->click('ul.grid_full > li:nth-of-type(3) > a');
        $I->scrollDown(100);
        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.right-column > div.right-column-inner > div.actions > button.button.btn-cart.ajx-cart > span > span');
        $I->waitForElement('i.fa.fa-times');
        $I->click('i.fa.fa-times');

        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.right-column > div.right-column-inner > div.actions > ul.add-to-links.addto-links-icons > li.first > a.fancybox.tooltip_container > span.icon.fa.fa-search-plus');
        $I->waitForElement('a.fancybox-item.fancybox-close');
        $I->click('a.fancybox-item.fancybox-close');

        $I->scrollDown(100);
        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.product-shop-inner > div.desc.std > a.link-learn');
        $I->waitForElement('div.main');
        $I->click('ul.grid_full > li:nth-of-type(3) > a');

        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.product-shop-inner > h2.product-name > a');
        $I->waitForElement('h1');
        $I->click('ul.grid_full > li:nth-of-type(3) > a');
        $I->scrollDown(50);

        $I->click('div.category-products > div.toolbar > div.pager > p.view-mode.item-left > a.grid');
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd');

    }


    public function checkWomenListButtonsForItems(){
        $I = $this;
        $I->click('div.toolbar-bottom > div.toolbar > div.pager > p.view-mode.item-left > a.list');
        $I->scrollDown(100);
        $I->waitForElement('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');

        $I->click('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');
        $I->waitForElement('li.product > strong');

        $I->click('ul.grid_full > li:nth-of-type(2) > a');
        $I->scrollDown(100);
        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.right-column > div.right-column-inner > div.actions > button.button.btn-cart.ajx-cart > span > span');
        $I->waitForElement('i.fa.fa-times');
        $I->click('i.fa.fa-times');

        $I->scrollDown(100);
        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.right-column > div.right-column-inner > div.actions > ul.add-to-links.addto-links-icons > li.first > a.fancybox.tooltip_container > span.icon.fa.fa-search-plus');
        $I->waitForElement('a.fancybox-item.fancybox-close');
        $I->click('a.fancybox-item.fancybox-close');

        $I->scrollDown(100);
        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.product-shop-inner > div.desc.std > a.link-learn');
        $I->waitForElement('div.main');
        $I->click('ul.grid_full > li:nth-of-type(2) > a');

        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.product-shop-inner > h2.product-name > a');
        $I->waitForElement('h1');
        $I->click('ul.grid_full > li:nth-of-type(2) > a');

        $I->click('div.category-products > div.toolbar > div.pager > p.view-mode.item-left > a.grid');
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd');



    }


    public function checkForPriceItems(){
        $I = $this;
        $I->scrollDown(50);
        $I->fillField('[name="pricesliderleft"]', 10);
        $I->waitForElement('dt.block-title > strong > span',2);
        $I->fillField('[name="pricesliderright"]', 30);
        $I->waitForElement('dt.block-title > strong > span',2);
        $I->click('dt.block-title > strong > span');
        $I->waitForElement('ol > li',2);


    }

    //Product card

    public function productCart()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > a.product-image > img.lazyOwl');
        $I->waitForElement('div.main', 2);

    }

    public function checkCountsForItem(){
        $I = $this;

        for ($p = 1; $p <= 10; $p++ ) {
            $I->click('a.next.quantity');
            $I->click('button.button.btn-update > span > span');
        }
        for ($p = 10; $p > 0; $p-- ) {
            $I->click('a.prev.quantity');
        }
        $I->click('button.button.btn-update > span > span');
    }

    public function checkImgItem(){
        $I = $this;
        $countImg = count($I->grabMultiple('//*[@id="more-images-slider"]/li'));
        for ($i = 1; $i <= $countImg; $i++) {
            $I->click('#more-images-slider > li:nth-of-type('.$i.')');
            $this->waitForElement('img.gallery-image.visible',1);
        }
        $I->moveMouseOver('img.gallery-image.visible', 10,50);
        $I->waitForElement('div.zoomLens',2);
        $I->moveMouseOver('img.gallery-image.visible', 100,200);
        $I->waitForElement('div.zoomLens',2);
        $I->moveMouseOver('img.gallery-image.visible', 50,10);
        $I->waitForElement('div.zoomLens',2);
        $I->moveMouseOver('img.gallery-image.visible', 30,200);
        $I->waitForElement('div.zoomLens',2);


    }


    public function checkNewItem(){
        $I = $this;
        $I->scrollDown(1500);
        $count = count($I->grabMultiple('//*[@id="upsell"]/div[1]/div/div'));
            if ($count <= 4){
                $I->moveMouseOver('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
                $I->click('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
                $I->waitForElement('a.close.cart', 2);
                $I->click('a.close.cart');
                $I->waitForElement('div.main', 2);
                $I->deleteCookies();

            }
            else if ($count > 4){
                $I->click('div.owl-prev');
                $I->waitForElement('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > a.product-image > img.lazyOwl', 2);
                $I->click('div.owl-next');
                $I->waitForElement('div.owl-wrapper > div:nth-of-type(5) > div.item > div.product-image-wrapper > a.product-image > img.lazyOwl', 2);
                $I->moveMouseOver('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
                $I->click('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
                $I->waitForElement('a.close.cart', 2);
                $I->click('a.close.cart');
                $I->waitForElement('div.main', 2);
                $I->deleteCookies();

            }



    }
    public function testAcceptPopup() {
        $I = $this;
        $I->amOnPage('/checkout/onepage/');
        $I->click('button.button.btn-checkout > span > span');
        $I->acceptPopup();
        $I->see('OK');
    }





    public function processAddToCart(){
        $I = $this;
        $I->amOnPage('/');
        $I->click('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
        $I->waitForElement('a.close.continue', 2);
        $I->click('a.close.continue');
        $I->moveMouseOver('span.icon-cart.first');
        $I->waitForElement('div.block-cart.dropdown-menu');
        $I->comment('Expected result: Product was added to your shopping cart.');

    //checkoutShoppingCart

        $I->click('//*[@id="cart-listing"]/div[3]/button[1]');
        $I->waitForElement('div.main');
        $I->comment('Expected result: Open page shopping cart');

    // checkout

        $I->click('button.button.btn-proceed-checkout.btn-checkout > span > span');
        $I->waitForElement('#opc-login > div.step-title');


    // checkBilling

        $I->click('#onepage-guest-register-button > span > span');

        $billing = '#billing\3A ';
        $I->fillField($billing. 'firstname', 'alex');
        $I->fillField($billing. 'lastname', 'sereda');
        $I->fillField($billing. 'email', 'sa@itsvit.org');
        $I->fillField('#billing-new-address-form > fieldset > ul > li:nth-of-type(3) > div.input-box > input.input-text.required-entry', 'Dostoevskogo street 22V');
        $I->fillField($billing. 'city', 'Kharkov');
        $I->fillField($billing.'postcode', '1rr354');
        $I->fillField($billing.'postcode', '61007');
        $I->click('//*[@id="billing:country_id"]/option[231]');
        $I->fillField($billing.'region', 'Kharkov');
        $I->fillField($billing.'telephone', '80934568798');
        $I->click($billing.'use_for_shipping_yes');
        $I->click('#billing-buttons-container > button.button.continueRed > span > span');
        $I->comment('Expected result: Go to the Shipping Method');

    // shippingMethod

        $I->waitForElement('#checkout-step-shipping_method');
        $I->waitForElementVisible('#shipping-method-buttons-container > button.button.continueRed > span > span', 5);
        $I->click('#shipping-method-buttons-container > button.button.continueRed > span > span');
        $I->waitForElement('#checkout-step-payment', 3);
        $I->comment('Expected result: Go to the Payment information');


    }



    public function checkAmericanExpress(){
        $I = $this;

        $I->click('#p_method_paypal_direct');

            // Cards
            $I->click('#paypal_direct_cc_type');
            $I->click('//*[@id="paypal_direct_cc_type"]/option[2]');
            $I->fillField('#paypal_direct_cc_number', '378282246310005');
            //  month
            $I->click('#paypal_direct_expiration');
            $I->click('//*[@id="paypal_direct_expiration"]/option[2]');
            //year
            $I->click('#paypal_direct_expiration_yr');
            $I->click('//*[@id="paypal_direct_expiration_yr"]/option[3]');
            //what is this
            $I->click('a.cvv-what-is-this');
            $I->waitForElement('div.tool-tip-content > img');
            $I->click('#payment-tool-tip-close');
            $I->fillField('#paypal_direct_cc_cid', '1234');
            //continue
            $I->scrollDown(500);
            $I->click('#payment-buttons-container > button.button.continueRed > span > span');

    }

    public function checkVisa(){
        $I = $this;

        $I->click('#p_method_paypal_direct');

        // Cards
        $I->click('#paypal_direct_cc_type');
        $I->click('//*[@id="paypal_direct_cc_type"]/option[3]');
        $I->fillField('#paypal_direct_cc_number', '4012888888881881');
        //  month
        $I->click('#paypal_direct_expiration');
        $I->click('//*[@id="paypal_direct_expiration"]/option[2]');
        //year
        $I->click('#paypal_direct_expiration_yr');
        $I->click('//*[@id="paypal_direct_expiration_yr"]/option[3]');
        //what is this
        $I->click('a.cvv-what-is-this');
        $I->waitForElement('div.tool-tip-content > img');
        $I->click('#payment-tool-tip-close');
        $I->fillField('#paypal_direct_cc_cid', '123');
        //continue
        $I->scrollDown(500);
        $I->click('#payment-buttons-container > button.button.continueRed > span > span');
    }


    public function checkMasterCard()
    {
        $I = $this;

        $I->click('#p_method_paypal_direct');

        // Cards
        $I->click('#paypal_direct_cc_type');
        $I->click('//*[@id="paypal_direct_cc_type"]/option[4]');
        $I->fillField('#paypal_direct_cc_number', '5105105105105100');
        //  month
        $I->click('#paypal_direct_expiration');
        $I->click('//*[@id="paypal_direct_expiration"]/option[2]');
        //year
        $I->click('#paypal_direct_expiration_yr');
        $I->click('//*[@id="paypal_direct_expiration_yr"]/option[3]');
        //what is this
        $I->click('a.cvv-what-is-this');
        $I->waitForElement('div.tool-tip-content > img');
        $I->click('#payment-tool-tip-close');
        $I->fillField('#paypal_direct_cc_cid', '957');
        //continue
        $I->scrollDown(500);
        $I->click('#payment-buttons-container > button.button.continueRed > span > span');
    }


}









