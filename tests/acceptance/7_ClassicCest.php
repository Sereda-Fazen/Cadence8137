<?php
use Step\Acceptance;

class ClassicCest
{

        function classicHeaderContent(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $classicPage->classic();
            $I->allShowingItem();
            $I->comment('Expected result: Showing products and check select options');
        }

        function classicCheckGrid(Step\Acceptance\LoginSteps $I) {
            $I->checkGridButtonsForItems();
            $I->waitForText('ADD TO CART',1);
            $I->comment('Expected result: In the grid the buttons is active');
        }

        function classicCheckList(Step\Acceptance\LoginSteps $I) {
            $I->checkListButtonsForItems();
            $I->comment('Expected result: In the list the buttons is active');
        }

        function checkForPriceItems(Step\Acceptance\LoginSteps $I) {
            $I->checkForPriceItems();
            $I->comment('Expected result: Chose the price');
        }





}
