<?php
use \Step\Acceptance;
/**
 * @group account
 */
class ForgotPassCest {

    function forgotSuccess(Step\Acceptance\LoginSteps $I, \Page\ForgotPass $forgotPage)
    {
        $forgotPage->forgot('cadence_watch@yahoo.com');
        $I->comment('Expected result: If there is an account associated with cadence_watch@yahoo.com you will receive an email with a link to reset your password.');
    }
    function enterNewPass (Step\Acceptance\LoginSteps $I)
    {
        $I->gMailAuth();
        $I->comment('Expected result: Password Reset Confirmation');
        $I->remoteWindow();
        $I->newPass();
    }
/*
    function deleteOldMsg(Step\Acceptance\LoginSteps $I, Page\ForgotPass $deleteMsg)
    {
        $deleteMsg->deleteMsg('cadence_watch@yahoo.com', '!1qwerty');
        $I->comment('Expected result: Your message was deleted');
    }
*/
}