<?php
namespace Page;

class Chronos
{

    public static $chronos = '#sidenav > li:nth-of-type(1) > ul > li:nth-of-type(2) > a';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function chronos() {
        $I = $this->tester;

        $I->click(self::$chronos);

    }

}