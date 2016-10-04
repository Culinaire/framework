<?php

namespace Bistro\Products\Helpers;

use Bistro\Products\Helpers\Conversions as Conversions;
use Bistro\Products\Helpers\Counting as Counting;

class Pricing
{
  public static function individualUnitPrice($conversion, $price, $qty, $unit)
  {
    $calc = $price/$conversion;
    return $calc;
  }

  public static function eachPrice($conversion, $price, $qty, $unit)
  {
    $calc = $price/$qty;
    return $calc;
  }

  public static function rawPricePerPound($unit_price, $unit_type, $unit_qty)
  {
    $pound = Conversions::convertToPounds($unit_qty, $unit_type);
    $price = $unit_price/$pound;
    return $price;
  }

  public static function pricePerPound($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerPound($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / Lb");
    return $money;
  }

  public static function rawPricePerOunce($unit_price, $unit_type, $unit_qty)
  {
    $ounce = Conversions::convertToOunces($unit_qty, $unit_type);
    $price = $unit_price/$ounce;
    return $price;
  }
  public static function pricePerOunce($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerOunce($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / Oz");
    return $money;
  }

  public static function rawPricePerGallon($unit_price, $unit_type, $unit_qty)
  {
     $gallon = Conversions::convertToGallons($unit_qty, $unit_type);
     $price = $unit_price/$gallon;
     return $price;
  }

  public static function pricePerGallon($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerGallon($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / Gal");
    return $money;
  }

  public static function rawPricePerQuart($unit_price, $unit_type, $unit_qty)
  {
   $quart = Conversions::convertToQuarts($unit_qty, $unit_type);
   $price = $unit_price/$quart;
   return $price;
  }

  public static function pricePerQuart($unit_price, $unit_type, $unit_qty)
  {
   $price = self::rawPricePerQuart($unit_price, $unit_type, $unit_qty);
   $money = self::money($price, "$%i / Qt");
   return $money;
  }

  public static function rawPricePerPint($unit_price, $unit_type, $unit_qty)
  {
    $unit = Conversions::convertToPints($unit_qty, $unit_type);
    $price = $unit_price/$unit;
    return $price;
  }

  public static function pricePerPint($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerPint($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / Pt");
    return $money;
  }

  public static function rawPricePerCup($unit_price, $unit_type, $unit_qty)
  {
   $unit = Conversions::convertToCups($unit_qty, $unit_type);
   $price = $unit_price/$unit;
   return $price;
  }

  public static function pricePerCup($unit_price, $unit_type, $unit_qty)
  {
   $price = self::rawPricePerCup($unit_price, $unit_type, $unit_qty);
   $money = self::money($price, "$%i / Cup");
   return $money;
  }

  public static function rawPricePerTablespoon($unit_price, $unit_type, $unit_qty)
  {
    $unit = Conversions::convertToTablespoons($unit_qty, $unit_type);
    $price = $unit_price/$unit;
    return $price;
  }

  public static function pricePerTablespoon($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerTablespoon($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / Tbsp");
    return $money;
  }

  public static function rawPricePerTeaspoon($unit_price, $unit_type, $unit_qty)
  {
   $unit = Conversions::convertToTeaspoons($unit_qty, $unit_type);
   $price = $unit_price/$unit;
   return $price;
  }

  public static function pricePerTeaspoon($unit_price, $unit_type, $unit_qty)
  {
   $price = self::rawPricePerTeaspoon($unit_price, $unit_type, $unit_qty);
   $money = self::money($price, "$%i / Tsp");
   return $money;
  }

  public static function rawPricePerGram($unit_price, $unit_type, $unit_qty)
  {
    $unit = Conversions::convertToGrams($unit_qty, $unit_type);
    $price = $unit_price/$unit;
    return $price;
  }

  public static function pricePerGram($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerGram($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / G");
    return $money;
  }

  public static function rawPricePerKilogram($unit_price, $unit_type, $unit_qty)
  {
   $unit = Conversions::convertToKilograms($unit_qty, $unit_type);
   $price = $unit_price/$unit;
   return $price;
  }

  public static function pricePerKilogram($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerKilogram($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / Kg");
    return $money;
  }

  public static function rawPricePerLiter($unit_price, $unit_type, $unit_qty)
  {
    $unit = Conversions::convertToLiters($unit_qty, $unit_type);
    $price = $unit_price/$unit;
    return $price;
  }

  public static function pricePerLiter($unit_price, $unit_type, $unit_qty)
  {
    $price = self::rawPricePerLiter($unit_price, $unit_type, $unit_qty);
    $money = self::money($price, "$%i / L");
    return $money;
  }

  public static function money($value, $modifier = null)
  {
    if ($modifier) {
      $format = money_format( $modifier, $value);
    } else {
      $format = money_format("$%i", $value);
    }
    return $format;
  }


}
