@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="col-12">
        <h1>Shopping Cart</h1>

        @if (Cart::count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Product</th>
                        <th scope="col">Description</th>
                        <th scope="col" class="text-right">Price</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                        <td><img src="/storage/{{ $item->model->image}}" width="100px"/> </td>
                        <td>{{ $item->model->name }}</td>
                        <td>{{ $item->model->description }}</td>
                        <td></td>
                        <td class="text-right">{{ $item->model->price }} €</td>
                        <td class="text-right">
                            <form action="/cart/{{ $item->rowId }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                         </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Shipping & Tax</strong></td>
                        <td class="text-right"><strong>
                          {{ Cart::tax() }}€
                         </strong>
                        </td>
                    </tr>
                   
               
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>
                          {{ Cart::total() }}€
                         </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                <a href="/product-list" class="btn btn-block btn-outline-primary btn-lg">Continue Shopping</a>
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <button class="btn btn-lg btn-block btn-primary text-uppercase">Checkout</button>
            </div>
        </div>

        @else
            <h3>No items in cart yet.</h3>
        @endif
    </div>
</div>
@endsection