<?php
namespace Page;

class LastChance
{
    public static $URL = '/';
    public static $lastChance = '#nav > li:nth-of-type(8) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function lastChance() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$lastChance);
    }

}