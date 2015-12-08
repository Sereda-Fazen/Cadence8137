<?php
use Step\Acceptance;
/**
 * @group category
 */
class LeatherCest
{

        function leatherPage(Step\Acceptance\LoginSteps $I, \Page\Leather $leatherPage) {
            $I->menLinks();
            $leatherPage->leather();
            $I->allShowingItem();
            $I->comment('Expected result: Showing products and check select options');
        }

        function leatherCheckGrid(Step\Acceptance\LoginSteps $I) {
            $I->checkGridButtonsForItems();
            $I->comment('Expected result: In the grid the buttons is active');
        }

        function leatherCheckList(Step\Acceptance\LoginSteps $I) {
            $I->checkListButtonsForItems();
            $I->comment('Expected result: In the list the buttons is active');
        }

        function leatherForPriceItems(Step\Acceptance\LoginSteps $I) {
            $I->checkForPriceItems();
            $I->comment('Expected result: Chose the price');
        }

}












