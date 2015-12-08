<?php
namespace Page;

class Leather
{
    public static $leather = '#sidenav > li:nth-of-type(1) > ul > li:nth-of-type(3) > a';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function leather() {
        $I = $this->tester;
        $I->amOnPage(self::$leather);
    }

}