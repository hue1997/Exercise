<?php
namespace Page;

class DeletePage
{
    public static $URL = 'https://staging2.formos.com/QATest/';

    /**
     * @var string
     */
    public static $delete = "(//td[@class='delete'])[2]";

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
