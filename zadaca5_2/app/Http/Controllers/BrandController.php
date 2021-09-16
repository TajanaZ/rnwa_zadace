<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Professor;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BrandController extends Controller{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index')->with('brands',$brands);
    }

    public function create()
    {
        return view('brands.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
        ]);
        $brand  = new Brand();
        $brand->brand_name = $request['brand_name'];
        $brand->Faculties_FacultyId = 1;
        $brand->save();

        return redirect()->route('brands.index');
    }

    public function edit($id)
    {
        $brand = Brand::all()->find($id);
        return view('brands.edit')->with('brand', $brand);
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'brand_name' => 'required',
        ]);
        $brand  = Brand::all()->find($id);
        $brand->pcontent = $request['brand_name'];
        $brand->save();

        return redirect()->route('brands.index');


    }

    public function destroy($id)
    {
        Brand::all()->find($id)->delete();
        return redirect()->route('brands.index');
    }
}
