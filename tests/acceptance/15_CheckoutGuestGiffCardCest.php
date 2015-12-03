<?php
use Step\Acceptance;
/**
 * @group checkoutGuest
 */
class CheckoutGuestGiffCardCest
{

        function addToCartPage(AcceptanceTester $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->checkoutAddToCart();
            $I->comment('Expected result: Product was added to your shopping cart.');
        }

        function checkoutShoppingCart(AcceptanceTester  $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->checkoutShoppingCart();
            $I->comment('Expected result: Open page shopping cart');
        }

        function checkoutOrder (Step\Acceptance\LoginSteps  $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->checkout();
            $I->checkBilling();
            $I->comment('Expected result: Go to the Shipping Method');
        }

        function shippingMethodInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestGiffCard $guestPage)
        {
            $guestPage->shippingMethod();
            $I->comment('Expected result: Go to the Payment information');
        }

        function paymentInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->paymentInformation('GIFT-ADFA-12NF0O');
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }

        function orderInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestGiffCard $guestPage) {
            $guestPage->orderView();
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }


























}
