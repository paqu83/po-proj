<?php

/**
 * @file
 * Vehicle class.
 */

namespace Drupal\oop_example_10\BusinessLogic\Vehicle;

/**
 * Vehicle class.
 */
class Vehicle implements VehicleInterface {

  /**
   * The vehicle color.
   *
   * @var string
   *
   */
  public $color;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->color = t('red');
  }

  /**
   * Returns class type description.
   */
  public function getClassTypeDescription() {
    $s = t('a generic vehicle');
    return $s;
  }

  /**
   * Returns class description.
   */
  public function getDescription() {
    $s = t('This is') . ' ';
    $s .= $this->getClassTypeDescription();
    $s .= ' ' . t('of color') . ' ';
    $s .= $this->color;
    $s .= '.';
    return $s;
  }

  /**
   * Returns color of the object.
   */
  public function getColor() {
    return $this->color;
  }

  /**
   * Returns price of the object.
   */
  public function getPrice() {
    return 230.12;
  }

  /**
   * Makes left turn.
   */
  public function turnLeft() {
    // Turning code is omitted.
    return "Turn Left.";
  }

  /**
   * Makes right turn.
   */
  public function turnRight() {
    // Turning code is omitted.
    return "Turn Right.";
  }

}
