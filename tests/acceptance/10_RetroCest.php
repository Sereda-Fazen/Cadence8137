<?php
use Step\Acceptance;

class RetroCest
{

        function retroPage(Step\Acceptance\LoginSteps $I, \Page\Retro $retroPage) {
            $retroPage->retro();
            $I->getZoom();
        }











}
