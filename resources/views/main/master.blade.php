<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>

@include('main.nav')

<div class="blog-header">
    <div class="container">
        @if (!Auth::check())
            <h3 class="blog-title">Welcome dear, Guest!</h3>
        @else
                <h3 class="blog-title">Welcome dear, Customer!</h3>
        @endif
    </div>
</div>

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div><!-- /.container -->


</body>
</html>
