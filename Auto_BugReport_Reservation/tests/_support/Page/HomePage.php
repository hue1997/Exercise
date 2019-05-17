<?php
namespace Page;

class HomePage
{
    // include url of current page
    public static $URL = 'https://staging2.formos.com/QATest/';

    /**
     * @var string
     */
    public static $newReservationLink = '//a[text()="New Reservation"]';

    /**
     * @var string
     */
    public static $delete  = '(//td[@class=\'delete\'])[2]';

    /**
     * @var string
     */
    public static $edit = '(//td[@class=\'edit\'])[2]';

    /**
     * @var string
     */
    public static $reloadData = '//a[text()="Reload Data"]';

    /**
     * @var string
     */
    public static $allTable = 'All Available Tables';

    /**
     * @var string
     */
    public static $idSort = '//img[@id="id:sort"]';

    /**
     * @var string
     */
    public static $typeSort = '//img[@id="type:sort"]';
}
