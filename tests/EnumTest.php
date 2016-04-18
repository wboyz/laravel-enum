<?php

class Fruits extends \WBoyz\LaravelEnum\BaseEnum
{
    const PEACH = 2;
    const PEAR = 3;
}

class EnumTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_has_a_default_value()
    {
        $default = Fruits::getValue('MELON');
        $this->assertEquals(0, $default);
    }

    /**
     * @test
     */
    public function it_can_get_an_element_by_key()
    {
        $value = Fruits::getValue('PEACH');
        $this->assertEquals(2, $value);
    }
}
