@extends("layout")

@section("content")

    <div class="row">
        <form action="{{ route("contact.save") }}" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-6">
                    <input type="text" name="firstName"  class="form-control" id="firstName" value="{{ Input::old('firstName') }}"/>
                </div>
            </div>

            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" name="lastName"  class="form-control" id="lastName" value="{{ Input::old('lastName') }}"/>
                </div>
            </div>

            <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Message</label>
                <div class="col-sm-6">
                    <textarea class="form-control" rows="3" name="message" >{{ Input::old('message') }}</textarea>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Send Message
                    </button>
                </div>
            </div>

        </form>
    </div>

@endsection