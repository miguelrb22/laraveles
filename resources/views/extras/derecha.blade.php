@if(!$franSupDer->isEmpty())
    @for($i = 0; $i < $numPublicaciones[2]->recuadros; $i++)

        @if($i < count($franSupDer))

            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franSupDer[$i]->nombre."/".$franSupDer[$i]->nombre_comercial)))}}">
                    <img class="img-responsive img-rounded" src="{{ asset($franSupDer[$i]->url_imagen) }}"  alt="prueba" style="width: auto">
                </a>
            </div>

        @else

            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
                <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
            </div>

        @endif

    @endfor
@else

    @for($i = 0; $i<$numPublicaciones[2]->recuadros; $i++)
        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
            <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
        </div>
    @endfor

@endif

