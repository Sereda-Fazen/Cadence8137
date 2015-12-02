<?php
namespace Page;

class Chronos
{
    public static $URL = '/mens-watches/chronos';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function chronos() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);

    }

}