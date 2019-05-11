<?php
namespace Step\Acceptance;

use Page\HomePage;
use Page\GithubPage as Login;

class GithubSteps extends \AcceptanceTester
{

    /**
     * @param $user
     * @param $pass
     * @throws \Exception
     */
    public function login($user, $pass)
    {
        $I = $this;
        $I->amOnPage(Login::$URLGithub);
        $I->waitForElementVisible(Login::$userName,30);
        $I->fillField(Login::$userName, $user);
        $I->fillField(Login::$passWord, $pass);
        $I->click(Login::$loginButton);
    }

    /**
     * @param $name
     * @param $description
     * @throws \Exception
     */
    public function createRepository($name, $description)
    {
        $I = $this;
        $I->click(HomePage::$newButton);
        $I->waitForElementVisible(HomePage::$nameRepository,30);
        $I->fillField(HomePage::$nameRepository, $name);
        $I->fillField(HomePage::$description, $description);
        $I->click(HomePage::$createButton);
    }

}