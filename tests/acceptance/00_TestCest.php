<?php
use Step\Acceptance;

/**
 * @group test
 */

class TestCest
{

    function checkIfLittleMoneyOnGiffCard(Step\Acceptance\ItemsSteps  $I, Page\CheckoutGuestGiffCard $guestPage) {
        $I->processAddToCart();

        $guestPage->paymentInformation('GIFT-ADFA-12NF0Z');
        $I->comment('Expected result: Prevent this page from creating additional dialogs');

    }
}
