<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

    public $primaryKey = 'category_id';
	public $timestamps = false;

    public $fillable = ['category_name'];

}
