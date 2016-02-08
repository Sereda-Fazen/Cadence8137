<?php
use Step\Acceptance;


class TestCest
{

    function createNewAdminUser (\Step\Acceptance\AdminSteps $I, \Page\Admin $adminPanel)
    {

        $I->loginAdmin();
        $adminPanel->createNewAdminUser('test', 'test', 'test', 'test@mail.com', 'Corn54Goat93', '!1qwerty', '!1qwerty');
    }



}
