<?php
namespace Page;

use Exception;

class RegisterNewsletter
{
    public static $URL = '/customer/account/login/';
    public static $URL2 = 'https://mail.yahoo.com';

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
     * Mail
     */

    public static $email2 = '//*[@id="login-username"]';
    public static $pass2 = '//*[@id="login-passwd"]';
    public static $enter = '//*[@id="login-signin"]';
    public static $waitMsg = '//*[@class="icon info info-real info-unread "]';
    public static $waitMsg2 = 'div.name.first';
    public static $clickMsg = 'div.cbox > input';
    public static $clickNewUser = '#btn-delete > span.icon-text';
    public static $msgRemove = '//p[@class="empty-folder-footer"]';
    public static $text = 'My Account';

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

    public function activeUserThroughMail($mail, $pasw)
    {
        $I = $this->tester;

        $I->amOnUrl(self::$URL2);
        $I->fillField(self::$email2, $mail);
        $I->fillField(self::$pass2, $pasw);
        $I->click(self::$enter);
        $I->waitForElement(self::$waitMsg2);
        $I->click(self::$waitMsg2);
        $I->waitForText(self::$text,30);
        $I->click(self::$text);



    }


    public function accountNewsletterSave() {
        $I = $this->tester;

        $I->click(self::$clickNewsletter);
        $I->waitForElementVisible(self::$clickCheck,20);
        $I->click(self::$clickCheck);
        $I->click(self::$buttonSave);
        $I->see('You have been removed from Newsletter.',self::$msg);
    }


    public function activeNewAccount(){
        $I = $this->tester;

        $I->click(self::$clickNewsletter);
       // $I->waitForElementVisible(self::$clickCheck,20);
        //$I->click(self::$clickCheck);
    }





}