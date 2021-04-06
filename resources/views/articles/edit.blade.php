@extends("layout")
@section("content")
    <div class="row">
        <div class="col-10 mx-auto">
            <h1 class="text-center">Create Article</h1>
            <form method="POST" action="/article/{{$article->id}}/edit">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{$article->title}}" >
                    @error("title")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <input type="text" class="form-control" placeholder="Excerpt" name="excerpt" value="{{$article->excerpt}}">
                    @error("excerpt")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Body">Body</label>
                    <textarea class="form-control" cols="10" rows="10" placeholder="Body" name="body">
                        {{$article->body}}
                    </textarea>
                    @error("body")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary btn-block" name="submit">
            </form>
        </div>
    </div>
@endsection
