@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>All Products</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="all-products">
                    @foreach ($allProducts as $item)
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="/storage/{{ $item->image }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->name }}</h5>
                          <h5>{{ $item->price }} €</h5>
                          <p class="card-text">{{ $item->description }}</p>
                          <div class="d-flex">
                            <a href="/product-details/{{ $item->id }} " class="mr-2 btn btn-outline-primary btn-sm">Details</a>
                            <form action="/cart" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{ $item->id }}">
                              <input type="hidden" name="name" value="{{ $item->name }}">
                              <input type="hidden" name="price" value="{{ $item->price }}">
                              <button class="btn btn-primary btn-sm">Add to cart</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
     </div>
    <div class="pagination">
        {{ $allProducts->links() }}
    </div>
@endsection