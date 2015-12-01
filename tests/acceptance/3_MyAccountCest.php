<?php

use Step\Acceptance;
class MyAccountCest


{

    function showUserProfile(\Step\Acceptance\LoginSteps $I)
    {
        $I->StepsLoginIn();
        $I->see('Hello, alex sereda!', 'p.hello > strong');

    }
/*
    function MyAccountInfo(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {

        $I->subForm();
        $myAccountPage->accountInfo('alex', 'sereda', 'fazen7@mail.ru', '123456', '123456', '123456');
        $I->see('The account information has been saved.', 'li.success-msg');
    }


    function MyAccountInfoInvalid(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {

        $myAccountPage->accountInfo('', '', '', '', '', '');
        $I->see('This is a required field.', '#advice-required-entry-email');
        $I->comment('Expected result: These are required fields');

    }
*/
    function MyAccountAddress(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {

        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Dostoevskogo22v', 'Kharkov', '54423', 'Kharkov');
        $I->waitForText('The address has been saved.', 10, 'li.success-msg');
        $I->comment('Expected result: The address has been saved.');
    }


        function MyAccountOrders(AcceptanceTester $I, \Page\MyAccount $MyAccountPage) {
            $MyAccountPage->accountMyOrders();
            $I->getVisibleText('You have placed no orders.');
        }

        function MyAccountBilling(AcceptanceTester $I, \Page\MyAccount $MyAccountPage) {
            $MyAccountPage->accountBilling();
            $I->see('PayPal gateway has rejected request.', 'li.error-msg');
            $I->comment('Expected result: PayPal gateway has rejected request. ');
        }

        function MyAccountRecurring(AcceptanceTester $I, \Page\MyAccount $MyAccountPage){
            $MyAccountPage->accountRecurring();
            $I->getVisibleText('There are no recurring profiles yet.');
        }

        function MyAccountApplication(AcceptanceTester $I, \Page\MyAccount $MyAccountPage){
            $MyAccountPage->accountApplication();
            $I->getVisibleText('You have no applications.');
        }

        function MyAccountDownloads(AcceptanceTester $I, \Page\MyAccount $MyAccountPage){
            $MyAccountPage->accountDownloads();
            $I->getVisibleText('You have not purchased any downloadable products yet.');
        }
/*
        function MyAccountNewsletter(AcceptanceTester $I, \Page\MyAccount $MyAccountPage){
            $MyAccountPage->accountNewsletterSave();
            $I->see('Your profile has been updated!', 'li.success-msg');
            $MyAccountPage->accountNewsletterDelete();
            $I->see('You have been removed from Newsletter.', 'li.success-msg');
            $MyAccountPage->accountReturnChecks();
        }
*/

        function MyAccountGiftCard(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) {
            $MyAccountPage->accountGiftCard();
            $I->giftCardEmpty();
            $I->getVisibleText('The maximum number of times to enter gift card code is 5!', '.error-msg');
        }
}

