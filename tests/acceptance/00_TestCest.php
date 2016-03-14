<?php
use Step\Acceptance;


class TestCest
{

    function checkGiftCardForUser(Step\Acceptance\UserSteps  $I)
    {
        $I->stepsLoginIn();
        $I->comment('Expected result: You are entering in your account ');

        $I->userProcessCheckout();
        $I->comment('Expected result: Show your addresses');

        $I->checkGiffCard();
        $I->comment('Expected result: Showing 1 products which in processing');
    }
}
