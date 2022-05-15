<?php

/**
 * @file
 * Banana class.
 */

namespace Drupal\oop_example_10\BusinessLogic\Fruit;

/**
 * Mango class.
 */
class Mango extends Fruit {
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
    return 14.45;
  }

  /**
   * Makes juice.
   */
  public function getJuice() {
    // Juicing code is omitted.
    return "Mango juice.";
  }

}
