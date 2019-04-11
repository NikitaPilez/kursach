<!doctype html>
<html lang="en">
<!--

Page    : index / MobApp
Version : 1.0
Author  : Colorlib
URI     : https://colorlib.com

 -->

<head>
    <title>{{$contacts->title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/util.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet"> -->
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="{{asset('/')}}"><img src="images/logo.png" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="{{asset('/')}}">ГЛАВНАЯ <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{asset('gallery')}}">ГАЛЕРЕЯ</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">УСЛУГИ</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{asset('questions')}}">ВОПРОСЫ</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{asset('contacts')}}">КОНТАКТЫ</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>{{$contacts->header}}</h1>
            <p class="tagline">{{$contacts->subtitle}}</p>
        </div>
        <div class="img-holder mt-3"><img src="images/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5">
        <div class="container text-center">
            <img src="images/client-logos.png" alt="client logos" class="img-fluid">
        </div>
    </div>

    @yield('content')

    <footer class="my-5 text-center">
        <p class="mb-2"><small>{{$contacts->copyright}} <a href="https://colorlib.com">COLORLIB</a></small></p>

        <small>
            <a id="test" href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>

 

    <!-- jQuery and Bootstrap -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>

    <script src="js/script.js"></script>

    <script type="text/javascript">
        $('#test').click(function(){
            console.log('dfdddfdfdf');
        });
    </script>

</body>

</html>
