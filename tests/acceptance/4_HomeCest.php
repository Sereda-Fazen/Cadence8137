<?php
use Step\Acceptance;

class HomeCest
{

    function homeHeader(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
    {
        $homePage->homePageHeader();

        $homePage->homePageMainMenu();
        $I->getHeaderMenu();
    }


   function homeSearch(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
   {
       $homePage->homePageSearch('Watch');
       $I->getVisibleText('h1', 'Search results for "watch"');
       $I->comment('Expected result: Search results for "Watch" ');
   }


   function homeCart(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
   {
       $homePage->homeHeaderCart();
       $I->getVisibleText('You have no items in your shopping cart.');
   }


     function homeSlide(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
        $homePage->homeSlide();
         $I->waitForElement('div.main');
     }


    function homeContent(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
    {
        $homePage->homePageContent();
    }



    function homeSubscription(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
    {
        $homePage->homePageSubscription('sa@itsvit.org');
    }
}
    /*
    function homeFooter(Step\Acceptance\LoginSteps $I, \Page\Home $homePage)
    {
       // $I->getFooterMenu();
        $I->getFooterMenu1();
      //  $I->getFooterMenu2();

       // $homePage->homePageFooter();
    }
    /*
}
/*




