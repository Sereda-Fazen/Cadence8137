<?php
use Step\Acceptance;
/**
 * @group checkoutCreditCard
 */
class CheckoutGuestVisaCest
{

    /**
     * Visa
     */


    function addToCartPageAmericanExpress(Step\Acceptance\ItemsSteps  $I,\Page\CheckoutGuestCreditCard $creditCardPageVisa)
    {
        $I->processAddToCart();

        $creditCardPageVisa->creditCard();
        $I->checkVisa();

        $creditCardPageVisa->orderView();
        $I->comment('Expected result: PayPal gateway has rejected request.');
    }





























}
