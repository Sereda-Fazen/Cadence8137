<?php
use Step\Acceptance;
/**
 * @group checkoutUser
 */
class CheckoutUserCest
{

        function logIn(Step\Acceptance\UserSteps  $I)
        {
            $I->stepsLoginIn();
            $I->comment('Expected result: You are entering in your account ');

            $I->userProcessCheckout();
            $I->comment('Expected result: Show your addresses');

            $I->processCheckout();
        }


























}
