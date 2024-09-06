<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testSuccess(AcceptanceTester $I)
    {
        $I->assertTrue(true);
    }

    public function testFail(AcceptanceTester $I)
    {
        $I->assertTrue(false);
    }
}
