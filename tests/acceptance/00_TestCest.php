<?php
use Step\Acceptance;

/**
 * @group test
 */

class TestCest
{

  
    function addToCartPageAmericanExpress(Step\Acceptance\ItemsSteps  $I,\Page\CheckoutGuestCreditCard $creditCardPageVisa)
    {
        $I->processAddToCart();

        $creditCardPageVisa->creditCard();
        $I->checkAmericanExpress();

        $creditCardPageVisa->ordered();
        $I->comment('Expected result: PayPal gateway has rejected request.');
    }
}
