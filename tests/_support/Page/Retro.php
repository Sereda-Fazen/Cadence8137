<?php
namespace Page;

class Retro
{
    public static $URL = '/mens-watches/retro';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function retro() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
    }

}