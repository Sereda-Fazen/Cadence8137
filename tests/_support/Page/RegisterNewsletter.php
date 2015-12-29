<?php
namespace Page;

use Exception;

class RegisterNewsletter
{
    public static $URL = '/customer/account/login/';

    public static $createAccount = 'Create an Account';
    public static $firsName = '#firstname';
    public static $lastName = '#lastname';
    public static $email = '#email_address';
    public static $signUpNewsletter = '#is_subscribed';
    public static $pass = '#password';
    public static $confirmation = '#confirmation';
    public static $submit = 'Submit';
    public static $logout = 'ul.links > li.last > a';

    /**
     * Newsletter Subscriptions
     */

    public static $clickNewsletter = 'ul > li:nth-of-type(9) > a';

    public static $buttonSave = 'div.buttons-set > button.button > span > span';
    public static $clickCheck = 'input.monkey-list-subscriber';
    public static $msg = 'li.success-msg';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function registerForNewsletter($fName,$lName,$email, $pass1, $pass2)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        try { $I->click('.closeNewsletter'); } catch (Exception $e) {}
        $I->wait(2);
        $I->click(self::$createAccount);
        $I->fillField(self::$firsName, $fName);
        $I->fillField(self::$lastName, $lName);
        $I->fillField(self::$email, $email);
        $I->click(self::$signUpNewsletter);
        $I->fillField(self::$pass, $pass1);
        $I->fillField(self::$confirmation, $pass2);
        $I->click(self::$submit);

        return $this;
    }

    public function accountNewsletterSave() {
        $I = $this->tester;

        $I->click(self::$clickNewsletter);
        $I->waitForElementVisible(self::$clickCheck,20);
        $I->click(self::$clickCheck);
        $I->click(self::$buttonSave);
        $I->waitForElementVisible(self::$msg);
        $I->see('You have been removed from Newsletter.',self::$msg);
    }



}