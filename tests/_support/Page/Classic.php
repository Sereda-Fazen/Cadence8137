<?php
namespace Page;

class Classic
{
    public static $URL = '/mens-watches/classics';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function classic() {
        $I = $this->tester;
        $I->amOnPage(self::$URL);

    }



}