@extends("layout");

@section("content")
    <div class="row" style="margin: 0 20px">
        <div class="col-ms-12">
            <h1>{{ $post->name }}</h1>
            <hr>
            <article>
                <p>{{ $post->content }}</p>
                <small>Tags: </small>
                <a href="{{ route("posts.index")  }}" class="btn btn-default">Get Back</a>
                <a href="{{ action('PostController@edit', [$post->id]) }}" class="btn btn-success">Edit</a>
                <a href="{{ action('PostController@destroy', [$post->id]) }}" class="btn btn-danger">Delete</a>
            </article>
            <br>
        </div>
    </div>
@stop