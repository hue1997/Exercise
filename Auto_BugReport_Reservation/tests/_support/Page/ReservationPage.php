<?php
namespace Page;

class ReservationPage
{
    /**
     * @var string
     */
    public static $newReservation = "//a[text()='New Reservation']";

    /**
     * @var string
     */
    public static $tableID = "//input[@id='tableID']";

    /**
     * @var string
     */
    public static $numberOfPerson = "//input[@id='numberofperson']";

    /**
     * @var string
     */
    public static $description = "//textarea[@id='description']";

    /**
     * @var string
     */
    public static $startTime = "//input[@id='startTime']";

    /**
     * @var string
     */
    public static $addOrEdit = "//input[@type='submit']";

    /**
     * @var string
     */
    public static $calendarIcon = "//img[@id='date:trigger']";

    public static $timeFromTo = '17PM->23PM';
}
