<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row panel panel-info text-center">
        <div class="panel-heading textoblanco" style="background:#333">
            <i class="fa fa-video-camera textoblanco"></i> <span class="textoblanco">Entrevistas</span>
        </div>
        <div class="panel-body" style="margin-bottom: -16px;">
            @if(!$entrevistas->isEmpty())
                @foreach($entrevistas as $entrevista)
                    <div class="row">
                        <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","",$entrevista->titulo).'/'.$entrevista->id)))}}"> <h3>{{$entrevista->titulo}}</h3></a>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>nombre de franquicia</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","",$entrevista->titulo).'/'.$entrevista->id)))}}">
                                <img class="img-responsive img_destacados" src="{{ asset($entrevista->url_imagen) }}" alt="prueba" >
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <p>{{$entrevista->resumen}} ...</p>
                                <a href="{{ strtolower(str_replace(" ","-",URL::to('noticias/'.preg_replace("/[^a-zA-Z0-9\s\-]/","",$entrevista->titulo).'/'.$entrevista->id)))}}"> + seguir leyendo</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>
</div>
