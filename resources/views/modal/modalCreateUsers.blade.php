<div class="modal fade bs-example-modal-lg" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <br>
            <div class="container">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Registro</div>
                            <div class="panel-body">
                                <div class="container">
                                    <form class="form" action="{{ route('_users') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="active" value="1" checked>Activo<br>
                                            <input type="radio" name="active" value="0" >Inactivo 
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" value="{{ old('name') }}" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password confirmation</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('name') }}" class="form-control" required>
                                        </div>

                                        <div>
                                            <input type="submit" id="send" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
