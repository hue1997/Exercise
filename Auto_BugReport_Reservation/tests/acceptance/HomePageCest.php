<?php 
use Step\Acceptance\HomePageSteps as HomeSteps;
use Step\Acceptance\ReservationPageSteps as ReservationSteps;
class HomePageCest
{
    /**
     * @var
     */
    protected $tableID;

    /**
     * @var
     */
    protected $numberPerson;

    /**
     * @var
     */
    protected $date;

    /**
     * @var
     */
    protected $description;

    /**
     * @var
     */
    protected $startTime;

    /**
     * @var
     */
    protected $faker;

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
//        $this->faker   = Factory::create();
//        $this->tableID = '2';
//        $this->numberPerson = '5';
//        $this->date = '05/12/2019';
//        //Chưa tìm ra cách lấy ngày tương lai
//        // $this->date = $this->faker->date($format = 'd/m/Y', $min = 'now');
//        $this->description = $this->faker->text(30);
//        $this->startTime = $this->faker->numberBetween(17,23);
        $this->description = $this->faker->text(30);
        $this->reservation =
            [
                'id' => "1",
                'number'=> '13',
                'description' => "testing",
                'time' => '5'
            ];

        $this->newReservation =
            [
                'id' => "1",
                'number'=> '13',
                'description' => "testing",
                'time' => '5'
            ];
    }
    /**
     * @param HomeSteps $I
     * @throws Exception
     */
    public function checkLinkReservation(HomeSteps $I)
    {
        $I->clickNewReservationLink();
    }

    /**
     * @param HomeSteps $I
     * @throws Exception
     */
    public function checkEdit(HomeSteps $I)
    {
        $I->clickEditLink();
    }

    /**
     * @param HomeSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createReservation(HomeSteps $I, $scenario)
    {
        $I->clickNewReservationLink();
        $I = new ReservationSteps($scenario);
        $I->createReservation($this->reservation);
        $I->checkBookingSuccess($this->description);
    }
}
