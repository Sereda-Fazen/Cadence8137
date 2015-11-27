<?php
use Step\Acceptance;

class MenCest
{

        function menPage(Step\Acceptance\LoginSteps $I, \Page\Men $menPage) {
            $menPage->men();
            $I->getZoom();
        }











}
