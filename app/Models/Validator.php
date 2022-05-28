<?php

namespace App\Models;

use App\Models\Validate;

class Validator
{
    private $errors;
    private Validate $validator;

    public function __construct()
    {
        $this->errors = [];
        $this->validator = new Validate();
    }

    public function check($post)
    {
        if ($this->validator->isBlank($post['sku'])) {
            $this->errors['sku'] = "SKU can't be left blank";
        }

        if ($this->validator->isBlank($post['name'])) {
            $this->errors['name'] = "Name can't be left blank";
        }

        if ($this->validator->isBlank($post['price'])) {
            $this->errors['price'] = "Price can't be left blank";
        }

        if ($this->validator->isBlank($post['type'])) {
            $this->errors['type'] = "Type can't be left blank";
        }
        
        if (!$this->validator->isBlank($post['type']) && $post['type'] == 'dvd') {
            if ($this->validator->isBlank($post['size'])) {
                $this->errors['size'] = "Size can't be left blank";
            }
        }

        if (!$this->validator->isBlank($post['type']) && $post['type'] == 'book') {
            if ($this->validator->isBlank($post['weight'])) {
                $this->errors['weight'] = "Weight can't be left blank";
            }
        }

        if (!$this->validator->isBlank($post['type']) && $post['type'] == 'furniture') {
            if ($this->validator->isBlank($post['height'])) {
                $this->errors['height'] = "Height can't be left blank";
            }
            if ($this->validator->isBlank($post['width'])) {
                $this->errors['width'] = "Width can't be left blank";
            }
            if ($this->validator->isBlank($post['length'])) {
                $this->errors['length'] = "Length can't be left blank";
            }
        } 
        

        if ($this->validator->exists($post['sku'], 'products')) {
            $this->errors['sku'] = "SKU should be unique, this one already exists";
        }

        return $this->errors;
    }

    
}