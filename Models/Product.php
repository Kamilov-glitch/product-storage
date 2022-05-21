<?php

include_once "Database.php";

class Product implements Model {

    public $sku;
    public $name;
    public $price;
    public $type;
    private $db;

    public function __construct($sku, $name, $price, $type) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->db = new Database();
    }

    public function save() {
        $table = $this->getTable();
        $sql = "INSERT INTO $table VALUES(:sku, :name, :price)";
        $values = [
            [':sku', $this->sku],
            [':name', $this->name],
            [':price', $this->price],
        ];
        $this->db->execute($sql, $values);
    }

    public function remove() {
        $table = $this->getTable();
        $sql = "DELETE FROM $table WHERE sku = :sku";
        $values = [
            [':sku', $this->sku],
        ];
        $this->db->execute($sql, $values);
    }

    private function getTable() {
        $tables = [
            "dvd" => "dvds",
            "furniture" => "furnitures",
            "book" => "books",
        ];
        return $tables[$this->type];
    }

}