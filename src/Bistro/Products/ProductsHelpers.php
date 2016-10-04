<?php

namespace Bistro\Products;

class ProductsHelpers
{
  public static function conversionRate($size, $qty)
  {
    $calc = $pack*$qty;
    return $calc;
  }

  public static function unitPrice($conversion, $pack_size, $purchase_price)
  {
    //
  }
}