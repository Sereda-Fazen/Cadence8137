<?php
use Step\Acceptance;


class TestCest
{

    function MyAccountGiftCard(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->stepsLoginIn();
        $MyAccountPage->accountGiftCard();
        $I->giftCardEmpty();
        $I->getVisibleText('The maximum number of times to enter gift card code is 5!', '.error-msg');
        $I->logOut();

    }

}
