@extends('area_privada.multifranquicias')

@section('main')

    <section id="widget-grid" class="">
        <div class="row">
                <br>
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                    <!-- boton nueva areaprivada -->
                    <a style="margin-bottom: 15px;" class="btn btn-success" id="nuevo-franquicia" href="{{ URL::route('nueva_alta') }}"><i class="fa fa-plus"></i> Alta Franquicia</a>
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2 id="titulo-tabla">Lista Franquicias </h2>
                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">ID</th>
                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
                                        <th>Company</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
                                        <th data-hide="phone,tablet">City</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jennifer</td>
                                        <td>1-342-463-8341</td>
                                        <td>Et Rutrum Non Associates</td>
                                        <td>35728</td>
                                        <td>Fogo</td>
                                        <td>03/04/14</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Clark</td>
                                        <td>1-516-859-1120</td>
                                        <td>Nam Ac Inc.</td>
                                        <td>7162</td>
                                        <td>Machelen</td>
                                        <td>03/23/13</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Brendan</td>
                                        <td>1-724-406-2487</td>
                                        <td>Enim Commodo Limited</td>
                                        <td>98611</td>
                                        <td>Norman</td>
                                        <td>02/13/14</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Warren</td>
                                        <td>1-412-485-9725</td>
                                        <td>Odio Etiam Institute</td>
                                        <td>10312</td>
                                        <td>Sautin</td>
                                        <td>01/01/13</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Rajah</td>
                                        <td>1-849-642-8777</td>
                                        <td>Neque Ltd</td>
                                        <td>29131</td>
                                        <td>Glovertown</td>
                                        <td>02/16/13</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Demetrius</td>
                                        <td>1-470-329-9627</td>
                                        <td>Euismod In Ltd</td>
                                        <td>1883</td>
                                        <td>Kapolei</td>
                                        <td>03/15/13</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Keefe</td>
                                        <td>1-188-191-2346</td>
                                        <td>Molestie Industries</td>
                                        <td>2211BM</td>
                                        <td>Modena</td>
                                        <td>07/08/13</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Leila</td>
                                        <td>1-663-655-8904</td>
                                        <td>Est LLC</td>
                                        <td>75286</td>
                                        <td>Hondelange</td>
                                        <td>12/09/12</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Fritz</td>
                                        <td>1-598-234-7837</td>
                                        <td>Et Ultrices Posuere Institute</td>
                                        <td>2324</td>
                                        <td>Monte San Pietrangeli</td>
                                        <td>12/29/12</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Cassady</td>
                                        <td>1-212-965-8381</td>
                                        <td>Vitae Erat Vel Company</td>
                                        <td>5898</td>
                                        <td>Huntly</td>
                                        <td>10/07/13</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Rogan</td>
                                        <td>1-541-654-9030</td>
                                        <td>Iaculis Incorporated</td>
                                        <td>6464JN</td>
                                        <td>Carson City</td>
                                        <td>05/30/13</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Candice</td>
                                        <td>1-153-708-6027</td>
                                        <td>Pellentesque Company</td>
                                        <td>8565</td>
                                        <td>Redruth</td>
                                        <td>02/25/14</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Brittany</td>
                                        <td>1-987-452-6038</td>
                                        <td>Suspendisse Inc.</td>
                                        <td>4031</td>
                                        <td>Carapicuíba</td>
                                        <td>10/13/13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Baxter</td>
                                        <td>1-281-147-5085</td>
                                        <td>Nulla Donec Non Associates</td>
                                        <td>53067</td>
                                        <td>Yellowknife</td>
                                        <td>08/14/14</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Vaughan</td>
                                        <td>1-940-231-1787</td>
                                        <td>Metus Facilisis Lorem Incorporated</td>
                                        <td>26530-046</td>
                                        <td>Guarapuava</td>
                                        <td>11/17/12</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Ivan</td>
                                        <td>1-314-209-1223</td>
                                        <td>Posuere Vulputate Inc.</td>
                                        <td>KX3W 1OI</td>
                                        <td>Bienne-lez-Happart</td>
                                        <td>03/04/14</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Marah</td>
                                        <td>1-348-582-4041</td>
                                        <td>Feugiat Ltd</td>
                                        <td>2128</td>
                                        <td>Nîmes</td>
                                        <td>11/29/12</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Kiara</td>
                                        <td>1-570-428-6681</td>
                                        <td>Et Euismod Et Corp.</td>
                                        <td>70483</td>
                                        <td>Meeuwen</td>
                                        <td>03/28/13</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Brielle</td>
                                        <td>1-216-787-0056</td>
                                        <td>Quis Massa Mauris Institute</td>
                                        <td>19913</td>
                                        <td>Mombaruzzo</td>
                                        <td>12/17/12</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Kennedy</td>
                                        <td>1-997-154-9340</td>
                                        <td>Quis Diam Pellentesque Institute</td>
                                        <td>3092FI</td>
                                        <td>Edmundston</td>
                                        <td>02/26/13</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Peter</td>
                                        <td>1-394-459-3833</td>
                                        <td>Mauris Eu Turpis Corporation</td>
                                        <td>27337</td>
                                        <td>Ravenstein</td>
                                        <td>06/05/14</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Kibo</td>
                                        <td>1-162-467-7160</td>
                                        <td>Massa LLP</td>
                                        <td>30305</td>
                                        <td>Witney</td>
                                        <td>08/20/14</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Tanek</td>
                                        <td>1-806-556-1897</td>
                                        <td>Pharetra Nam Industries</td>
                                        <td>84972</td>
                                        <td>Abbotsford</td>
                                        <td>05/03/14</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Guinevere</td>
                                        <td>1-850-940-6176</td>
                                        <td>Montes Nascetur Limited</td>
                                        <td>54983</td>
                                        <td>Rio Grande</td>
                                        <td>02/24/14</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Ronan</td>
                                        <td>1-168-544-4394</td>
                                        <td>Nunc Inc.</td>
                                        <td>12167</td>
                                        <td>Pinkafeld</td>
                                        <td>01/02/13</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Kasper</td>
                                        <td>1-153-221-5650</td>
                                        <td>Rutrum Limited</td>
                                        <td>M9N 0N6</td>
                                        <td>Saint-G?ry</td>
                                        <td>04/03/14</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Otto</td>
                                        <td>1-894-944-5767</td>
                                        <td>Purus Maecenas Libero LLC</td>
                                        <td>74552-602</td>
                                        <td>Jauche</td>
                                        <td>11/17/13</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Brenda</td>
                                        <td>1-783-562-8563</td>
                                        <td>Sit Consulting</td>
                                        <td>15632</td>
                                        <td>Llandrindod Wells</td>
                                        <td>08/13/14</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Laith</td>
                                        <td>1-482-317-8464</td>
                                        <td>Tellus Limited</td>
                                        <td>P8L 2V5</td>
                                        <td>Codó</td>
                                        <td>11/02/13</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Ella</td>
                                        <td>1-275-839-6518</td>
                                        <td>Tincidunt Inc.</td>
                                        <td>V8L 7Y0</td>
                                        <td>Lummen</td>
                                        <td>09/29/13</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Hanae</td>
                                        <td>1-339-661-4197</td>
                                        <td>Nunc Incorporated</td>
                                        <td>47931</td>
                                        <td>South Burlington</td>
                                        <td>05/19/14</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Donna</td>
                                        <td>1-236-575-1365</td>
                                        <td>Ultricies Sem Incorporated</td>
                                        <td>78685</td>
                                        <td>Baranello</td>
                                        <td>02/19/13</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Bevis</td>
                                        <td>1-955-717-0835</td>
                                        <td>Est Ac Inc.</td>
                                        <td>7424</td>
                                        <td>Ichtegem</td>
                                        <td>08/15/13</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Celeste</td>
                                        <td>1-368-137-6285</td>
                                        <td>Tortor Nibh Sit Inc.</td>
                                        <td>01318</td>
                                        <td>Portobuffolè</td>
                                        <td>05/28/14</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Ila</td>
                                        <td>1-315-684-6122</td>
                                        <td>Gravida Sagittis Associates</td>
                                        <td>4438PF</td>
                                        <td>Keswick</td>
                                        <td>11/22/13</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Alana</td>
                                        <td>1-586-261-7830</td>
                                        <td>Nullam Industries</td>
                                        <td>6044</td>
                                        <td>Bacabal</td>
                                        <td>03/04/13</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Rowan</td>
                                        <td>1-782-168-2387</td>
                                        <td>Aliquet Consulting</td>
                                        <td>33000</td>
                                        <td>Papasidero</td>
                                        <td>02/06/14</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Eric</td>
                                        <td>1-161-390-1140</td>
                                        <td>Odio Institute</td>
                                        <td>5652</td>
                                        <td>Moliterno</td>
                                        <td>03/14/13</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Dana</td>
                                        <td>1-989-320-2205</td>
                                        <td>Bibendum Fermentum Institute</td>
                                        <td>X31 1HZ</td>
                                        <td>Saint-Pierre</td>
                                        <td>02/25/13</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Karleigh</td>
                                        <td>1-218-513-8714</td>
                                        <td>Duis Volutpat Inc.</td>
                                        <td>1356</td>
                                        <td>Fresno</td>
                                        <td>06/09/14</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>Malik</td>
                                        <td>1-869-972-9871</td>
                                        <td>Praesent Luctus Curabitur Limited</td>
                                        <td>V3Y 0P0</td>
                                        <td>Roxboro</td>
                                        <td>05/09/14</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- WIDGET END -->
        </div>
    </section>
@endsection

@section('ready')

            pageSetUp();
            /* BASIC ;*/
            var responsiveHelper_dt_basic = undefined;


            var breakpointDefinition = {
                tablet : 1024,
                phone : 480
            };

            $('#dt_basic').dataTable({
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                "autoWidth" : true,

                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_dt_basic) {
                        responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_dt_basic.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_dt_basic.respond();
                }
            });

            /* END BASIC */

            /* COLUMN FILTER  */


            // custom toolbar
            $("div.toolbar").html('<div class="text-right"><img src="{{ asset('area_privada/js/libs/jquery-ui-1.10.3.min.js') }}" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

            // Apply the filter
            $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {

                otable
                        .column( $(this).parent().index()+':visible' )
                        .search( this.value )
                        .draw();

            } );
            /* END COLUMN FILTER */
            /* Jquery varios */
            $("#titulo-tabla").html("Lista Franquicias");

@endsection