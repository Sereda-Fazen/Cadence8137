<?php
use \Step\Acceptance;
/**
 * @group account
 */
class ForgotPassCest {

    function forgotSuccess(AcceptanceTester $I, \Page\ForgotPass $forgotPage){
      $forgotPage->forgot('cadence.test02@gmail.com');
      $I->comment('Expected result: If there is an account associated with cadence.test02@gmail.com you will receive an email with a link to reset your password.');
    }

    function exampleForgotGMail(Step\Acceptance\LoginSteps $I,  \Page\ForgotPass $forgotPage){
        $I->gMailAuth();
        $I->remoteWindow();

    }
    function checkNewPass(Step\Acceptance\LoginSteps $I,  \Page\ForgotPass $forgotPage) {
        $I->newPass();
        $I->comment('Expected result: Your password has been updated');
    }








}
