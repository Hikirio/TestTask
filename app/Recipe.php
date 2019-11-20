<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name_recipe', 'description'
    ];

    public function RecipeToIngredient()
    {
        return $this->hasOne('App\Ingredient');
    }
}
