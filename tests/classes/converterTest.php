<?php
namespace classes;
spl_autoload_register();
/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-10-03 at 21:38:40.
 */
class ConverterTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Converter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new \classes\Converter;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers classes\Converter::convert
     * @todo   Implement testConvert().
     */
    public function testConvert() {
        // Remove the following lines when you implement this test.
        $this->object->setTemperature(new \classes\temperature\Celsius(10));
        $this->assertEquals("50", $this->object->convert("fahrenheit"));
        $this->assertEquals("283.15", $this->object->convert("kelvin"));
    }

    /**
     * @covers classes\Converter::getTemperature
     * @todo   Implement testGetTemperature().
     */
    public function testGetTemperature() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers classes\Converter::setTemperature
     * @todo   Implement testSetTemperature().
     */
    public function testSetTemperature() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}