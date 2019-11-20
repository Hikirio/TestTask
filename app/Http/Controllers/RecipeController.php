<?php

namespace App\Http\Controllers;

use App\recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $recipe = Recipe::all();
        return view('backend.recipes', compact('recipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objrec = new Recipe();
        return view('backend.recipes.create', compact('objrec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Recipe $objpec)
    {
//        dd($request);
        $objpec->fill([

            'name_recipe' => $request->name_recipe,
            'description' => $request->description,


        ])->save();
        return redirect('/dashboard/recipes/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $r)
    {
        return view('backend.recipes.show',compact('r'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Recipe $p)
    {
        //dd($p);
        return view('backend.recipes.edit', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $p)
    {

        $p->fill([

            'name_recipe' => $request->name_recipe,
            'description' => $request->description,


        ])->save();
        return redirect('/dashboard/recipes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\recipe $recipe
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Recipe $r)
    {
        $r->delete();
        return redirect('/dashboard/recipes');
    }
}
