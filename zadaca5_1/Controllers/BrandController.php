<?php


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $data['brands'] = $brands;
        self::CreateView('BrandIndex', $data);
    }

    public function create()
    {
        self::CreateView('BrandAdd');
    }


    public function store($request)
    {
        Brand::save($request['brand_name']);
        $this->index();
    }

    public function edit($req)
    {
        $brand = Brand::find($req['brand_id']);
        $data['brand'] = $brand;
        self::CreateView('BrandEdit', $data);
    }


    public function update($request)
    {

        Brand::update($request['brand_id'], $request['brand_name']);

        $this->edit(['brand_id' => $request['brand_id']]);
    }

    public function delete($request)
    {
        Brand::delete($request['brand_id']);
        $this->index();
    }
}