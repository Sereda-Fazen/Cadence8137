<?php
use Step\Acceptance;

class ClassicCest
{

        function classicHeaderContent(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $classicPage->classic();
            $I->allShowingItem();
        }

        function classicCheckGrid(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $I->grid();
            $I->waitForText('ADD TO CART',1);
        }

        function classicCheckList(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $I->checkButtonsForItems();
        }

        function checkForPriceItems(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $I->checkForPriceItems();
        }





}
