@extends('layouts.adminapp')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 connectedSortable ui-sortable">
                <div class="card p-3">

                    {!! Form::open(['url' => 'updateuser/2']) !!}


                    <!-- <form action="updateuser" method="post"> -->
                    <div class="row mt-3">
                        <div class="col-6">
                            {{ Form::text('name', $data->name, ['class' => 'form-control'])}}
                            <!-- <input type="text" class="form-control" name="name" id="name"> -->
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <input type="text" class="form-control" value={{$data->email}} name="email" id="email">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <input type="submit" name="edit" value="Update" id="edit">
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection