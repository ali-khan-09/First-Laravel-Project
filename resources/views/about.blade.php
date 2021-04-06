@extends("layout")
@section("content")

    @extends("layout")
@section("content")


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">About Us
                    <small>This is about us</small>
                </h1>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">




                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Latest Blogs</h5>
                    <div class="card-body">
                        <div class="list-group">
                           @foreach($articles as $article)
                                <a href="/article/{{$article->id}}" class="list-group-item list-group-item-action flex-column align-items-start ">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-1">{{$article->title}}</h5>

                                    </div>
                                    <p class="mb-1">{{$article->excerpt}}</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                            @endforeach

                        </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

@endsection
