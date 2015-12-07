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
        $productCart->checkNewItem();

    }

    function checkFunctionalShoppingCart(AcceptanceTester  $I, \Page\ProductCard $productCart) {
        $productCart->checkShoppingCart();
        $I->comment('Expected result: Links are working');
    }

    function CheckAddCountsInCart(Step\Acceptance\LoginSteps  $I) {
        $I->checkCountsForItem();
        $I->comment('Expected result: Count is working plus and minus');
    }

    function CheckEditAndDelete(Step\Acceptance\LoginSteps  $I, \Page\ProductCard $productCart) {
        $productCart->checkEdit();
        $I->comment('Expected result: Page is open "Edit" items');
    }

}




