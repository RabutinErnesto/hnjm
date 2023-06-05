<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HNJM - Head and Neck Journal of Madagascar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('newfront/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('front/img/logo.png') }}" type="image/x-icon">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('newfront/lib/owlcarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('newfront/lib/lightbox/css/lightbox.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('newfront/css/style.min.css')}}" rel="stylesheet">


</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="{{route('acceuil')}}" class="navbar-brand font-weight-bold text-secondary" style="font-size:20px;">
            <img src="{{asset('newfront/img/logo.png')}}" alt="logo"  width="90" height="50">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{route('acceuil')}}" class="nav-item nav-link {{ Request::is('acceuil') ? 'active' : '' }}">Acceuil</a>
                    <a href="{{route('actualiteview')}}" class="nav-item nav-link {{ Request::is('actualiteview') ? 'active' : '' }}">Actualites</a>
                    <a href="{{route('archive')}}" class="nav-item nav-link {{ Request::is('archive') ? 'active' : '' }}">Archives</a>
                    <a href="{{route('articleview')}}" class="nav-item nav-link {{ Request::is('articleview') ? 'active' : '' }}">Article in press</a>
                    <a href="{{route('comite')}}" class="nav-item nav-link {{ Request::is('comite') ? 'active' : '' }}">Membres de comites</a>
                    <a href="{{route('instr')}}" class="nav-item nav-link {{ Request::is('instr') ? 'active' : '' }}">Instruction aux auteurs</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('programcongre') ? 'active' : '' }} {{ Request::is('resumecongre') ? 'active' : '' }}" data-toggle="dropdown">Congres</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('programcongre')}}" class="dropdown-item">Programme Congrès</a>
                            <a href="{{route('resumecongre')}}" class="dropdown-item">Résumé Congrès</a>
                        </div>
                    </div>
                    <a href="{{route('viewphoto')}}" class="nav-item nav-link {{ Request::is('viewphoto') ? 'active' : '' }}">Photos du mois</a>
                    <a href="{{route('viewthese')}}" class="nav-item nav-link {{ Request::is('viewthese') ? 'active' : '' }}">Theses et memoire </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-3  px-sm-3 px-md-5 position-relative">

        <div class="container-fluid pt-3 pb-3">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">HNJM</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="">Rabutin</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newfront/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('newfront/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('newfront/lib/isotope/isotope.pkgd.min.js')}}"></script>
    {{-- <script src="{{asset('newfront/lib/lightbox/js/lightbox.min.js')}}"></script> --}}



    <!-- Template Javascript -->
    <script src="{{asset('newfront/js/main.js')}}"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
