<?php
namespace Page;

class Chronos
{
    public static $URL = '/';
    public static $chronos = '#nav > li:nth-of-type(4) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function chronos() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$chronos);
    }

}