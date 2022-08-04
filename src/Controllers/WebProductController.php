<?php

namespace ProductMicroServices\Controllers;

use App\Http\Controllers\Controller;
use ProductMicroServices\Models\Product;
use ProductMicroServices\Services\Front\WebProductService;

class WebProductController extends Controller
{
    protected $service;

    public function __construct(WebProductService $service)
    {
        $this->service = $service;
    }

    //blade
    public function index()
    {
        return $this->service->index('products.index');
    }

    public function show($id)
    {
        return $this->service->show($id, 'products.show');
    }

    public function create()
    {
        return $this->service->create('products.create');
    }

    public function store()
    {
        return $this->service->store(request()->all(), 'web.products.store');
    }
    public function edit($id)
    {
        return $this->service->edit($id, 'products.edit');
    }
    public function update()
    {
        return $this->service->update(request()->all(), request()->id, 'web.products.index');
    }
    public function destroy($id)
    {
        return $this->service->destroy($id, 'web.products.index');
    }
}
