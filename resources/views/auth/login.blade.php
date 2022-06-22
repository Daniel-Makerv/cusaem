<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Login CUSAEM</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('logins/login.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/logins/img/icono.ico') }}" />

</head>

<body>
    <div id="main-container">
        <div id="left-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div id="logo-container">
                    <img src="{{ asset('/logins/img/logo.png') }}" width="400" alt="">
                </div>

                <div id="title-container">
                    <h2>¡Bienvenido!</h2>
                </div>

                <div id="login-social-container">
                    <button type="button" class="btn-cusaem"><a href="{{ url('/') }}"
                            class="a">Regresar a la página principal</a></button>
                </div>

                <div id="separator-container">
                    <div class="line"></div>
                    <span>Ingresar con Correo</span>
                    <div class="line"></div>
                </div>

                <div id="inputs-container">
                    <label for="email"
                        class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico:') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password"
                        class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div id="options-container" class="options-container">
                        <div class="right">
                            @if(Route::has('password.request'))
                                <center> <a class="passwordreset"
                                        href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                            @endif
                        </div>
                    </div>

                    <div id="buttons-container">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar sesión') }}
                        </button>
                    </div>
                </div>

                <center>
                    <div id="register-container">
                        <span>No tienes cuenta? </span> <a
                            href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                    </div>
                </center>

            </form>
        </div>

        <div id="right-container" class="widget widget_text">
            <img class="oo" src="{{ asset('/logins/img/policias.jpg') }}" />
        </div>

    </div>
</body>

</html>
