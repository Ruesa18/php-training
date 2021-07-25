<?php
use PHPUnit\Framework\TestCase;
require_once "src/exercises/01_Classes/03_Language.php";

class LanguageTest extends TestCase {
    function testIsExecutable() {
        $php = new PHPLang();
        $this->assertTrue($php->getIsExecutable());
    }

    function testIsCompiled() {
        $php = new PHPLang();
        $this->assertFalse($php->getIsCompiled());
    }

    function testName() {
        $php = new PHPLang();
        $this->assertEquals("PHP", $php->name);
    }
}


?>
