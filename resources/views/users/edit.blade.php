@extends('layouts.menu')
@section('contenido')

<body>
    <main>
        <form action="{{ route ('perfil.update',$user->id_usu) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            @method('put')
            <h1>Editar Perfil</h1>

            <!-- Grupo: foto -->
            <div class="grid grid-cols-1 mt-5 mx-7">
                <center>
                    @if(Auth::user()->img_usu == null)
                        <img src="/imagen/user.jpg" class="img-circle elevation-2" alt="Imagen" id="imagenSeleccionada"
                            style="height: 175px; width: 170px; border-radius: 50%; border:solid 2px rgb(197, 186, 26)">

                    @else
                        <img src="/imagen/{{ (Auth::user()->img_usu) }}" class="img-circle elevation-2" alt="Imagen" id="imagenSeleccionada"
                            style="height: 175px; width: 170px; border-radius: 50%; border:solid 2px rgb(197, 186, 26)">


                    @endif
                </center>
            </div>

            <div class="">
                <label for="" class="formulario__label">Foto de perfil:</label>
                <label for="file-upload" class="subir">
                    <i class="fas fa-cloud-upload-alt"></i> Cambiar foto de perfil
                </label>
                <input type="file" name="img_usu" id="img_usu" class="buttonimg"
                    accept="image/png, .jpeg, .jpg, image/gif" />
                <div id="info"></div>
                @error('img_usu')

                    <small>*{{ $message }} solo se admite: png, jpg y svg</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: nombre -->
            <div class="formulario__grupo" id="grupo__fecha_artis">
                <label for="fecha_artis" class="formulario__label">Nombre(s):</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="name_usu" name="name_usu"
                        placeholder="Nombre(s) completo" value="{{ $user->name_usu }}">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                @error('name_usu')

                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: apellido -->
            <div class="formulario__grupo" id="grupo__fecha_artis">
                <label for="fecha_artis" class="formulario__label">Apellidos:</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="lastname_usu" name="lastname_usu"
                        placeholder="Apellidos completos" value="{{ $user->lastname_usu }}">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                @error('lastname_usu')

                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: Fecha de nacimiento -->
            <div class="formulario__grupo" id="grupo__fecha_artis">
                <label for="fecha_artis" class="formulario__label">Fecha de nacimiento:</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" id="date_usu" name="date_usu"
                        placeholder="Fecha de nacimiento" value="{{ $user->date_usu }}">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                @error('date_usu')

                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: sexo -->
            <div class="formulario__grupo">
                <label for="usuario" class="formulario__label">Sexo:</label>
                @if($user->sexo_usu=='femenino')
                    <label class="radio">
                        <input type="radio" value="femenino" name="sexo_usu" id="sexo_usu" checked="">
                        Mujer
                        <span></span>
                    </label>
                    <label class="radio">
                        <input type="radio" value="masculino" name="sexo_usu" id="sexo_usu">
                        Hombre
                        <span></span>
                    </label>
                @elseif($user->sexo_usu=='masculino')
                    <label class="radio">
                        <input type="radio" value="femenino" name="sexo_usu" id="sexo_usu">
                        mujer
                        <span></span>
                    </label>
                    <label class="radio">
                        <input type="radio" value="masculino" name="sexo_usu" checked="" id="sexo_usu">
                        hombre
                        <span></span>
                    </label>
                @endif
            </div>

            <!-- Grupo: Teléfono -->
            <div class="formulario__grupo" id="grupo__telefono_artis">
                <label for="telefono" class="formulario__label">Teléfono:</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="phone_usu" id="phone_usu"
                        placeholder="4491234567" value="{{ $user->phone_usu }}">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                @error('phone_usu')

                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: Correo -->
            <div class="formulario__grupo" id="grupo__email_artis">
                <label for="email_artis" class="formulario__label">Correo electronico:</label>
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="email" id="email"
                        placeholder="tiene que ser de 4 a 12 dígitos" value="{{ $user->email }}">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                @error('email')

                    <small>*{{ $message }}</small>
                    <br>
                @enderror
            </div>

            <!-- Grupo: id de rol default -->
            <input type="hidden" class="formulario__input" name="id_rol" id="id_rol" value="1">
            <br>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
            </div>
        </form>
    </main>
</body>
@section('js')
<script src="{{ asset('user/js/user-funciones.js') }}"></script>
@endsection
@stop
