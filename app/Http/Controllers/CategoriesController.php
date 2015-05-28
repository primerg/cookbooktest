<?php namespace App\Http\Controllers;

// Im used to using Repository pattern for this one but for simplicity's sake, I'll just directly use the model
use App\Categories;
use App\Http\Requests\CategoryFormRequest;

class CategoriesController extends Controller {
    public $recipes;
    public $categories;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {   
        $categories = $this->categories->all();

        return view('categories.index')->with(compact('categories'));
    }

    public function create() {
        return view('categories.form', compact('categories'));
    }

    public function store(CategoryFormRequest $request)
    {
        $data = (array)$request->all();
        $this->categories->create($data);
        return \redirect('/')->with('message', 'Category added.');
    }

}
