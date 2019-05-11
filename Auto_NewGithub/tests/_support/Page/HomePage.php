<?php
namespace Page;

class HomePage
{
    /**
     * @var string
     */
    public static $newButton = "(//a[@class='btn btn-sm btn-primary text-white'])[1]";

    /**
     * @var string
     */
    public static $nameRepository = "//input[@id='repository_name']";

    /**
     * @var string
     */
    public static $description = "//input[@id=\"repository_description\"]";

    /**
     * @var string
     */
    public static $createButton = "(//button[@type='submit'])[3]";

    /**
     * @var string
     */
    public static $cloneValue = "//input[@id=\"empty-setup-clone-url\"]";

}
