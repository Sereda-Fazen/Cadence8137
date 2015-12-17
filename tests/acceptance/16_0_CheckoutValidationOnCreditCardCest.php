<?php
use Step\Acceptance;
/**
 * @group checkoutValidationCreditCard
 */
class CheckoutValidationOnCreditCardCest
{
    /**
     * American Express
     **/

        function addToCartCreditCard(Step\Acceptance\ItemsSteps  $I) {
            $I->processAddToCart();
            $I->comment('Expected result: Please specify payment method');

        }
        function checkOnWithoutPayment(Step\Acceptance\ItemsSteps  $I){
            $I->checkWithoutPayment();
            $I->comment('Expected result: This is a required field');
        }

        function checkOnCardType(Step\Acceptance\ItemsSteps  $I){
            $I->checkCardType();
            $I->comment('Expected result: Card type does not match credit card number');

        }

        function checkOnEmptyNumberCard(Step\Acceptance\ItemsSteps  $I){
            $I->checkEmptyNumberCard();
            $I->comment('Expected result: Card type does not match credit card number');
        }

        function checkOnInvalidCardType(Step\Acceptance\ItemsSteps  $I){
            $I->checkInvalidCardType();
            $I->comment('Expected result: Please enter a valid credit card number');
        }

        function checkOnInvalidMonthWithYear(Step\Acceptance\ItemsSteps  $I){
            $I->checkInvalidMonthWithYear();
            $I->comment('Expected result: Incorrect credit card expiration date');
        }

        function checkOnInvalidVerificationNumber(Step\Acceptance\ItemsSteps  $I){
            $I->checkInvalidVerificationNumber();
            $I->comment('Expected result: Please enter a valid credit card verification number');
        }





































}
