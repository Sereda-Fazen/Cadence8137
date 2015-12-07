<?php

use Step\Acceptance;
/**
 * @group shoppingCart
 */
class ProductCardCest
{

    function productPage(Step\Acceptance\LoginSteps $I) {
        $I->productCart();
        $I->comment('Expected result: Go to product card');
    }

    function checkZoom(Step\Acceptance\LoginSteps  $I) {
        $I->checkImgItem();
        $I->comment('Expected result: Click on Img and zoom is working');
    }

    function checkAddForYourItem(Step\Acceptance\LoginSteps  $I, \Page\ProductCard $productCart){
        $I->checkNewItem();

    }

}




