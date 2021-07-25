<?php
require_once "src/core/misc/Vehicle.php";
/*
 * This Car-Class extends the Vehicle class.
 * By extending a class we can start generalizing real-world problems and specify them as we go.
 */
class Car extends Vehicle {
    /*
     * The Vehicle class has an attribute for the amount of wheels that the vehicle has.
     * Our car will have 4 wheels. To save that value we'll need to override the default value.
     * To do that our attribute needs to have the same visibility and name as the one in the base-class.
     *
     * I've already started to add the attribute to this class. Please go ahead and also set the value for this attribute.
     */
    protected $numWheels = 4;

    // Implement the empty methods inside of the Car class.

    /*
     * This method should steer to the left and the start driving forward at a speed of 10.
     * To do that you'll need to call the method "steerLeft" and the method "driveForward".
     * The latter takes the argument of the speed (Integer).
     */
    public function driveToTheLeft() {
        $this->steerLeft();
        $this->driveForward(10);
    }

    /*
     * This method should steer to the right and the start driving forward at a speed of 10.
     * To do that you'll need to call the method "steerRight" and the method "driveForward".
     * The latter takes the argument of the speed (Integer).
     */
    public function driveToTheRight() {
        $this->steerRight();
        $this->driveForward(10);
    }

    /*
     * This method should reverse the car in a straight line at a speed of 5.
     * To do that you'll need to call the "steerStraight" method and the "driveBackwards" of this instance.
     * The latter method takes an argument of the chosen speed (Integer).
     */
    public function reverse() {
        $this->steerStraight();
        $this->driveBackwards(5);
    }
}

?>
