<?php
use Step\Acceptance;

class ChronosCest
{

        function chronosPage(Step\Acceptance\LoginSteps $I, \Page\Chronos $chronosPage) {
            $chronosPage->chronos();
            $I->getZoom();
        }











}
