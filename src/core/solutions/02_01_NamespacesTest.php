<?php
use PHPUnit\Framework\TestCase;
require_once "src/exercises/02_Namespaces/01_Namespaces.php";
require_once "src/exercises/02_Namespaces/01_Namespaces_Two.php";

class NamespacesTest extends TestCase {
    function testNamespaceClass() {
        $testObject = new \name\exercise\ExerciseClass();
        $this->assertNotEquals("lol", $testObject->message);
    }
}


?>
