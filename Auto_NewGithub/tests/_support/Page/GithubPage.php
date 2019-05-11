<?php
namespace Page;

class GithubPage
{
    // include url of current page
    public static $URLGithub = '/login';

    /**
     * @var string
     */
    public static $userName = "//input[@name=\"login\"]";

    /**
     * @var string
     */
    public static $passWord = "//input[@name=\"password\"]";

    /**
     * @var string
     */
    public static $loginButton = "//input[@name=\"commit\"]";

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
