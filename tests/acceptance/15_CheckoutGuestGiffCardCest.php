<?php
use Step\Acceptance;
/**
 * @group checkoutGuestGiffCard
 */
class CheckoutGuestGiffCardCest
{

        function addToCartPageForPayPal(Step\Acceptance\ItemsSteps  $I) {

            $I->processAddToCart();

        }

        function payPalInfo (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->paymentInformation('GIFT-ADFA-12NF0O');
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }

        function orderInfoPayPal (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->orderView();

        }

























}
