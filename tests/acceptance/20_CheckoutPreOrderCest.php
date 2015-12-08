<?php
use Step\Acceptance;
/**
 * @group checkoutGuest
 */
class CheckoutPreOrderCest
{
        /**
         * @param Acceptance\LoginSteps $I
         * Pre Order
         */
        function addToCartPage(Step\Acceptance\LoginSteps  $I, \Page\CheckoutPreOrder $preOrder) {
            $preOrder->preOrder();
            $I->comment('Expected result: Pre-Order, Will Ship By "M D YEAR"');
            $preOrder->checkout();
            $I->comment('Expected result: Checkout is open');
        }
/*
        function paymentInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutPreOrder $guestPage) {
            $guestPage->paymentInformation('GIFT-ADFA-12NF0O');
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }

        function orderInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutPreOrder $guestPage) {
            $guestPage->orderView();
            $I->testAcceptPopup();
            $I->comment('Expected result: There was an error processing your order');
        }
*/
























}
