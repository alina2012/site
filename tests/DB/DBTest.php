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
/**
* Test Script Function
*/
    public function testInsertRecordintoBot_mes(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoBot_mes($db, 1, 1, 1); 
        $this->assertEquals(TRUE, $result);
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoBot_mes($db, "descript", "nam", 123, "id",1); 
        $this->assertEquals(FALSE, $result);
    }
/**
* Test Script Function
*/
    public function testInsertRecordintoUsers(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoUsers($db, 2, 3, 4, 5, "string", "phone"); 
        $this->assertEquals(TRUE, $result);
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoUsers($db, "descript", "nam", 123, "id",1, 5, 9); 
        $this->assertEquals(FALSE, $result);
    }
/**
* Test Script Function
*/
    public function testInsertRecordintoOrder_table(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoOrder_table($db, 2, 3, "{}"); 
        $this->assertEquals(TRUE, $result);
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoOrder_table($db, 2, 3, "string"); 
        $this->assertEquals(FALSE, $result);
    /**
    * Function result
    */  
        $result = $this->database->insertRecordintoOrder_table($db, "descript", "nam", 123, "id",1, 5, 9); 
        $this->assertEquals(FALSE, $result);
    }

    public function testUpdateRecord(){
        $db = mysqli_connect ("localhost:3308","root","", "shop");
        mysqli_query($db, "SET NAMES utf8");
        $result = $this->database->updateRecord($db, "test", "name", 123, "id",1); 
        $this->assertEquals(TRUE, $result);
        $result = $this->database->updateRecord($db, "descript", "nam", 123, "id",1); 
        $this->assertEquals(FALSE, $result);
        $result = $this->database->updateRecord($db, "descript", "data_id", 123, "id", 1, 3); 
        $this->assertEquals(FALSE, $result);
    }
}