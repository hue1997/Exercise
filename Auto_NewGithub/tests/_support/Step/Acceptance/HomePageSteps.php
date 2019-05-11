<?php
namespace Step\Acceptance;

use Page\HomePage;

class HomePageSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function checkClone()
    {
        $I = $this;
        $I->waitForElement(HomePage::$cloneValue,30);
    }
}