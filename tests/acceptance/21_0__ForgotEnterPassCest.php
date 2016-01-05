<?php
use \Step\Acceptance;
/**
 * @group enterAndDeleteNewPass
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
        $deleteMsg->deleteMsg();
        $I->comment('Expected result: Your message was deleted');
    }



}