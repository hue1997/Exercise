<?php
namespace Page;

class ReloadDataPage
{
    /**
     * @var string
     */
    public static $reloadData = "//a[text()=\"Reload Data\"]";

    public static function route($param)
    {
        return static::$URL.$param;
    }
}
