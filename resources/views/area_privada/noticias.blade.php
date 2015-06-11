@extends('area_privada.multifranquicias')

@section('css')

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/datepickersandbox/css/bootstrap-datepicker3.min.css') }}">

@endsection



@section('main')


    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12  col-sm-12 col-lg-12">
                <br>
                <form id="nueva-publicacion"  accept-charset="UTF-8" enctype="multipart/form-data">

                    {!! Form::token() !!}
                    <div class="input-group">

                        <label >Tipo de publicación</label>
                        <select name="tipo" id="tipoarticulo" class="form-control input input-sm">
                            <option value="1" selected>Noticia</option>
                            <option value="2">Reportaje</option>
                            <option value="3">Carousel</option>

                        </select>
                    </div>

                    <br>

                    <div class="input-group">

                        <label >Pertenencia publicación</label>
                        <select name="pertenencia" id="franquicia_id_articulo" class="form-control input input-sm">
                            <option value="1" selected>General</option>
                            <?php $ses = Session::get('franquicia') ;
                            if(isset($ses)){

                                echo "<option value='2'>$ses->nombre_comercial</option>";
                            }
                            ?>

                        </select>
                    </div>

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
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" name="fecha_publicacion" class="form-control fecha_publi" placeholder="Fecha de publicacion..." required>
                    </div>
                    <br>


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
                    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-plus-square"></i> Publicar</button>
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



@endsection