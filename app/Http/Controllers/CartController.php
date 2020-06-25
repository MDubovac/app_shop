<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('cart.index');
    }

    public function store(Request $request) {
        \Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        session()->flash('success', 'Item added to cart successfully.');
        return view('cart.index');
    }

    public function destroy($id) {
        \Cart::remove($id);
        session()->flash('success', 'Item removed from cart successfully.');
        return view('cart.index');
    }
}
