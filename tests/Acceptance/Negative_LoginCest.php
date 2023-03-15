<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Negative_LoginCest
{
    public function _before(AcceptanceTester $I)
    {
		$I->amOnPage('/login');
        $I->fillField('email','qa-test@1forfit.com');
        $I->fillField('password','123456');
        $I->click('Login');
        $I->see('These credentials do not match our records.');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
