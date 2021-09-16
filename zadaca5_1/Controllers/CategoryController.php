<?php


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $data['brands'] = $categories;
        self::CreateView('CategoryIndex', $data);
    }

    public function create()
    {
        self::CreateView('CategoryAdd');
    }


    public function store($request)
    {
        Category::save($request['category_name']);
        $this->index();
    }

    public function edit($req)
    {
        $category = Category::find($req['category_id']);
        $data['category'] = $category;
        self::CreateView('CategoryEdit', $data);
    }


    public function update($request)
    {

        Category::update($request['category_id'], $request['category_name']);

        $this->edit(['category_id' => $request['category_id']]);
    }

    public function delete($request)
    {
        Category::delete($request['category_id']);
        $this->index();
    }
}