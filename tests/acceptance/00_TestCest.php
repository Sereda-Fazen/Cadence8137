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

    function checkOrderIsComplete(\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $I->checkOrder();
        $adminPanel->orderComplete();
    }

    function checkGiftCardForUser2(Step\Acceptance\UserSteps  $I)
    {
        $I->stepsLoginIn();
        $I->comment('Expected result: You are entering in your account ');

        $I->userProcessCheckout();
        $I->comment('Expected result: Show your addresses');

        $I->checkGiffCard();
        $I->comment('Expected result: Showing 1 products which in processing');
    }

    function checkCreditMemo (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $I->checkOrder();
        $adminPanel->checkCreditMemo();
    }


    function checkGiftCardForUser3(Step\Acceptance\UserSteps  $I)
    {
        $I->stepsLoginIn();
        $I->comment('Expected result: You are entering in your account ');

        $I->userProcessCheckout();
        $I->comment('Expected result: Show your addresses');

        $I->checkGiffCard();
        $I->comment('Expected result: Showing 1 products which in processing');
    }

    function checkShipment (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $I->checkOrder();
        $adminPanel->checkShipment('123456');
    }

    function checkExportReport (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $adminPanel->checkExportReport();
    }
}
