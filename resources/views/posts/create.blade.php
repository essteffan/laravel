@extends('layout')

@section('content')
    <div class="page-header">
        <h1 class="text-center">Posts / Create </h1>
    </div>


    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Post Form -->
        <form action="{{ route('posts.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">TITLE</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="title" value="{{ Input::old('name') }}"/>
                </div>
            </div>

            <div class="form-group">
                <label for="body" class="col-sm-3 control-label">BODY</label>
                <div class="col-sm-6">
                    <textarea class="form-control" rows="3" name="content" >{{ Input::old('content') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="tags" class="col-sm-3 control-label">Tags</label>
                <div class="col-sm-6">
                    <select name="tags[]" class="form-control" id="tags" multiple="multiple">
                        @foreach($tags as $key => $tag)
                            <option value="{{ $key }}"> {{ $tag }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <!-- Add Post Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection