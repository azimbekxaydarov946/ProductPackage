@extends('ProductMicroServices::layouts.app')
@section('content')
    <form action="{{ route('web.products.update', ['id' => $product]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="exampleInputPassword1" value="{{$product->quantity}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputPassword1" value="{{$product->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
