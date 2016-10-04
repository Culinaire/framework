<?php

namespace Bistro\Products\Helpers;

use Bistro\Products\Helpers\Conversions as Conversions;
use Bistro\Products\Helpers\Pricing as Pricing;

class Counting
{
  public static function grossUnit($unit)
  {
    return $unit;
  }

  public static function grossQty($qty, $size)
  {
    $calc = $qty*$size;
    return $calc;
  }

  public static function individualUnit($qty, $unit)
  {
    $uom = $unit;
    return $uom;
  }

  public static function breakPack($purchase_unit, $pack_qty)
  {
    if ($purchase_unit = 'EA') {
      $value = 1;
      return $value;
    }

    if ($purchase_unit = 'CS') {
      $value = $pack_qty;
      return $value;
    }
  }

  public static function conversionRate($qty, $size, $unit = null, $purchase_unit)
  {
    $pack = self::breakPack($purchase_unit, $qty);
    if ($pack > 1) {
      $conversion = $qty*$pack;
    } else {
      $conversion = $size;
    }
    return $conversion;
  }
}
