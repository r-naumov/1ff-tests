<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Negative_Login1Cest
{
    public function _before(AcceptanceTester $I)
    {
		$I->amOnPage('/login');
        $I->fillField('email','test@test.com');
        $I->fillField('password','gogomoto');
        $I->click('Login');
        $I->see('These credentials do not match our records.');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
