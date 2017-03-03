<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@section('navbar')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Laravel cms</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/add_article">Add article</a></li>
                        <li><a href="/edit_articles">Edit article</a></li>
                        <li><a href="/delete_article">Delete article</a></li>
                        <li><a href="/articles">All articles</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
@show

<div class="container">
    @yield('content')
</div>


</body>
</html>