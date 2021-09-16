<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('brands.index')->with('brands', $categories);
    }


    public function create()
    {
        return view('brands.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        $category  = new Category();
        $category->category_name = $request['category_name'];
        $category->save();

        return redirect()->route('brands.index');
    }

    public function show(Category $category)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::all()->find($id);
        return view('brands.edit')->with('category', $category);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = Category::all()->find($id);
        $category->category_name = $request['category_name'];
        $category->save();

        return redirect()->route('brands.index');
    }


    public function destroy($id)
    {
        Category::all()->find($id)->delete();
        return redirect()->route('brands.index');
    }
}
