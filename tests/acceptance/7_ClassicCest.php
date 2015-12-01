<?php
use Step\Acceptance;

class ClassicCest
{

        function classicHeaderContent(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage)
        {
            $classicPage->classic();
        }
            /*
            $I->allShowingItem();
            $I->listGrid();
        }

        function classicGrid(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $I->grid();
            $I->waitForText('ADD TO CART',1);
        }

        function classicList(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $I->checkButtonsForItems();
        }
*/
            function checkForPriceItems(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage)
            {
                $I->checkForPriceItems();
            }















}
