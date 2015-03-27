@extends('master')

@section('main')
    <div>
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <h2><strong>Aviso Legal</strong></h2>
            <hr/>
            <p>
                Aviso legal
                En cumplimiento de la ley prevista en el artículo 34/2002, de 11 de Julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, se informa de los siguientes datos de información general. Comercial Estética es operada por la sociedad Ondina EuroGroup, S.L. B-98360464 con su domicilio social C/ Severo Ochoa, 4 - Nave 16 inscrita en el Registro Mercantil de la provincia de Alicante Tomo 3058, Folio 120, Hoja A, 99390 Inscripción primera. Si necesita más información puede contactar con nosotros a través de teléfono.</p>
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
            </div>
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
            </div>
        </section>
    </div>
@endsection
