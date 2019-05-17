<?php 
use Step\Acceptance\HomePageSteps as HomeSteps;
use Step\Acceptance\ReservationPageSteps as ReservationSteps;
class ReservationPageCest
{
    // tests
    /**
     * @var array
     */
    protected $reservation;

    /**
     * @var array
     */
    protected $newReservation;

    /**
     * ReservationPageCest constructor.
     */
    public function __construct()
    {
        $this->reservation =
            [
                'id' => "5",
                'number'=> '4',
                'description' => "testing",
                'time' => '5'
            ];

        $this->newReservation =
            [
                'id' => "2",
                'number'=> '2',
                'description' => "testing",
                'time' => '5'
            ];
    }

    /**
     * @param HomeSteps $I
     */
    public function H_RR_01(HomeSteps $I)
    {
        $I->wantToTest('The data displayed in the table in incorrect');
        $I->checkAllTable();
    }

    /**
     * @param HomeSteps $I
     */
    public function H_RR_02(HomeSteps $I)
    {
        $I->wantToTest('Tablesorter and Typesorter  does not sorting on the first click');
        $I->checkSort();
    }

    /**
     * @param HomeSteps $I
     */
    public function H_RR_03(HomeSteps $I)
    {
        $I->wantToTest('There is no confirmation when click delete link');
        $I->deleteData();
    }

    /**
     * @param HomeSteps $I
     */
    public function H_RR_05(HomeSteps $I)
    {
        $I->wantToTest('Filter does not reset after click con reload data button');
        $I->reloadData();
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_11(ReservationSteps $I)
    {
        $I->wantToTest('Cannot click on "calendar" icon');
        $I->clickCalendar();
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_12(ReservationSteps $I)
    {
        $I->wantToTest('Missing error message with booking with  invalid description');
        $this->reservation['description']='あいうえお';
        $I->addNewReservation($this->reservation);
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_14(ReservationSteps $I)
    {
        $I->wantToTest('Missing error message when enter invalid Table ID');
        $this->reservation = $this->newReservation;
        $this->reservation['id']='9';
        $I->addNewReservation($this->reservation);
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_15(ReservationSteps $I)
    {
        $I->wantToTest('Reservation can be book with a number of people value than the limit');
        $this->reservation = $this->newReservation;
        $this->reservation['number']='4';
        $I->addNewReservation($this->reservation);
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_18(ReservationSteps $I)
    {
        $I->wantToTest('Reservation can be book with the invalid Start time');
        $this->reservation = $this->newReservation;
        $this->reservation['time']='1';
        $I->addNewReservation($this->reservation);
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_20(ReservationSteps $I)
    {
        $I->wantToTest('The suggest Start Time displayed is incorrect');
        $I->errorStartTime();
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     */
    public function H_RR_21(ReservationSteps $I)
    {
        $I->wantToTest('Time between reservations for a single table is not 90 minutes');
        $this->reservation = $this->newReservation;
        $this->reservation['time']='4';
        $I->addNewReservation($this->reservation);

        $this->reservation = $this->newReservation;
        $this->reservation['time']='5';
        $I->addNewReservation($this->reservation);
    }
}
