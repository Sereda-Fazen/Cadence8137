<?php
namespace Step\Acceptance;

use Exception;

class AdminSteps extends \AcceptanceTester
{


    public function loginAdmin(){
        $I= $this;

        $I->amOnPage('/index.php/secret/');
        $I->fillField('#username', 'admin');
        $I->fillField('#login', 'Corn54Goat93');
        $I->click('input.form-button');
        $I->see('Log Out','a.link-logout');

    }


}