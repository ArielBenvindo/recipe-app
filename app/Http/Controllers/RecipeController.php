<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController
{
    public function index()
    {
        $response = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood');
        $recipes = json_decode($response);
        return view('blog.blog-post')->with('recipes', $recipes);
    }
}
