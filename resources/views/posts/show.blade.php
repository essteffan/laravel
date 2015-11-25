@extends("layout");

@section("content")
    <div class="row" style="margin: 0 20px">
        <div class="col-ms-12">
            <h1>{{ $post->name }}</h1>
            <hr>
            <article>
                <p>{{ $post->content }}</p>
                <small>Tags:
                    @foreach ($post->tags as $key => $tag)
                        {{ $tag->name }}@if($key != (count($post->tags) - 1)), @endif
                    @endforeach
                </small>
                <a href="{{ route("posts.index")  }}" class="btn btn-default">Get Back</a>
                <a href="{{ action('PostController@edit', [$post->id]) }}" class="btn btn-success">Edit</a>
                <form action="{{ action('PostController@destroy', [$post->id]) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </article>
            <br>
        </div>
    </div>
@stop