<?php
namespace Page;

class Leather
{
    public static $URL = '/';
    public static $leather = '#nav > li:nth-of-type(5) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function leather() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$leather);
    }

}