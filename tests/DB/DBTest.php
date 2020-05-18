<?php

class DBTest extends \PHPUnit\Framework\TestCase
{   
    private $database;
    protected function setUp(): void {
        $this->database = new \App\Models\DB();  
    }
    protected function tearDown(): void {
        $this->database = NULL;
    }
    public function testGetRecord(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
        $result = $this->database->getRecord($db, "users", "id", 3, "name"); 
        $this->assertEquals("Администратор", $result);
        $result = $this->database->getRecord($db, "descript", "data_id", 4, "description"); 
        $this->assertEquals("Какао", $result);
        $result = $this->database->getRecord($db, "descript", "data_id", 4, "description", "000"); 
        $this->assertEquals(NULL, $result);
        $result = $this->database->getRecord($db, "descrip", "data_id", 4, "description"); 
        $this->assertEquals(NULL, $result);
        $result = $this->database->getRecord($db, "descript", "phone", 4, "description"); 
        $this->assertEquals(NULL, $result);
    }
}