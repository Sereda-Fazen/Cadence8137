<?php
namespace Page;

class Men
{
    public static $URL = '/';
    public static $men = 'li.parent > a';



    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function men() {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$men);
    }
    public function returnMen(){
        $I=$this->tester;
        $I->moveBack();
    }


}