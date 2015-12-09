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
        function orderInfoAmericanExpress (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->orderView();

        }




























}
