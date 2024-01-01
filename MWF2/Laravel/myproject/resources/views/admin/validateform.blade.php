@extends('layouts.adminapp')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 connectedSortable ui-sortable">
                <div class="card p-3">
                    <form action="checkvalidation" enctype="multipart/form-data" method="post">
                        @csrf
                        <!-- <input type="text" name="_tkn" value="123" id="_tkn"> -->
                        <input type="text" name="title" id="title"> <br>
                        <input type="number" name="quantity" id="quantity"> <br>
                        <input type="number" name="price" id="price"> <br>
                        <input type="file" name="image" id="image"> <br>
                        <input type="submit" name="save" id="save">
                        <br>
                        <br>
                        @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection