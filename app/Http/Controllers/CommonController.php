<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CommonController extends Controller
{
    public function productList(){
        $allProducts = Product::paginate(3);
        return view('common.product-list')->with("allProducts", $allProducts);
    }
    
    public function productDetails(Product $product){
        return view('common.product-details')->with('product', $product);
    }
}
