<?php
namespace Page;

class Fun
{
    public static $fun = '#sidenav > li:nth-of-type(1) > ul > li:nth-of-type(5) > a';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function fun() {
        $I = $this->tester;
        $I->click(self::$fun);
    }

}