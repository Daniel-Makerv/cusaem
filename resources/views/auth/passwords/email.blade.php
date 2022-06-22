<!doctype html>
<html lang="es_mx">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="icon" href="{{ asset('home/img/icono.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('logins/recover-password.css')}}">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    
    
    <title>CUSAEM</title>
    </head>
    <body>
    <div id="main-container">
                        <div id="left-container">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div id="logo-container">
                                    <img src="{{asset('/logins/img/logo.png')}}" width="400" alt="">
                                </div>

                                <div id="title-container">
                                    <h2>¡Recuperación de contraseña!</h2>
                                </div>
                                <div id="inputs-container" class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico:') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Enviar enlace para restablecer contraseña') }}
                                        </button>
                                    </div>
                                </div><br>
                                <center>
                                    <a class="right-a" href="{{ url('login') }}">Regresar</a>
                                </center>
                            </form>
                        </div>
                        <div id="right-container" class="widget widget_text">
                            <img class="oo" src="{{asset('/logins/img/policias.jpg')}}"/>
                        </div>
                    </div>
    </body>
</html>