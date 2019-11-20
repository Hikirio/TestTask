<?php

namespace App\Http\Controllers;

use App\ingredient;
use App\Recipe;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredient = Ingredient::all();
        return view('backend.ingredients', compact('ingredient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $r = Recipe::all();

        $objing = new Ingredient();
        return view('backend.ingredients.create', compact('objing','r'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param ingredient $objing
     * @return void
     */
    public function store(Request $request, Ingredient $objing)
    {

        $objing->fill([

            'name_product' => $request->name_product,

        ])->save();

        return redirect('/dashboard/ingredients/');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\ingredient $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ingredient $ing
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ing)
    {
        return view('backend.ingredients.edit', compact('ing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param ingredient $ing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ing)
    {
        $ing->fill([

            'name_product' => $request->name_product,

        ])->save();
        return redirect('/dashboard/ingredients/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ingredient $ing
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Ingredient $ing)
    {
        $ing->delete();
        return redirect('/dashboard/ingredients/');
    }
}
