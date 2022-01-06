# PHP Training
by [Sandro Rüfenacht](https://github.com/Ruesa18)

I hope this repository helps you to either get into PHP or to refresh your memory about this language.
The exercises are targeted towards people who already know the basic terminology of programming and those who maybe already know another language.

## How to get started
You can install all the dependencies via [composer](https://getcomposer.org/). Use the command `composer install` inside the projects root folder (`/php-training/`).
Composer will then read the `composer.json` file and install all needed libraries.
After that you're ready for training. You can find all exercises under `/php-training/exercises`.

## Folder Structure
### Where to find the exercises
You'll find all exercises under `/php-training/src/exercies/`.
To test your solutions see chapter [Testing your solutions](#Testing-your-solutions)

### Where to find base classes
Some exercise-classes extend base-classes.
Those class can be found under `/php-training/src/core/misc/`.

## Testing your solutions
You can test your solutions of the exercises by running the command `vendor/bin/phpunit` inside the root directory of this project (`/php-training/`).
This will trigger all Unit-Tests for the exercises and show you what works and what doesn't.

## Master Solutions
If you get stuck, can't find a solution to a task or just want to see how I would solve a problem you can take a look at the master solutions.
You can find them inside the directory `/php-training/src/master_solutions`.

## Final words
I hope this repository helps you to either get into PHP or to refresh your memory about this language.
Now have fun and good learning! 🎉
