<div class="modal fade bs-example-modal-lg" id="modalEdit-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Person Details </h4>
            </div>
            <br>
            <form class="form" action="{{ url('/_users/' . $user->id) }}" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">Editar Registro</div>
                                <div class="panel-body">
                                    <div class="container">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input type="text" name="id" id="id" value="{{ $user->id }}" class="form-control" disabled>
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="active" value="1" <?php echo $user->active  == 'Activo' ? 'checked' : '' ?> >Activo<br>
                                            <input type="radio" name="active" value="0" <?php echo $user->active == 'Inactivo' ? 'checked' : '' ?>>Inactivo 
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" value="{{ old('name') }}" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password confirmation</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('name') }}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-inverse">Save</button>
                </div>
            </form>

        </div>

    </div>
</div>
</div>
