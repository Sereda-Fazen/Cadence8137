<?php
use Step\Acceptance;
/**
 * @group category
 */
class SaleCest
{

        function lastChancePage(Step\Acceptance\LoginSteps $I, \Page\Sale $salePage) {
            $salePage->sale();
            $I->getZoom();
        }











}
