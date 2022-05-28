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

    public function __construct() 
    {
        $this->db = new Database();
        $this->table = 'products';
    }

    // SETTER FUNCTIONS

    public function setSku($sku) 
    {
        $this->sku = $sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setAttr($attr)
    {
        $this->attr = $attr;
    }

    // GETTER FUNCTIONS

    public function getSku($sku) 
    {
        return $this->sku;
    }

    public function getName($name)
    {
        return $this->name;
    }

    public function getPrice($price)
    {
        return $this->price;
    }

    public function getType($type)
    {
        return $this->type;
    }

    public function getAttr($attr)
    {
        return $this->attr;
    }


    // Database related functions

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