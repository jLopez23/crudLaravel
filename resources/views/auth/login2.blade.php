@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login Manual</div>
                <div class="panel-body">
                    <form class="form" action="{{ route('auth/login_post') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
                        </div>
                        <div class="checkbox">
                            <label><input name="remember" type="checkbox"> Remember me</label>
                        </div>
                        <div>
                            <input type="submit" id="login" class="btn btn-primary">
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection