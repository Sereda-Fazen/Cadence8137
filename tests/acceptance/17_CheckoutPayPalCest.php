<?php
use Step\Acceptance;
/**
 * @group checkoutGuestPayPal
 */
class CheckoutPayPalCest
{
        /**
         * @param Acceptance\LoginSteps $I
         * Giff Card
         */
        function addToCartPage(Step\Acceptance\LoginSteps  $I) {
            $I->processAddToCart();

        }

        function paymentInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutPayPal $guestPage) {
            $guestPage->payPal();
        }

        function orderOfPayPal (Step\Acceptance\LoginSteps $I, \Page\CheckoutPayPal $guestPage) {
            $guestPage->payPalSite();
            $I->comment('Expected result: You are have your order in PayPal');

        }

























}
