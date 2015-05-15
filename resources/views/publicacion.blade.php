@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/jssocials.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/jssocials-theme-classic.css')}}">
@endsection

@section('anuncio')
    @include('extras.anuncio')
@endsection

@section('buscador')
    @include('extras.buscador')
@endsection

@section('contenido')
    <br>
    <div class="row">
        <section class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">

            @if(!$franInIzq->isEmpty())
                <?php

                $a1 = mt_rand(0, count($franInIzq)-1);
                $a2 = mt_rand(0, count($franInIzq)-1);

                do{
                    $a2 = mt_rand(0, count($franInIzq)-1);
                }while($a2 == $a1)
                ?>
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a1]->nombre."/".$franInIzq[$a1]->nombre_comercial)))}}">
                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a1]->logo_url) }}"  alt="prueba" style="width: auto">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franInIzq[$a2]->nombre."/".$franSupDer[$a2]->nombre_comercial)))}}">
                        <img class="img-responsive img-rounded" src="{{ asset($franInIzq[$a2]->logo_url) }}"  alt="prueba" style="width: auto">
                    </a>
                </div>
            @else
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
                </div>
                <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                    <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
                </div>

            @endif
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">

            <div class="row">
                <img src="{{ asset('images/multifranquicias_anucio.png') }}" class="img-responsive" alt="Responsive image">
                <hr id="separador">
            </div>
            <div class="row noticias">
                <div class="row" >

                    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="row">
                            <div class="col col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                                <h1 style="font-size: 3em" id="tituloNotica"> {{ $articulo[0]->titulo }}</h1>
                                <br>
                                <div id="share" class="jssocials"><div class="jssocials-shares"><div class="jssocials-share jssocials-share-twitter"><a class="jssocials-share-link" href="https://twitter.com/share?url=http%3A%2F%2Flocalhost%2Flara%2Fpublic%2Ffranquicias-de-hola%2520que%2520tal%2FHuerta%2520de%2520Casillas%2520e%2520Hija&amp;text=Multifranquicias" target="_blank"><i class="fa fa-twitter jssocials-share-logo"></i><span class="jssocials-share-label">Tweet</span></a><div class="jssocials-share-count-box jssocials-share-no-count"><span class="jssocials-share-count"></span></div></div><div class="jssocials-share jssocials-share-facebook"><a class="jssocials-share-link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Flara%2Fpublic%2Ffranquicias-de-hola%2520que%2520tal%2FHuerta%2520de%2520Casillas%2520e%2520Hija" target="_blank"><i class="fa fa-facebook jssocials-share-logo"></i><span class="jssocials-share-label">Like</span></a><div class="jssocials-share-count-box jssocials-share-no-count"><span class="jssocials-share-count"></span></div></div><div class="jssocials-share jssocials-share-googleplus"><a class="jssocials-share-link" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Flara%2Fpublic%2Ffranquicias-de-hola%2520que%2520tal%2FHuerta%2520de%2520Casillas%2520e%2520Hija" target="_blank"><i class="fa fa-google-plus jssocials-share-logo"></i><span class="jssocials-share-label">+1</span></a><div class="jssocials-share-count-box jssocials-share-no-count"><span class="jssocials-share-count"></span></div></div><div class="jssocials-share jssocials-share-linkedin"><a class="jssocials-share-link" href="https://www.linkedin.com/shareArticle?url=http%3A%2F%2Flocalhost%2Flara%2Fpublic%2Ffranquicias-de-hola%2520que%2520tal%2FHuerta%2520de%2520Casillas%2520e%2520Hija" target="_blank"><i class="fa fa-linkedin jssocials-share-logo"></i><span class="jssocials-share-label">Share</span></a><div class="jssocials-share-count-box jssocials-share-no-count"><span class="jssocials-share-count"></span></div></div><div class="jssocials-share jssocials-share-pinterest"><a class="jssocials-share-link" href="https://pinterest.com/pin/create/bookmarklet/?&amp;url=http%3A%2F%2Flocalhost%2Flara%2Fpublic%2Ffranquicias-de-hola%2520que%2520tal%2FHuerta%2520de%2520Casillas%2520e%2520Hija&amp;description=Multifranquicias" target="_blank"><i class="fa fa-pinterest jssocials-share-logo"></i><span class="jssocials-share-label">Pin it</span></a><div class="jssocials-share-count-box jssocials-share-no-count"><span class="jssocials-share-count"></span></div></div></div></div>
                            <br>
                            </div>

                        </div>
                    <div class="row">

                        <div class="col col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">



                            <div><img style="float: left; margin-right: 1%;" src="{{ URL::asset($articulo[0]->url_imagen)}}" alt="Responsive image" width='200' height="200" />  {!! $articulo[0]->contenido !!} </div>
                        <p class="fecha_publicacion pull-right">{{ '21-02-2012' }}</p>
                            </div>

                    </div>


                    </div>


                </div>
                <hr>

            </div>

        </section>

    </div>
@endsection

@section('der')

    @include('extras.derecha')

@endsection

@section('javascript')
    <script type="text/javascript" src="{{ URL::asset('js/jssocials.min.js') }}"></script>

@endsection

@section('ready')

    $("#share").jsSocials({
    shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"],
    url: "{{Request::url()}}",
    showLabel:true,
    showCount:true
    });


@endsection