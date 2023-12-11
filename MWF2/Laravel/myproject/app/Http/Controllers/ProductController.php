<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        // dd("inside controller");
        // dd($product);
        $allProducts = $product::get();
        // $allProducts = DB::table('products')->get();

        // DB::connection()->enableQueryLog();

        // $allProducts = DB::table('products')
        //     ->select('*')
        //     ->where('quantity', '>', 1)
        //     ->get();


        // $queries = DB::getQueryLog();
        // dd($queries);
        // ->groupBy('quantity')
        // dd($allProducts);
        // $data=array('students'=>["name"=>"test"]);
        return view("allprod", compact('allProducts'));
        // return view("allprod")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
