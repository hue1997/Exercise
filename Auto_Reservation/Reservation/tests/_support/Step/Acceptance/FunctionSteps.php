<?php
namespace Step\Acceptance;

use Page\AddNewPage;
use Page\ClearPage;
use Page\DeletePage;
use Page\EditPage;
use Page\ReloadDataPage;

class FunctionSteps extends \AcceptanceTester
{
    /**
     * Clear data
     */
    public function clearData()
    {
        $I = $this;
        $I->click(ClearPage::$clear);
        $I->pauseExecution();
    }

    /**
     * Reload data
     */
    public function reloadData()
    {
        $I = $this;
        $I->click(ReloadDataPage::$reloadData);
        $I->pauseExecution();
    }

    /**
     * Edit data
     */
    public function editData()
    {
        $I = $this;
        $I->amOnPage(EditPage::$URL);
        $I->click(EditPage::$edit);
        $I->pauseExecution();
    }

    /**
     * Delete data
     */
    public function deleteData()
    {
        $I = $this;
        $I->amOnPage(EditPage::$URL);
        $I->click(DeletePage::$delete);
        $I->pauseExecution();
    }

    /**
     * Click 'Add/Edit'
     */
    public function clickOK()
    {
        $I = $this;
        $I->click(AddNewPage::$addOrEdit);
    }
}