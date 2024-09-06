<?php


namespace Tests\Functional;

use Exception;
use Tests\Support\FunctionalTester;

class FirstCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function testSuccess(FunctionalTester $I)
    {
        $I->assertTrue(true);
    }

    public function testFail(FunctionalTester $I)
    {
        $I->assertTrue(false);
    }
}
