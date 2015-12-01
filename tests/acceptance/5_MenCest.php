<?php
use Step\Acceptance;

class MenCest
{

        function clickMenPages(Step\Acceptance\LoginSteps $I, \Page\Men $menPage) {
            $menPage->men();
            $I->linksMen();
            $menPage->sale();

        }













}
