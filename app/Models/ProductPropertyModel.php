<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductPropertyModel extends Model
{
    protected $table = 'product_properties';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'property_name', 'property_value'];
}