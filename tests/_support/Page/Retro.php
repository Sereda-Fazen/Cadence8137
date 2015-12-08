<?php
namespace Page;

class Retro
{
    public static $retro = '#sidenav > li:nth-of-type(1) > ul > li:nth-of-type(4) > a';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function retro() {
        $I = $this->tester;
        $I->click(self::$retro);
    }

}