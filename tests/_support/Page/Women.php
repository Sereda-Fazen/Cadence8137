<?php
namespace Page;

class Women
{
    public static $URL = '/women/';

    public static $returnPage;

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function women() {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
    }
    public function returnToWomen(){
        $I = $this->$this;
        $I->click(self::returnPage);
    }

}