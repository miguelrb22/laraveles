@extends('master')

@section('main')
    <div>
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="{{ asset('images/publicidad.gif') }}" class="img-responsive" alt="Responsive image">
                </div>
            </div>
        </section>
        <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading" id="panelfe" style="background:#333">
                         Le interesa conocer
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">
                        <table>

                        </table>
                    </div>
                </div>
            </div>
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
            </div>
        </section>
    </div>
@endsection