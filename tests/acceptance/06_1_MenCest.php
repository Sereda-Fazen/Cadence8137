<?php
use Step\Acceptance;
/**
 * @group category
 */
class MenCest
{

    function menPage(Step\Acceptance\LoginSteps $I, \Page\Men $menPage) {
        $menPage->men();
        $I->allShowingItem();
        $I->comment('Expected result: Showing products and check select options');
    }


    function menPageCheckGrid(Step\Acceptance\LoginSteps $I) {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons are active');
    }

    function menPageCheckList(Step\Acceptance\LoginSteps $I) {
        $I->checkWomenListButtonsForItems();
        $I->comment('Expected result: In the list the buttons is active');
    }

    function menPageForPriceItems(Step\Acceptance\LoginSteps $I) {
        $I->checkForPriceItems();
        $I->comment('Expected result: Chose the price');
    }











}
