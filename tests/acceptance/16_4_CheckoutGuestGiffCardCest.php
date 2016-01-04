<?php
use Step\Acceptance;
/**
 * @group checkoutCreditCard
 */
class CheckoutGuestGiffCardCest
{

    function checkIfLittleMoneyOnGiffCard(Step\Acceptance\ItemsSteps  $I, Page\CheckoutGuestGiffCard $guestPage) {
        $I->processAddToCart();

        $guestPage->paymentInformation('GIFT-ADFA-12NF0A');
        $I->comment('Expected result: Prevent this page from creating additional dialogs');

    }
























}
