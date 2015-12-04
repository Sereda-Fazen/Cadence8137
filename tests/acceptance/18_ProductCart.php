<?php

/*
        function checkFunctionalShoppingCart(AcceptanceTester  $I, \Page\CheckoutGuest $guestPage) {
            $guestPage->checkShoppingCart();
            $I->comment('Expected result: Links are working');
        }


            function CheckAddCountsInCart(Step\Acceptance\LoginSteps  $I) {
                $I->checkCountsForItem();
                $I->comment('Expected result: Count is working plus and minus');
            }

            function CheckEditAndDelete(Step\Acceptance\LoginSteps  $I, \Page\CheckoutGuest $guestPage) {
                $guestPage->checkEdit();
                $I->checkImgItem();
                $I->comment('Expected result: Zoom is working');
            }




/*
    public function checkShoppingCart() {
        $I = $this->tester;

        $I->click(self::$clickImg);
        $I->moveBack();
        $I->click(self::$clickName);
        $I->moveBack();
    }

    public function checkEdit(){
        $I = $this->tester;

        $I->click(self::$clickEdit);
}






public static $clickImg = 'tr.first.last.odd > td:nth-of-type(1) > a.product-image > img';
public static $clickName = 'h2.product-name > a';



public static $clickEdit = 'td.last > a.btn-edit';

