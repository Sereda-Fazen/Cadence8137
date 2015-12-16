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

        $I->checkSortBy();
        $I->comment('Expected result: Sorting is working');

        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');

        $I->clickOnImg();
        $I->comment('Expected result: Navigate to product card ');

        $I->clickAddToCart();
        $I->comment('Expected result: Form is open');

        $I->clickQuickView();
        $I->comment('Expected result: Quick view is open ');

        $I->clickLearnMore();
        $I->comment('Expected result: Navigate to product card ');

        $I->clickGrid();
        $I->comment('Expected result: List is changing on the grid ');

        $I->checkForPriceItems();
        $I->comment('Expected result: Check the price');


    }
}
