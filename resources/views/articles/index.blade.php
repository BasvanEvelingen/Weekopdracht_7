@extends('layout.app')
@section('content')
<div class="container-fluid">
    <!--<div class="row">-->
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-8 float-left">
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/MarketPlace.jpg')}}" alt="image"/>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    Articles
                </div>
                <div class="card-body">
                <h3 class="card-title">List of the articles</h3>
                <ul class="list-group">
                    @foreach ($articles as $article)
                        <li class="list-group-item"><a href="/articles/{{$article->id}}">{{$article->name}}</a></li>
                    @endforeach
                </ul>
                <!--<div>
                    <a href="#" class="btn btn-success mt-4">Button</a>
                </div>-->
                </div>
            </div>
        </div> <!-- end left -->
        </div>
        @include('sidebar')
        </div>
 <!--   </div> end row -->
</div> <!-- end container -->

@endsection
