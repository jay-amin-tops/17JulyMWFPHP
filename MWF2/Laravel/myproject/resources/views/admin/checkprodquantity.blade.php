@extends('layouts.adminapp')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 connectedSortable ui-sortable">
                <div class="card p-3">
                    <form action="saveprodformiddle" method="post">
                        @csrf
                        <input type="text" name="_tkn" value="123" id="_tkn">
                        <input type="number" name="qunatity" id="qunatity">
                        <input type="submit" name="save" id="save">
                        @if($errors->any())
                        <p class="alert alert-warning">{{$errors->first()}}</p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection