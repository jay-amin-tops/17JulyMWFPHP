@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>php syntax : &lt;?php echo ?&gt;</p>
                    <p>laravel blade : &#123;&#123; &#125;&#125;</p>
                    <div class="row justify-content-end my-2">
                        <div class="col-2 ">
                            <a class="btn btn-primary" href="addnewprod">Add new</a>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <td>Sr No</td>
                                <td>Title</td>
                                <td>Price</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allProducts as $data)
                            <tr>
                                <td>{{$data['id']}}</td>
                                <td>{{$data['title']}}</td>
                                <td>{{$data['price']}}</td>
                                <td> <a href="deleteproduct/{{$data['id']}}">Delete</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection