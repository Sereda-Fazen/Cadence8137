<?php
use Step\Acceptance;
/**
 * @group checkoutGuestGiffCard
 */
class CheckoutGuestGiffCardCest
{

        function addToCartPage(Step\Acceptance\ItemsSteps  $I) {
            $I->processAddToCart();

        }

        function paymentInfo (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->paymentInformation('GIFT-ADFA-12NF0O');
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }

        function orderInfo (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->orderView();

        }

























}
