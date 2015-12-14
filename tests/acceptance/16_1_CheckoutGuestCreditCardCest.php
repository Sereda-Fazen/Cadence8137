<?php
use Step\Acceptance;
/**
 * @group checkoutCreditCard
 */
class CheckoutGuestCreditCardCest
{
    /**
     * American Express
     **/

        function addToCartPageAmericanExpress(Step\Acceptance\ItemsSteps  $I) {
            $I->subForm();
            $I->processAddToCart();

        }

        function paymentInfoAmericanExpress (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->creditCard();
            $I->checkAmericanExpress();

        }
        function orderInfoAmericanExpress (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->orderView();
            $I->comment('Expected result: PayPal gateway has rejected request.');
        }



        function paymentInfoMasterCard(Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPage)
        {
            $creditCardPage->creditCard();
            $I->checkMasterCard();

        }
        function orderInfoMasterCard (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->orderView();
            $I->comment('Expected result: PayPal gateway has rejected request.');
        }





        function paymentInfoVisa (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditVisa) {
            $creditVisa->creditCard();
            $I->checkVisa();

        }

        function orderInfoVisa (Step\Acceptance\ItemsSteps $I, \Page\CheckoutGuestCreditCard $creditCardPageVisa) {
            $creditCardPageVisa->orderViewAlert();
            $I->comment('Expected result: PayPal gateway has rejected request.');
        }
































}
