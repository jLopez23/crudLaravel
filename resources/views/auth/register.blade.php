@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form" action="{{ route('auth/register') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="radio" name="active" value="1" checked>Activo<br>
                            <input type="radio" name="active" value="0" >Inactivo 
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" value="{{ old('name') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('name') }}" class="form-control">
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
@endsection
