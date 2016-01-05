<?php
use \Step\Acceptance;
/**
 * @group account
 */
class EnterPassCest {

    function enterNewPass (Step\Acceptance\LoginSteps $I)
    {
        $I->gMailAuth();
        $I->comment('Expected result: Password Reset Confirmation');
       // $I->remoteWindow();
       // $I->newPass();
       // $I->comment('Expected result: Your password has been updated');
    }

    function deleteOldMsg(Step\Acceptance\LoginSteps $I, Page\ForgotPass $deleteMsg){
        $deleteMsg->deleteMsg('cadence_watch@yahoo.com', '!1qwerty');
        $I->comment('Expected result: Your message was deleted');
    }



}