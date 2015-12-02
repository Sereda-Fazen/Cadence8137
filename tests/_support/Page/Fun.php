<?php
namespace Page;

class Fun
{
    public static $URL = '/mens-watches/fun';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function fun() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
    }

}