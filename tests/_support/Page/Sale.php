<?php
namespace Page;

class Sale
{
    public static $URL = '/';
    public static $sale = 'li.last.level-top > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function sale() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$sale);
    }

}