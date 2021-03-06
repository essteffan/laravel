<header class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route("posts.index") }}" class="navbar-brand">Home</a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{ route("posts.index") }}">Posts
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route("posts.create") }}">Add New Post</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tags
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route("tags.create") }}">Add New Tag</a></li>
                        <li><a href="{{ route("tags.index") }}">View All</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route("contact.index") }}">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-right navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                    <ul class="dropdown-menu" style="padding:12px;">
                        <form class="form-inline" action="{{ route("posts.index") }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" value="{{ app('request')->input("search") }}" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                            </div>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>        <br><br><br><br>