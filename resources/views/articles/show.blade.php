@extends('layout.app')
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{$article->name}}</h1>
    <p class="lead">{{$article->description}}</p>
</div>

<div class="container">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-bold">Seller</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title">&euro;{{$article->price}} <small class="text-muted">not including shipping costs</small></h1>
            <div class="row">
                <div class="col-3">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Sellers name: </li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{$user->username}}</li>
                    </ul>
                </div>
            </div> <!-- end row -->
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-info">Place a bid</a>
            </div>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
</div> <!-- end container -->

@endsection
