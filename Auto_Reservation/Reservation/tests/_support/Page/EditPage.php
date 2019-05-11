<?php
namespace Page;

class EditPage
{
    public static $URL = 'https://staging2.formos.com/QATest/';

    /**
     * @var string
     */
    public static $edit = "(//td[@class='edit'])[2]";

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
