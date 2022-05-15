<?php

/**
 * @file
 * Banana class.
 */

namespace Drupal\oop_example_10\BusinessLogic\Fruit;

/**
 * Banana class.
 */
class Banana extends Fruit {
  /**
   * Returns color of the object.
   */
  public function getColor() {
    return t('yellow');
  }

  /**
   * Returns price of the object.
   */
  public function getPrice() {
    return 123.45;
  }

  /**
   * Makes juice.
   */
  public function getJuice() {
    // Juicing code is omitted.
    return "Banana juice.";
  }

}
