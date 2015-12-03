<?php
use Step\Acceptance;
/**
 * @group checkoutGuest
 */
class CheckoutGuestCreditCardCest
{

        function addToCartPage(AcceptanceTester $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->checkoutAddToCart();
            $I->comment('Expected result: Product was added to your shopping cart.');
        }

        function checkoutShoppingCart(AcceptanceTester  $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->checkoutShoppingCart();
            $I->comment('Expected result: Open page shopping cart');
        }

        function checkoutOrder (Step\Acceptance\LoginSteps  $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->checkout();
            $I->checkBilling();
            $I->comment('Expected result: Go to the Shipping Method');
        }

        function shippingMethodInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage)
        {
            $creditCardPage->shippingMethod();
            $I->comment('Expected result: Go to the Payment information');
        }

        function paymentInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->creditCard();
            $I->checkCreditCard();

        }

        function orderInfo (Helper\Acceptance $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->orderView();
            $I->waitAlertAndAccept(15);
          //  $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }


























}
