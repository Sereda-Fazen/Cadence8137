<?php
use Step\Acceptance;
/**
 * @group category
 */
class WomenCest
{

    function menPage(Step\Acceptance\ItemsSteps $I, \Page\Women $womenPage)
    {
        $womenPage->women();
        $I->allShowingItem();
        $I->comment('Expected result: Showing products and check select options');
    }


    function womenPageCheckGrid(Step\Acceptance\ItemsSteps $I)
    {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');
    }

    function womenPageClickOnImg(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickOnImg();
        $I->comment('Expected result: Navigate to product card ');

    }


    function womenPageAddToCart(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickAddToCart();
        $I->comment('Expected result: Form is open');
    }

    function womenPageCheckQuickView(Step\Acceptance\ItemsSteps $I)
    {
        $I->clickQuickView();
        $I->comment('Expected result: Quick view is open ');
    }

    function womenPageCheckNameItem(Step\Acceptance\ItemsSteps $I) {
        $I->clickNameItem();
        $I->comment('Expected result: Navigate to product card ');
    }

    function womenPageCheckLearnMore(Step\Acceptance\ItemsSteps $I) {
        $I->clickLearnMore();
        $I->comment('Expected result: Navigate to product card ');
    }

    function womenPageCheckReturnToGrid(Step\Acceptance\ItemsSteps $I) {
        $I->clickGrid();
        $I->comment('Expected result: List is changing on the grid ');
    }

    function womenPageForPriceItems(Step\Acceptance\ItemsSteps $I) {
        $I->checkForPriceItems();
        $I->comment('Expected result: Check the price');
    }











}
