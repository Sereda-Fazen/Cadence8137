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
    function orderInfoVisa  (AcceptanceTester  $I, Helper\Acceptance $I, \Page\CheckoutGuestCreditCard $creditVisa) {
        $creditVisa->orderView();
        // $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
    }






























}
