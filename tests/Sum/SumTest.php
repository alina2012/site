<?php
/**
 * @file
 * Page containing the test class
 */
/**
* Сlass for testing
*/
class SumTest extends \PHPUnit\Framework\TestCase
{
    private $sum;
/**
* Test Setup Function
*/
    protected function setUp(): void {
        $this->sum = new \App\Models\Sum();  
    }
/**
* Memory free function
*/
    protected function tearDown(): void {
        $this->sum = NULL;
    }
/**
* Test Script Function
*/
    public function testAdd(){
    /**
    * Function result
    */
        $result = $this->sum->add(0, 1, 10); 
        $this->assertEquals(10, $result);
    /**
    * Function result
    */
        $result = $this->sum->add("string", 1, 10); 
        $this->assertEquals(NULL, $result);
    /**
    * Function result
    */
        $result = $this->sum->add(3, 1, 10, 5); 
        $this->assertEquals(NULL, $result);
    }

}