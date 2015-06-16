@extends('master')

@section('contenido')
            <div class="row">
                <div class="hero-unit">
                    <h1>Contacte con nosotros</h1>
                    <p class="tagline">Si desea publicitarse en la web o tiene alguna otra consulta, exponga a continuación  el interés de su contacto y un consultor especializado se pondrá en contacto con usted.</p>
                </div><!--end hero unit -->
                <hr>

                <section>

                    <div class="row">
                        <form class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" method="POST" id="email">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre y apellidos</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="abc@axample.com" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teléfono/Móvil</label>
                                <input type="tel" class="form-control" name="movil" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descripción de la información</label>
                                <textarea class="form-control textarea-expandable" name="informacion" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-info btn-lg pull-right">Enviar</button>
                        </form>
                    </div>

                    <section class="span6">
                        <br>
                        <div class="well">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d194313.06624387953!2d-3.6434750000000027!3d40.45000150000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sC%2F+SEVERO+OCHOA+4+-+NAVE+16!5e0!3m2!1ses!2ses!4v1429529823154"></iframe>
                    </div><!--end well -->
                    </section>
                        <!--end right -->
                </section>
            <!--end row -->
            </div>
@endsection


@section('der')

    @include('extras.derecha')

@endsection


@section('ready')

    $("#email").submit(function(e) {

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
    url: "{{ URL::route('email') }}",
    data: $("#email").serialize(),
    dataType: "html",
    error: function() {
    $('#loading').show();
    alert("error petición ajax");
    },
    success: function(data) {


    Lobibox.notify('success', {
    title: 'Enviado!',
    showClass: 'flipInX',
    delay: 4000,
    delayIndicator: false,

    position: 'bottom left',
    msg: 'Tu mensaje ha sido enviado con éxito. En breve nos pondremos en contacto con usted.'
    });

    }
    });
    });

@endsection