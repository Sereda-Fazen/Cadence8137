<?php
use Step\Acceptance;
/**
 * @group checkoutCreditCard
 */
class CheckoutGuestCreditCardCest
{
    /**
     * @param Acceptance\LoginSteps $I
     * American Express
     **/

        function addToCartPageAmericanExpress(Step\Acceptance\LoginSteps  $I) {
            $I->processAddToCart();

        }

        function paymentInfoAmericanExpress (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->creditCard();
            $I->checkAmericanExpress();

        }
        function orderInfoAmericanExpress (AcceptanceTester  $I, Helper\Acceptance $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->orderView();
           // $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }




























}
