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
    public function store(Request $request,Product $product)
    {
        // dd($request->all());
        $file = $request->file('image');
        // dd($file);
        if ($file) {
            $fileNameEx = $file->getClientOriginalExtension();
            $fileName = "project".date("dmyhis").".".$fileNameEx;
            // dd($fileNameEx);
            $file->move(public_path('uploads'), $fileName);
            # code...
        }else{
            // dd("inside else");
            $fileName = "default.png";
        }

        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image = $fileName;
        $product->save();
        return redirect("allproducts"); 
        // $fileName = $file->getClientOriginalName();

        // dd($file);

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
    public function destroy($id,Product $product)
    {
        $FindById = $product::find($id);
        // dd($FindById);
        $FindById->delete();
        return redirect("allproducts"); 
    }
}
