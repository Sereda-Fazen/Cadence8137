<?php
use Step\Acceptance;


class TestCest
{

    function checkOrderIsComplete(\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $I->checkOrder();
        $adminPanel->orderComplete();
    }
}
