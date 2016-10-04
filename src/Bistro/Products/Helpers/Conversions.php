<?php

namespace Bistro\Products\Helpers;

use Bistro\Products\Helpers\Counting as Counting;
use Bistro\Products\Helpers\Pricing as Pricing;

use PhpUnitsOfMeasure\PhysicalQuantity\Mass;
use PhpUnitsOfMeasure\PhysicalQuantity\Volume;

class Conversions
{
  /**
  * Mass Conversions
  */

  /**
   * Convert Unit To Pounds
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToPounds($qty, $from)
  {
    $measure = new Mass($qty, $from);
    $converted = $measure->toUnit('pounds');
    return $converted;
  }

  /**
   * Convert Unit To Ounces
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToOunces($qty, $from)
  {
    $measure = new Mass($qty, $from);
    $converted = $measure->toUnit('ounces');
    return $converted;
  }

  /**
   * Convert Unit To Grams
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToGrams($qty, $from)
  {
    $measure = new Mass($qty, $from);
    $converted = $measure->toUnit('gram');
    return $converted;
  }

  /**
   * Convert Unit To Kilograms
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToKilograms($qty, $from)
  {
    $measure = new Mass($qty, $from);
    $converted = $measure->toUnit('kilogram');
    return $converted;
  }

  /**
  * Volume Conversions
  */

  /**
   * Convert Unit To Gallons
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToGallons($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('gallon');
    return $converted;
  }

  /**
   * Convert Unit To Quarts
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToQuarts($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('quart');
    return $converted;
  }

  /**
   * Convert Unit To Pints
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToPints($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('pint');
    return $converted;
  }

  /**
   * Convert Unit To Cups
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToCups($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('cup');
    return $converted;
  }

  /**
   * Convert Unit To Tablespoons
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToTablespoons($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('tbsp');
    return $converted;
  }

  /**
   * Convert Unit To Teaspoons
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToTeaspoons($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('tsp');
    return $converted;
  }

  /**
   * Convert Unit To Liters
   * @param  string $qty
   * @param  string $from
   * @return string
   */
  public static function convertToLiters($qty, $from)
  {
    $measure = new Volume($qty, $from);
    $converted = $measure->toUnit('liter');
    return $converted;
  }

  public static function conversionType($unit)
  {
    switch ($unit) {
      case 'lb':
      case 'lba':
      case 'lbm':
      case 'ozm':
      case 'kg':
      case 'g':
        $type = 'mass';
        break;

      case 'gal':
      case 'qt':
      case 'pint':
      case 'cup':
      case 'oz':
      case 'tbsp':
      case 'tsp':
      case 'l':
      case 'ml':
        $type = 'volume';
        break;

      case 'ea':
      case 'cn':
      case 'dz':
        $type = 'count';

      default:
        $type = "count";
        break;
    }

    return $type;
  }
}
