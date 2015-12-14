<?php
namespace Step\Acceptance;

class UserSteps extends \AcceptanceTester
{

    public function userProcessCheckout()
    {
        $I = $this;
        //$I->click('#sidenav > li:nth-of-type(1) > a:first-child');
        //$I->moveMouseOver('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(3) > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
        //$I->click('ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd > li:nth-of-type(3) > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
        //$I->waitForElement('div.alert-inner',2);
        //$I->click('i.fa.fa-times');
        $I->moveMouseOver('div.summary-container > span.price');
        $I->click('//*[@class="actions"]/button[2]');
        $I->waitForElement('#billing-address-select');
        $I->scrollDown(500);



    }

    public function processCheckout()
    {
        $I = $this;
        $I->click('#billing-buttons-container > button.button.continueRed > span > span');
        $I->waitForElementVisible('#opc-shipping_method', 10);
        $I->waitForElement('#checkout-step-shipping_method');
        $I->waitForElementVisible('#shipping-method-buttons-container > button.button.continueRed > span > span', 10);
        $I->click('#shipping-method-buttons-container > button.button.continueRed > span > span');
        $I->waitForElementVisible('#payment-buttons-container > button.button.continueRed > span > span', 10);
        $I->scrollDown(100);
        $I->click('#payment-buttons-container > button.button.continueRed > span > span');
        $I->wait(5);
        $I->seeInPopup('Please specify payment method.');
        $I->acceptPopup();


    }
    /*
        $I->click('#shipping-method-buttons-container > button.button.continueRed > span > span');
        $I->waitForElement('#opc-payment'
    , 2);
        $I->click('#payment-buttons-container > button.button.continueRed > span > span');
        $I->waitAlertWindow();
    */






}










