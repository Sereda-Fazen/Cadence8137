<?php
use Step\Acceptance;
/**
 * @group main
 */
class HomeCest
{

        function homeHeader(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
          $homePage->homePageHeader();
          $homePage->homePageMainMenu();
          $I->getHeaderMenu();
        }
/*
        function homeSearch(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
          $homePage->homePageSearch('Watch');
          $I->getVisibleText('h1', 'Search results for "watch"');
          $I->comment('Expected result: Search results for "Watch" ');
        }

        function homeCart(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
          $homePage->homeHeaderCart();
          $I->getVisibleText('You have no items in your shopping cart.');
        }

        function homeSlide(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
          $homePage->homeSlide();
          $I->waitForElement('div.main');
        }

        function homeContent(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
          $homePage->homePageContent();
        }

        function homeSubscription(Step\Acceptance\LoginSteps $I, \Page\Home $homePage){
          $homePage->homePageSubscription('sa@itsvit.org');
          $I->see('Thank you for your subscription.','li.success-msg');
        }
*/
        function homeFooter(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {
          $homePage->homePageFooter();
          $I->getFooterMenu();
          $I->getFooterMenu1();
          $I->getFooterMenu2();
        }

        function footerFacebook(Step\Acceptance\LoginSteps $I, \Page\Home $homePage){

          $homePage->homeFooterFacebook();
          $I->getSecondOpen();
          $I->comment('Expected result: Page is open - Facebook ');
        }

        function footerInstagram(Step\Acceptance\LoginSteps $I, \Page\Home $homePage) {

          $homePage->homeFooterInstagram();
          $I->getSecondOpen();
          $I->comment('Expected result: Page is open - Instargam ');
        }

        function footerTwitter(Step\Acceptance\LoginSteps $I, \Page\Home $homePage){

          $homePage->homeFooterTwiter();
          $I->getSecondOpen();
          $I->comment('Expected result: Page is open - Twitter ');
        }

        function footerPinterest(Step\Acceptance\LoginSteps $I, \Page\Home $homePage){

          $homePage->homeFooterPinterest();
          $I->getSecondOpen();
          $I->comment('Expected result: Page is open - Pinterest ');
        }

}





