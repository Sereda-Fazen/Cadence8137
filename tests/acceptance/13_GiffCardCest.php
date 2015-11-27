<?php
use Step\Acceptance;

class GiffCardCest
{

        function giffCrdPage(Step\Acceptance\LoginSteps $I, \Page\GiffCard $giffCardPage) {
            $giffCardPage->giffCard();
            $I->getZoom();
        }











}
