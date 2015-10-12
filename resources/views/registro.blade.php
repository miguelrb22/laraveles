@extends('master')

@section('contenido')
    <div class="row">
        <div class="hero-unit">
            <h1>Registro</h1>
        </div><!--end hero unit -->
        <hr>

        <section>

            <div class="row">
                <form class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" method="POST" id="registro">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ utf8_encode("Usuario") }}</label>
                        <input type="text" id="user" class="form-control" name="user" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{ utf8_encode("Contraseña")}}</label>
                        <input type="password" id ="pass" class="form-control" name="pass" placeholder="{{ utf8_encode("Contraseña")}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ utf8_encode("Repetir Contraseña")}}</label>
                        <input type="password"  id="repass" class="form-control" name="repass" placeholder="{{ utf8_encode("Contraseña")}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text"  id="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text"  id="tel" class="form-control" name="telefono" placeholder="{{ utf8_encode("Teléfono")}}" required>
                    </div>
                    <button type="submit" class="btn btn-info btn-lg pull-right">Registrar</button>
                </form>
            </div>
            <!--end right -->
        </section>
        <!--end row -->
    </div>
@endsection


@section('der')

    @include('extras.derecha')

@endsection


@section('ready')



@endsection