<?php
use Step\Acceptance;


class TestCest
{
    function MyAccountAddress(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->stepsLoginIn();
        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Dostoevskogo22v', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');

        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Dostoevskogo22v', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');

        $I->waitAlertWindow();
        $I->comment('Expected result: The address has been deleted.');

        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Dostoevskogo22v', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');

    }
}
