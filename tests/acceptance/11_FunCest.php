<?php
use Step\Acceptance;

class FunCest
{

        function funPage(Step\Acceptance\LoginSteps $I, \Page\Fun $funPage) {
            $funPage->fun();
            $I->getZoom();
        }











}
