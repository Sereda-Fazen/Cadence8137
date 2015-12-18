<?php
use Step\Acceptance;

class CheckoutGuestGiffCardCest
{

    function addToCartPageForPayPal(Step\Acceptance\ItemsSteps  $I, Page\CheckoutGuestGiffCard $guestPage) {
        $I->processAddToCart();


        $guestPage->paymentInformation('GIFT-ADFA-12NF0O');
        $I->comment('Expected result: ');
    }
























}
