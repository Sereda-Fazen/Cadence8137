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
        function funCheckGrid(Step\Acceptance\LoginSteps $I) {
            $I->checkGridButtonsForItems();
            $I->comment('Expected result: In the grid the buttons is active');
        }

        function funCheckList(Step\Acceptance\LoginSteps $I) {
            $I->checkListButtonsForItems();
            $I->comment('Expected result: In the list the buttons is active');
        }

        function funForPriceItems(Step\Acceptance\LoginSteps $I) {
            $I->checkForPriceItems();
            $I->comment('Expected result: Chose the price');
        }










}
