<?php
/**
 * @group admin
 */
class AdminPanelCest
{

    function loginAdmin (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginAdmin();
        $adminPanel->orders();
        $adminPanel->invoiceEmail();
    }




}
