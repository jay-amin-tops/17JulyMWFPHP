<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Intervention\Image\ImageManagerStatic as Image;
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
    public function testapi(Request $request)
    {
        dd("testing");
    }
    public function checkvalidation(Request $request, Product $product)
    {



        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
   
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
   
        $this->postImage->add($input);
   
        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);



        // $this->validate($request, [
        //     'image' => 'required'
        // ]);

        // // dd($request->all());
        // // dd($request->file('image'));

        // $image = $request->file('image');

        // /* 
        //     Note: Use $image = base64_decode($request['image'])
        //     if the image is sent as a base64 encoded image.
        // */
        // $image_name = time() . '_' . $image->getClientOriginalName();
        // $path = public_path('uploads/') . "/" . $image_name;

        // Image::make($image->getRealPath())->resize(150, 150)->save($path);

        // return response()->json(
        //     [
        //         'data' => 'Image compressed and added'
        //     ],
        //     201
        // );

        // dd($request->all());
        // $validated = $request->validate([
        //     'title' => 'required|unique:products|max:255',
        //     'quantity' => 'required',
        //     'price' => 'required',
        //     'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        // ]);
        // $product->title = $request->title;
        // $product->quantity = $request->quantity;
        // $product->price = $request->price;
        // $product->save();
        // return redirect("allusers");
    }
}
