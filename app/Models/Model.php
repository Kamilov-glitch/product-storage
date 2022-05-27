<?php

namespace App\Models;

interface Model
{
    public function save();
    public function remove($sku);
    public function all();
}