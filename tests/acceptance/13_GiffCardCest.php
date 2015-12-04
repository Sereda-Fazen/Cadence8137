<?php
use Step\Acceptance;
/**
 * @group mainMenu
 */
class GiffCardCest
{

        function giffCardPage(Step\Acceptance\LoginSteps $I, \Page\GiffCard $giffCardPage) {
            $giffCardPage->giffCard();
            $I->getZoom();
        }











}
