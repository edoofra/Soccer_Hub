@extends('layouts.master')

@section('titolo','Soccer Hub')
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
                <p class="lead mb-0 subtitle_video">{{ trans('labels.copertina') }}</p>
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
                <p class="paragraph_home">{{ trans('labels.hero1') }}</p>
                <p class="paragraph_home">{{ trans('labels.hero2') }}</p>
                <p class="paragraph_home">{{ trans('labels.hero3') }}</p>
            </div>
            <div class="col-md-3 mx-auto col-sm-12 ">
                <img class="img-fluid rounded mx-auto d-block" src="img/LOGO.png">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <button type="button" class="btn btn-primary btn-lg" id="prova1">{{ trans('labels.loginLabel') }}</button>
                <button type="button" class="btn btn-primary btn-lg">{{ trans('labels.registerLabel') }}</button>
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
                <h1>{{ trans('labels.FAQlabel') }}</h1>
            </div>
            <div class="row">
                <h1 class="titolo_faq col-sm-12">{{ trans('labels.q1') }}</h1>
            </div>
            <div class="row">
                <p class="paragraph_home col-sm-12">{{ trans('labels.a1') }}</p>
            </div>
            <div class="row">
                <h1 class="titolo_faq col-sm-12">{{ trans('labels.q2') }}</h1>
            </div>
            <div class="row">
                <p class="paragraph_home col-sm-12">{{ trans('labels.a2') }}</p>
            </div>
            <div class="row">
                <h1 class="titolo_faq col-sm-12">{{ trans('labels.q3') }}</h1>
            </div>
            <div class="row">
                <p class="paragraph_home col-sm-12">{{ trans('labels.a3') }}</p>
            </div>
            <div class="row">
                <h1 class="titolo_faq col-sm-12">{{ trans('labels.q4') }}</h1>
            </div>
            <div class="row">
                <p class="paragraph_home col-sm-12">{{ trans('labels.a4') }}</p>
            </div>
            <div class="col text-center mb-5">
                <div class="card-body p-4 py-lg-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="h6 fw-bolder">{{ trans('labels.moreQuestion') }}</div>
                            <p class="text-muted mb-4">
                            {{ trans('labels.contattaci') }}
                                <br />
                                <a href="#!">Soccer-Hub.support@domain.com</a>
                            </p>
                            <div class="h6 fw-bolder">{{ trans('labels.seguici') }}</div>
                            <!-- bootstrap code for social medi icons -->
                            <div class="d-flex justify-content-center">
                                <a href="https://www.facebook.com" class="mx-2">
                                    <img src="img/facebook.png" alt="facebook" class="img-fluid img_small" />
                                </a>
                                <a href="https://twitter.com" class="mx-2">
                                    <img src="img/twitter.png" alt="twitter" class="img-fluid img_small" />
                                </a>
                                <a href="https://www.instagram.com" class="mx-2">
                                    <img src="img/instagram.png" alt="instagram" class="img-fluid img_small" />
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection