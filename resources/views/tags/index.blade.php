@extends("layout");

@section("content")
    <div id="masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Blog
                        <p class="lead">Catchy Subtitle Here</p>
                    </h1>
                </div>
                <div class="col-md-5">
                    <div class="well well-lg">
                        <div class="row">
                            <div class="col-sm-12">
                                Ad Space
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /cont -->
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-body">

                        @foreach ($tags as $tag)
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <h3>{{ ucfirst($tag->name) }}</h3>
                                </div>
                                <a href="{{ route("tags.index")  }}" class="btn btn-default">Get Back</a>
                                <a href="{{ action('TagsController@edit', [$tag->id]) }}" class="btn btn-success">Edit</a>
                                <form action="{{ action('TagsController@destroy', [$tag->id]) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                            <hr>
                            @endforeach
                                    <!--/stories-->
                            {{--{!! $tags->render() !!}--}}

                    </div>
                </div>

            </div><!--/col-12-->
        </div>
    </div>

@stop