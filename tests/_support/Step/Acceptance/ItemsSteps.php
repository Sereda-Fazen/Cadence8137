<?php
namespace Step\Acceptance;

class ItemsSteps extends \AcceptanceTester
{





    public function linksMen() {
        $I = $this;
        $countLinks = count($I->grabMultiple('//*[@id="sidenav"]/li[1]/ul/li'));
        for ($index = 1; $index < $countLinks; $index++) {
            $I->click('#sidenav > li:nth-of-type(1) > ul > li:nth-of-type('.$index.') > a');
            $I->waitForElement('div.category-products > div.toolbar > div.sorter > div.item-left > p.amount');

        }

    }
/*
    public function allShowingItem()
    {
        $I = $this;
        $show = count($I->grabMultiple('//*[@class = "category-products"]/div[1]//a[@class="show_icon"]'));
        for ($showItem = 1; $showItem <= $show; $showItem++) {
            $I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(' . $showItem . ')');
            $I->waitForElement('div.category-products > div.toolbar > div.sorter > div.item-left > p.amount', 2);

        }

    }
*/
    public function allShowingItem()
    {
        $I = $this;
        $I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(1)');
        if ($I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(1)') == true) {
            $I->waitForJS(3);
            $I->waitForElement('div.category-products > div.toolbar > div.pager > div.pages');
        }
        if ($I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(2)') == true) {

            $I->waitForElement('div.category-products > div.toolbar > div.pager > div.pages');
        }
        if ($I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(3)') == true) {

            $I->waitForElement('div.category-products > div.toolbar > div.pager > div.pages');
        }
        if ($I->click('div.category-products > div.toolbar > div.sorter > div.item-left > div.limiter > a:nth-of-type(4)') == true) {

            $I->waitForElementNotVisible('div.category-products > div.toolbar > div.pager > div.pages');
        }
    }



    /*
    public function checkSortBy()
    {
        $I = $this;

        $I->selectOption('.//select[@onchange]', 'Price: Low to High');
        $I->waitForAjax(5);

        $I->selectOption('.//select[@onchange]', 'Name');
        $I->waitForElement('', 3);

        $I->selectOption('.//select[@onchange]', 'Price: High to Low');
        $I->waitForAjax(5);

        $I->selectOption('.//select[@onchange]', 'Band Type');
        $I->waitForAjax(5);


        $I->selectOption('.//select[@onchange]', 'size');
        $I->waitForAjax(5);

        $I->click('div.category-products > div.toolbar > div.sorter > div.sort-by.item-right > a > i.fa');
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd', 4);
    }
*/





    public function checkGridButtonsForItems ()
    {
        $I = $this;
        $classics = count($I->grabMultiple('html/body/div[1]/div/div[2]/div/div[2]/div[1]/div[2]/ul/li'));
        for ($c = 1; $c <= $classics; $c++) {
            $I->moveMouseOver('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type('.$c.') > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
            $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type('.$c.') > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span',2);

        }

    }
    public function clickOnImg() {
        $I = $this;

        $I->click('div.toolbar-bottom > div.toolbar > div.pager > p.view-mode.item-left > a.list');
        $I->scrollDown(100);
        $I->waitForElement('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');

        $I->click('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');
        $I->waitForElement('li.product > strong');
        $I->click('ul.grid_full > li:nth-of-type(2) > a');
        $I->waitForElement('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',2);
    }
    public function clickOnImgCat() {
        $I = $this;

        $I->click('div.toolbar-bottom > div.toolbar > div.pager > p.view-mode.item-left > a.list');
        $I->scrollDown(100);
        $I->waitForElement('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');

        $I->click('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img');
        $I->waitForElement('li.product > strong');
        $I->click('ul.grid_full > li:nth-of-type(3) > a');
        $I->waitForElement('#products-list > li:nth-of-type(1) > div.product-image-wrapper > a.product-image > img',2);
    }




    public function clickAddToCart() {
        $I = $this;

        $I->scrollDown(50);
        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.right-column > div.right-column-inner > div.actions > button.button.btn-cart.ajx-cart > span > span');
        $I->waitForElement('i.fa.fa-times');
        $I->click('i.fa.fa-times');
    }
    public function clickQuickView() {
        $I = $this;

        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.right-column > div.right-column-inner > div.actions > ul.add-to-links.addto-links-icons > li.first > a.fancybox.tooltip_container > span.icon.fa.fa-search-plus');
        $I->waitForElement('a.fancybox-item.fancybox-close');
        $I->click('a.fancybox-item.fancybox-close');
        $I->scrollDown(50);
    }

    public function clickLearnMore() {
        $I = $this;

        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.product-shop-inner > div.desc.std > a.link-learn');
        $I->waitForElement('div.main');
       // $I->click('ul.grid_full > li:nth-of-type(3) > a');
        $I->moveBack();
    }

    public function clickReturnCategory() {
        $I = $this;
        $I->click('ul.grid_full > li:nth-of-type(3) > a');
        $I->scrollDown(50);
    }

    public function clickNameItem() {
        $I = $this;

        $I->click('#products-list > li:nth-of-type(1) > div.product-shop > div.product-shop-inner > h2.product-name > a');
        $I->waitForElement('h1');
        $I->moveBack();
        //$I->click('ul.grid_full > li:nth-of-type(3) > a');
        $I->scrollDown(50);

    }
    public function clickGrid() {
        $I = $this;

        $I->click('div.category-products > div.toolbar > div.pager > p.view-mode.item-left > a.grid');
        $I->waitForElement('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd');

    }




/*
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
*/





    public function checkForPriceItems(){
        $I = $this;
        $I->scrollDown(50);
        $I->fillField('[name="pricesliderleft"]', 10);
        $I->waitForElement('dt.block-title > strong > span',2);
        $I->fillField('[name="pricesliderright"]', 30);
        $I->waitForElement('dt.block-title > strong > span',2);
        $I->click('dt.block-title > strong > span');
        $I->scrollDown(-100);
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
            $I->click('tr.first.odd > td:nth-of-type(4) > div.quantity_counter > a.next.quantity');
            $I->click('button.button.btn-update > span > span');
            $I->click('tr.first.odd > td:nth-of-type(4) > div.quantity_counter > a.prev.quantity');
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


            }



    }
    public function testAcceptPopup() {
        $I = $this;
        $I->amOnPage('/checkout/onepage/');
        $I->click('button.button.btn-checkout > span > span');
        $I->acceptPopup();
        $I->see('OK');
    }



    //GUEST

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

    public function checkOnValidationCreditCard(){
        $I = $this;





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









