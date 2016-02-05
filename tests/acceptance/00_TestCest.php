<?php
use Step\Acceptance;
/**
 * @group main
 */

class TestCest
{

    function checkExportReport (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $adminPanel->checkExportReport();
    }



}
