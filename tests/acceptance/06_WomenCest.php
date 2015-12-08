<?php
use Step\Acceptance;
/**
 * @group category
 */
class WomenCest
{

    function womenPage(Step\Acceptance\LoginSteps $I, \Page\Women $womenPage) {
        $womenPage->women();
        $I->allShowingItem();
        $I->comment('Expected result: Showing products and check select options');
    }

    function womenPageCheckGrid(Step\Acceptance\LoginSteps $I) {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');
    }

    function womenPageCheckList(Step\Acceptance\LoginSteps $I) {
        $I->checkWomenListButtonsForItems();
        $I->comment('Expected result: In the list the buttons is active');
    }

    function womenPageForPriceItems(Step\Acceptance\LoginSteps $I) {
        $I->checkForPriceItems();
        $I->comment('Expected result: Chose the price');
    }











}
