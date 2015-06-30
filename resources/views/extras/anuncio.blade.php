@if(!$bannerSup->isEmpty())

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a class="banner_sup" href="{{URL::to('franquicias-de-'.strtolower(str_replace(' ','-',strtr(utf8_decode($bannerSup[0]->nombre."/".$bannerSup[0]->nombre_comercial),utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))))}}" title="perfil">
                <img  onclick="estadisticas(25,'{{$bannerSup[0]->id}}');" id="publicidad" src="{{ asset($bannerSup[0]->url_imagen) }}" class="img-responsive" alt="Responsive image">
            </a>
        </div>
    </div>


@else

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img  id="publicidad" src="{{ asset('images/publicidad.gif') }}" class="img-responsive" alt="Responsive image">
        </div>
    </div>

@endif