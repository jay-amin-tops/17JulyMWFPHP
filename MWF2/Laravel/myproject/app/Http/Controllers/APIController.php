<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function getallproducts(Product $product){
        $data = $product->all();
        return $data;
    }
}
