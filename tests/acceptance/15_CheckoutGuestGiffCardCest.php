<?php
use Step\Acceptance;
/**
 * @group checkoutGuest
 */
class CheckoutGuestGiffCardCest
{
        /**
         * @param Acceptance\LoginSteps $I
         * Giff Card
         */
        function addToCartPage(Step\Acceptance\LoginSteps  $I) {
            $I->processAddToCart();

        }

        function paymentInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->paymentInformation('GIFT-ADFA-12NF0O');
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }

        function orderInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->orderView();

        }

























}
