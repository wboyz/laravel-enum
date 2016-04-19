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

    /**
     * @test
     */
    public function it_has_a_specific_key()
    {
        $value = Fruits::hasKey('PEACH');
        $this->assertEquals(true, $value);
    }

    /**
     * @test
     */
    public function it_does_not_have_a_specific_key()
    {
        $value = Fruits::hasKey('APPLE');
        $this->assertEquals(false, $value);
    }

    /**
     * @test
     */
    public function it_has_a_specific_value()
    {
        $value = Fruits::hasValue(2);
        $this->assertEquals(true, $value);
    }

    /**
     * @test
     */
    public function it_does_not_have_a_specific_value()
    {
        $value = Fruits::hasValue('nothing');
        $this->assertEquals(false, $value);
    }

    /**
     * @test
     */
    public function it_does_not_have_a_default_value_in_its_dictionary()
    {
        $dictionary = Fruits::toDictionary();
        $result = array_key_exists('DEFAULT_VALUE', $dictionary);
        $this->assertFalse($result);
    }
}
