<?php

use Illuminate\Support\Facades\Route;
use  ProductMicroServices\Controllers\ProductController;

Route::apiResource('products', ProductController::class);
