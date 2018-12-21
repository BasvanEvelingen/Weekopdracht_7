@extends('layout.app')
@section('content')

<div class="container">
    <div class="col-md-8 col-lg-8 col-8 float-left">
        <div class="card">
            <div class="card-header">
              Create Article
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('articles.store',[$article->id]) }}" enctype="multipart/form-data">
               {{ csrf_field() }}
                <div class="form-group">
                    <label for="id_name" class="required">Name</label>
                    <input type="text" name ="name" class="form-control form-control-lg" id="id_name" required>
                </div>
                <div class="form-group">
                    <label for="id_description" class="required">Description</label>
                    <textarea name="description" class="form-control form-control-lg" id="id_description required"></textarea>
                </div>
                <!-- price -->
                <div class="input-group mb-1">
                        <label for="id_price">Asking Price</label>
                        <div class="input-group-prepend">
                          <span class="input-group-text prepend-style">&euro;</span>
                        </div>
                        <input type="text" name="price" id="id_price" class="form-control prepend-style mt-2" aria-label="Amount (to the nearest euro)">
                        <div class="input-group-append prepend-style">
                          <span class="input-group-text prepend-style">.00</span>
                        </div>
                </div>

                <!-- File upload -->
                <div class="form-group">
                    <label for="id_file">Upload picture</label>
                    <input type="file" class="form-control form-control-lg-file" id="id_file">
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
