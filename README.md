# Bowling Test

## Prerequisite

1. PHP 7.1 (https://php.net/downloads.php)
2. Composer (https://getcomposer.org/)
3. PHPUnit 7.1 (https://phpunit.de/)

For command line use, please setup properly for global environment.

## Installation

Install phpunit for project

    composer install

## Folder Structures

```
Project/
    |-- src/    (php source code)
    |-- tests/  (Testing files)
    |-- composer.json   (Composer configuration file)
    |-- phpunit.xml     (PHPUnit configuration file)
```

## Run PHPUnit in Terminal

Run all testing files in `tests/` folder

```bash
vendor/bin/phpunit tests
```

Run testing settings in phpunit.xml configuration

```bash
vendor/bin/phpunit
```

## Constraints

A class `Bowling` is required. It must adhere to this interface :

```php
interface Bowling
{
    public function roll(int $pins): void;

    public function score(): int;
}
```

## Bowling Rules

- The goal is to knock down all ten pins
- Each frame consists of throwing the ball twice to knock down all the pins
- If you knock down all the pins with the first ball, it is called a "strike"
- If you knock down all the pins with the second ball, it is called a "spare"
- Each games consists of ten frames. If you bowl a strike in the tenth frame, you get
two more balls. If you throw a spare, you get one more ball.
- Open frames are frames without a strike or spare
- Scoring is based on the number of pins you knock down. However, if you bowl a
spare, you get to add the pins in your next ball to that frame. For strikes, you get
the next two balls.
- The maximum score is 300.

### Examples

- Throws are 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 / 1 - 1 : Score is 20 (10 throws).
- Throws are 5 - 5 / 1 - 1 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 : Score is 13 (10 throws).
- Throws are 10 / 1 - 1 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 : Score is 14 (10 throws).
- Throws are 0 - 5 / 5 - 1 / 1 - 1 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 / 0 - 0 : Score is 13 (10 throws).
- Throws are 10 / 10 / 10 / 10 / 10 / 10 / 10 / 10 / 10 / 10 / 10 / 10 : Score is 300 (12 throws).