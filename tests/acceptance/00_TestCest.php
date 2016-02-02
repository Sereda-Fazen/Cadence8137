<?php
use Step\Acceptance;
/**
 * @group main
 */
class HomeCest
{


        function homeContent(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
        {
            $homePage->homeSlide();
            $homePage->homePageContent();
        }



}
