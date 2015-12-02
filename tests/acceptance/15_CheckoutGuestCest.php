<?php
use Step\Acceptance;

class CheckoutGuestCest
{

    function addToCartPage(AcceptanceTester $I, \Page\CheckoutGuest $guestPage) {
        $guestPage->checkoutAddToCart();
        $I->comment('Expected result: Product was added to your shopping cart.');
    }

    function checkoutShoppingCart(AcceptanceTester  $I, \Page\CheckoutGuest $guestPage) {
        $guestPage->checkoutShoppingCart();
        $I->comment('Expected result: Open page shopping cart');
    }

        function checkFunctionalShoppingCart(AcceptanceTester  $I, \Page\CheckoutGuest $guestPage) {
            $guestPage->checkShoppingCart();
            $I->comment('Expected result: Links are working');
        }

        function CheckAddCountsInCart(Step\Acceptance\LoginSteps  $I) {
            $I->checkCountsForItem();
            $I->comment('Expected result: Count is working plus and minus');
        }

    function CheckEditAndDelete(Step\Acceptance\LoginSteps  $I, \Page\CheckoutGuest $guestPage) {
        $guestPage->checkEdit();
        $I->checkImgItem();
        $I->comment('Expected result: Zoom is working');
    }























}
