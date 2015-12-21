<?php
namespace Page;

use Exception;

class Login
{
    public static $linkLogIn = 'a.login_click';

    public static $email = '#email';
    public static $pass = '#pass';
    public static $submit = '//*[@id ="send2"]/span';
    public static $logout = '//li[@class ="dropit-trigger"]/a';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function login($name, $password)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        try { $I->click('.closeNewsletter'); } catch (Exception $e) {}
        $I->wait(2);
        $I->fillField(self::$email, $name);
        $I->fillField(self::$pass, $password);
        $I->click(self::$submit);

        return $this;
    }
    public function logout()
    {
        $I = $this->tester;
        $I->click(self::$logout);
        $I->wait(5);

    }


}