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

    public function execute($sql, $values)
    {
        $stmt = $this->pdo->prepare($sql);
        foreach ($values as $value) {
            $stmt->bindValue($value[0], $value[1]);
        }
        $stmt->execute();
    }

    public function getAll($sql)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}