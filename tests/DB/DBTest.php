<?php
/**
 * @file
 * Page containing the test class
 */
/**
* Сlass for testing
*/
class DBTest extends \PHPUnit\Framework\TestCase
{   
    private $database;
/**
* Test Setup Function
*/
    protected function setUp(): void {
        $this->database = new \App\Models\DB();  
    }
/**
* Memory free function
*/
    protected function tearDown(): void {
        $this->database = NULL;
    }
/**
* Test Script Function
*/
    public function testGetRecord(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
    /**
    * Function result
    */
        $result = $this->database->getRecord($db, "users", "id", 3, "name"); 
        $this->assertEquals("Администратор", $result);
    /**
    * Function result
    */
        $result = $this->database->getRecord($db, "descript", "data_id", 4, "description"); 
        $this->assertEquals("Какао", $result);
    /**
    * Function result
    */    
        $result = $this->database->getRecord($db, "descript", "data_id", 4, "description", "000"); 
        $this->assertEquals(NULL, $result);
    /**
    * Function result
    */    
        $result = $this->database->getRecord($db, "descrip", "data_id", 4, "description"); 
        $this->assertEquals(NULL, $result);
    /**
    * Function result
    */    
        $result = $this->database->getRecord($db, "descript", "phone", 4, "description"); 
        $this->assertEquals(NULL, $result);
    }
}