<?php
use Step\Acceptance;


class TestCest
{

    function homeContent(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
    {
        $homePage->homeSlide();
        $homePage->homePageContent();
    }



}
