<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecipeFormRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules() {
    return [
        'recipe_name' => 'required',
        'category_id' => 'required',
        'recipe_description' => 'required',
    ];    
  }

}