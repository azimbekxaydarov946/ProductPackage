<?php

namespace  ProductMicroServices\Services\Front;

use ProductMicroServices\Models\Product;

class WebProductService extends WebService
{
    public function __construct()
    {
        $this->model = new Product();
    }
}
