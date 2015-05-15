<div class="row">
    <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                      <a href="#"><img src="{{ asset('publicidad/carousel/') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                      <div class="carousel-caption">
                          <a class="carosuelref" href="#"><h3></h3></a>
                          </a><p class="pcarousel"></p>
                      </div>
                    </div>

                    <div class="item active">
                        <a href="#"><img src="{{ asset('publicidad/carousel/') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                        <div class="carousel-caption">
                            <a class="carosuelref" href="#"><h3></h3></a>
                            </a><p class="pcarousel"></p>
                        </div>
                    </div>

                    <div class="item active">
                        <a href="#"><img src="{{ asset('publicidad/carousel/') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                        <div class="carousel-caption">
                            <a class="carosuelref" href="#"><h3></h3></a>
                            </a><p class="pcarousel"></p>
                        </div>
                    </div>

                    <div class="item active">
                        <a href="#"><img src="{{ asset('publicidad/carousel/') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                        <div class="carousel-caption">
                            <a class="carosuelref" href="#"><h3></h3></a>
                            </a><p class="pcarousel"></p>
                        </div>
                    </div>

                    <div class="item active">
                          <a href="#"><img src="{{ asset('publicidad/carousel/') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                          <div class="carousel-caption">
                              <a class="carosuelref" href="#"><h3></h3></a>
                              </a><p class="pcarousel"></p>
                          </div>
                    </div>

                @else
                    <div class="item active">
                      <a href="#"><img src="{{ asset('publicidad/carousel/danone_slider.png') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                      <div class="carousel-caption">
                        <a class="carosuelref" href="#"><h3>Danone, nueva franquicia de yogur helado en alza</h3></a>
                        </a><p class="pcarousel">La empresa franco española Danone sigue apostando por el yogur helado como modelo de negocio rentable tal y como demuestran los 22 establecimientos que la firma ha abierto en territorio nacional. Sus previsiones para los años 2015 y 2016 son abrir unos 15 nuevos puntos de venta. Actualmente, la Yogurtería, tiene...</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="{{ asset('publicidad/carousel/crear_slider.png') }}" alt="Chania" class="imgcarousel img-responsive">
                      <div class="carousel-caption">
                        <h3>Cómo montar una franquicia: una correcta ubicación</h3>
                        <p class="pcarousel">En el sistema de franquicias hay pocos aspectos que sean tan importantes para la buena marcha del negocio como es la adecuada ubicación del local en el que se va a gestionar y desarrollar la actividad. No se exagera al afirmar que el 80% del éxito de cualquier franquicia depende... </p>
                      </div>
                    </div>

                      <div class="item">
                          <a href="#"><img src="{{ asset('publicidad/carousel/salida_slider.png') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                          <div class="carousel-caption">
                              <a class="carosuelref" href="#"><h3>¿Es la franquicia una buena salida laboral?</h3></a>
                              </a><p class="pcarousel">Siempre se ha dicho que cuando una puerta se cierra, otra se abre. Ese debe ser el pensamiento positivo que se debe tener cuando las posibilidades laborales son mínimas o se ven truncadas por cualquier circunstancia. Los datos de desempleo en nuestro país, indican una bajada en el número de ...</p>
                          </div>
                      </div>

                      <div class="item">
                          <a href="#"><img src="{{ asset('publicidad/carousel/spain_slider.png') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                          <div class="carousel-caption">
                              <a class="carosuelref" href="#"><h3>Con sello Made in Spain</h3></a>
                              </a><p class="pcarousel"> Las franquicias con denominación de origen España están de enhorabuena, ya que atraviesan un gran momento que les está permitiendo dominar el sector en nuestro país. De las casi 1000 marcas de franquicias presentes en España, el 85% son de origen nacional, confirmando así el espectacular momento que atraviesa el ...</p>
                          </div>
                      </div>

                      <div class="item">
                          <a href="#"><img src="{{ asset('publicidad/carousel/moda_slider.png') }}" alt="Chania" class="imgcarousel img-responsive"></a>
                          <div class="carousel-caption">
                              <a class="carosuelref" href="#"><h3>La moda: modelo de franquicia que crea empleo</h3></a>
                              </a><p class="pcarousel">A pesar de la crisis y la bajada del índice de consumo, muchos emprendedores han decidido subirse al carro de la franquicia a través de la moda, ya que el sector textil español está en auge y goza de muy buena fama en el mundo empresarial. El modelo de negocio que ...</p>
                          </div>
                      </div>
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