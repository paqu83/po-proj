<?php

/**
 * @file
 * Vehicle interface.
 */

namespace Drupal\oop_example_10\BusinessLogic\Vehicle;


use Drupal\oop_example_10\BusinessLogic\Common\ColorInterface;
use Drupal\oop_example_10\BusinessLogic\Common\PriceInterface;

/**
 * Vehicle interface.
 */
interface VehicleInterface extends ColorInterface, DriveInterface, PriceInterface {

}
