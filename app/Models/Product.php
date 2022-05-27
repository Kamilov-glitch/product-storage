<?php

namespace App\Models;

use App\Models\Database;
use App\Models\Model;
include_once "Database.php";
include_once "Model.php";



class Product implements Model 
{

    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $attr;
    protected $table;

    private $db;

    public function __construct($sku, $name, $price, $type, $attr) 
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->attr = $attr;
        $this->db = new Database();
        $this->table = 'products';
    }

    public function save() 
    {
        $sql = "INSERT INTO $this->table VALUES(:sku, :name, :price, :type, :attr)";
        $values = [
            [':sku', $this->sku],
            [':name', $this->name],
            [':price', $this->price],
            [':type', $this->type],
            [':attr', $this->attr],
        ];
        $this->db->execute($sql, $values);
    }

    public function remove($sku) 
    {
        $sql = "DELETE FROM $this->table WHERE sku = :sku";
        $values = [
            [':sku', $sku],
        ];
        $this->db->execute($sql, $values);
    }

    public function all() 
    {
        $sql = "SELECT * FROM $this->table";
        return $this->db->getAll($sql);
    }

}