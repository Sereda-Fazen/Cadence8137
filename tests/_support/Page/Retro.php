<?php
namespace Page;

class Retro
{
    public static $URL = '/';
    public static $retro = '#nav > li:nth-of-type(6) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function retro() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$retro);
    }

}