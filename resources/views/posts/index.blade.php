@extends("layout");

@section("content")
    <div class="row" style="margin: 0 20px">
        <div class="col-ms-12">
            <h1>Articles</h1>
            <hr>
            <ul>
                @foreach ($posts as $post)
                    <article>
                        <h2><a href="{{ action('PostController@show', [$post->id]) }}">{{ $post->name }}</a></h2>
                        <p>{{ $post->content }}</p>
                        <small>Tags: </small>
                        <a href="{{ action('PostController@show', [$post->id]) }}" class="btn btn-default">See post</a>
                    </article>
                    <br>
                @endforeach
            </ul>
        </div>
    </div>
@stop