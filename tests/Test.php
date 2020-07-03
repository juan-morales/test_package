<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class PPTest extends TestCase
{
    public function test_is_pp_available()
    {
        $this->assertTrue(function_exists("pp"), "Function pp() is not available");
    }

    public function test_can_return_value()
    {
        $this->assertNotEmpty(pp("sample message", true), "Test failed. A non-empty value was expected");
    }

    public function test_has_time_prefix()
    {
        $finalMessage = pp("sample message", true);
        $this->assertEquals(preg_match("/^\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d/", $finalMessage), 1);
    }
}


