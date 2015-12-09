<?php
use Step\Acceptance;
/**
 * @group checkoutCreditCard
 */
class CheckoutGuestVisaCest
{

    /**
     * @param Acceptance\LoginSteps $I
     * Visa
     */

    function addToCartPageVisa(Step\Acceptance\LoginSteps  $I) {
        $I->processAddToCart();
    }

    function paymentInfoVisa (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditVisa) {
        $creditVisa->creditCard();
        $I->checkVisa();

    }
    function orderInfoVisa (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
        $creditCardPageVisa->orderView();
    }






























}
