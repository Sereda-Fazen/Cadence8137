<?php
namespace Step\Acceptance;


use Exception;

class AdminSteps extends \AcceptanceTester
{


    public function loginAdmin(){
        $I= $this;

        $I->amOnPage('/secret/');
        $I->fillField('#username', 'admin');
        $I->fillField('#login', 'Corn54Goat93');
        $I->click('input.form-button');
        $I->see('Log Out','a.link-logout');

    }

    public function loginCustomer(){
        $I= $this;

        $I->amOnPage('/index.php/secret/');
        $I->fillField('#username', 'test');
        $I->fillField('#login', '!1qwerty');
        $I->click('input.form-button');
        $I->see('Log Out','a.link-logout');

    }
    public function yahooMail()
    {
        $I = $this;
        $I->amOnUrl("https://mail.yahoo.com");
        $I->fillField('//*[@id="login-username"]', 'cadence_watch@yahoo.com');
        $I->fillField('//*[@id="login-passwd"]', '!1qwerty');
        $I->click('//*[@id="login-signin"]');
        $I->waitForElement('//*[@class="icon info info-real info-unread "]',5);
        $I->see('Your refund is on its way', 'span.subject.bold');
        $I->click('span.subject.bold');
        $I->waitForText('Your Credit Memo');
        $I->see('alex sereda', 'tbody > tr:nth-of-type(4) > td > table:nth-of-type(1) > tbody > tr > td:nth-of-type(1)');
        $I->click('#btn-delete > span.icon-text');

    }

    public function checkOrder()
    {
        $I = $this;

            $I->moveMouseOver('//*[@id="nav"]/li[2]/a/span');
            $I->waitForElementVisible('//*[@id="nav"]/li[2]/ul/li/a');
            $I->click('//*[@id="nav"]/li[2]/ul/li/a');
            $I->see('Orders', '//h3[@class="icon-head head-sales-order"]');
            $I->waitForText('alex sereda');

    }
        /*
            $I->click('tbody > tr:nth-of-type('.$i.') > td.a-center > input.massaction-checkbox');
            $I->click('//*[@id="sales_order_grid_massaction-select"]');
            $I->click('//*[@id="sales_order_grid_massaction-select"]/option[3]');
            $I->waitForElementVisible('//span[@id="sales_order_grid_massaction-form-additional"]');
            $I->click('//span[@id="sales_order_grid_massaction-form-additional"]');
            $I->click('//select[@id="order_status"]/option[6]');
            $I->click('//*[@class="scalable"]/span');
            $I->see('Total of 1 order(s) were modified.', 'li.success-msg');

            //invoices



            $I->click('tbody > tr:nth-of-type('.$i.') > td.last > a');
            $I->see('alex sereda', 'tbody > tr:first-child > td.value > a > strong');
            $I->click('//*[@class="tab-item-link"]/span');
            $I->see('alex sereda', '//div[@class="main-col-inner"]');

            $I->click('//*[@class="scalable go"]/span');
            $I->see('New Credit Memo for Order', '//*[@class="icon-head head-sales-order-creditmemo"]');
            $I->see('alex sereda', '//*[@class="box-right"]//div/table/tbody/tr[1]');

            //memo

            $I = $this;
            $I->scrollDown(200);
            $I->click('//*[@id="send_email"]');
            $I->click('//*[@class="scalable save submit-button"]/span');
            $I->see('The credit memo has been created.', 'li.success-msg');
            $I->wait(2);


        }
    }
*/



}