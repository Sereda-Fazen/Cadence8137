<?php
use Step\Acceptance;
/**
 * @group category
 */
class RetroCest
{

        function retroPage(Step\Acceptance\LoginSteps $I, \Page\Retro $retroPage) {
            $I->menLinks();
            $retroPage->retro();
            $I->allShowingItem();
            $I->comment('Expected result: Showing products and check select options');
        }

        function womenSelect(Step\Acceptance\LoginSteps $I) {
            $I->checkSortBy();
            $I->comment('Expected result: Sort is working');
        }

        function retroCheckGrid(Step\Acceptance\LoginSteps $I) {
            $I->checkGridButtonsForItems();
            $I->comment('Expected result: In the grid the buttons is active');
        }

        function retroCheckList(Step\Acceptance\LoginSteps $I) {
            $I->checkListButtonsForItems();
            $I->comment('Expected result: In the list the buttons is active');
        }

        function retroForPriceItems(Step\Acceptance\LoginSteps $I) {
            $I->checkForPriceItems();
            $I->comment('Expected result: Chose the price');
        }

}













