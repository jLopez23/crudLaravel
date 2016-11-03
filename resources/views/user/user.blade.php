@extends('app')
@section('content')
<!DOCTYPE html>
<html>
    <body>
        <form class="form-horizontal" action="{{ route('createRolPermission') }}" method="post">
            {{ csrf_field()}}
            <div class="div container">
                <div class="row">
                    <div align="right" class="col-md-12">
                        @if(Entrust::can('create-post')) 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate">Crear</button>
                        @endif
                    </div>
                </div>
                <br>
                @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{Session::get('message')}}
                </div>
                @endif
            </div>
            <div class="div container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->active }}</td>
                                    <td><a class="btn btn-small btn-success" href="#modalEdit-{{$user->id}}" data-toggle="modal" title="{{ $user->name }}">Editar</a></td>
                                    <td><a class="btn btn-small btn-danger" href="{{ url('/users/' . $user->id) }}">Eliminar</a></td>
                                </tr>
                            </tbody>
                            @include('modal.modalEditUsers')
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </form>
        @include('modal.modalCreateUsers')
    </body>    
</html>
@endsection