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

                        @foreach ($posts as $post)
                            <div class="row">
                                <br>
                                <div class="col-md-2 col-sm-3 text-center">
                                    <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <h3>{{ $post->name }}</h3>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <p>{{ $post->content }}</p>
                                            <p class="lead"><a href="{{ action('PostController@show', [$post->id]) }}" class="btn btn-default">Read More</a></p>
                                            <p class="pull-right"><span class="label label-default  ">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
                                            <ul class="list-inline"><li><a href="#">Posted: {{ $post->created_at }} 2 Days Ago</a></li></ul>
                                        </div>
                                        <div class="col-xs-3"></div>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <!--/stories-->
                            {!! $posts->render() !!}

                    </div>
                </div>

            </div><!--/col-12-->
        </div>
    </div>

@stop