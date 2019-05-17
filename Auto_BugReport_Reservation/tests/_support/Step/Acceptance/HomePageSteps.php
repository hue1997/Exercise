<?php
namespace Step\Acceptance;

use Page\HomePage;
use Page\ReservationPage;
class HomePageSteps extends \AcceptanceTester
{
    /**
     * Reload data
     */
    public function reloadData()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->click(HomePage::$reloadData);
        $I->pause();
    }

    /**
     * Edit data
     */
    public function editData()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->click(HomePage::$edit);
        $I->waitForElementVisible(ReservationPage::$tableIDField, 30);
    }

    /**
     * Delete data
     */
    public function deleteData()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->click(HomePage::$delete);
        $I->pause();
    }

    /**
     * Click 'Add/Edit'
     */
    public function clickOK()
    {
        $I = $this;
        $I->click(ReservationPage::$addOrEdit);
    }

    /**
     * check have text 'All Available Tables'
     */
    public function checkAllTable()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->see(HomePage::$allTable);
        $I->pause();
    }

    /**
     * check click ID sort and Type sort
     */
    public function checkSort()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->click(HomePage::$idSort);
        $I->pause();
        $I->click(HomePage::$typeSort);
        $I->pause();
    }


}