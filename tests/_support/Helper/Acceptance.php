<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{

    public function scrollDown($scroll_Y = null) {
        $driv = $this->getModule('WebDriver')->webDriver;
        $scroll_Y = abs(intval($scroll_Y));
        $script= '';
            if (!$scroll_Y) {
          $script = '$heig = window.screen.availHeight; ';
            } else {
        $script = '$heig = ' . $scroll_Y . '; ';}
        $script .= 'window.scrollBy(0, $heig)';
        $driv->executeScript($script);
    }

    public function waitAlertAndCancel($timeout = 5, $interval = 200)
    {
        $driv = $this->getModule('WebDriver')->webDriver;
        $alert = $driv->wait($timeout, $interval)->until(function($driv) {
            try {
                $alert = $driv->switchTo()->alert();
                $alert->getText();
                return $alert;
            } catch (NoAlertOpenException $e) {
                return null;
            }
        });
        $alert->dismiss();
    }




}
