<?php
use Step\Acceptance;

class LeatherCest
{

        function leatherPage(Step\Acceptance\LoginSteps $I, \Page\Leather $leatherPage) {
            $leatherPage->leather();
            $I->getZoom();
        }











}
