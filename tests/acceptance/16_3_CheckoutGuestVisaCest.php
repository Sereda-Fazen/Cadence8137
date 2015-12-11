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

    function addToCartPageVisa(Step\Acceptance\ItemsSteps  $I) {
        $I->processAddToCart();
    }

    function paymentInfoVisa (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditVisa) {
        $creditVisa->creditCard();
        $I->checkVisa();

    }
    function orderInfoVisa (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
        $creditCardPageVisa->orderView();
    }






























}
