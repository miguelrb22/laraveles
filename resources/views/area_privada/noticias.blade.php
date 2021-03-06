@extends('area_privada.multifranquicias')

@section('css')

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/datepickersandbox/css/bootstrap-datepicker3.min.css') }}">

@endsection
@section('main')


    <?php
        $ses = Session::get('franquicia');
    ?>
    @if(isset($ses))
        <h5 class="text-center">Franquicia cargada: {{$ses->nombre_comercial}}</h5>
    @endif
    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12  col-sm-12 col-lg-12">
                <br>
                <form id="nueva-publicacion"  accept-charset="UTF-8" enctype="multipart/form-data">

                    {!! Form::token() !!}


                        <div class="row">

                            <label class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Tipo de publicación</label>
                            @if(!$entrevistas->isEmpty())
                                <label class="col-xs-6 col-sm-6 col-md-6 col-lg-6 entrevistas">Entrevistas restantes: {{$entrevistas[0]->cantidad}} </label>
                            @endif
                            @if(!$destacadas->isEmpty())
                                <label class="col-xs-6 col-sm-6 col-md-6 col-lg-6 destacadas">Noticias destacadas restantes: {{$destacadas[0]->cantidad}} </label>
                            @endif

                        </div>

                            @if(!isset($ses))
                             <div class="input-group col-xs-9  col-sm-9 col-lg-3 col-md-3">
                                <select name="tipo" id="tipoarticulo" class="form-control input input-sm">
                                    <option value="-1">- Seleccionar tipo -</option>
                                    <option value="1">Noticia</option>
                                </select>
                             </div>
                            @else
                                @if(!$noticias->isEmpty() || !$entrevistas->isEmpty() || !$destacadas->isEmpty())
                                    <div class="input-group col-xs-9  col-sm-9 col-lg-3 col-md-3">

                                        <select name="tipo" id="tipoarticulo" class="form-control input input-sm">
                                            <option value="-1"> - Seleccionar tipo -</option>
                                            @if(!$noticias->isEmpty())
                                                <option value="1">Noticia</option>
                                            @endif
                                            @if(!$entrevistas->isEmpty())
                                                @if($entrevistas[0]->cantidad > 0)
                                                    <option value="2">Entrevista</option>
                                                @endif
                                            @endif
                                            @if(!$destacadas->isEmpty())
                                                @if($destacadas[0]->cantidad > 0)
                                                    <option value="3">Noticia destacada</option>
                                                @endif
                                            @endif
                                        </select>
                                    </div>
                                    <br>
                                    <div class="input-group col-xs-9  col-sm-9 col-lg-3 col-md-3">
                                        <label>Pertenencia publicación</label>
                                        <select name="pertenencia" id="franquicia_id_articulo" class="form-control input input-sm">
                                            <?php if($rol != 1) echo "<option value='1'>Propia/General</option>" ?>
                                            <option value='2'>{{$ses->nombre_comercial}}</option>
                                        </select>
                                    </div>
                                @else
                                    <div class="input-group col-xs-9  col-sm-9 col-lg-3 col-md-3">

                                        <select name="tipo" id="tipoarticulo" class="form-control input input-sm" disabled>
                                            <option value="-1"> - Ningún paquete activo -</option>
                                        </select>
                                    </div>
                                @endif
                            @endif

                        @if(!isset($ses))
                            <br>
                            <div class="input-group col-xs-9  col-sm-9 col-lg-3 col-md-3">
                                <label>Pertenencia publicación</label>
                                <select name="pertenencia" id="franquicia_id_articulo" class="form-control input input-sm">
                                    <option value="1">Propia/General</option>
                                </select>
                            </div>
                        @endif


                    <?php
                    if(isset($ses)){

                        echo "<input type='hidden' name ='franquicia_id' value='$ses->id'/>";
                    }
                    ?>

                    <br>


                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                        <input type="text" name="titulo" id="titulopublicacion" class="form-control" placeholder="Título..." required>
                    </div>
                    <br>

                    <div class="input-group">
                        <label>Periodo de visualizacón en la vista principal</label>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="fecha_publicacion" class="form-control fecha_publi" placeholder="Fecha de publicacion" required>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="fecha_finalizacion" class="form-control fecha_publi" placeholder="Fecha de finalizacion" required>

                            </div>
                        </div>
                    </div>
                    <br>

                    @if(isset($ses))
                        <input type="text" value="{{$ses->nombre_comercial}}" name="nombre_comercial" hidden>
                    @endif

                    <div class="input-group">
                        <span><strong>Selecciona una imagen para la publicación:</strong></span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-file-image-o"></i></span>
                        <input type="file" name="file" id="url_imagen_publicacion" accept="image/x-png, image/jpeg" class="form-control" placeholder="Título...">
                    </div>
                    <br>

                    <textarea name ='contenido' class="summernote" placeholder="Escriba aqui el contenido de su publicación..."></textarea>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg publicar" disabled><i class="fa fa-plus-square"></i> Publicar</button>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('area_privada/summernote\lang\summernote-es-ES.js') }}"></script>
    <script src="{{ asset('area_privada/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('area_privada/summernote/plugin/summernote-ext-video.js') }}"></script>
    <script src="{{ asset('area_privada/datepickersandbox/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('area_privada/datepickersandbox/locales/bootstrap-datepicker.es.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('.summernote').summernote({
                height: 450,
                toolbar: [
                    //[groupname, [button list]]

                    ['Misc',['undo','redo','fullscreen','codeview']],
                    ['magic',['style']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert',['table','link','hr','picture','video']]
                ]
            });
        });
        $('.fecha_publi').datepicker({

            format: "yyyy-mm-dd",
            language: "es",
            multidate: false,
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endsection
@section('ready')
    $('#dashboard').removeClass("active")
    $('#publicaciones').addClass("active");

    $('#publicaciones').addClass('open');
    $('#publicaciones_panel').css('display','block');


    $("#tipoarticulo").on("change",function(){
        var tipo = $("#tipoarticulo")[0].value;
        if(tipo === "1")
        {
            $("#franquicia_id_articulo")[0].value = 1;
            $(".destacadas").css("display","none");
            $(".entrevistas").css("display","none");
            $(".publicar").removeAttr("disabled");
        }else if(tipo === "2"){
            $(".entrevistas").css("display","block");
            $("#franquicia_id_articulo")[0].value = 2;
            $(".destacadas").css("display","none");
            $(".publicar").removeAttr("disabled");
        }else if(tipo === "3"){
            $(".destacadas").css("display","block");
            $("#franquicia_id_articulo")[0].value = 2;
            $(".entrevistas").css("display","none");
            $(".publicar").removeAttr("disabled");
        }else{
            $(".entrevistas").css("display","none");
            $(".destacadas").css("display","none");
            $("#franquicia_id_articulo")[0].value = 1;
            $(".publicar").attr("disabled","disabled");
        }
    });



@endsection