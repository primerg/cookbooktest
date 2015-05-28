<?php namespace App\Http\Controllers;

// Im used to using Repository pattern for this one but for simplicity's sake, I'll just directly use the model
use App\Recipes;
use App\Categories;
use App\Http\Requests\RecipeFormRequest;

class RecipesController extends Controller {
    public $recipes;
    public $categories;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Recipes $recipes, Categories $categories)
    {
        $this->recipes = $recipes;
        $this->categories = $categories;
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index($id = null)
    {   
        $category = null;

        if ($id) {
            $category = $this->categories->find($id);
            $recipes = $this->recipes->where('category_id', '=', $id)->get();
        } else {
            $recipes = $this->recipes->all();
        }

        return view('recipes.index')->with(compact('recipes', 'category'));
    }

    public function show($id) {
        $recipe = $this->recipes->find($id);
        return view('recipes.show')->with(compact('recipe'));
    }

    public function create() {
        $recipe = false;
        $categories = $this->categories->lists('category_name', 'category_id');
        return view('recipes.form', compact('recipe', 'categories'));
    }

    public function store(RecipeFormRequest $request)
    {
        $data = (array)$request->all();
        $this->recipes->create($data);

        $category_id = $data['category_id'];
        return redirect('/c/' . $category_id)->with('message', 'Recipe added.');
    }

    public function edit($id)
    {
        $recipe = $this->recipes->find($id);
        $categories = $this->categories->lists('category_name', 'category_id');
        return view('recipes.form', compact('recipe', 'categories'));
    }

    public function update($id, RecipeFormRequest $request)
    {
        $data = (array)$request->all();
        $recipe = $this->recipes->find($id);
        $recipe->update($data);

        $category_id = $data['category_id'];
        return redirect('/c/' . $category_id)->with('message', 'Recipe updated.');
    }

    public function destroy($id) {
        $recipe = $this->recipes->find($id);
        if ($recipe && $recipe->delete($id)) {
            return \Redirect::route('recipes.index')->with('message', 'Recipe deleted.');
        }

        return \Redirect::route('recipes.index')->withError('Unable to delete.');
    }

}
