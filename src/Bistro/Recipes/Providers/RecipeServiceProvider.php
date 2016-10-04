<?php

namespace Bistro\Recipes\Providers;

use Illuminate\Support\ServiceProvider;

class RecipeServiceProvider extends ServiceProvider
{
  /**
     * Bootstrap any application services.
     *
     * @return void
     */
  public function boot()
  {
    //  Migrations
    $this->loadMigrationsFrom(__DIR__.'/../Migrations');

    //  Views
    $this->loadViewsFrom(__DIR__.'/../Views', 'bistro/recipes');

    view()->share('uoms', $this->registerUoms() );
    view()->share('batchcats', $this->registerBatchCategories() );
    view()->share('buildcats', $this->registerBuildCategories() );
  }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->make('Bistro\Recipes\Controllers\RecipesController');
    }

    public function registerBatchCategories()
    {
      return [
        'Dressings and Sauces',
        'Proteins',
        'Bulk',
        'Basics',
        'Dairy',
        'Produce'
      ];
    }

    public function registerBuildCategories()
    {
      return [
      ];
    }

    public function registerUoms()
    {
      return [
        'oz' => 'oz',
        'ozm' => 'ozm',
        'lb' => 'lb',
        'lbm' => 'lbm',
        'qt' => 'qt',
        'qts' => 'qts',
        'gal' => 'gal',
        'gals' => 'gals',
        'cup' => 'cup',
        'cups' => 'cups'
      ];
    }


  }