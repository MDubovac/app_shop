@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>
        {{ isset($product) ? 'Edit Product' : 'Create new Product' }}
    </h2>
    <div class="col-md-12">
        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($product))
                @method("PUT")
            @endif
            <div class="form-group">
                <label for="name">Product name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name here.." value="{{ isset($product) ? $product->name : '' }}">
                @error('name') 
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if (isset($post))
                                @if ($category->id === $post->category_id)
                                    selected
                                @endif
                            @endif
                            >
                            {{ $category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            @if (isset($product))
                <img src="/storage/{{ $product->image}}" width="100%">
            @endif
            <div class="form-group">
                <label for="image">Product image</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image') 
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control" placeholder="Product price here.." value="{{ isset($product) ? $product->price : '' }}">
                @error('price') 
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea placeholder="Product description here..." name="description" id="description" cols="30" rows="5" class="form-control">{{ isset($product) ? $product->description : '' }}</textarea>
                @error('description') 
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>    
@endsection