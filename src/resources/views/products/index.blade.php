@extends('ProductMicroServices::layouts.app')
@section('content')
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th><a href="{{ route('web.products.create') }}" class="btn btn-primary">Create</a></th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($products)
            @foreach ($products as $product)
                <tr>
                    <td></td>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><a href="{{ route('web.products.show', ['id' => $product->id]) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('web.products.edit', ['id' => $product->id]) }}" class="btn btn-success">Update</a>
                    
                        <form action="{{ route('web.products.destroy', ['id' => $product->id]) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="6">No products found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
