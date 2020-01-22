<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
        $categories = Category::all();

        return view('welcome',[
            'categories'=>$categories,
        ]);
    }

    public function getCategoryById($id)
    {
        return Category::getOneById($id);
    }
}
