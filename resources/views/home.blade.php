@extends('layouts/template')

@section('container')

<section id="about" class="bg-light">
    <div class="container about">
        <div class="row text-center d-flex justify-content-center">
            <div class="col-lg-6">
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    <li data-target="#carousel-example-2" data-slide-to="3"></li>
                    <li data-target="#carousel-example-2" data-slide-to="4"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                        <img class="d-block w-100" src="{{ asset('img/belajar.jpg')}}"
                            alt="First slide">
                        <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                        <h3 class="h3-responsive">Serius Memperhatikan</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                        <img class="d-block w-100" src="{{ asset('img/belajar2.jpg')}}"
                            alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                        <h3 class="h3-responsive">Belajar Kelompok</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                        <img class="d-block w-100" src="{{ asset('img/ujian.jpg')}}"
                            alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                        <h3 class="h3-responsive">Ujian Tertulis</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                        <img class="d-block w-100" src="{{ asset('img/ujian2.jpg')}}"
                            alt="Fourth slide">
                        <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                        <h3 class="h3-responsive">Ujian Praktek</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                        <img class="d-block w-100" src="{{ asset('img/olahraga.jpg')}}"
                            alt="Fifth slide">
                        <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                        <h3 class="h3-responsive">Olahraga</h3>
                        </div>
                    </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
            <div class="col-lg-6">
                <h2 class="h1-responsive font-weight-bold text-center ">About Us</h2>
                <p class="text-left" >BIMAGO (Bimbingan Masuk Gontor) adalah lembaga non-formal yang bertujuan untuk membantu calon santri Gontor untuk belajar dengan metode yang tepat, buku sesuai dengan kurikulum Gontor, dengan dibimbing oleh tenaga pengajar berpengalaman yang merupakan alumni dari Pondok Modern Darussalam Gontor itu sendiri.</p>
            </div>
        </div>
    </div>
</section>

<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col animatedParent ">
                <h2 class="h1-responsive font-weight-bold text-center my-5 animated growIn slow">Frequently Asked Question</h2>
                <hr>
                {{-- List --}}
                <div class="list-group-flush animatedParent font-weight-bold" data-sequence='500'>
                    <div class="list-group-item animated  fadeInLeftShort slow" data-id='1'>
                        <p class="mb-0 d-flex justify-content-between">
                            <i class="fa fa-check-square-o fa-2x mr-4 grey p-3 white-text rounded-circle " aria-hidden="true"></i>
                            Apa saja persyaratannya ?
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                            <div class="row d-flex justify-content-center">
                            <ul class="">
                                <li class="nlist">Mengisi formulir pendaftaran.</li>
                                <li class="nlist"> Photocopy kartu keluarga.</li>
                                <li class="nlist">Photocopy KTP wali.</li>
                                <li class="nlist">Lampikan 3 foto ukuran 3x4 dengan background biru. (Akhwat berkerudung)</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item animated fadeInRightShort slow" data-id='2'>
                        <p class="mb-0 d-flex justify-content-between"> 
                            <i class="fa fa-briefcase fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                            Program bimbingannya bagaimana ?
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <div class="row d-flex justify-content-center">
                                <ul class="">
                                    <li class="nlist">Bimbingan ujian tertulis dan praktek.</li>
                                    <li class="nlist">Mengupas tuntas tips dan trik masuk Gontor.</li>
                                    <li class="nlist">Kegiatan simulasi kehidupan di pondok.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item animated fadeInLeftShort slow" data-id='3'>
                        <p class="mb-0 d-flex justify-content-between">
                            <i class="fa fa-thumbs-o-up fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                            Fasilitasnya bagaimana ? 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <div class="row d-flex justify-content-center">
                                <ul class="">
                                    <li class="nlist">Mendapatkan modul pembelajaran.</li>
                                    <li class="nlist">Mendapatkan buku pelajaran sesuai materi yang diujikan.</li>
                                    <li class="nlist">Ada snack tiap pertemuan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item animated fadeInRightShort slow" data-id='4'>
                        <p class="mb-0 d-flex justify-content-between">
                            <i class="fa fa-clock-o fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                            Kapan waktu belajarnya ? 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo04"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo04">
                            <div class="row d-flex justify-content-center">
                                <ul >
                                    <li class="nlist">Setiap hari Ahad bulan Januari-Maret 2020.</li>
                                    <li class="nlist">Jam 08:00 - Sholat Dzuhur.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item animated fadeInLeftShort slow" data-id='5'>
                        <p class="mb-0 d-flex justify-content-between">
                            <i class="fa fa-user fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                            Siapa pengajarnya ? 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo05"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo05">
                            <div class="row d-flex justify-content-center">
                                <ul class="">
                                    <li style="font-weight:bold; font-weight: bold; color: rgba(0, 0, 0, 0.6);">Alumni Gontor IKPM Regional Banjarnegara.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item animated fadeInRightShort slow" data-id='6'>
                        <p class="mb-0 d-flex justify-content-between">
                            <i class="fa fa-money fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                            Berapa biaya pendaftarannya ? 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo06"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo06">
                            <div class="row d-flex justify-content-center">
                                <ul class="">
                                    <li class="nlist">Pendaftaran : Rp.50.000,00.</li>
                                    <li class="nlist">Bimbingan belajar selama 3 bulan : Rp.900.000,00.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item animated fadeInLeftShort slow" data-id='7'>
                        <p class="mb-0 d-flex justify-content-between">
                            <i class="fa fa-book fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                            Apa saja materinya ? 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo07"
                                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-chevron-circle-down fa-2x " aria-hidden="true"></i>
                            </button>
                        </p>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo07">
                            <div class="row d-flex justify-content-center">
                                <ul class="">
                                    <li class="alist">Al-Qur'an.
                                        <ol>
                                            <li class="nlist">) Ilmu Tajwid.</li>
                                            <li class="nlist">) Makharijul Huruf.</li>
                                            <li class="nlist">) Hafalan Juz 'Amma</li>
                                        </ol>
                                    </li>
                                    <li class="alist">Ibadah Qouliyah.
                                        <ol>
                                            <li class="nlist">) Hafalan Do'a Harian.</li>
                                            <li class="nlist">) Bacaan Dzikir dan Do'a setelah sholat.</li>
                                            <li class="nlist">) Hafalan Do'a sehari-hari.</li>
                                        </ol>
                                    </li>
                                    <li class="alist">Imla' (Dikte arab).</li>
                                    <li class="alist">Psikotest.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- Akhir List --}}
            </div>
        </div>
    </div>
</section>

@endsection
