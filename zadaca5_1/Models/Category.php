<?php


class Category
{
    public $category_id;
    public $category_name;

    /**
     * Category constructor.
     * @param $category_id
     * @param $category_name
     */
    public function __construct($category_id, $category_name)
    {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
    }


    public static function all() {
        $list = [];
        $req = Database::query("SELECT * from category");
        foreach($req as $category) {
            $list[] = new Category($category['category_id'], $category['category_name']);
        }
        return $list;
    }

    public static function find($category_id) {
        $category_id = intval($category_id);
        $req = Database::query("SELECT * from category where category_id = $category_id");
        $category = $req[0];
        return new Category($category['category_id'], $category['category_name']);
    }

    public static function save($category_name)
    {
        return Database::query("insert into category (category_name) values ('$category_name')");
    }

    public static function update($category_id, $category_name)
    {
        return Database::query("update category set category_name = '$category_name' where category_id = '$category_id'");
    }

    public static function delete($category_id)
    {
        return Database::query("delete from category where category_id = '$category_id'");
    }


}