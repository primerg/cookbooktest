<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model {

    public $primaryKey = 'recipe_id';
	public $fillable = ['recipe_name', 'recipe_description', 'category_id'];

}
