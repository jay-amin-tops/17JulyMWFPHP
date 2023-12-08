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


                    <p> The above code defines a route for the homepage. Every time this route receives a get request for /, It will return the view welcome. Views are the frontend of the application and I will discuss the topic in an upcoming installment of this series.</p>
                    <p> All Laravel routes are defined in your route files, which are found within the routes directory. Your application’s AppProvidersRouteServiceProvider consequently stacks these records. The routes/web.php record defines routes that are for your web interface.</p>
                    <p> The structure of the route is very simple. Open the appropriate file (either `web.php` or `api.php`) and start the code with `Route::` This is followed by the request you want to assign to that specific route and then comes the function that will be executed as a result of the request.</p>
                    <p> Laravel offers the following route methods:</p>
                    <ol>
                        <li> get</li>
                        <li> post</li>
                        <li> put</li>
                        <li> delete</li>
                        <li> patch</li>
                        <li> options</li>
                    </ol>


                   
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td><strong>S.No.</strong></td>
                                <td><strong> PUT </strong></td>
                                <td><strong> PATCH </strong></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PUT is a technique of altering resources when the client transmits data that revamps the whole resource.</td>
                                <td>PATCH is a technique for transforming the resources when the client transmits partial data that will be updated without changing the whole data.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>The PUT HTTP method is known to be unchanged. That means, if you retry a request numerous times, that will be equal to a single request conversion.</td>
                                <td>The PATCH HTTP method is believed to be non-idempotent. That means, if you retry the request multiple times, you will end up having multiple resources with different URIs.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>The PUT method has high bandwidth.</td>
                                <td>Whereas, the PATCH method has comparatively low bandwidth.</td>
                            </tr>
                        </thead>
                    </table>
                    <br>
                    <a href="https://www.cloudways.com/blog/routing-in-laravel/">Reference</a>
                    <br>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection