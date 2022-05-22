<?php

include_once "Database.php";
include_once "Model.php";

class Product implements Model {

    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $attr;
    protected $table;

    private $db;

    public function __construct($sku, $name, $price, $type, $attr) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->attr = $attr;
        $this->db = new Database();
        $this->table = 'products';
    }

    public function save() {
        $sql = "INSERT INTO $this->table VALUES(:sku, :name, :price, :type, :attr)";
        $values = [
            [':sku', $this->sku],
            [':name', $this->name],
            [':price', $this->price],
            [':type', $this->type],
            [':attr', $this->type],
        ];
        $this->db->execute($sql, $values);
    }

    public function remove() {
        $sql = "DELETE FROM $this->table WHERE sku = :sku";
        $values = [
            [':sku', $this->sku],
        ];
        $this->db->execute($sql, $values);
    }


}