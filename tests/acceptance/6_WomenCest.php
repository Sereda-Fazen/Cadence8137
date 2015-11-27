<?php
use Step\Acceptance;

class WomenCest
{

        function womenPage(Step\Acceptance\LoginSteps $I, \Page\Women $womenPage) {
            $womenPage->women();
            $I->getZoom();
        }











}
