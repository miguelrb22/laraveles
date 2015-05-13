<?php
    $id = Session::get('franquicia');
?>
@extends('area_privada.multifranquicias')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('area_privada/js/dropzone/dropzone.css') }}">

@endsection

@section('main')
    <div class="row col col-xs-12 col-md-12 col-sm-12" style="margin:0px">
        <h3 class="text-center"><span>Imagenes de: {{$id->nombre_comercial}}</span></h3>
        <hr/>
        <div class="jarviswidget jarviswidget-color-blueLight jarviswidget-sortable"
             id="wid-id-0" data-widget-editbutton="false" role="widget">
            <!-- widget options:
            usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
            data-widget-colorbutton="false"
            data-widget-editbutton="false"
            data-widget-togglebutton="false"
            data-widget-deletebutton="false"
            data-widget-fullscreenbutton="false"
            data-widget-custombutton="false"
            data-widget-collapsed="true"
            data-widget-sortable="false"
            -->
            <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div><div class="widget-toolbar" role="menu"><a data-toggle="dropdown" class="dropdown-toggle color-box selector" href="javascript:void(0);" aria-expanded="false"></a><ul class="dropdown-menu arrow-box-up-right color-select pull-right"><li><span class="bg-color-green" data-widget-setstyle="jarviswidget-color-green" rel="tooltip" data-placement="left" data-original-title="Green Grass"></span></li><li><span class="bg-color-greenDark" data-widget-setstyle="jarviswidget-color-greenDark" rel="tooltip" data-placement="top" data-original-title="Dark Green"></span></li><li><span class="bg-color-greenLight" data-widget-setstyle="jarviswidget-color-greenLight" rel="tooltip" data-placement="top" data-original-title="Light Green"></span></li><li><span class="bg-color-purple" data-widget-setstyle="jarviswidget-color-purple" rel="tooltip" data-placement="top" data-original-title="Purple"></span></li><li><span class="bg-color-magenta" data-widget-setstyle="jarviswidget-color-magenta" rel="tooltip" data-placement="top" data-original-title="Magenta"></span></li><li><span class="bg-color-pink" data-widget-setstyle="jarviswidget-color-pink" rel="tooltip" data-placement="right" data-original-title="Pink"></span></li><li><span class="bg-color-pinkDark" data-widget-setstyle="jarviswidget-color-pinkDark" rel="tooltip" data-placement="left" data-original-title="Fade Pink"></span></li><li><span class="bg-color-blueLight" data-widget-setstyle="jarviswidget-color-blueLight" rel="tooltip" data-placement="top" data-original-title="Light Blue"></span></li><li><span class="bg-color-teal" data-widget-setstyle="jarviswidget-color-teal" rel="tooltip" data-placement="top" data-original-title="Teal"></span></li><li><span class="bg-color-blue" data-widget-setstyle="jarviswidget-color-blue" rel="tooltip" data-placement="top" data-original-title="Ocean Blue"></span></li><li><span class="bg-color-blueDark" data-widget-setstyle="jarviswidget-color-blueDark" rel="tooltip" data-placement="top" data-original-title="Night Sky"></span></li><li><span class="bg-color-darken" data-widget-setstyle="jarviswidget-color-darken" rel="tooltip" data-placement="right" data-original-title="Night"></span></li><li><span class="bg-color-yellow" data-widget-setstyle="jarviswidget-color-yellow" rel="tooltip" data-placement="left" data-original-title="Day Light"></span></li><li><span class="bg-color-orange" data-widget-setstyle="jarviswidget-color-orange" rel="tooltip" data-placement="bottom" data-original-title="Orange"></span></li><li><span class="bg-color-orangeDark" data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip" data-placement="bottom" data-original-title="Dark Orange"></span></li><li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red" rel="tooltip" data-placement="bottom" data-original-title="Red Rose"></span></li><li><span class="bg-color-redLight" data-widget-setstyle="jarviswidget-color-redLight" rel="tooltip" data-placement="bottom" data-original-title="Light Red"></span></li><li><span class="bg-color-white" data-widget-setstyle="jarviswidget-color-white" rel="tooltip" data-placement="right" data-original-title="Purity"></span></li><li><a href="javascript:void(0);" class="jarviswidget-remove-colors" data-widget-setstyle="" rel="tooltip" data-placement="bottom" data-original-title="Reset widget color to default">Remove</a></li></ul></div>
                <span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
                <h2>My Dropzone! </h2>

                <span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span></header>

            <!-- widget div-->
            <div role="content">


                <!-- widget content -->
                {!!Form::open([
                    'url' => 'images/dropzone',
                    'files' => true,
                    'class' => 'dropzone',
                    'id' => 'mydropzone',
                    'method' => 'POST',
                ])!!}

                {!!Form::close()!!}
            <br>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('area_privada/js/dropzone/dropzone.js') }}"></script>

    <script type="text/javascript">


        Dropzone.autoDiscover = true;
        Dropzone.options.mydropzone = {


            init: function(){
                var thisDropzone = this;
                var franquicia = "{{Session::get('franquicia')->id}}";

                thisDropzone.on("maxfilesexceeded", function(file){
                    alert("No more files please!");
                });

                //var existenstFiles = [];

                $.getJSON( '{{URL::route('cargarImagenes') }}', {id: franquicia}, function(data) {

                    $.each(data, function(key,value){

                        var imagen =  {name: value.nombreOriginal, size: value.tamaño, id: value.id, flag: true} ;
                        //uso el campo flag para saber si es una imagen cargada anteriormente o no a la hora de borrar para
                        //incrementar la variable maxfiles o no.
                        thisDropzone.options.addedfile.call(thisDropzone, imagen);
                        thisDropzone.options.thumbnail.call(thisDropzone, imagen, "{{ URL::asset('imgfranquicias/') }}"+'/'+value.nombre);

                        thisDropzone.options.maxFiles = thisDropzone.options.maxFiles - 1;
                        //console.log("rellenar => "+thisDropzone.options.maxFiles);

                    });

                });

                thisDropzone.on("removedfile",function(file,total)
                {
                    //El problema es que no tiene id todavía no es un objeto cargado nuestro
                    // por lo tanto no podemos obtener el id ya que no tiene.
                    var token = "{{ csrf_token()}}";
                    $.ajax({
                        url:'{{ URL::route('borrarImg') }}',
                        data: {id: file.id, _token: token},
                        success: function (data) {

                            if(file.flag == true) {
                                thisDropzone.options.maxFiles = thisDropzone.options.maxFiles + 1;
                            }
                        }
                    });
                });

                thisDropzone.on("sending",function(file,xhr,formData){
                        var id = Math.floor(Math.random()*99999)+"{{Session::get('franquicia')->id}}"
                        file.id = id;
                        formData.append('id',id);
                });



                thisDropzone.on("success",function(){
                    //Poner mensaje que queramos para notificar final de la subida
                });

            },

        autoProcessQueue: true,
        maxFiles: 5,
        maxFilesize: 2, // MB
        dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Arrastra imágenes <span class="font-xs">para subir</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (O picha aquí)</h4></span>',
        addRemoveLinks: true,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    }


        setTimeout(function() {
            var totalimagenes = $('#mydropzone').find('img').length;
            var imagenes = $('#mydropzone').find('img');
            for( var i = 0; i< totalimagenes; i++)
            {
                imagenes[i].setAttribute('width',120);
                imagenes[i].setAttribute('height',120);
            }

        }, 1000);





    </script>

@endsection

@section('ready')



@endsection