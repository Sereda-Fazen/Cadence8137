<?php
use Step\Acceptance;
/**
 * @group category
 */
class FunCest
{

        function funPage(Step\Acceptance\LoginSteps $I, \Page\Fun $funPage) {
            $funPage->fun();
            $I->allShowingItem();
            $I->comment('Expected result: Showing products and check select options');
        }

        function funCheckGrid(Step\Acceptance\LoginSteps $I) {
            $I->checkGridButtonsForItems();
            $I->waitForText('ADD TO CART',1);
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
