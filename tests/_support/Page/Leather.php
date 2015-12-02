<?php
namespace Page;

class Leather
{
    public static $URL = '/mens-watches/leather/';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function leather() {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
    }

}