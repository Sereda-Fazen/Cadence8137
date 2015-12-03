<?php
use Step\Acceptance;

class SaleCest
{

        function lastChancePage(Step\Acceptance\LoginSteps $I, \Page\Sale $salePage) {
            $salePage->sale();
            $I->getZoom();
        }











}
