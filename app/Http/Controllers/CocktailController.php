<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', ['cocktails' => Cocktail::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cocktail.create', ['cocktails' => $this->list()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {
        $validated = $request->validated();

        $dataCocktail = json_decode(file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=' . $validated['idDrink']), true)['drinks'][0];


        $cocktail = Cocktail::create([
            'name' => $dataCocktail['strDrink'],
            'category' => $dataCocktail['strCategory'],
            'alcoholic' => $dataCocktail['strAlcoholic'] === 'Alcoholic',
            'glass' => $dataCocktail['strGlass'],
            'instructions' => $dataCocktail['strInstructions'],
            'image' => $dataCocktail['strDrinkThumb'],
            'ingredient1' => $dataCocktail['strIngredient1'],
            'ingredient2' => $dataCocktail['strIngredient2'],
            'ingredient3' => $dataCocktail['strIngredient3'],
            'ingredient4' => $dataCocktail['strIngredient4'],
            'ingredient5' => $dataCocktail['strIngredient5'],
            'ingredient6' => $dataCocktail['strIngredient6'],
            'ingredient7' => $dataCocktail['strIngredient7'],
            'ingredient8' => $dataCocktail['strIngredient8'],
            'ingredient9' => $dataCocktail['strIngredient9'],
            'ingredient10' => $dataCocktail['strIngredient10'],
            'ingredient11' => $dataCocktail['strIngredient11'],
            'ingredient12' => $dataCocktail['strIngredient12'],
            'ingredient13' => $dataCocktail['strIngredient13'],
            'ingredient14' => $dataCocktail['strIngredient14'],
            'ingredient15' => $dataCocktail['strIngredient15'],
            'measure1' => $dataCocktail['strMeasure1'],
            'measure2' => $dataCocktail['strMeasure2'],
            'measure3' => $dataCocktail['strMeasure3'],
            'measure4'  => $dataCocktail['strMeasure4'],
            'measure5' => $dataCocktail['strMeasure5'],
            'measure6' => $dataCocktail['strMeasure6'],
            'measure7' => $dataCocktail['strMeasure7'],
            'measure8' => $dataCocktail['strMeasure8'],
            'measure9' => $dataCocktail['strMeasure9'],
            'measure10' => $dataCocktail['strMeasure10'],
            'measure11' => $dataCocktail['strMeasure11'],
            'measure12' => $dataCocktail['strMeasure12'],
            'measure13' => $dataCocktail['strMeasure13'],
            'measure14' => $dataCocktail['strMeasure14'],
            'measure15' => $dataCocktail['strMeasure15'],
        ]);

        return redirect()->route('cocktail.show', $cocktail);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        return view('cocktail.detail', ['cocktail' => $cocktail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, Cocktail $cocktail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {

        if($cocktail->delete()) {
            return redirect()->route('cocktail.index');
        }


    }

    /**
     * Get a list of cocktails from the API.
     */
    public function list()
    {
        $alcoholicCocktails = json_decode(file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic'), true)['drinks'];
        $alcoholicCocktails = array_map(function ($cocktail) {
            $cocktail['alcoholic'] = true;
            return $cocktail;
        }, $alcoholicCocktails);

        $nonAlcoholicCocktails = json_decode(file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic'), true)['drinks'];
        $nonAlcoholicCocktails = array_map(function ($cocktail) {
            $cocktail['alcoholic'] = false;
            return $cocktail;
        }, $nonAlcoholicCocktails);

        return array_merge($alcoholicCocktails, $nonAlcoholicCocktails);
    }


}
