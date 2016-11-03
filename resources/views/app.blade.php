<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- font-awesome framework -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
        <!-- Jquery framework -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Laravel</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    @if (!Auth::guest())
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('home')}}">Home</a></li>
                    </ul>
                    @endif
                    @if(Entrust::can('create-post'))
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('home')}}">Permisos</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('home')}}">Roles</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('users')}}">Usuarios</a></li>
                    </ul>
                    @endif
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{url('auth/login')}}">Login</a></li>
                        <li><a href="{{url('auth/login2')}}">Login (Manual)</a></li>
                        @else
                        <li>
                            <a href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li><a href="{{route('auth/logout')}}">Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @if (Session::has('errors'))
            <div class="alert alert-warning" role="alert">
                <ul>
                    <strong>Oops! Something went wrong : </strong>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <!-- Scripts -->
        @yield('content')
        <!-- Jquery framework -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <!-- parsley.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.4.4/parsley.js"></script>
        <!-- application -->
        <script src="{{asset('js/application.js')}}" charset="utf-8"></script>
        <!-- Bootstrap framework -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>