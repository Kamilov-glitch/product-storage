<?php

use App\Models\Database;

class Validator
{

    protected static $db = new Database();

    public static function blank()
    {

    }

    public static function exists($sku, $table)
    {
        $sql = "SELECT COUNT(*) FROM $table WHERE sku = :sku";
        $count = 
    }
}