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
        try { $I->click('.closeNewsletter'); } catch (Exception $e) {}
        $I->wait(2);
        //$I->subForm();
        $I->scrollDown(150);
        $I->click('div.owl-wrapper > div:first-child > div.item > div.product-image-wrapper > div.actions > div.btn-cart > button.button.btn-cart.ajx-cart > span > span');
        $I->waitForElement('a.close.continue');
        $I->click('a.close.cart');
        $I->comment('Expected result: Product was added to your shopping cart.');


        //checkoutShoppingCart


        $I->waitForElement('div.main',20);
        $I->comment('Expected result: Open page shopping cart');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span > span');
        $I->waitForElement('#billing-buttons-container > button.button.continueRed > span > span',20);

        // checkout




    }

    public function processCheckout()
    {
        $I = $this;

        $I->click('#billing-buttons-container > button.button.continueRed > span > span');

        $I->waitForElement('#checkout-shipping-method-load > dl.sp-methods > dt', 40);
        $I->click('#shipping-method-buttons-container > button.button.continueRed.validation-passed > span > span');

        $I->waitForElementVisible('#checkout-step-shipping_method',30);
       // $I->click('#shipping-method-buttons-container > button.button.continueRed > span > span');



    //    $I->wait(5);
     //   $I->seeInPopup('Please specify payment method.');
     //   $I->acceptPopup();


    }







}










