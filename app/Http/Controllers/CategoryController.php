<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        return view('category.list');
    }
    public function addNewCategory()
    {
        return view('category.create');
    }
    public function saveCategory(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categoryList');
    }
}
