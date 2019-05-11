<?php

use Step\Acceptance\HomePageSteps;
use Step\Acceptance\GithubSteps as LoginStep;

class GithubCest
{
    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $pass;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * LoginGithubCest constructor.
     */
    public function __construct()
    {
        $this->user = 'nhoa16967@gmail.com';
        $this->pass = 'hueham1007';

        $this->name = 'edit5';
        $this->description = 'des';
    }

    /**
     * @param LoginStep $I
     * @throws Exception
     * Verify create New Repository after Login success
     */
    public function doLogin(LoginStep $I, $scenario)
    {
        $I->wantToTest('I want to do Login success');
        $I->login($this->user, $this->pass);
        $I->createRepository($this->name, $this->description);

        $I=new HomePageSteps($scenario);
        $I->checkClone();
    }

    /**
     * @param LoginStep $I
     * @throws Exception
     */
//    public function createRepos(LoginStep $I)
//    {
//        $I->createRepository($this->name, $this->description);
//    }

//    public function cloneValue(HomeSteps $I)
//    {
//        $I->checkClone();
//    }
}
