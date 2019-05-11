<?php
namespace Page;

class AddNewPage
{
    // include url of current page
    public static $URLAddNew = '/reservationform';

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
    public static $header = "All Available Tables";
    /**
     * @var string
     */
    public static $errorID = "You must provide a value for Table ID.";

    /**
     * @var string
     */
    public static $errorNumber = "You must provide a value for Numberofperson.";

    /**
     * @var string
     */
    public static $errorTime = "You must provide a value for Start Time.";

    /**
     * @var string
     */
    public static $errorChar = "The input value 'a' is not parseable as an integer value.";

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
