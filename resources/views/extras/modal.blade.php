<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header m-hefo">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-exclamation-triangle faa-ring animated">
                    </i>
                    Control de acceso
                </h4>
            </div>

            <form method="post" action="{{ URL::route('login') }}" style="margin-bottom: 30px">
            <div class="modal-body">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text" class="form-control" id="Usermodal" placeholder="Usuario"  name="username" autofocus>
                </div>
                <br>

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-key">
                        </i>
                    </div>
                    <input type="password" class="form-control" id="Userpass" placeholder="Contraseña" name="password">

                </div>
                <br>

                <div class="pull-right">

                    <a href="{{ URL::route('registro') }}" style="margin-right: 10px">¿No tienes cuenta? Registrese </a>
                <button type="button" class="btn btn-default  btn-lg" data-dismiss="modal">
                    Salir
                </button>
                <button type="submit" class="btn btn-success btn-lg">
                    Entrar
                </button>
                    </div>
            </div>
            </form>


            <div class="modal-footer m-hefo">

            </div>

        </div>
    </div>
</div>