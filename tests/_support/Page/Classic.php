<?php
namespace Page;

class Classic
{
    public static $URL = '/';
    public static $women = '#nav > li:nth-of-type(3) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function classic() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$women);
    }

}