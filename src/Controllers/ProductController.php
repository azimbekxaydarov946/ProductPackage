<?php

namespace ProductMicroServices\Controllers;

use App\Http\Controllers\Controller;
use ProductMicroServices\Services\ProductService;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service->index());
    }

    public function show($id)
    {
        return response()->json($this->service->show($id));
    }

    public function store()
    {
        return response()->json($this->service->store(request()->all()));
    }

    public function update($id)
    {
        return response()->json($this->service->update($id,request()->all()));
    }

    public function destroy($id)
    {
        return response()->json($this->service->destroy($id),204);
    }
}
