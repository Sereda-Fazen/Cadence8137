<?php
use Step\Acceptance;
/**
 * @group createGiftCardsAndUser
 */
class AdminCest
{

    function createNewAdminUser (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginAdmin();
        $adminPanel->createNewAdminUser('test','test','test','test@mail.com','Corn54Goat93','!1qwerty','!1qwerty');
        // $adminPanel->deleteCustomerUser('test');
    }

    function searchCreatedAdminUser (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {

        $I->loginAdmin();
        $adminPanel->searchNewUserActive('test','Corn54Goat93','!1qwerty','!1qwerty');
        // $adminPanel->deleteCustomerUser('test');
    }

    function createAddToGiftCards (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {
        $I->loginAdmin();
        $adminPanel->createAddToGiftCard('GIFT-ADFA-12NF0O','100000','test1' );
        $adminPanel->createAddToGiftCard('GIFT-ADFA-12NF0Z','10','test2' );
        $adminPanel->createAddToGiftCard('GIFT-ADFA-12NF0F','0','test3' );
    }

}
