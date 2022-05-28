<?php

namespace App\Models;

use App\Models\Database;

class Validate
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function isBlank($data)
    {
        return $data == '';
    }

    public function exists($sku, $table)
    {
        $sql = "SELECT sku FROM $table WHERE sku = '$sku'";
        $arr = $this->db->getAll($sql);
        return !empty($arr);
    }
}