<?php


class Brand
{
    public $brand_id;
    public $brand_name;

    /**
     * Brand constructor.
     * @param $brand_id
     * @param $brand_name
     */
    public function __construct($brand_id, $brand_name)
    {
        $this->brand_id = $brand_id;
        $this->brand_name = $brand_name;
    }


    public static function all() {
        $list = [];
        $req = Database::query("SELECT * from brand");
        foreach($req as $brand) {
            $list[] = new Brand($brand['brand_id'], $brand['brand_name']);
        }
        return $list;
    }

    public static function find($brand_id) {
        $brand_id = intval($brand_id);
        $req = Database::query("SELECT * from brand where brand_id = $brand_id");
        $brand = $req[0];
        return new Brand($brand['brand_id'], $brand['brand_name']);
    }

    public static function save($brand_name)
    {
        return Database::query("insert into brand (brand_name) values ('$brand_name')");
    }

    public static function update($brand_id, $brand_name)
    {
        return Database::query("update brand set brand_name = '$brand_name' where brand_id = '$brand_id'");
    }

    public static function delete($brand_id)
    {
        return Database::query("delete from brand where brand_id = '$brand_id'");
    }


}