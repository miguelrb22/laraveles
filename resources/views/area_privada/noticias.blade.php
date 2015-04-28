@extends('area_privada.multifranquicias')

@section('css')

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('area_privada/summernote/dist/summernote.css') }}">

@endsection

@section('main')


    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12  col-sm-12 col-lg-12">
                <br>
                <form id="nueva-publicacion">

                    <div class="input-group">

                             <label >Tipo de publicación</label>
                            <select name="tipo" id="tipoarticulo" class="form-control input input-sm">
                                <option value="1" selected>Noticia</option>
                                <option value="2">Reportaje</option>
                            </select>
                        </div>

                    <br>

                    <div class="input-group">

                        <label >Pertenencia publicación</label>
                        <select name="franquicia_id" id="franquicia_id_articulo" class="form-control input input-sm">
                            <option value="0" selected>General</option>
                            <?php $ses = Session::get('franquicia') ;
                             if(isset($ses)){

                                 echo "<option value='$ses->id'>$ses->nombre_comercial</option>";
                             }
                            ?>

                        </select>
                    </div>

                    <br>


                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                        <input type="text" name="titulo" id="titulopublicacion" class="form-control" placeholder="Título...">
                    </div>
                    <br>

                    <div class="input-group">
                        <span><strong>Selecciona una imagen para la publicación:</strong></span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-file-image-o"></i></span>
                        <input type="file" name="url_imagen" id="url_imagen_publicacion" accept="image/x-png, image/jpeg" class="form-control" placeholder="Título...">
                    </div>
                    <br>

                    <textarea class="summernote"></textarea>
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

    <script type="text/javascript">
        $(function() {
            $('.summernote').summernote({
                height: 300

            });

           /* $('form').on('submit', function (e) {
                e.preventDefault();
                alert($('.summernote').code());
            });*/
        });
    </script>

@endsection

@section('ready')

    $('#dashboard').removeClass("active")
    $('#publicaciones').addClass("active");


@endsection