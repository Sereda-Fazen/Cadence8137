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

    public function loginCustomer(){
        $I= $this;

        $I->amOnPage('/index.php/secret/');
        $I->fillField('#username', 'test');
        $I->fillField('#login', '!1qwerty');
        $I->click('input.form-button');
        $I->see('Log Out','a.link-logout');

    }
    public function yahooMail()
    {
        $I = $this;
        $I->amOnUrl("https://mail.yahoo.com");
        $I->fillField('//*[@id="login-username"]', 'cadence_watch@yahoo.com');
        $I->fillField('//*[@id="login-passwd"]', '!1qwerty');
        $I->click('//*[@id="login-signin"]');
        $I->waitForElement('//*[@class="icon info info-real info-unread "]',5);
        $I->see('Your refund is on its way', 'span.subject.bold');
        $I->click('span.subject.bold');
        $I->waitForText('Your Credit Memo');
        $I->see('alex sereda', 'tbody > tr:nth-of-type(4) > td > table:nth-of-type(1) > tbody > tr > td:nth-of-type(1)');
        $I->click('#btn-delete > span.icon-text');

    }



}