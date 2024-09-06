<?php


namespace Tests\Unit;

use Tests\Support\UnitTester;

class FirstCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function testSuccess(UnitTester $I)
    {
        $I->assertTrue(true);
    }

    public function testFail(UnitTester $I)
    {
        $I->assertTrue(false);
    }
}
