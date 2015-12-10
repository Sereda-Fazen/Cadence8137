<?php
use Step\Acceptance;
/**
 * @group category
 */
class MenCest
{

    function menPage(Step\Acceptance\ItemsSteps $I, \Page\Men $menPage)
    {
        $menPage->men();
        $I->allShowingItem();
        $I->comment('Expected result: Showing products and check select options');
    }

/*
    function menPageCheckGrid(Step\Acceptance\ItemsSteps $I)
    {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');
    }

    function menPageClickOnImg(Step\Acceptance\ItemsSteps $I, \Page\Men $menPage)
    {
        $I->clickOnImg();
        $I->comment('Expected result: Navigate to product card ');

    }


    function menPageAddToCart(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickAddToCart();
        $I->comment('Expected result: Form is open');
    }

    function menPageCheckQuickView(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickQuickView();
        $I->comment('Expected result: Quick view is open ');
    }

        function menPageCheckNameItem(Step\Acceptance\ItemsSteps $I) {
            $I->clickNameItem();
            $I->comment('Expected result: Navigate to product card ');
        }

        function menPageCheckLearnMore(Step\Acceptance\ItemsSteps $I) {
            $I->clickLearnMore();
            $I->comment('Expected result: Navigate to product card ');
        }

        function menPageCheckReturnToGrid(Step\Acceptance\ItemsSteps $I) {
            $I->clickGrid();
            $I->comment('Expected result: List is changing on the grid ');
        }

        function menPageForPriceItems(Step\Acceptance\ItemsSteps $I) {
            $I->checkForPriceItems();
            $I->comment('Expected result: Check the price');
        }

*/











}
