<?php
/**
 * @group admin
 */
class AdminPanelCest
{

/*
    function createNewAdminUser (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginAdmin();
        $adminPanel->createNewAdminUser('test','test','test','test@mail.com','Corn54Goat93','!1qwerty','!1qwerty');
        $adminPanel->searchNewUserActive('test','Corn54Goat93','!1qwerty','!1qwerty');
       // $adminPanel->deleteCustomerUser('test');


    }
*/


    function loginAdmin (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginCustomer();
        $adminPanel->orders();
        $adminPanel->invoiceEmail();
        $adminPanel->creditMemo();
      //  $I->yahooMail();
    }




}
