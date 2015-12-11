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

        function addToCartPageAmericanExpress(Step\Acceptance\ItemsSteps  $I) {
            $I->processAddToCart();

        }

        function paymentInfoAmericanExpress (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->creditCard();
            $I->checkAmericanExpress();

        }
        function orderInfoAmericanExpress (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->orderView();

        }




























}
