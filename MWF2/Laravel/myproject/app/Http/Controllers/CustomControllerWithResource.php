<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use DB;

class CustomControllerWithResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        DB::connection()->enableQueryLog();
        // dd("checking");
        // $AllUsers = \DB::table("users")->get();
        // $AllUsers = DB::table("users")->get();
        $allUsers = $user::all();
        $queries = DB::getQueryLog();
        return view("admin.allusers", compact('allUsers'));
        // dd($queries);
        // dd($AllUsers);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, string $id)
    {
        // dd($id);
        // DB::connection()->enableQueryLog();
        $data = $user::find($id);
        // $queries = DB::getQueryLog();
        // dd($queries);
        return view("admin.editusers", compact('data'));
        // dd($UserDataById);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, string $id)
    {
        // dd($id);
        $data = $user::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect("allusers");
    }
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect("allusers");
        // dd($id);
        //
    }
    public function middlwsuccess(Request $request)
    {
        dd($request->all());
    }
    public function checkvalidation(Request $request,Product $product)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required|unique:products|max:255',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $product->title = $request->title;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect("allusers");
    }
}
