<?php
namespace Page;

class Men
{
    public static $URL = '/';
    public static $men = 'li.megamenu-horizontal.parent > a';
    public static $sell = '#sidenav > li:nth-of-type(1) > ul > li:nth-of-type(7) > a';
    public static $msg = 'li.note-msg';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function men()
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$men);
    }
    public function sale()
    {
        $I = $this->tester;
        $I->click(self::$sell);
        $I->waitForElement(self::$msg);
    }



}