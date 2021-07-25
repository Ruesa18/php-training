<?php
require_once "src/core/misc/VehicleDirections.php";

class Vehicle {
    protected $numWheels = 0;
    protected $currentDirection = VehicleDirections::STRAIGHT;
    protected $currentSpeed = 0;

    protected function steerStraight() {
        $this->currentDirection = VehicleDirections::STRAIGHT;
    }

    protected function steerLeft() {
        $this->currentDirection = VehicleDirections::LEFT;
    }

    protected function steerRight() {
        $this->currentDirection = VehicleDirections::RIGHT;
    }

    protected function driveForward($speed) {
        $this->currentSpeed = $speed;
    }

    protected function driveBackwards($speed) {
        $this->currentSpeed = -$speed;
    }

    /*
    #############
    ## GETTERS ##
    #############
    */
    public function getNumWheels() {
        return $this->numWheels;
    }

    public function getDirection() {
        return $this->currentDirection;
    }

    public function getSpeed() {
        return $this->currentSpeed;
    }
}

?>
