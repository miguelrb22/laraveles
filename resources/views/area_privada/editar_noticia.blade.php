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

                <form id="editar-publicacion" accept-charset="UTF-8" enctype="multipart/form-data">

                    {!! Form::token() !!}

                    <h4>No puedes modificar el tipo ni la pertenencia de la publicacón original</h4>
                    <br>

                    <input type='hidden' name ='id' value="{{$id}}"/>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                        <input type="text" name="titulo" id="titulopublicacion" class="form-control"
                               placeholder="Título..." value="{{$titulo}}"required>
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
                              placeholder="Escriba aqui el contenido de su publicación...">{{$contenido}}</textarea>
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

    $('#publicaciones').addClass('open');
    $('#publicaciones_panel').css('display','block');

    $('#editar-publicacion').submit(function(e){

    e.preventDefault();

    $.blockUI({

    message: '<h1><img src="{{ asset('images/285.GIF')}}" /></h1>',
    css: {
    border: 'none',
    padding: '15px',
    backgroundColor: 'transparent'}

    });


    $.ajax({

    type: "POST",
    url: "{{ URL::route('editarpublicacion') }}",
    data: new FormData($("#editar-publicacion")[0]),
    processData: false,
    contentType: false,
    dataType: "html",
    error: function () {

    Lobibox.notify('error', {
    title: 'No se ha podido editar el artículo',
    showClass: 'flipInX',
    delay: 3000,
    delayIndicator: false,

    position: 'bottom left',
    msg: 'Compruebe la conexión a internet'
    });
    },
    success: function (data) {

    Lobibox.notify('success', {
    title: 'Artículo editado con éxito',
    showClass: 'flipInX',
    delay: 3000,
    delayIndicator: false,

    position: 'bottom left',
    msg: ':)'
    });
    }
    });


    });



@endsection