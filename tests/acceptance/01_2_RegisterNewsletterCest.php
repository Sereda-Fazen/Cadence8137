<?php

class RegisterNewsletterCest
{


    function registerNewsletter(AcceptanceTester $I, \Page\RegisterNewsletter $activeAccount)
    {
        $activeAccount->registerForNewsletter('alex', 'sereda', 'cadence_watch@yahoo.com', '123456', '123456');
        $I->see('Thank you for registering with The Cadence Watch Company.', 'li.success-msg');
        $I->comment('You are registering to Cadence Watch Company.');

        $activeAccount->activeNewAccount();
        $I->comment('Expected result: Your message was deleted');
    }





}
