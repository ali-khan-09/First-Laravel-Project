@extends("layout")
@section("content")


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-10">

                <h1 class="my-4">Articles </h1>

                <!-- Blog Post -->
                @foreach($articles as $article)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{$article->title}}</h2>
                        <p class="card-text">{{$article->excerpt}}</p>
                        <a href="article/{{$article->id}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
@endsection

