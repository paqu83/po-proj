<?php

/**
 * @file
 * Contains \Drupal\oop_example_10\Controller\OopExample10Controller.
 */

namespace Drupal\oop_example_10\Controller;

// Declare class usage.
use Drupal\oop_example_10\BusinessLogic\Common\ColorInterface;
use Drupal\oop_example_10\BusinessLogic\Common\PriceInterface;
use Drupal\oop_example_10\BusinessLogic\Vehicle\Vehicle;
use Drupal\oop_example_10\BusinessLogic\Vehicle\Car\Car;
use Drupal\oop_example_10\BusinessLogic\Vehicle\Car\Toyota\ToyotaCamry;
use Drupal\oop_example_10\BusinessLogic\Vehicle\Car\Toyota\ToyotaYaris;
use Drupal\oop_example_10\BusinessLogic\Vehicle\Motorcycle\Motorcycle;
use Drupal\oop_example_10\BusinessLogic\Fruit\Orange;
use Drupal\oop_example_10\BusinessLogic\Fruit\Mango;


/**
 * Controller routines .
 */
class OopExample10Controller {

  /**
   * Constructs a simple page.
   */
  public function page() {

    $v = new Vehicle();
    $message = $v->getDescription();
    $message .= '<br />';

    $v1 = new Car();
    $v1->color = t('blue');
    $message .= $v1->getDescription();
    $message .= '<br />';

    $v2 = new Motorcycle();
    $v2->color = t('green');
    $message .= $v2->getDescription();
    $message .= '<br />';

    $v3 = new ToyotaCamry();
    $v3->color = t('black');
    $message .= $v3->getDescription();
    $message .= '<br />';
    $message .= $v3->getDoorsDescription();
    $message .= '<br />';

    $v4 = new ToyotaYaris();
    $v4->color = t('yellow');
    $message .= $v4->getDescription();
    $message .= '<br />';
    $message .= $v4->getDoorsDescription();
    $message .= '<br />';

    $f1 = new Orange();
    $f2 = new Mango();

    $message .= $this->colorOutput($f1);
    $message .= $this->priceOutput($f1);
    $message .= '<br />';
    $message .= $this->colorOutput($v3);
    $message .= $this->priceOutput($v3);
    $message .= '<br />';
    $message .= $this->colorOutput($f2);
    $message .= $this->priceOutput($f2);
    $message .= '<br />';

    $message .= $v4->turnRight();
    $message .= '<br>';

    $message .= $f2->getJuice();
    $message .= '<br>';

    return array(
      '#markup' => '<p>' . $message . '</p>',
    );
  }

  /**
   * Returns color message.
   */
  protected function colorOutput(ColorInterface $color_object) {
    $s = t('This object has color') . ' ' . $color_object->getColor() . '.';
    return $s;
  }

  /**
   * Returns price message.
   */
  protected function priceOutput(PriceInterface $price_object) {
    $s = t('This object has price') . ' ' . $price_object->getPrice() . '.';
    return $s;
  }

}
