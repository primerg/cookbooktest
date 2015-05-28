<?php

use Illuminate\Database\Seeder;

use App\Categories;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();
        Categories::create(array(
          'category_name' => 'Soups',
        ));
        Categories::create(array(
          'category_name' => 'Tofu',
        ));
        Categories::create(array(
          'category_name' => 'Drinks',
        ));
    }

}