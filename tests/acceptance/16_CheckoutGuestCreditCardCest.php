<?php
use Step\Acceptance;
/**
 * @group checkoutGuest
 */
class CheckoutGuestCreditCardCest
{
    /**
     * @param Acceptance\LoginSteps $I
     * American Express
     **/

        function addToCartPageAmericanExpress(Step\Acceptance\LoginSteps  $I) {
            $I->processAddToCart();

        }

        function paymentInfoAmericanExpress (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->creditCard();
            $I->checkAmericanExpress();

        }
        function orderInfoAmericanExpress (AcceptanceTester  $I, Helper\Acceptance $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
            $creditCardPage->orderView();
            $I->waitAlertAndAccept();
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }

    /**
     * @param Acceptance\LoginSteps $I
     * Visa
     */

    function addToCartPageVisa(Step\Acceptance\LoginSteps  $I) {
        $I->processAddToCart();

    }

    function paymentInfoVisa (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->creditCard();
        $I->checkVisa();

    }
    function orderInfoVisa (AcceptanceTester  $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->orderView();
        $I->comment('Expected result: ');
    }


    /**
     * @param Acceptance\LoginSteps $I
     * Master Card
     */

    function addToCartPageMasterCard(Step\Acceptance\LoginSteps  $I) {
        $I->processAddToCart();

    }

    function paymentInfoMasterCard (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->creditCard();
        $I->checkMasterCard();

    }
    function orderInfoMasterCard (AcceptanceTester  $I, \Page\CheckoutGuestCreditCard $creditCardPage) {
        $creditCardPage->orderView();
        $I->comment('Expected result: Y');
    }




























}
