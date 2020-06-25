@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a href="/product-list" class="btn btn-outline-primary btn-sm  mb-3">< Back</a>
        <div class="row">
            <div class="col-md-6">
                <img src="/storage/{{ $product->image }}" width="100%">   
            </div>

            <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <h5>Category : {{ $product->category->name }}</h5>
            <p>{!! html_entity_decode($product->description) !!}</p>
            <form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button class="btn btn-primary btn-sm">Add to cart</button>
              </form>
            </div>
        </div>
    </div>
@endsection