<?php
use Step\Acceptance;
/**
 * @group checkoutCreditCard
 */
class CheckoutGuestMasterCardCest
{

    /**
     * @param Acceptance\LoginSteps $I
     * Master Card
     */

    function addToCartPageMasterCard(Step\Acceptance\ItemsSteps  $I) {
        $I->processAddToCart();

    }

    function paymentInfoMasterCard (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->creditCard();
        $I->checkMasterCard();

    }
    function orderInfoMasterCard (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
        $creditCardPageVisa->orderView();

    }





























}
