<?php
use Step\Acceptance;

/**
 * @group test
 */

class TestCest
{

    function registerSuccess(\Page\Register $registerPage, \Step\Acceptance\LoginSteps $I)
    {
        $registerPage->register('alex', 'sereda', 'cadence_watch@yahoo.com', '123456', '123456');
        $I->checkExistUser();
        $registerPage->logout();
    }
}
