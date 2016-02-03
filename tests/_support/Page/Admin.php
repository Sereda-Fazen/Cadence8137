<?php
namespace Page;

use Exception;

class Admin
{

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

    //invoice email

    public static $view = '//td[@class=" last"]/a';
    public static $seeUser = '//td[@class="value"]/a';
    public static $invoice = '//*[@class="tab-item-link"]/span';
    public static $seeInvoice = '//div[@class="main-col-inner"]';
    public static $invoiceOrder = '//h3[@class="icon-head head-sales-order-invoice"]';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
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

        $I->moveMouseOver(self::$seeInvoice);
        $I->wait(2);
        $I->click(self::$seeInvoice);
        $I->wait(5);
        $I->seeElement(self::$invoiceOrder);

    }






}