@extends('ProductMicroServices::layouts.app')
@section('content')
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><a href="{{route('web.products.index')}}" class="btn btn-primary">Home</a></td>
                </tr>
        </tbody>
    </table>    
@endsection