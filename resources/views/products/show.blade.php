@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a href="{{ route('products.index') }}" class="btn btn-outline-primary btn-sm mb-2">< Back</a>
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/{{ $product->image }}" width="100%" height="auto">
                <section class="btns mt-2 d-flex">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }} " method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </section>
            </div>
            <div class="col-md-8">
                <h2>{{ $product->name}}</h2>
                <h4>{{ $product->price }} €</h4>
                <p>{!! html_entity_decode($product->description) !!}</p>
            </div>
        </div>
    </div>
@endsection