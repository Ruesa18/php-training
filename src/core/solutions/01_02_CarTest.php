<?php
use PHPUnit\Framework\TestCase;
require_once "src/exercises/01_Classes/02_Car.php";
require_once "src/core/misc/VehicleDirections.php";

class CarTest extends TestCase {

    function testNumWheels() {
        $test = new Car();
        $this->assertEquals(4, $test->getNumWheels());
    }

    function testDriveLeft() {
        $test = new Car();
        $test->driveToTheLeft();

        $this->assertEquals(VehicleDirections::LEFT, $test->getDirection());
        $this->assertEquals(10, $test->getSpeed());
    }

    function testDriveRight() {
        $test = new Car();
        $test->driveToTheRight();

        $this->assertEquals(VehicleDirections::RIGHT, $test->getDirection());
        $this->assertEquals(10, $test->getSpeed());
    }

    function testDriveReverse() {
        $test = new Car();
        $test->driveToTheLeft();
        $test->reverse();

        $this->assertEquals(VehicleDirections::STRAIGHT, $test->getDirection());
        $this->assertEquals(-5, $test->getSpeed());
    }
}
?>
