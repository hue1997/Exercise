<?php
namespace Page;

class ClearPage
{
    /**
     * @var string
     */
    public static $clear = "//a[text()='clear']";

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
