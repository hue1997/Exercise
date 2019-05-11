<?php 
use Step\Acceptance\AddNewSteps as Reservation;
use Step\Acceptance\FunctionSteps as Fun;
class AddNewCest
{
    /**
     * @var string
     */
   protected $tableId;

    /**
     * @var string
     */
   protected $number;

    /**
     * @var string
     */
   protected $descrip;

    /**
     * @var string
     */
   protected $time;

    /**
     * AddNewCest constructor.
     */
   public function __construct()
   {
       $this->tableId = "6";
       $this->number = "2";
       $this->descrip = "Holiday";
       $this->time = "8";
   }

    // tests

    /**
     * @param Reservation $I
     * @param $scenario
     * @throws Exception
     * Verify add new Reservation success
     */
    public function doAddNew(Reservation $I, $scenario)
    {
        $I->wantToTest('I want to do Reservation success');
        $I->addNewReservation($this->tableId, $this->number, $this->descrip, $this->time);

        $I = new Fun($scenario);
        $I->reloadData();
    }

    /**
     * @param Reservation $I
     * @param $scenario
     */
    public function doClear(Reservation $I, $scenario)
    {
        $I->wantToTest('I want to do clear reservation');
        $I->enterField($this->tableId, $this->number, $this->descrip, $this->time);

        $I = new Fun($scenario);
        $I->clearData();
    }

    /**
     * @param Reservation $I
     * @throws Exception
     * Verify enter "TableID" value is empty
     */
    public function doEnterTableIDEmpty(Reservation $I)
    {
        $I->wantToTest('I want to test enter field Table ID value empty');
        $I->wrongReservations($this->tableId, $this->number, $this->descrip, $this->time, 'tableIDEmpty');
    }

    /**
     * @param Reservation $I
     * @throws Exception
     * Verify enter "TableID" value is character
     */
    public function doEnterTableIDChar(Reservation $I)
    {
        $I->wantToTest('I want to test enter field Table ID value character');
        $I->wrongReservations($this->tableId, $this->number, $this->descrip, $this->time, 'tableIDChar');
    }

    /**
     * @param Reservation $I
     * @throws Exception
     * Verify enter "Number Of Person" value is empty
     */
    public function doNumberEmpty(Reservation $I)
    {
        $I->wantToTest('I want to test enter field Number Of Person value empty');
        $I->wrongReservations($this->tableId, $this->number, $this->descrip, $this->time, 'numberEmpty');
    }

    /**
     * @param Reservation $I
     * @throws Exception
     * Verify enter "Number Of Person" value is character
     */
    public function doNumberChar(Reservation $I)
    {
        $I->wantToTest('I want to test enter field Number Of Person value character');
        $I->wrongReservations($this->tableId, $this->number, $this->descrip, $this->time, 'numberChar');
    }

    /**
     * @param Reservation $I
     * @throws Exception
     * Verify enter "Start Time" value is empty
     */
    public function doEnterTimeEmpty(Reservation $I)
    {
        $I->wantToTest('I want to test enter field Start Time value empty');
        $I->wrongReservations($this->tableId, $this->number, $this->descrip, $this->time, 'startTimeEmpty');
    }

    /**
     * @param Reservation $I
     * @throws Exception
     * Verify enter "Start Time" value is character
     */
    public function doEnterTimeChar(Reservation $I)
    {
        $I->wantToTest('I want to test enter field Start Time value character');
        $I->wrongReservations($this->tableId, $this->number, $this->descrip, $this->time, 'startTimeChar');
    }

    /**
     * @param Fun $I
     * delete data
     */
    public function doDelete(Fun $I)
    {
        $I->wantToTest('I want to test Delete reservation');
        $I->deleteData();
    }

    /**
     * @param Fun $I
     * Edit data
     */
    public function doEdit(Fun $I)
    {
        $I->wantToTest('I want to test Edit reservation');
        $I->editData();
    }
}
