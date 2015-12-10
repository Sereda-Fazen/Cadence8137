<?php
namespace Page;

class Women
{
    public static $URL = '/';
    public static $women = '#mega-nav > li:nth-of-type(2) > a';

    public static $returnPage = 'ul.grid_full > li:nth-of-type(2) > a';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function women() {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$women);
    }


}