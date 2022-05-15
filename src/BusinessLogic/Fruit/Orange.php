<?php

/**
 * @file
 * Orange class.
 */

namespace Drupal\oop_example_10\BusinessLogic\Fruit;

/**
 * Orange class.
 */
class Orange extends Fruit {
  /**
   * Returns color of the object.
   */
  public function getColor() {
    return t('orange');
  }

  /**
   * Returns price of the object.
   */
  public function getPrice() {
    return 13.45;
  }

  /**
   * Makes juice.
   */
  public function getJuice() {
    // Juicing code is omitted.
    return "Orange juice.";
  }

}
