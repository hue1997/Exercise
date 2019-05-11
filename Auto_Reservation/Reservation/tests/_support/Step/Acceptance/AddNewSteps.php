<?php
namespace Step\Acceptance;
use Page\AddNewPage as AddNew;
use Page\ClearPage;
class AddNewSteps extends \AcceptanceTester
{
    /**
     * @param $id
     * @param $number
     * @param $description
     * @param $time
     * @throws \Exception
     * function add new reservations
     */
    public function addNewReservation($id, $number, $description, $time)
    {
        $I = $this;
        $I->amOnPage(AddNew::$URLAddNew);
        $I->waitForElementVisible(AddNew::$tableID, 30);
        $I->fillField(AddNew::$tableID,$id);
        $I->fillField(AddNew::$numberOfPerson, $number);
        $I->fillField(AddNew::$description, $description);
        $I->fillField(AddNew::$startTime, $time);
        $I->click(AddNew::$addOrEdit);
    }

    public function enterField($id, $number, $description, $time)
    {
        $I = $this;
        $I->amOnPage(AddNew::$URLAddNew);
        $I->waitForElementVisible(AddNew::$tableID, 30);
        $I->fillField(AddNew::$tableID,$id);
        $I->fillField(AddNew::$numberOfPerson, $number);
        $I->fillField(AddNew::$description, $description);
        $I->fillField(AddNew::$startTime, $time);
    }

    /**
     * @param $tableID
     * @param $number
     * @param $descrip
     * @param $time
     * @param $function
     * @throws \Exception
     * To check many cases login wrong value
     */
    public function wrongReservations($tableID, $number, $descrip, $time, $function)
    {
        $I = $this;
        $I->amOnPage(AddNew::$URLAddNew);
        switch ($function)
        {
            case 'tableIDEmpty':
                $I->comment('TableID value is empty');
                $I->addNewReservation('','2','hello', '9');
                $I->waitForText(AddNew::$errorID, 30);
                break;
            case 'tableIDChar':
                $I->comment('TableID value is char');
                $I->addNewReservation('a','2','hello', '9');
                $I->waitForText(AddNew::$errorChar, 30);
                break;
            case 'numberEmpty':
                $I->comment('Number value is empty');
                $I->addNewReservation('2','','hello', '9');
                $I->waitForText(AddNew::$errorNumber, 30);
                break;
            case 'numberChar':
                $I->comment('Number is char');
                $I->addNewReservation('2','a','hello', '9');
                $I->waitForText(AddNew::$errorChar, 30);
                break;
            case 'startTimeEmpty':
                $I->comment('Start Time value is empty');
                $I->addNewReservation('2','2','hello', '');
                $I->waitForText(AddNew::$errorTime, 30);
                break;
            case 'startTimeChar':
                $I->comment('Start Time value is char');
                $I->addNewReservation('2','2','hello', 'a');
                $I->waitForText(AddNew::$errorChar, 30);
                break;
        }
    }

}