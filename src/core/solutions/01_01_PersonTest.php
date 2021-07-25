<?php
use PHPUnit\Framework\TestCase;
require_once "src/exercises/01_Classes/01_Person.php";

class PersonTest extends TestCase {
    function testFirstname() {
        $testObject = new Person();
        $this->assertEquals($testObject->firstname, "Peter");
    }
}


?>
