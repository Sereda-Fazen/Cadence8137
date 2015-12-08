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

    function addToCartPageMasterCard(Step\Acceptance\LoginSteps  $I) {
        $I->processAddToCart();

    }

    function paymentInfoMasterCard (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->creditCard();
        $I->checkMasterCard();

    }
    function orderInfoMasterCard  (AcceptanceTester  $I, Helper\Acceptance $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->orderViewMasterCard();
        // $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
    }





























}
