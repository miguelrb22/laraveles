@extends('area_privada.multifranquicias')

@section('css')

    <link rel="stylesheet" type="text/css" media="screen"
          href="{{ asset('area_privada/summernote/dist/summernote.css') }}">

@endsection



@section('main')


    <section id="widget-grid" class="">
        <div class="row">
            <div class="col-xs-12 col-md-12  col-sm-12 col-lg-12">
                <br>

                <form id="nueva-publicacion" accept-charset="UTF-8" enctype="multipart/form-data">

                    {!! Form::token() !!}

                    <h4>No puedes modificar el tipo ni la pertenencia de la publicacón original</h4>
                    <br>
                    <?php
                    if (isset($ses)) {

                        echo "<input type='hidden' name ='franquicia_id' value='$ses->id'/>";
                    }
                    ?>




                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                        <input type="text" name="titulo" id="titulopublicacion" class="form-control"
                               placeholder="Título..." required>
                    </div>
                    <br>

                    <div class="input-group">
                        <span><strong>Selecciona una imagen para la publicación:</strong></span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-file-image-o"></i></span>
                        <input type="file" name="file" id="url_imagen_publicacion" accept="image/x-png, image/jpeg"
                               class="form-control" placeholder="Título...">
                    </div>
                    <br>

                    <textarea name='contenido' class="summernote"
                              placeholder="Escriba aqui el contenido de su publicación..."></textarea>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-plus-square-o"></i> Actualizar
                    </button>
                </form>


            </div>
        </div>
    </section>
@endsection
@section('js')


    <script src="{{ asset('area_privada/summernote\lang\summernote-es-ES.js') }}"></script>
    <script src="{{ asset('area_privada/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('area_privada/summernote/plugin/summernote-ext-video.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('.summernote').summernote({
                height: 450,
                toolbar: [
                    //[groupname, [button list]]

                    ['Misc', ['undo', 'redo', 'fullscreen', 'codeview']],
                    ['magic', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['table', 'link', 'hr', 'picture', 'video']]

                ]

            });
        });
    </script>

@endsection

@section('ready')

    $('#dashboard').removeClass("active")
    $('#publicaciones').addClass("active");


@endsection