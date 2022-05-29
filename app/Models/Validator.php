<?php

namespace App\Models;

use App\Models\Validate;

class Validator extends Validate
{
    private $errors;

    public function __construct()
    {
        $this->errors = [];
    }

    public function check($post)
    {
        $this->checkIsBlank($post);
        $this->checkIfExists($post);
        $this->checkIfNumber($post);

        return $this->errors;
    }

    private function checkIfNumber($post)
    {
        if (!$this->isNumber($post['price'])) {
            $this->errors['price'] = 'Price must be a number';
        }

        if (isset($post['size']) && !$this->isNumber($post['size'])) {
            $this->errors[] = 'Price must be a number';
        }

        if (isset($post['weight']) && !$this->isNumber($post['weight'])) {
            $this->errors['weight'] = 'Weight must be a number';
        }

        if (isset($post['height']) && !$this->isNumber($post['height'])) {
            $this->errors['height'] = 'Height must be a number';
        }

        if (isset($post['width']) && !$this->isNumber($post['width'])) {
            $this->errors['width'] = 'Width must be a number';
        }

        if (isset($post['length']) && !$this->isNumber($post['length'])) {
            $this->errors['length'] = 'Length must be a number';
        }
    }

    private function checkIsBlank($post)
    {
        if ($this->isBlank($post['sku'])) {
            $this->errors['sku'] = "SKU can't be left blank";
        }

        if ($this->isBlank($post['name'])) {
            $this->errors['name'] = "Name can't be left blank";
        }

        if ($this->isBlank($post['price'])) {
            $this->errors['price'] = "Price can't be left blank";
        }

        if ($this->isBlank($post['type'])) {
            $this->errors['type'] = "Type can't be left blank";
        }
        
        if (!$this->isBlank($post['type']) && $post['type'] == 'dvd') {
            if ($this->isBlank($post['size'])) {
                $this->errors['size'] = "Size can't be left blank";
            }
        }

        if (!$this->isBlank($post['type']) && $post['type'] == 'book') {
            if ($this->isBlank($post['weight'])) {
                $this->errors['weight'] = "Weight can't be left blank";
            }
        }

        if (!$this->isBlank($post['type']) && $post['type'] == 'furniture') {
            if ($this->isBlank($post['height'])) {
                $this->errors['height'] = "Height can't be left blank";
            }
            if ($this->isBlank($post['width'])) {
                $this->errors['width'] = "Width can't be left blank";
            }
            if ($this->isBlank($post['length'])) {
                $this->errors['length'] = "Length can't be left blank";
            }
        } 
    }

    private function checkIfExists($post)
    {
        if (!$this->isBlank($post['sku'])) {
            if ($this->exists($post['sku'], 'products')) {
                $this->errors['sku'] = "SKU should be unique, this one already exists";
            }
        }
    }
    
}