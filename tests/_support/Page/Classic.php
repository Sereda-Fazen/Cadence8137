<?php
namespace Page;

class Classic
{

    public static $classic = '#sidenav > li:nth-of-type(1) > ul > li:first-child > a';
    public static $moveBack = 'ul.grid_full > li:nth-of-type(3) > a';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function classic() {
        $I = $this->tester;
        $I->click(self::$classic);

    }
    public function returnToCategory(){
        $I = $this;
        $I->click(self::$moveBack);
    }



}