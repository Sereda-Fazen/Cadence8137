<?php

use Step\Acceptance;
/**
 * @group shoppingCart
 */
class ShoppingCartCest
{

    function checkFunctionalShoppingCart(Step\Acceptance\LoginSteps  $I, \Page\ShoppingCart $shoppingCart)
    {
        $I->logOut();
        $shoppingCart->checkShoppingCart();
        $I->comment('Expected result: Links are working');
    }


        function checkAddCountsInCart(Step\Acceptance\LoginSteps  $I) {
            $I->checkCountsForItem();
            $I->comment('Expected result: Count is working plus and minus');
        }

        function checkEditAndDelete(AcceptanceTester  $I, \Page\ShoppingCart $shoppingCart) {
            $shoppingCart->checkEdit();
            $I->comment('Expected result: Page is open "Edit" items');
        }

    function checkCouponCod(AcceptanceTester $I, \Page\ShoppingCart $shoppingCart)
    {
        $shoppingCart->checkEmptyCouponCode();
        $I->comment('Expected result: This is a required field.');
        $shoppingCart->checkWrongCouponCod('test');
        $I->comment('Expected result: Coupon code "test" is not valid.');
        $shoppingCart->checkCouponCod('FALL20');
        $I->comment('Expected result: Coupon code "FALL20" was applied.');

    }


    function checkGiffCard(AcceptanceTester $I, \Page\ShoppingCart $shoppingCart)
    {
        $shoppingCart->checkEmptyGiffCard();
        $I->comment('Expected result: Please enter your code');
        $shoppingCart->checkWrongGiffCard('test');
        $I->comment('Expected result: Gift card "test" is invalid.');
        $shoppingCart->checkGiffCard('GIFT-ADFA-12NF0O');
        $I->comment('Expected result: Gift code "GIFT-XXXX-XXXXXX" has been applied successfully.');
        $shoppingCart->checkDeleteGiffCard();
        $I->comment('Expected result: Your Gift Card information has been removed successfully.');
    }


    function deleteItemFromCart(AcceptanceTester  $I, \Page\ShoppingCart $shoppingCart){
        $shoppingCart-> removeItem();
        $I->comment('Expected result: You have no items in your shopping cart.');

    }


}




