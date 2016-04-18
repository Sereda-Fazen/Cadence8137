<?php
use Step\Acceptance;


class TestCest
{

    function createAddToGiftCards (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel) {
        $I->loginAdmin();
        $adminPanel->createAddToGiftCard('GIFT-ADFA-12NF0O','100000','test1' );
        $I->checkExistGiftCard();
        $adminPanel->createAddToGiftCard('GIFT-ADFA-12NF0Z','10','test2' );
        $I->checkExistGiftCard();
        $adminPanel->createAddToGiftCard('GIFT-ADFA-12NF0F','0','test3' );
        $I->checkExistGiftCard();
    }
}
