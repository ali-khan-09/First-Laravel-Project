@extends("layout")
@section("content")



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-10">

                <h1 class="my-4">Blog Detail
                    <small>This is blog detail page</small>
                </h1>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$article->title}}</h2>
                        <p class="card-text"> {{$article->body}}</p>

                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>



            </div>


            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
@endsection


