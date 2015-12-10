<?php
use Step\Acceptance;
/**
 * @group category
 */
class FunCest
{

        function funPage(Step\Acceptance\LoginSteps $I, \Page\Fun $funPage) {
            $I->menLinks();
            $funPage->fun();
            $I->allShowingItem();
            $I->comment('Expected result: Showing products and check select options');
        }
/*
        function funSelect(Step\Acceptance\LoginSteps $I) {
            $I->checkSortBy();
            $I->comment('Expected result: Sort is working');
        }
*/
    function funPageCheckGrid(Step\Acceptance\ItemsSteps $I)
    {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');
    }

    function funPageClickOnImg(Step\Acceptance\ItemsSteps $I, \Page\Classic $classicPage)
    {
        $I->clickOnImgCat();
        $I->comment('Expected result: Navigate to product card ');

    }

    function funPageAddToCart(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickAddToCart();
        $I->comment('Expected result: Form is open');
    }

    function funPageCheckQuickView(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickQuickView();
        $I->comment('Expected result: Quick view is open ');
    }

    function funPageCheckNameItem(Step\Acceptance\ItemsSteps $I,\Page\Classic $classicPage) {
        $I->clickNameItem();
        $I->comment('Expected result: Navigate to product card ');
    }

    function funPageCheckLearnMore(Step\Acceptance\ItemsSteps $I,\Page\Classic $classicPage) {
        $I->clickLearnMore();
        $I->comment('Expected result: Navigate to product card ');
    }

    function funPageCheckReturnToGrid(Step\Acceptance\ItemsSteps $I) {
        $I->clickGrid();
        $I->comment('Expected result: List is changing on the grid ');
    }

    function funPageForPriceItems(Step\Acceptance\ItemsSteps $I) {
        $I->checkForPriceItems();
        $I->comment('Expected result: Check the price');
    }










}
