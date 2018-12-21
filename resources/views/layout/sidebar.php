
<div class="col-md-4 col-lg-4 float-right">

    <!-- Side Widget -->
    <div class="card">
        <h3 class="card-header">Menu</h3>
        <div class="card-body">
           <ul class="list-unstyled mb-0">
                <li><a href="/articles/{{$article->id}}/edit">Edit </a></li>
                <li><a href="/articles/create">Create </a></li>
                <li><a href="">Delete </a></li>
                <li><a href="/articles/">List All</a></li>

            </ul>
        </div>
    </div>

          <!-- Search Widget -->
          <div class="card my-4">
            <h3 class="card-header">Search</h3>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h3 class="card-header">Categories</h3>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



</div>

