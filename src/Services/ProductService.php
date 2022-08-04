<?php
namespace  ProductMicroServices\Services;

use ProductMicroServices\Models\Product;

class ProductService extends Service
{

    public function __construct()
    {
        $this->model = new Product();
    }
}
