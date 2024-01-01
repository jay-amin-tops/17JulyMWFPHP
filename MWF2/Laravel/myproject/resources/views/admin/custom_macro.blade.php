@extends('layouts.adminapp')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 connectedSortable ui-sortable">
                <div class="card p-3">
                    <form action="checkvalidation" method="post">
                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            {{ Form::selectBank("bank_name", null,["class"=>"form-control"]) }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection