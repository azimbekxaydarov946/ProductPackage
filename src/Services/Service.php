<?php
namespace  ProductMicroServices\Services;

class Service
{
    protected $model;

    public function index()
    {
        return $this->model->get();
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function store($request)
    {
        return $this->model->create($request);
    }

    public function update($id,$request)
    {
        $find=$this->model->find($id);
        $find->update($request);
        return $find;
    }

    public function destroy($id)
    {
       return $this->model->find($id)->delete();
    }

}
