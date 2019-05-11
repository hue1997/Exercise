<?php
namespace Step\Acceptance;
use Page\FirstPage as firstPage;
class FirstStep extends \AcceptanceTester
{
    /**
     * check Username field exist on Login page
     */
    public function checkUserNameExist()
    {
        $I = $this;
        $I->wantToTest('Go to Login page');
        $I->amOnPage(firstPage::$URL);
        $I->wantToTest('I want to check Username on Login page');
        $I->waitForElementVisible(firstPage::$username,5); // đợi cái element này nó hiển thị với tgian chờ max là 3s, sau 3s thì out
        //$I->waitForElement(firstPage::$username,3); // có những cái element không hiển thị lên, vdu khi nhập đúng định dạng email thì mới hiện button Continue lên để click
        //$I->waitForElementNotVisible();
        //$I->fillField(firstPage::$username);
    }

}