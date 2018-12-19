@extends('layout.app')
@section('content')

<div class="col-md-6 col-lg-6 col-6 mx-auto">
    <div class="card text-center">
        <div class="card-header">
            Articles
        </div>
        <div class="card-body">
        <h5 class="card-title">List of the articles</h5>
        <ul class="list-group">
        @foreach ($articles as $article)
        <li class="list-group-item">{{$article->name}}</li>
        @endforeach

        </ul>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
@endsection
