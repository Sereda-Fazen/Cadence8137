<?php
use Step\Acceptance;

class CheckoutUserGiffCardCest
{

        function logIn(Step\Acceptance\UserSteps  $I)
        {
            $I->stepsLoginIn();
            $I->comment('Expected result: You are entering in your account ');

            $I->userProcessCheckout();
            $I->comment('Expected result: Show your addresses');

        }





























}
