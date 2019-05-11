<?php
namespace Page;

class FirstPage
{
    // include url of current page
    /**
     * @var string
     */
    public static $URL = 'https://staging2.formos.com/QATest/reservationform';

    /**
     * @var string
     */
    //public static $username1 = '//body/div/div/div/div/div/main/div/div/div/form/div/div/input'; bị chửi đó nghe

    /**
     * @var string
     */
    public static $username = '//input[@id="usernameOrEmail"]';

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
