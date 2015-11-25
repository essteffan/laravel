<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset=UTF-8">
    <meta charset="utf-8">
    <title>Blog Template</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    @include("include.header")
    @include("errors.errors")

    @yield("content")
<hr>
    @include("include.footer")

<!-- script references -->
<script src="{{ asset("assets/js/all.js") }}"></script>
    @yield("footer")
</body>
</html>