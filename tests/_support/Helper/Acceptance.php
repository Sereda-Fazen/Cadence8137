<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{

        public function scrollDown($scroll_Y = null)
        {
            $driv = $this->getModule('WebDriver')->webDriver;
            $scroll_Y = abs(intval($scroll_Y));
            $script= '';
      if (!$scroll_Y) {
          $script = '$heig = window.screen.availHeight; ';
      } else {
          $script = '$heig = ' . $scroll_Y . '; ';
      }
      $script .= 'window.scrollBy(0, $heig)';
      $driv->executeScript($script);
 }


}
