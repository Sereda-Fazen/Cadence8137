<?php
use Step\Acceptance;

class ClassicCest
{

        function classicPage(Step\Acceptance\LoginSteps $I, \Page\Classic $classicPage) {
            $classicPage->classic();
            $I->allShowingItem();
            $I->comment('');
            $I->featuredHighLow();
        }











}
