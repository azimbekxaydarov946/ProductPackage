<?php

namespace  ProductMicroServices\Services\Front;

use Illuminate\Support\Str;

class WebService
{
    protected $model;

    public function index($view = null)
    {
        $data = $this->model->all();
        if($data){
            $variable=explode('.',$view)[0];
        }
        else{
            $variable=$data[0]->getTable();
        }
        return view('ProductMicroServices::' . $view, [$variable => $data]);
    }

    public function show($id, $view = null)
    {
        $data = $this->model->find($id);
        $variable = Str::singular($data->getTable());
        
        return view('ProductMicroServices::' . $view, [$variable => $data]);
    }

    public function create($view = null)
    {
        return view('ProductMicroServices::' . $view);
    }

    public function store($request, $route = null)
    {
        $this->model->create($request);
        return redirect()->route($route);
    }

    public function edit($id, $view = null)
    {
        $data = $this->model->find($id);
        $variable = Str::singular($data->getTable());
        return view('ProductMicroServices::' . $view, [$variable => $data]);
    }

    public function update($request, $id, $route = null)
    {
        $this->model->find($id)->update($request);
        return redirect()->route($route);
    }

    public function destroy($id, $route = null)
    {
        $this->model->find($id)->delete();
        return redirect()->route($route);
    }
}
