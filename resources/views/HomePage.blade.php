@extends('layouts.master')

@section('titolo', 'Soccer Hub')
@section('titolo_grande', 'SOCCER_HUB')

@section('copertina_pagina')
<!-- parte relativa alla home con il video di presentazione in background-->
<header>
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video_best_moment.mp4" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3 title_video col-sm-12">SOCCER-HUB</h1>
                <p class="lead mb-0 subtitle_video">A web portal for scouting the next cracks in world football.</p>
            </div>
        </div>
    </div>
</header>
@endsection

@section('contenuto_pagina')
<!-- Sezione della pagina relativa al contenuto -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="VeryStrong h1">WHOOOOA.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <p class="paragraph_home">Are you looking for the next talent that can make millions of fans cheer in this way? Then Soccer-Hub is what you are looking for!</p>
                <p class="paragraph_home">A platform that helps observers find the new stars of the future through detailed analyzes, the possibility of closely following the selected players and the opportunity to access statistics designed to highlight the pros and cons of each player.</p>
                <p class="paragraph_home">Log in to enter your personal area, register to immediately access all the benefits or discover the list of the top 10 players worldwide.</p>
            </div>
            <div class="col-md-3 mx-auto col-sm-12 ">
                <img class="img-fluid rounded mx-auto d-block" src="imgLoghi.jpeg">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <button type="button" class="btn btn-primary btn-lg">Log-in</button>
                <button type="button" class="btn btn-primary btn-lg">Register</button>
                <button type="button" class="btn btn-primary btn-lg">Top 10</button>
            </div>
        </div>
    </div>
</section>
<!--Sezione dedicata alle FAQ-->
<section>
    <div class="card border-0 bg-light mt-xl-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Frequently Asked Questions</h1>
            </div>
            <div class="col text-center mb-5">
                <div class="card-body p-4 py-lg-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="h6 fw-bolder">Have more questions?</div>
                            <p class="text-muted mb-4">
                                Contact us at
                                <br />
                                <a href="#!">support@domain.com</a>
                            </p>
                            <div class="h6 fw-bolder">Follow us</div>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection