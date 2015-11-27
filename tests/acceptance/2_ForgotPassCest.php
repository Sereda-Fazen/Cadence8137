<?php
use \Step\Acceptance;

class ForgotPassCest {

    function forgotSuccess(AcceptanceTester $I, \Page\ForgotPass $forgotPage){
        $forgotPage->forgot('fazen7@mail.ru');
        $I->see('If there is an account associated with fazen7@mail.ru you will receive an email with a link to reset your password.', 'li.success-msg');
        $I->comment('Expected result: If there is an account associated with fazen7@mail.ru you will receive an email with a link to reset your password.');
    }

    function exampleForgotMailRu(Step\Acceptance\LoginSteps $I,  \Page\ForgotPass $forgotPage){
        $I->mailAuth();
        $I->remoteWindow();

    }

    function checkNewPass(Step\Acceptance\LoginSteps $I,  \Page\ForgotPass $forgotPage) {
        $I->newPass();
        $I->see('Your password has been updated.', 'li.success-msg');
        $I->comment('Expected result: Your password has been updated');
    }








}
