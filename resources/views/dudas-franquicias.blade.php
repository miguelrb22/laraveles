@extends('master')

@section('anuncio')
    @include('extras.anuncio')
@endsection
<div>

    @section('contenido')
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <div class="row panel panel-info text-center">
                    <div class="panel-heading textoblanco" id="panelfe" style="background:#333">
                        Consultas de interés
                    </div>
                    <div class="panel-body" style="margin-bottom: -16px;">

                        <div class="row col col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        </div>
                        <ul class="list-unstyled pull-left text-justify">
                            <li><a href="{{ URL::route('dudas-generales') }}">Dudas generales</a></li>
                            <li><a>Dudas franquiciados y franquiciadores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 col-lg-offset-1 dinamico">

                <div class="row">

                    <div class="panel-group" id="accordion">

                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span>
                               Legalidad de las cláusulas de no competencia
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="list-group-item ">

                                    <p> En primer lugar debemos hacer referencia a una cuestión prejudicial planteada por la Audiencia Provincial de Burgos ante el Tribunal de Justicia de la Unión Europea sobre la validez de las cláusulas de no competencia post-contractual en la medida que se circunscribía al ámbito de exclusividad territorial y no solo al local donde se explotaba la franquicia. <p>

                                    <p> En la resolución del Tribunal de Justicia de la Unión Europea mediante Auto de 7 de febrero de 2013 estableció que la expresión “local y terrenos” a que se refiere la normativa comunitaria se circunscribe al local del franquiciado. <p>

                                    <p> La consecuencia es la nulidad de todas las clausulas de no competencia post-contractual cuyos efectos excedan al local del franquiciado, que en este caso tenemos las tan populares clausulas de no competencia post-contractual que se refieres al territorio de exclusividad. <p>

                                    <p> En referencia a lo relatado en el párrafo anterior al ser de tan suma gravedad el Tribunal de Justicia de la Unión Europea manifestó que no será una solución reglada sino que se deberá valorar caso por caso, aplicando por tanto las “reglas de mínimis”. <p>

                                    <p>En definitiva podemos establecer que siempre que se trate de un contrato de franquicia con una cuota de mercado no superior al 10%, la cláusula de competencia referida al territorio de exclusividad es válida. <p>

                                </div>

                            </div>
                        </div>
                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-plus"></span>
                                Transmisión del "Know-How"
                            </a>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="list-group-item">

                                    <p>Como bien sabemos es obligación principal transmitir el secreto industrial desarrollado por él mismo al franquiciado, en tal concepto debemos tener en cuenta tanto el proceso industrial como el método de comercialización.</p>

                                    <p>El incumplimiento de tal obligación además de la responsabilidad por incumplimiento contractual regulado en el art. 1124 del Código Civil producirá la mayor contingencia en un contrato de franquicia, es decir; no habrá éxito del franquiciado por no poder disponer del conocimiento necesario y especializado para la explotación del negocio. Por lo tanto, el incumplimiento se convierte en un grave contratiempo para la expansión de la franquicia, produciéndose cierta distensión entre franquiciador y franquiciado cuando realmente deberían trabajar al unísono porque al tener un fin común para ninguna de las dos partes debería incumplir sus obligaciones contractuales.</p>

                                    <p>¿Cómo probar el incumplimiento?</p>

                                    <p>Todo se basará en la fuerza de las pruebas aportadas y se deberá demostrar de forma clara e inequívoca que tanto el franquiciado como los empleados de éste no disponían de los conocimientos necesarios para realizar sus obligaciones. La transmisión del saber cómo se hará bien a través de bienes materiales como bienes inmateriales. En el caso de los primeros, la prueba es relativamente fácil ya que simplemente la no aportación de los mismos genera una transmisión ineficaz, no real e incluso nula. Pero en cambio en el segundo caso, al ser bienes inmateriales habrá que tenerse en cuenta aspectos como la formación especializada, orientaciones, técnicas de fabricación e incluso del método comercial para su venta etc.…</p>

                                    <p>La doctrina jurisprudencial establece que el “know-how”</p>

                                    <p>"es decir, el saber hacer, puede tener por objeto elementos materiales y elementos inmateriales, bien se considere que sea un bien en sentido jurídico, determinado por tratarse de una situación de hecho consistente en que las circunstancias de la empresa que constituye el objeto del secreto son desconocidas para terceros o que el aprendizaje o la adquisición de experiencias por éstos puede resultar dificultoso, o ya que se trata de un bien en sentido técnico jurídico, por poseer las características propias de esta idea, como son el valor patrimonial y la entidad para ser objeto de negocios jurídicos, integrante de un auténtico bien inmaterial".</p>

                                    <p> En nuestra legislación debemos hacer referencia al artículo 62 de la Ley de Ordenación del Comercio Minorista de 15 de enero de 1996 y también al Real Decreto 201/2010 de 26 de febrero, por el que se regula el ejercicio de la actividad comercial en régimen de franquicia que establece en su art. 2.1.b)

                                    <p>“Que tal actividad debe comprender cuanto menos , la comunicación por el franquiciador al franquiciado de los conocimientos técnicos o un saber hacer, que deberá ser propio, sustancial y singular”</p>

                                    <p>Por último en materia de legalidad debemos hacer referencia a un texto legal que aunque no es vinculante deben conocer, dicho texto es el Código Deontológico Europeo de la Franquicia que entró en vigor el 1 de enero de 1991 estableciendo en su Anexo Tercero lo que sigue: El "saber hacer" es un conjunto de informaciones prácticas, no patentadas, que resultan de la experiencia del Franquiciador (previamente testadas por él mismo). Es secreto, sustancial e identificable.</p>

                                    <p>"Secreto", significa que el know how, en su conjunto o en el de sus componentes, no es generalmente conocido ni fácilmente accesible: esto no implica el desconocimiento total de cada uno de sus componentes individuales o la imposibilidad de obtenerlos fuera de las relaciones con el Franquiciador.</p>

                                    <p>"Sustancial", significa que el "saber hacer" debe incluir información importante para la venta de los productos o la prestación de servicios a los usuarios finales y, especialmente, para la presentación de los productos en relación con la prestación de servicios, las relaciones con la clientela y la gestión administrativa y financiera; el "saber hacer" debe ser útil para el Franquiciado, siendo susceptible, en la fecha determinación del contrato, de mejorar la posición competencial del Franquiciado, en particular, mejorando sus resultados o ayudando a la entrada de un nuevo mercado.</p>

                                    <p>"Identificable", significa que el "know how" debe describirse de forma tan completa que permita la verificación de que cumple con las condiciones de secreto y sustancialidad; la descripción puede hacerse en el propio contrato de Franquicia, en un documento separado o de cualquier otra forma apropiada para ello.</p>

                                    <p>El Franquiciador debe garantizar al Franquiciado el disfrute del "saber hacer" que ha creado y desarrollado. Dicho "saber hacer" es transmitido mediante una información y formación adaptadas al Franquiciado, controlando su aplicación y el respeto al mismo.</p>

                                    <p>El franquiciador debe impedir cualquier utilización o transmisión del "saber hacer", en particular con respecto a cadenas de Franquicias de la competencia, que pueda perjudicar a su propia cadena, tanto en el periodo pre-contractual, como en el contractual y post-contractual.</p>

                                    <p>Para evitar un difícil proceso probatorio desde MultiFranquicias recomendamos brindar muchísima importancia a lo estipulado en el contrato de franquicia, porque no solo se establecerán las obligaciones de las partes sino también puede preverse el método, proceso, forma de cumplimiento de dichas obligaciones. Por lo tanto, cuanto mayor riguroso sea el contenido contractual habrá menor disidencia entre las partes y por ello mismo un beneficio mutuo ya que todo se desarrollará en base a lo pactado.</p>

                                </div>

                            </div>
                        </div>
                        <div class="panel">
                            <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-plus"></span>
                                La regla "mínimis"
                            </a>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="list-group-item">

                                    <p>Es una de las pautas que permite controlar el alcance de las prohibiciones de los acuerdos restrictivos de la competencia en los contratos de franquicia, porque en virtud de la regla minimis solo las conductas que afectan la competencia de forma significativa se encuentran comprendidas dentro del ámbito de la prohibición siendo sancionadas por las autoridades.</p>

                                   <p> Se da el caso de que hay franquiciadores que alegan la aplicación de la "regla minimis" considerando que los contratos de franquicia carecían de la fuerza suficiente para afectar, entorpecer o influir de alguna manera al comercio entre los países de la Unión europea. Pero el Alto Tribunal Europeo no está de acuerdo con tal alegación estableciendo que basta con que exista un grado suficiente de probabilidad de ejercer una influencia directa o indirecta, real o potencial, en las corrientes de intercambio entre los estados, basados en factores objetivos y no en la intencionalidad o resultados objetivos. Por lo tanto, siempre que exista un gran número de establecimientos en varios países de la Unión Europea, y una red importante de franquicias en todo el territorio español habrá mucha probabilidad de influencia sobre el mercado.</p>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

    @endsection
    @section('der')
        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
        </div>
        <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
            <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
        </div>
    @endsection
</div>


