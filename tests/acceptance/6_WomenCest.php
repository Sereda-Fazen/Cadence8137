<?php
use Step\Acceptance;

class WomenCest
{

    function womenPage(Step\Acceptance\LoginSteps $I, \Page\Women $womenPage) {
        $womenPage->women();
        $I->comment('Expected result: Showing products and check select options');
    }

    function womenPageCheckGrid(Step\Acceptance\LoginSteps $I) {
        $I->checkGridButtonsForItems();
        $I->waitForText('ADD TO CART', 1);
        $I->comment('Expected result: In the grid the buttons is active');
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
