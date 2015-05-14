
@if(!$franSupDer->isEmpty())
    <?php

        $a1 = mt_rand(0, count($franSupDer)-1);
        $a2 = mt_rand(0, count($franSupDer)-1);

        do{
            $a2 = mt_rand(0, count($franSupDer)-1);
        }while($a2 == $a1)
    ?>
    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
        <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franSupDer[$a1]->nombre."/".$franSupDer[$a1]->nombre_comercial)))}}">
            <img class="img-responsive img-rounded" src="{{ asset($franSupDer[$a1]->logo_url) }}"  alt="prueba" style="width: auto">
        </a>
    </div>
    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
        <a href="{{ URL::to('franquicias-de-'.strtolower(str_replace(' ','-',$franSupDer[$a2]->nombre."/".$franSupDer[$a2]->nombre_comercial)))}}">
            <img class="img-responsive img-rounded" src="{{ asset($franSupDer[$a2]->logo_url) }}"  alt="prueba" style="width: auto">
        </a>
    </div>
@else
    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
        <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
    </div>
    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
        <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
    </div>

@endif