<?php
use Step\Acceptance;

class ClassicCest
{

        function classicHeaderContent(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $classicPage->classic();
            $I->allShowingItem();
            $I->listGrid();
        }













}
