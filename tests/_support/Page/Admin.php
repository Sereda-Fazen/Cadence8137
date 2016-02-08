<?php
namespace Page;

use Exception;

class Admin
{

    // add to gift cart

    public static $moveGiftCard = '#nav > li:nth-of-type(11) > a > span';
    public static $clickManageGiftCards = '#nav > li:nth-of-type(11) > ul > li:nth-of-type(1) > a > span';
    public static $addGiftCard = '//td[@class="form-buttons"]/button[2]/span';
    public static $giftCode = '#gift_code';
    public static $giftValue = '#balance';
    public static $template = '#giftcard_template_id';
    public static $imgForGift = 'div > img';
    public static $cadenceGiftCard = '//select[@id="giftcard_template_id"]/option[3]';
    public static $status = '#status';
    public static $active = '//select[@id="status"]/option[2]';
    public static $comment = '#giftvoucher_comments';
    public static $saveCard = '//div[@class="content-header"]/p/button[3]';

    //create new user

    public static $system = '//*[@id="nav"]/li[15]/a/span';
    public static $permissions = '//*[@id="nav"]/li[15]/ul/li[12]/a/span';
    public static $users = '//*[@id="nav"]/li[15]/ul/li[12]/ul/li/a/span';
    public static $seeAddNewUser = '//td[@class="form-buttons"]/button';

    public static $uName = '#user_username';
    public static $fName = '#user_firstname';
    public static $lName = '#user_lastname';
    public static $email = '#user_email';
    public static $currentPass = '#user_current_password';
    public static $pass1 = '#user_password';
    public static $pass2 = '#user_confirmation';

    public static $userRole = '//a[@class="tab-item-link"]/span';
    public static $customer = '//*[@id="permissionsUserRolesGrid"]/div/div/table/tbody/tr[4]';
    public static $saveUser = '//*[@class="scalable save"]/span';


    public static $sales = '//*[@id="nav"]/li[2]/a/span';
    public static $orders = '//*[@id="nav"]/li[2]/ul/li/a';
    public static $seeOrders = '//h3[@class="icon-head head-sales-order"]';
    public static $user = 'alex sereda';
    public static $clickStatus = 'tbody > tr:nth-of-type(1) > td.a-center > input.massaction-checkbox';
    public static $actions = '//*[@id="sales_order_grid_massaction-select"]';
    public static $changeOrderStatus = '//*[@id="sales_order_grid_massaction-select"]/option[3]';
    public static $orderStatus = '//span[@id="sales_order_grid_massaction-form-additional"]';
    public static $complete = '//select[@id="order_status"]/option[6]';
    public static $submit = '//*[@class="scalable"]/span';

    public static $success = 'li.success-msg';
    public static $successText = 'The user has been saved.';
    public static $success2 = '#success-msg';
    public static $error = 'li.error-msg';
    public static $errorText = 'A user with the same user name or email aleady exists.';

    ///

    ///



    // search user and active

    public static $inputSearch = '#permissionsUserGrid_filter_username';
    public static $search = 'button.scalable.task';
    public static $findUser = '//*[@id="permissionsUserGrid_table"]/tbody/tr[1]/td[2]';
    public static $findMail = '//*[@id="permissionsUserGrid_table"]/tbody/tr[1]/td[5]';
    public static $findStatus = '//*[@id="permissionsUserGrid_table"]/tbody/tr[1]/td[6]';
    public static $clickUser = '//*[@id="permissionsUserGrid_table"]/tbody/tr[1]/td[2]';
    public static $clickCheck = '//*[@id="user_is_active"]';
    public static $checkActive = '//*[@id="user_is_active"]/option[1]';

    //delete

    public static $deleteUser = '//*[@class="scalable delete"]/span';



    //invoice email

    public static $view = 'tbody > tr:nth-of-type(1) > td.last > a';
    public static $view2 = 'tbody > tr:nth-of-type(3) > td.last > a';
    public static $view3 = 'tbody > tr:nth-of-type(4) > td.last > a';
    public static $seeUser = 'tbody > tr:first-child > td.value > a > strong';
    public static $invoice = '//*[@class="tab-item-link"]/span';
    public static $seeInvoice = 'tr.pointer.on-mouse > td:nth-of-type(2)';
    public static $invoiceOrder = '//*[@class="icon-head head-sales-order-creditmemo"]';

    public static $creditMemo = '//*[@class="scalable go"]/span';
    public static $seeUserMemo = '//*[@class="box-right"]//div/table/tbody/tr[1]';

    //credit memo

    public static $clickEmailCopy = '//*[@id="send_email"]';
    public static $refund = '//*[@class="scalable save submit-button"]/span';


    // Shipment

    public static $ship = 'div.main-col-inner > div.content-header > p.form-buttons > button:nth-of-type(5) > span';
    public static $seeNewShip = '//*[@class="content-header"]/h3';
    public static $addTrackingNumber = 'td.a-center.last > button.scalable';
    public static $clickCarrier = '//*[@id="trackingC1"]';
    public static $selectCarrier = '//*[@id="trackingC1"]/option[9]';
    public static $number = '//*[@id="trackingN1"]';
    public static $clickEmailCopyShipment = '//*[@name="shipment[send_email]"]';
    public static $submitShipment = '//*[@class="scalable save submit-button"]/span';


    //export report

    public static $moveCatalog = '#nav > li:nth-of-type(3) > a > span';
    public static $moveProductExport = '#nav > li:nth-of-type(3) > ul > li.parent.last > a > span';
    public static $clickManualReport = '#nav > li:nth-of-type(3) > ul > li.parent.last > ul > li.last > a > span';
    public static $seeProductExport = '#page\3Amain-container';

    public static $clickProfile = '#profile_id';
    public static $checkInventory = '//*[@id = "profile_id"]/optgroup/option[2]';
    public static $clickExport = '#export_button';






    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function createAddToGiftCard($giftCardCode, $giftValue, $comment)
    {
        $I = $this->tester;

        $I->moveMouseOver(self::$moveGiftCard);
        $I->waitForElementVisible(self::$clickManageGiftCards);
        $I->click(self::$clickManageGiftCards);
        $I->waitForElementVisible(self::$addGiftCard);
        $I->click(self::$addGiftCard);
        $I->fillField(self::$giftCode, $giftCardCode);
        $I->fillField(self::$giftValue, $giftValue);
        $I->click(self::$template);
        $I->click(self::$cadenceGiftCard);
        $I->waitForElementVisible(self::$imgForGift);
        $I->click(self::$status);
        $I->waitForElementVisible(self::$active);
        $I->click(self::$active);
        $I->fillField(self::$comment, $comment);
        $I->click(self::$saveCard);
        $I->see('Gift Code was successfully saved', self::$success);
    }


    public function createNewAdminUser($uName,$fName,$lName,$email,$currentPass,$pass1,$pass2){
        $I = $this->tester;
        $I->moveMouseOver(self::$system);
        $I->waitForElementVisible(self::$permissions);
        $I->moveMouseOver(self::$permissions);
        $I->waitForElementVisible(self::$users);
        $I->click(self::$users);
        $I->see('Add New User',self::$seeAddNewUser);
        $I->click(self::$seeAddNewUser);

        $I->fillField(self::$uName, $uName);
        $I->fillField(self::$fName, $fName);
        $I->fillField(self::$lName, $lName);
        $I->fillField(self::$email, $email);
        $I->fillField(self::$currentPass, $currentPass);
        $I->fillField(self::$pass1, $pass1);
        $I->fillField(self::$pass2, $pass2);


        $I->click(self::$userRole);
        $I->click(self::$customer);
        $I->click(self::$saveUser);
        /*
        $grabMsg = $I->grabTextFrom(self::$success);
        $grabMsgError = $I->grabTextFrom(self::$error);

        if ($grabMsgError == 'A user with the same user name or email aleady exists.')
        {
            $I->see('A user with the same user name or email aleady exists.', self::$error);
        }

        elseif ($grabMsg == 'The user has been saved.') {
        */
            $I->see('The user has been saved.', self::$success);


    }

    public function searchNewUserActive($inputSearch,$currentPass,$pass1,$pass2){

        $I = $this->tester;

        $I->moveMouseOver(self::$system);
        $I->waitForElementVisible(self::$permissions);
        $I->moveMouseOver(self::$permissions);
        $I->waitForElementVisible(self::$users);
        $I->click(self::$users);
        $I->see('Add New User',self::$seeAddNewUser);


        $I->fillField(self::$inputSearch, $inputSearch);
        $I->click(self::$search);
        $I->wait(2);
        $I->see('test',self::$findUser);
        $I->see('test@mail.com',self::$findMail);
        $I->see('Active', self::$findStatus);
        $I->click(self::$clickUser);

        $I->fillField(self::$currentPass, $currentPass);
        $I->fillField(self::$pass1, $pass1);
        $I->fillField(self::$pass2, $pass2);
        $I->click(self::$clickCheck);
        $I->click(self::$checkActive);

        $I->click(self::$saveUser);
        $I->see('The user has been saved.',self::$success);

    }

    public function deleteCustomerUser($inputSearch)
    {

        $I = $this->tester;
        /*
        $I->moveMouseOver(self::$system);
        $I->waitForElementVisible(self::$permissions);
        $I->moveMouseOver(self::$permissions);
        $I->waitForElementVisible(self::$users);
        $I->click(self::$users);
        $I->see('Add New User', self::$seeAddNewUser);
*/

        $I->fillField(self::$inputSearch, $inputSearch);
        $I->click(self::$search);
        $I->wait(2);
        $I->see('test', self::$findUser);
        $I->see('test@mail.com',self::$findMail);
        $I->see('Active', self::$findStatus);
        $I->click(self::$clickUser);

        $I->click(self::$deleteUser);
        $I->acceptPopup();
        $I->see('The user has been deleted.',self::$success);
    }



    public function orderComplete()
    {
        $I = $this->tester;

        $I->click(self::$clickStatus);
        $I->click(self::$actions);
        $I->click(self::$changeOrderStatus);
        $I->waitForElementVisible(self::$orderStatus);
        $I->click(self::$orderStatus);
        $I->click(self::$complete);
        $I->click(self::$submit);
        $I->see('Total of 1 order(s) were modified.',self::$success);

    }

    public function checkCreditMemo()
    {
        $I = $this->tester;
        $I->click(self::$view);
        $I->see('alex sereda',self::$seeUser);
        $I->click(self::$invoice);
       // $I->see('alex sereda',self::$seeInvoice);

       // $I->see('New Credit Memo for Order',self::$invoiceOrder);
      //  $I->see('alex sereda', self::$seeUserMemo);
        $I->click(self::$creditMemo);
        $I->scrollDown(200);
        $I->click(self::$clickEmailCopy);
        $I->click(self::$refund);
        $I->see('The credit memo has been created.',self::$success);
    }

    public function checkShipment($number)
    {
        $I = $this->tester;
        $I->click(self::$view);
        $I->see('alex sereda', self::$seeUser);
        $I->click(self::$ship);
        $I->seeElement(self::$seeNewShip);
        $I->click(self::$seeNewShip);
        $I->scrollDown(200);
        $I->click(self::$addTrackingNumber);
        $I->click(self::$clickCarrier);
        $I->click(self::$selectCarrier);
        $I->fillField(self::$number, $number);
        $I->click(self::$clickEmailCopyShipment);
        $I->click(self::$submitShipment);
        $I->see('The shipment has been created.', self::$success);
    }

    public function checkExportReport()
    {
        $I = $this->tester;

        $I->moveMouseOver(self::$moveCatalog);
        $I->waitForElementVisible(self::$moveProductExport);
        $I->moveMouseOver(self::$moveProductExport);
        $I->waitForElementVisible(self::$clickManualReport);
        $I->click(self::$clickManualReport);
        $I->seeElement(self::$seeProductExport);

        $I->click(self::$clickProfile);
        $I->click(self::$checkInventory);
        $I->click(self::$clickExport);
        $I->waitForElementVisible(self::$success2);
        $I->see('Click here to download exported files.', self::$success2);

    }








}