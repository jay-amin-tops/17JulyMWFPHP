@extends('layouts.adminapp')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 connectedSortable ui-sortable">
                <div class="card p-3">
                    list all users
                    <?php $i = 1; ?>
                    {{-- dd($allUsers); --}}
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr no.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allUsers as $data)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$data->name}}</td>
                                <td>
                                    <a href="edituser/{{$data->id}}">Edit</a>
                                    <!-- <form action="{{ url('/deleteuser', ['id' => $data->id]) }}" method="post">
                                        <input class="btn btn-default" type="submit" value="Delete" />
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form> -->
                                    <!-- @method('delete') -->
                                    <!-- @csrf -->
                                    <!-- {{ "called" }} -->
                                    {{-- "called" --}}
                                    <a href="deleteuser/{{$data->id}}">Delete</a> 
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection