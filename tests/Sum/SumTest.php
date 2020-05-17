<?php

class SumTest extends \PHPUnit\Framework\TestCase
{
    private $sum;
    protected function setUp(): void {
        $this->sum = new \App\Models\Sum();  
    }
    protected function tearDown(): void {
        $this->sum = NULL;
    }
    public function testAdd(){
        $result = $this->sum->add(0, 1, 10); 
        $this->assertEquals(10, $result);
        $result = $this->sum->add("string", 1, 10); 
        $this->assertEquals(NULL, $result);
        $result = $this->sum->add(3, 1, 10, 5); 
        $this->assertEquals(NULL, $result);
    }

}