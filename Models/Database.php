<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost; dbname=product_storage", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}