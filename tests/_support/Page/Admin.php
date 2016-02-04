<?php
namespace Page;

use Exception;

class Admin
{

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
    public static $clickStatus = './/tr[contains(@style, "background-color: #CCFFFF")]/td[contains(text(), "alex  sereda")]/../td/input';
    public static $actions = '//*[@id="sales_order_grid_massaction-select"]';
    public static $changeOrderStatus = '//*[@id="sales_order_grid_massaction-select"]/option[3]';
    public static $orderStatus = '//span[@id="sales_order_grid_massaction-form-additional"]';
    public static $complete = '//select[@id="order_status"]/option[6]';
    public static $submit = '//*[@class="scalable"]/span';
    public static $success = 'li.success-msg';


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

    public static $view = 'tbody > tr:nth-of-type(2) > td.last > a';
    public static $seeUser = 'div.hor-scroll > table.form-list > tbody > tr:first-child > td.value > strong';
    public static $invoice = '//*[@class="tab-item-link"]/span';
    public static $seeInvoice = '//div[@class="main-col-inner"]';
    public static $invoiceOrder = '//*[@class="icon-head head-sales-order-creditmemo"]';

    public static $creditMemo = '//*[@class="scalable go"]/span';
    public static $seeUserMemo = '//*[@class="box-right"]//div/table/tbody/tr[1]';

    //credit memo

    public static $clickEmailCopy = '//*[@id="send_email"]';
    public static $refund = '//*[@class="scalable save submit-button"]/span';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
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
        $I->see('The user has been saved.',self::$success);


    }

    public function searchNewUserActive($inputSearch,$currentPass,$pass1,$pass2){

        $I = $this->tester;
        /*
        $I->moveMouseOver(self::$system);
        $I->waitForElementVisible(self::$permissions);
        $I->moveMouseOver(self::$permissions);
        $I->waitForElementVisible(self::$users);
        $I->click(self::$users);
        $I->see('Add New User',self::$seeAddNewUser);
*/

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



    public function orders()
    {
        $I = $this->tester;
        $I->moveMouseOver(self::$sales);
        $I->waitForElementVisible(self::$orders);
        $I->click(self::$orders);
        $I->see('Orders', self::$seeOrders);
        $I->waitForText(self::$user);

        $I->click(self::$clickStatus);
        $I->click(self::$actions);
        $I->click(self::$changeOrderStatus);
        $I->waitForElementVisible(self::$orderStatus);
        $I->click(self::$orderStatus);
        $I->click(self::$complete);
        $I->click(self::$submit);
        $I->see('Total of 1 order(s) were modified.',self::$success);

    }

    public function invoiceEmail()
    {
        $I = $this->tester;
        $I->click(self::$view);
        $I->see('alex sereda',self::$seeUser);
        $I->click(self::$invoice);
        $I->see('alex sereda',self::$seeInvoice);

        $I->click(self::$creditMemo);
        $I->see('New Credit Memo for Order',self::$invoiceOrder);
        $I->see('alex sereda', self::$seeUserMemo);

    }
    public function creditMemo()
    {
        $I = $this->tester;
        $I->scrollDown(200);
        $I->click(self::$clickEmailCopy);
        $I->click(self::$refund);
        $I->see('The credit memo has been created.',self::$success);
    }







}