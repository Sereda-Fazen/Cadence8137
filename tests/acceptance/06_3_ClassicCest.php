<?php
use Step\Acceptance;
/**
 * @group category
 */
class ClassicCest
{

    function classicHeaderContent(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage)
    {
        $I->menLinks();
        $classicPage->classic();
        $I->allShowingItem();
        $I->comment('Expected result: Showing products and check select options');
    }

    /*
            function classicSelect(Step\Acceptance\LoginSteps $I) {
                $I->checkSortBy();
                $I->comment('Expected result: Sort is working');
            }
    */
    function classicPageCheckGrid(Step\Acceptance\ItemsSteps $I)
    {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');
    }

    function classicPageClickOnImg(Step\Acceptance\ItemsSteps $I, \Page\Classic $classicPage)
    {
        $I->clickOnImgCat();
        $I->comment('Expected result: Navigate to product card ');

    }

    function classicPageAddToCart(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickAddToCart();
        $I->comment('Expected result: Form is open');
    }

    function classicPageCheckQuickView(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickQuickView();
        $I->comment('Expected result: Quick view is open ');
    }

    function classicPageCheckNameItem(Step\Acceptance\ItemsSteps $I,\Page\Classic $classicPage) {
        $I->clickNameItem();
        $I->comment('Expected result: Navigate to product card ');
    }

    function classicPageCheckLearnMore(Step\Acceptance\ItemsSteps $I,\Page\Classic $classicPage) {
        $I->clickLearnMore();
        $I->comment('Expected result: Navigate to product card ');
    }

    function classicPageCheckReturnToGrid(Step\Acceptance\ItemsSteps $I) {
        $I->clickGrid();
        $I->comment('Expected result: List is changing on the grid ');
    }

    function classicPageForPriceItems(Step\Acceptance\ItemsSteps $I) {
        $I->checkForPriceItems();
        $I->comment('Expected result: Check the price');
    }





}
