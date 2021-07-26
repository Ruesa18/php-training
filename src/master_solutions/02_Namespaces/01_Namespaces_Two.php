<?php
namespace name\exercise;

/*
 * Namespaces are a way to group classes, functions and constants. It ensures that there are no name collisions.
 * This allows us to have for example two classes with the name "User" inside the same project.
 *
 * Check the file `01_Namespaces.php` for reference. In there I defined the namespace `name\base` and the class `ExerciseBaseClass`.
 * Create a class `ExerciseClass` inside of here that extends the class `\name\base\ExerciseBaseClass`.
 * Inside of this new ExerciseClass please override the value of the message attribute.
 *
 * Whenever we address a class that is inside a namespace we should use namespace + class name.
 * If a class, function or constant is not given a namespace it will just be added to the `global space`.
 * A namespace declaration must always be the first statement inside the <?php-Tag of the file.
 */
class ExerciseClass extends \name\base\ExerciseBaseClass {
    public $message;
}

?>
