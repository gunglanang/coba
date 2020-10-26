<!DOCTYPE html>
<html>
    <head>
        <title>Layout</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">hallow gung lanang</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page1</a></li>
            <li><a href="#">Page2</a></li>
            <li><a href="#">Page3</a></li>
            </ul>
            </div>
        </nav>
        <div class="container-fluid">

            {{--Isi Konten--}}
            <div class="row">
                @yield('content')
            </div>
        </div>
    <Script type ="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></Script>
    </body>
</html>