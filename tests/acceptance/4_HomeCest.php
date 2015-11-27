<?php
use Step\Acceptance;

class HomeCest
{

    function homeHeader(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {

        $homePage->homePageHeader();
        $homePage->homePageSearch('Watch');
        $I->getVisibleText('h1','Search results for "watch"');
        $I->comment('Expected result: Search results for "Watch" ');
        $homePage->homePageSearch2('Watch');
        $I->comment('Expected result: Search auto complete is work');
        $homePage->homePageMainMenu();
        $I->getHeaderMenu();
        $homePage->homePageSubscription('sa@itsvit.org');
        $homePage->homePageContent();
        $I->getFooterMenu();
        $homePage->homePageFooter();
    }














}
