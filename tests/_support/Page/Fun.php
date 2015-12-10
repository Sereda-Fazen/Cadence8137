<?php
namespace Page;

class Fun
{
    public static $fun = '#sidenav > li:nth-of-type(1) > ul > li:nth-of-type(5) > a';

    public static $moveBack = 'ul.grid_full > li:nth-of-type(3) > a';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function fun() {
        $I = $this->tester;
        $I->click(self::$fun);

    }
    public function returnToCategory(){
        $I = $this;
        $I->click(self::$moveBack);
    }

}