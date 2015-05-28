<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryFormRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules() {
    return [
        'category_name' => 'required|unique:categories',
    ];    
  }

}