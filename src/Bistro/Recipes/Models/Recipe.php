<?php

namespace Bistro\Recipes\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $table = "recipes";

  protected $fillable = [
    'name','slug','meta','ingredients','procedures','quality'
  ];

  protected $casts = [
    'meta'        => 'array',
    'ingredients' => 'array',
    'procedures'  => 'array',
    'quality'     => 'array'
  ];


  public function getCategoryAttribute()
  {
    $type = $this->type;

    $cat = "";  
    $meta = $this->meta;

    if($type == 'batch') {
      if(array_key_exists('category', $meta)) {
        $cat = $meta['category'];
      }
    } elseif ($type == 'build') {
      if(array_key_exists('menu_type', $meta)) {
        $cat = $meta['menu_type'];
      }
    }
    
    
    return $cat;
  }
}