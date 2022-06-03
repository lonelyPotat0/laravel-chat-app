<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Chat</title>
</head>

<body>
    @auth

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">Brand</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                        <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
                        {{-- <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega menu  </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu One</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Two</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Three</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div>    
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Four</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row --> 
                        </div> <!-- dropdown-mega-menu.// -->
                    </li> --}}
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    @endauth
    <div class="container content">
        @yield('content')
    </div>

</body>

</html>
