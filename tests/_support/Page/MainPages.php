<?php
namespace Page;

class MainPages
{

    /**
     * Men
     */
    public static $URL = '/';
    public static $men = 'li.parent > a';
    public static $sell = '#sidenav > li:nth-of-type(4) > a > span:nth-of-type(2)';
    public static $msg = 'div.category-description.std > h3:nth-of-type(1) > img:nth-of-type(2)';

    /**
     * Women
     */

    public static $women = '#sidenav > li:nth-of-type(2) > a > span:nth-of-type(2)';
    public static $wait = 'ul.products-grid.category-products-grid.columngrid.columngrid-adaptive.first.last.odd';

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
    public function women(){
        $I = $this->tester;
        $I->click(self::$women);
        $I->waitForElement(self::$wait);
    }



}