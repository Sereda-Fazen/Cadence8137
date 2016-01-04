<?php
namespace Page;

use Exception;

class Register
{
    public static $URL = '/customer/account/login/';
    public static $adminPanel = '/index.php/secret/';

    public static $createAccount = 'Create an Account';
    public static $firsName = '#firstname';
    public static $lastName = '#lastname';
    public static $email = '#email_address';
    public static $signUpNewsletter = '#is_subscribed';
    public static $pass = '#password';
    public static $confirmation = '#confirmation';
    public static $submit = 'Submit';
    public static $logout = 'ul.links > li.last > a';

    protected $tester;

    /**
     * Admin panel
     */

    public static $login = '#username';
    public static $password = '#login';
    public static $enter = 'input.form-button';
    public static $text = 'a.link-logout';

    /**
     * Delete user from admin panel
     */

    public static $customers = '#nav > li:nth-of-type(4) > a > span';
    public static $manageCustomers = '#nav > li:nth-of-type(4) > ul > li:nth-of-type(1) > a > span';
    public static $waitText = 'tr.even.pointer.on-mouse > td.last';
    public static $findUser = 'alex sereda';
    public static $edit = 'Edit';
    public static $clickText = 'tbody > tr:nth-of-type(1) > td.last';
    public static $deleteCustomer = '//*[@class="scalable delete"]';
    public static $msg = 'li.success-msg';


    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function register($fName,$lName,$email, $pass1, $pass2)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$createAccount);
        $I->fillField(self::$firsName, $fName);
        $I->fillField(self::$lastName, $lName);
        $I->fillField(self::$email, $email);
        $I->fillField(self::$pass, $pass1);
        $I->fillField(self::$confirmation, $pass2);
        try { $I->click('.closeNewsletter'); } catch (Exception $e) {}
        $I->wait(2);
        $I->click(self::$submit);


        return $this;
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

    public function authPanel($admin,$password)
    {
        $I = $this->tester;
        $I->amOnPage(self::$adminPanel);
        $I->fillField(self::$login, $admin);
        $I->fillField(self::$password, $password);
        $I->click(self::$enter);
        $I->see('Log Out',self::$text);
    }

    public function deleteUser(){
        $I = $this->tester;
        $I->moveMouseOver(self::$customers);
        $I->waitForElementVisible(self::$manageCustomers);
        $I->click(self::$manageCustomers);
        $I->waitForText(self::$findUser);
        $I->click(self::$edit);
        $I->click(self::$deleteCustomer);
        $I->acceptPopup();
        $I->see('The customer has been deleted.', self::$msg);

    }


    public function logout()
    {
        $I = $this->tester;
        $I->click(self::$logout);

    }

}