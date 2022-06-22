@extends('layouts.menu')
@section('contenido')

<body>
    <main>
        <form action="{{ route ('passreset.update',$user->id_usu) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            @method('put')
            <h1>Cambiar Contraseña: (Esta en desarrollo)</h1>


            <!-- Grupo: Contraseña -->
            <div class="formulario__grupo" id="grupo__password_artis">
                <label for="password_artis" class="formulario__label">Nueva Contraseña:</label>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password" id="password"
                        placeholder="tiene que ser de 4 a 12 dígitos" value="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                @error('password')

                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: Contraseña 2 -->
            <div class="formulario__grupo" id="grupo__password_artis">
                <label for="password_artis" class="formulario__label">Confirmar Nueva Contraseña:</label>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="password_confirmation"
                        id="password_confirmation" placeholder="tiene que ser de 4 a 12 dígitos">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                @error('password_confirmation')

                <small>*{{ $message }}</small>
                <br>
            @enderror
            </div><br>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
            </div>
        </form>
    </main>
</body>
@stop
