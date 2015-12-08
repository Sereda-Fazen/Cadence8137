<?php
use Step\Acceptance;
/**
 * @group category
 */
class ChronosCest
{

    function chronosHeaderContent(Step\Acceptance\LoginSteps $I, \Page\Chronos $chronosPage) {
        $I->menLinks();
        $chronosPage->chronos();
        $I->allShowingItem();
        $I->comment('Expected result: Showing products and check select options');
    }

    function chronosCheckGrid(Step\Acceptance\LoginSteps $I, \Page\Chronos $chronosPage) {
        $I->checkGridButtonsForItems();
        $I->comment('Expected result: In the grid the buttons is active');
    }

    function chronosCheckList(Step\Acceptance\LoginSteps $I, \Page\Chronos $chronosPage) {
        $I->checkListButtonsForItems();
        $I->comment('Expected result: In the list the buttons is active');
    }

    function chronosForPriceItems(Step\Acceptance\LoginSteps $I, \Page\Chronos $chronosPage) {
        $I->checkForPriceItems();
        $I->comment('Expected result: Chose the price');
    }











}
