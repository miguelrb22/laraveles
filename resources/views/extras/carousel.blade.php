<div class="row">
    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarouse2" data-slide-to="1"></li>

              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                @if(!$carousel->isEmpty())
                    <div class="item active">
                      <a href="{{ preg_replace("/[^a-zA-Z0-9\s\-\/\:]/","",$carousel[0]->url_contenido) }}"><img src="{{ asset($carousel[0]->url_imagen)}} " alt="Chania" class="imgcarousel img-responsive"></a>
                      <div class="carousel-caption">
                          <a class="carosuelref" href="{{ preg_replace("/[^a-zA-Z0-9\s\-\/\:]/","",$carousel[0]->url_contenido) }}"><h3>{{$carousel[0]->titulo_carousel}}</h3></a>
                          </a><p class="pcarousel">{{$carousel[0]->descripcion_carousel}}</p>
                      </div>
                    </div>

                  @for($i = 1; $i < count($carousel); $i++)
                    <div class="item">
                        <a href="{{ preg_replace("/[^a-zA-Z0-9\s\-\/\:]/","",$carousel[$i]->url_contenido) }}"><img src="{{ asset($carousel[$i]->url_imagen)}}" alt="Chania" class="imgcarousel img-responsive"></a>
                        <div class="carousel-caption">
                            <a class="carosuelref" href="{{ preg_replace("/[^a-zA-Z0-9\s\-\/\:]/","",$carousel[$i]->url_contenido) }}"><h3>{{$carousel[$i]->titulo_carousel}}</h3></a>
                            </a><p class="pcarousel">{{$carousel[$i]->descripcion_carousel}}</p>
                        </div>
                    </div>
                  @endfor

                @else
                    <!-- no debe ocurrir nunca será vacio ->
                @endif


              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </div>
</div>

<style>

    .imgcarousel{

        width: 1520px;
    }

    .carousel-caption{
        margin-left: -20%;
        width: 100%;
        margin-bottom: -2%;
        background-color: rgba(0, 0, 0, 0.7);
        text-align: center;

    }

    .pcarousel{
        text-align: center;
        margin-bottom: 0;
    }

    .carousel-indicators{
        visibility: hidden;
    }

    h3{
        margin-top: 1px;
        margin-bottom: 5px;
    }
</style>