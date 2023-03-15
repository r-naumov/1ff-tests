<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SigninCest
{
	public function signInSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('email','qa-test@1forfit.com');
        $I->fillField('password','gogomoto');
        $I->click('Login');
        $I->see('Discover the Secrets of The Keto World');
    }
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
