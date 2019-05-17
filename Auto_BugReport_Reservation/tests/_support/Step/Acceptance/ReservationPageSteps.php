<?php
namespace Step\Acceptance;
use Page\HomePage;
use Page\ReservationPage;

class ReservationPageSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function clickCalendar()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$newReservationLink, 30);
        $I->click(HomePage::$newReservationLink);
        $I->click(ReservationPage::$calendarIcon);
        $I->pause();
    }

    /**
     * @param array $reservation
     * @throws \Exception
     */
    public function addNewReservation($reservation = array())
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->click(HomePage::$newReservationLink);
        $I->waitForElementVisible(ReservationPage::$tableID, 30);
        $I->fillField(ReservationPage::$tableID,$reservation['id']);
        $I->fillField(ReservationPage::$numberOfPerson, $reservation['number']);
        if(isset($reservation['description']))
        {
            $I->fillField(ReservationPage::$description, $reservation['description']);
        }
        $I->fillField(ReservationPage::$startTime, $reservation['time']);
        $I->click(ReservationPage::$addOrEdit);
        $I->pause();
    }

    /**
     * @throws \Exception
     */
    public function errorStartTime()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->click(HomePage::$newReservationLink);
        $I->see(ReservationPage::$timeFromTo);
        $I->pause();
    }
}