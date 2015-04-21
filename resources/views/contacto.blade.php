@extends('master')

@section('main')
    <div>
        <section class="col col-xs-12 col-sm-12 col-md-10 col-lg-8 col-lg-offset-1">

            <div class="row">

                <div class="hero-unit">
                    <h1>Contacte con nosotros</h1>
                    <p class="tagline">A continuación exponga el interés de su contacto y un consultor especializado en el ámbito de su consulta se pondrá en contacto con usted.</p>
                </div><!--end hero unit -->
                <hr>

                <section>


                   <div class="row">
                    <form class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                       </div>

                <section class="span6">
                    <div class="well">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d194313.06624387953!2d-3.6434750000000027!3d40.45000150000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sC%2F+SEVERO+OCHOA+4+-+NAVE+16!5e0!3m2!1ses!2ses!4v1429529823154"></iframe>
                    </div><!--end well -->
                </section><!--end right -->
            </div><!--end row -->



        </section>
        <section class="col col-xs-12 col-sm-12 col-md-2 col-lg-2 col-lg-offset-1">
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well"id="izq-1">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}"  alt="prueba" >
            </div>
            <div class="col col-xs-6 col-sm-6 col-md-12 col-lg-12 well" id="izq-2">
                <img class="img-responsive" src="{{ asset('images/seform.gif') }}" alt="prueba" >
            </div>
        </section>
    </div>
@endsection
