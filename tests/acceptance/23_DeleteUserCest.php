<?php
/**
 * @group deleteUserFromAdmin
 */
class DeleteUserCest
{

    function deleteNewUserFromAdminPanel(AcceptanceTester $I,\Page\Register $registerPage){
        $registerPage->authPanel('admin', 'Corn54Goat93');
        $I->comment('Expected result: Admin has entered in the admin panel');

        $registerPage->deleteUser();
        $I->comment('Expected result: The customer has been deleted');
    }



}
