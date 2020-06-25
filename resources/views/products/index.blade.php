@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">

        @if(@auth()->user()->isAdmin())
        <div class="col-md-4">
            <h4>Admin Dashboard</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('products.index')}}">Products</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('users.index')}}">Users</a>
                    </li>
                </ul>
            </div>
        @endif
        
        <div class="col-md-8">
            <h2>All Products</h2>
            <a href="{{ route('products.create') }}" class="btn btn-outline-primary btn-sm mb-3">Add new Product</a>
            @if ($products->count() > 0)
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="storage/{{ $product->image }}" style="height: 100px; width: auto;">
                            </td>
                            <td>
                                {{ $product->category->name }}
                            </td>
                            <td>
                                {{ $product->price}} €
                            </td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}">Details</a>
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <h3 class="text-center">No products yet</h3>
            @endif

        </div>
    </div>
</div>
@endsection