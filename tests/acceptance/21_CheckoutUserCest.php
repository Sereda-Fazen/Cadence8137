<?php
use Step\Acceptance;
/**
 * @group checkoutUser
 */
class CheckoutUserCest
{

        function logIn(Step\Acceptance\LoginSteps  $I) {
            $I->stepsLoginIn();
            $I->comment('Expected result: You are entering in your account ');

        }
        function navigateToCheckout(Step\Acceptance\UserSteps  $I) {
            $I->userProcessCheckout();
            $I->comment('Expected result: Show your addresses');

        }

            function paymentDidNotChoose (Step\Acceptance\UserSteps $I) {
                $I->processCheckout();
            }
    /*
            function orderOfPayPal (Step\Acceptance\LoginSteps $I, \Page\CheckoutUser $userPage) {
                $userPage->payPalSite();
                $I->comment('Expected result: ');

            }
    */
























}
