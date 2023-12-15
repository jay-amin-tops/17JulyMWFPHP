@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Product</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="saveproduct" enctype="multipart/form-data" method="post">
                        @csrf
                        {{-- csrf_token() --}}
                        <div class="row">
                            <div class="col-8">
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" placeholder="Enter Product Title" class="form-control" name="title" id="title">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" placeholder="Enter Product Price" class="form-control" name="price" id="price">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="number" placeholder="Enter Number of Quantity" class="form-control" name="quantity" id="quantity">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="file" class="form-control" accept="image/*" name="image" id="image">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="submit" class="" name="btn-save" id="btn-save">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection