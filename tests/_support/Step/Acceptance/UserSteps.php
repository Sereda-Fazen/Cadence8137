<?php
namespace Step\Acceptance;

use Exception;

class UserSteps extends \AcceptanceTester
{


    public function stepsLoginIn()
    {
        $I = $this;
        $I->amOnPage('/customer/account/login/');
        try { $I->click('.closeNewsletter'); } catch (Exception $e) {}
        $I->wait(2);
        $I->fillField('#email', 'fazen7@mail.ru');
        $I->fillField('#pass', '123456');
        $I->click('Login');

    }


    public function userProcessCheckout()

    {
        $I = $this;
        $I->amOnPage('/');
        try {
            $I->click('.closeNewsletter');
        } catch (Exception $e) {
        }
        $I->wait(2);
        $I->scrollDown(150);
        $I->click('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
        $I->waitForElement('a.close.continue');
        $I->click('a.close.cart');
        $I->comment('Expected result: Product was added to your shopping cart.');


        //checkoutShoppingCart


        $I->waitForElement('div.main', 20);
        $I->comment('Expected result: Open page shopping cart');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span > span');
        $I->waitForElementVisible('#checkout-step-billing', 20);
        $I->click('#billing-buttons-container > button.button.continueRed > span > span');

        $I->waitForElementVisible('#checkout-step-shipping_method', 20);
        $I->click('#shipping-method-buttons-container > button.button.continueRed > span > span');


        $I->waitForElementVisible('#checkout-step-payment', 20);
        $I->waitForElement('#payment-buttons-container > button.button.continueRed > span > span', 20);
        $I->click('#payment-buttons-container > button.button.continueRed > span > span');

        $I->wait(2);
        $I->acceptPopup();
    }

    public function checkGiffCard(){
        $I = $this;

        $I->click('#giftvoucher');
        $I->waitForElementVisible('#giftvoucher_code',10);
        $I->fillField('#giftvoucher_code','GIFT-ADFA-12NF0O');
        $I->click('#giftvoucher_add > span > span');
        $I->waitForElementVisible('ul.error-msg',10);

        if ($I->grabTextFrom('ul.error-msg > li') == 'Gift code "GIFT-ADFA-12NF0O" is no longer available to use.') {
            $I->click('#giftvoucher_credit');
            $I->waitForElementVisible('li.giftvoucher-discount-code');
            $I->waitForElement('ul.success-msg');
           // $I->see('Your order’s grand total is zero now. No need to add any more Gift code.','ul.success-msg');
            $I->scrollDown(200);
            $I->waitForElementVisible('#payment-buttons-container > button.button.continueRed > span > span',10);
            $I->click('#payment-buttons-container > button.button.continueRed > span > span');
            $I->waitForElement('h2.sub-title', 30);
            $I->see('Thank you for your purchase!', 'h2.sub-title');

        } else if ($I->grabTextFrom('ul.success-msg > li') == 'Your order’s grand total is zero now. No need to add any more Gift code.'){


            $I->click('#payment-buttons-container > button.button.continueRed > span > span');
            $I->scrollDown(200);
            $I->waitForElementVisible('#checkout-step-review', 40);
            $I->waitForElement('button.button.btn-checkout > span > span', 10);

            $I->click('button.button.btn-checkout > span > span');
            $I->waitForElement('h2.sub-title', 30);
            $I->see('Thank you for your purchase!', 'h2.sub-title');
        }



    }



















}










