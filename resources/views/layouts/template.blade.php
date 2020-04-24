<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIMAGO Banjarnegara</title>
    <link rel="stylesheet" href=" {{ asset('mdb/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{ asset('mdb/css/mdb.min.css')}} ">
    <link rel="stylesheet" href=" {{ asset('mdb/css/style.css')}} ">
    <link rel="stylesheet" href=" {{ asset('font-awesome/css/font-awesome.css')}} ">
    <link rel="stylesheet" href=" {{ asset('font-awesome/css/font-awesome.min.css')}} ">
    {{-- <!--[if lte IE 9]> --}}
    <link rel="stylesheet" href=" {{ asset('css/animations.css')}}">
    {{-- <link rel="stylesheet" href=" {{ asset('css/animations-ie-fix.css')}}"> --}}
    {{-- <![endif]--> --}}
    
</head>
<body>
    <section id="home">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar default-color">
        <a class="navbar-brand" href="/">BIMAGO Banjarnegara</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#find">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Pendaftaran
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#faq">Pendaftaran Bimago</a>
                <a class="dropdown-item" href="/pendaftaran">Pendaftaran Gontor</a>
                <a class="dropdown-item" href="#">Daftar</a>
                </div>
            </li>
            </ul>
            <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
            </form>
        </div>
        </nav>
        </section>

        <section id="jumbotron">
            <div class="jumbotron card card-image">
                <div class="mask">
                    <div class="text-white text-center py-5 px-4">
                        <div>
                        <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Bimbingan Masuk Gontor Banjarnegara</strong></h2>
                        <h5 class="mx-5 mb-5">Bimbingan belajar untuk menjadi santri di Pondok Modern Darussalam Gontor Putra/Putri. Dengan tenaga pengajar alumni Gontor.
                        </h5>
                        <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" >
                <div class="row text-center icon animatedParent animated fadeIn">
                <div class="col-lg-4 col-sm-4 animated fadeInUpShort slow">
                    <img src=" {{ asset('img/dart.png')}} " alt="focus" aria-label="focus">
                    <h6><b>METODE BELAJAR TEPAT</b></h6>
                </div>
                <div class="col-lg-4 col-sm-4 animated fadeInUpShort slow"  >
                    <img src=" {{ asset('img/book.png')}} " alt="book" aria-label="book">
                    <h6><b>BUKU SESUAI KURIKULUM</b></h6>
                </div>
                <div class="col-lg-4 col-sm-4 animated fadeInUpShort slow">
                    <img src=" {{ asset('img/classroom.png')}} " alt="teacher" aria-label="classroom">
                    <h6><b>TENAGA PENGAJAR BERPENGALAMAN</b></h6>
                </div>
            </div>
        </div>
        </section>


@yield('container')

<!-- Section: Contact v.1 -->
<section class="my-5" id="find">
    <div class="container">
        <div class="row">
            <div class="col">
            <!-- Section heading -->
            <div class="animatedParent">
            <h2 class="h1-responsive font-weight-bold text-center my-5 animated growIn slow">Find Us</h2>
            </div>
            <hr>
            <!-- Section description -->
            <p class="text-center w-responsive mx-auto pb-5">Sekretariat BIMAGO Banjarnegara terletak di Jl. Raya Brengkok No. 10 Rt 01/05 - Parakancanggah, Banjarnegara. (Depan gedung pertemuan Darussalam)</p>
        
            <!-- Grid row -->
            <div class="row">
        
            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-4">
        
                <!-- Form with header -->
                <div class="card">
                <div class="card-body">
                    <!-- Header -->
                    <div class="card-header blue accent-1">
                    <h3 class="mt-2"><i class="fa fa-envelope"></i> Write to us:</h3>
                    </div>
                    <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
                    <!-- Body -->
                    <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form-name" class="form-control">
                    <label for="form-name">Your name</label>
                    </div>
                    <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="form-email" class="form-control">
                    <label for="form-email">Your email</label>
                    </div>
                    <div class="md-form">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="form-Subject" class="form-control">
                    <label for="form-Subject">Subject</label>
                    </div>
                    <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text "></i>
                    <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form-text">Send message</label>
                    </div>
                    <div class="text-center">
                    <button class="btn btn-light-blue">Send</button>
                    </div>
                </div>
                </div>
                <!-- Form with header -->
        
            </div>
            <!-- Grid column -->
        
            <!-- Grid column -->
            <div class="col-lg-7">
        
                <!--Google map-->
                <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1015.0585178103005!2d109.7114866858934!3d-7.392612180330931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa8e1d0b5a7eb%3A0xb0ac69b874e3c423!2sJl.%20Raya%20Brengkok%20-%20Banjarnegara%20No.10%2C%20RW.01%2C%20Parakancanggah%2C%20Kec.%20Banjarnegara%2C%20Banjarnegara%2C%20Jawa%20Tengah%2053412%2C%20Indonesia!5e1!3m2!1sen!2sus!4v1571123238300!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <!-- Buttons-->
                <div class="row text-center" style="font-weight:bold; color:rgba(0, 0, 0, 0.6)">
                <div class="col-md-4 animatedParent">
                    <a class="btn btn-floating blue accent-1 animated fadeInLeftShort">
                    <i class="fa fa-map-marker fa-2x"></i>
                    </a>
                    <p class="animated fadeInUpShort">Jl. Brengkok 10 Parakancanggah, 53412</p>
                    <p class="animated fadeInUpShort" class="mb-md-0">Banjarnegara</p>
                </div>
                <div class="col-md-4 animatedParent">
                    <a class="btn btn-floating blue accent-1 animated fadeInLeftShort">
                    <i class="fa fa-phone fa-2x"></i>
                    </a>
                    <p class="animated fadeInUpShort">Ust. Alfian <br> +62 896 3066 9853</p>
                    <p class="animated fadeInUpShort">Usth. Khayyu <br> +62 822 2524 8460</p>
                </div>
                <div class="col-md-4 animatedParent">
                    <a class="btn btn-floating blue accent-1 animated fadeInLeftShort">
                    <i class="fa fa-envelope fa-2x"></i>
                    </a>
                    <p class="animated fadeInUpShort">bimago.banjarnegara@gmail.com</p>
                    <p class="animated fadeInUpShort" class="mb-0">sofyanzuhad2@gmail.com</p>
                </div>
                </div>
        
            </div>
            <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
            </div>
        </div>
    </div>
</section>
<!-- Section: Contact v.1 -->

<section id="footer">
    <footer>
        <div class="col bg-default text-center">
            <h5>&copy; copyright 2019 BIMAGO Banjarnegara</h5>
        </div>
    </footer>
</section>
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('mdb/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('mdb/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js')}}"></script>

<!-- CSS Animation -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/css3-animate-it.js')}}"></script>
</body>
</html>