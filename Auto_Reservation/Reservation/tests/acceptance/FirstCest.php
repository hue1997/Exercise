<?php 
use Step\Acceptance\FirstStep as firstStep;
class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param firstStep $I
     * check user name exist on Login page
     */
    public function checkUserNameExist(firstStep $I)
    {
        $I->checkUserNameExist();
    }
}
