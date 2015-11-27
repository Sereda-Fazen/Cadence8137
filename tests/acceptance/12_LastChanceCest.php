<?php
use Step\Acceptance;

class LastChanceCest
{

        function lastChancePage(Step\Acceptance\LoginSteps $I, \Page\LastChance $lastChancePage) {
            $lastChancePage->lastChance();
            $I->getZoom();
        }











}
