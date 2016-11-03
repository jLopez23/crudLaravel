@extends('app')
@section('content')
 <!--<!DOCTYPE html>
<html>
    <body>
        <form class="form-horizontal" action="{{ route('createRolPermission') }}" method="post">
            {{ csrf_field()}}
           <div class="row">
                <div align="right" class="col-md-12">
                    @if(Entrust::can('create-post')) 
                    <button type="submit" class="btn btn-primary">Crear</button>
                    @endif
                </div>
            </div>
        </form>
    </body>    
</html>-->
<!DOCTYPE html>
<htmls>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            htmls, bodys {
                height: 80%;
            }

            bodys {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .containers {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .contents {
                text-align: center;
                display: inline-block;
            }

            .titles {
                font-size: 96px;
            }
        </style>
    </head>
    <bodys>
        <div class="containers">
            <div class="contents">
                <div class="titles">Laravel 5</div>
            </div>
        </div>
    </bodys>
</htmls>
@endsection