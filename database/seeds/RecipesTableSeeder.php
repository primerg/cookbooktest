<?php

use Illuminate\Database\Seeder;

use App\Recipes;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RecipesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('recipes')->delete();
        $user = Recipes::create(array(
          'recipe_name' => 'Test 1',
          'recipe_description' => 'Lorem ipsum',
          'category_id' => 1
        ));
    }

}