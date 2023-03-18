<?php

namespace Nhn\Boilerplate\Tests;

use Tests\TestCase;

class BoilerplateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_add_macro_nhn_successful()
    {
        $this->assertTrue(\Str::hasMacro('nhn'));
    }

    public function test_macro_nhn_work_successful()
    {
        $value = "Hello!!!";

        $this->assertEquals(\Str::nhn($value), $value);
    }
}
