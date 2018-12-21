@extends('layout.app')
@section('content')

<div class="container">
    <div class="col-md-8 col-lg-8 col-8 float-left">
        <div class="card">
            <div class="card-header">
              Create Article
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('articles.update',[$article->id]) }}" enctype="multipart/form-data">
               {{ csrf_field() }}
                <input type="hidden" name="_method" value="put"/>
                <div class="form-group">
                    <label for="id_name" class="required">Name</label>
                    <input type="text" name ="name" spellcheck="false" value="{{$article->name}}" class="form-control form-control-lg" id="id_name" required>
                </div>
                <div class="form-group">
                    <label for="id_description" class="required">Description</label>
                    <textarea name="description" spellcheck="false" class="form-control form-control-lg" id="id_description" required>{{$article->description}}</textarea>
                </div>
                <!-- price -->
                <div class="input-group mb-1">
                        <label for="id_price">Asking Price</label>
                        <div class="input-group-prepend">
                          <span class="input-group-text prepend-style">&euro;</span>
                        </div>
                        <input type="text" name="price" class="form-control prepend-style mt-2" aria-label="Amount (to the nearest euro)">
                        <div class="input-group-append prepend-style">
                          <span class="input-group-text prepend-style">.00</span>
                        </div>
                </div>

                <!-- File upload -->
                <div class="form-group">
                    <label for="id_file">Upload picture</label>
                    <input type="file" name="picture" class="form-control form-control-lg-file" id="id_file">
                </div>
                <div>
                <input type="submit" class="btn btn-success my-4" name="submit" value="Create"/>
                </div>
            </form>
          </div>
      </div>
    </div> <!-- end left -->
    </div>
      @include('layout.sidebar')
    </div>
</div> <!-- end container -->




@endsection
