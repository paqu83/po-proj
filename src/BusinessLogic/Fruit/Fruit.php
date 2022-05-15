<?php

/**
 * @file
 * Fruit class.
 */

namespace Drupal\oop_example_10\BusinessLogic\Fruit;

use Drupal\oop_example_10\BusinessLogic\Common\ColorInterface;

/**
 * Fruit class.
 */
class Fruit implements FruitInterface {
  /**
   * Returns color of the object.
   */
  public function getColor() {
    return t('green');
  }

  /**
   * Returns price of the object.
   */
  public function getPrice() {
    return 122.45;
  }

  /**
   * Makes juice.
   */
  public function getJuice() {
    // Juicing code is omitted.
    return "Some juice.";
  }

}
