<?php
namespace Page;

class Classic
{
    public static $URL = '/mens-watches/classics';
    public static $plus = 'a.full.right';



    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function classic() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$plus);
    }

}