@if(!$franSupDer->isEmpty())
    <?php

    $a1 = mt_rand(0, count($franSupDer)-1);
    $a2 = mt_rand(0, count($franSupDer)-1);

    while ($a1 == $a2){
        $a2 = mt_rand(0, count($franSupDer)-1);
    }

    ?>

    @for($i = 0; $i<$numPublicaciones[2]->recuadros; $i++)

        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
            <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
        </div>

    @endfor
@else
    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
        <img class="img-responsive" src={{ asset('images/seform.gif') }} alt="prueba" >
    </div>
    <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well anuncio">
        <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
    </div>

@endif
