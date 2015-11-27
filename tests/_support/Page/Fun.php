<?php
namespace Page;

class Fun
{
    public static $URL = '/';
    public static $fun = '#nav > li:nth-of-type(7) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function fun() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$fun);
    }

}