@extends('layouts.menu')
@section('contenido')

@if ($examen == true){
<div class="form-documentss">
            <svg id=svgs>
                <rect id=rects></rect>
            </svg>
        <div class="tittless">

        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading ">Alerta</h4>
            <h4>¡Tus resultados se han enviado correctamente!</h4>
            <hr>
            <center><h6 class="mb-0 center"><u>Nuestros encargados te contactarán lo más pronto
                 posible para seguir con el proceso.</u></h6></center>
        </div>   
    </div>
</div>
}    
@else

<!-- modal para mostrar instrucciones del examen-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Examen </h4> <img src="{{ asset('test/img/cusaemicon.png') }}" alt="">
                </div>
                <div class="modal-body" id="modal-body">
                   
                        <p>Instrucciones del Examen:<br>
                    <li>Este Examen es requerido si se desea continuar con el proceso para ingresar como cuerpo policial en <strong>CUSAEM.</strong></li><br>
                    <li>Cuenta con 30 minutos para contestar si o no a un total de<strong> 40 preguntas.</strong></li><br>
                    <li>Contestar y leer las preguntas con mayor sinceridad posible ya que solamente podras realizar este examen <small>una vez.</small></li>  <br>
                    <li><strong>Al iniciar el examen no podras salir ya que si lo haces se perdera tu progreso y tendras que empezar el examen de nuevo.</strong></li><br>
                        </p>

                   <br>
                  <center><strong>Derechos reservados CUSAEM S.A de C.V.</strong><br></center> <br>
                  <img src="{{ asset('test/img/logo.png') }}" width="100%" alt="">
                            
                </div>
                <div class="modal-footer" id="modal-footer">
                    <button type="button" class="btn btn-warning" id="btn-warning"
                        data-bs-dismiss="modal">!Iniciar Examen!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin del modal -->
<main class="content-wrapper">
        <h1 class="titulo">TEST CUSAEM</h1>
        <!--Contenedor de categorias-->
        <div class="categorias" id="categorias">
            <div class="categoria activa" data-categoria="test-psicologico">

                <!--Viewbox: Sirve para poder definir el area de nuestras imgs en SVG-->
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 11.374c0 4.55-3.783 6.96-7.146 6.796-.151 1.448.061 2.642.384 3.641l-3.72 1.189c-.338-1.129-.993-3.822-2.752-5.279-2.728.802-4.969-.646-5.784-2.627-2.833.046-4.982-1.836-4.982-4.553 0-4.199 4.604-9.541 11.99-9.541 7.532 0 12.01 5.377 12.01 10.374zm-21.992-1.069c-.145 2.352 2.179 3.07 4.44 2.826.336 2.429 2.806 3.279 4.652 2.396 1.551.74 2.747 2.37 3.729 4.967l.002.006.111-.036c-.219-1.579-.09-3.324.36-4.528 3.907.686 6.849-1.153 6.69-4.828-.166-3.829-3.657-8.011-9.843-8.109-6.302-.041-9.957 4.255-10.141 7.306zm8.165-2.484c-.692-.314-1.173-1.012-1.173-1.821 0-1.104.896-2 2-2s2 .896 2 2c0 .26-.05.509-.141.738 1.215.911 2.405 1.855 3.6 2.794.424-.333.96-.532 1.541-.532 1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5c-1.171 0-2.155-.807-2.426-1.895-1.201.098-2.404.173-3.606.254-.17.933-.987 1.641-1.968 1.641-1.104 0-2-.896-2-2 0-1.033.784-1.884 1.79-1.989.12-.731.252-1.46.383-2.19zm2.059-.246c-.296.232-.66.383-1.057.417l-.363 2.18c.504.224.898.651 1.079 1.177l3.648-.289c.047-.267.137-.519.262-.749l-3.569-2.736z"/></svg>
                <p>Examen Psicológico</p>
            </div>
            <div class="categoria activa" data-categoria="test-psicologico-segundo">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 11.374c0 4.55-3.783 6.96-7.146 6.796-.151 1.448.061 2.642.384 3.641l-3.72 1.189c-.338-1.129-.993-3.822-2.752-5.279-2.728.802-4.969-.646-5.784-2.627-2.833.046-4.982-1.836-4.982-4.553 0-4.199 4.604-9.541 11.99-9.541 7.532 0 12.01 5.377 12.01 10.374zm-21.992-1.069c-.145 2.352 2.179 3.07 4.44 2.826.336 2.429 2.806 3.279 4.652 2.396 1.551.74 2.747 2.37 3.729 4.967l.002.006.111-.036c-.219-1.579-.09-3.324.36-4.528 3.907.686 6.849-1.153 6.69-4.828-.166-3.829-3.657-8.011-9.843-8.109-6.302-.041-9.957 4.255-10.141 7.306zm8.165-2.484c-.692-.314-1.173-1.012-1.173-1.821 0-1.104.896-2 2-2s2 .896 2 2c0 .26-.05.509-.141.738 1.215.911 2.405 1.855 3.6 2.794.424-.333.96-.532 1.541-.532 1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5c-1.171 0-2.155-.807-2.426-1.895-1.201.098-2.404.173-3.606.254-.17.933-.987 1.641-1.968 1.641-1.104 0-2-.896-2-2 0-1.033.784-1.884 1.79-1.989.12-.731.252-1.46.383-2.19zm2.059-.246c-.296.232-.66.383-1.057.417l-.363 2.18c.504.224.898.651 1.079 1.177l3.648-.289c.047-.267.137-.519.262-.749l-3.569-2.736z"/></svg>
                <p>Segundo E. Psicológico</p>
            </div>
            <div class="categoria activa" data-categoria="test-psicometrico">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 11.374c0 4.55-3.783 6.96-7.146 6.796-.151 1.448.061 2.642.384 3.641l-3.72 1.189c-.338-1.129-.993-3.822-2.752-5.279-2.728.802-4.969-.646-5.784-2.627-2.833.046-4.982-1.836-4.982-4.553 0-4.199 4.604-9.541 11.99-9.541 7.532 0 12.01 5.377 12.01 10.374zm-21.992-1.069c-.145 2.352 2.179 3.07 4.44 2.826.336 2.429 2.806 3.279 4.652 2.396 1.551.74 2.747 2.37 3.729 4.967l.002.006.111-.036c-.219-1.579-.09-3.324.36-4.528 3.907.686 6.849-1.153 6.69-4.828-.166-3.829-3.657-8.011-9.843-8.109-6.302-.041-9.957 4.255-10.141 7.306zm8.165-2.484c-.692-.314-1.173-1.012-1.173-1.821 0-1.104.896-2 2-2s2 .896 2 2c0 .26-.05.509-.141.738 1.215.911 2.405 1.855 3.6 2.794.424-.333.96-.532 1.541-.532 1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5c-1.171 0-2.155-.807-2.426-1.895-1.201.098-2.404.173-3.606.254-.17.933-.987 1.641-1.968 1.641-1.104 0-2-.896-2-2 0-1.033.784-1.884 1.79-1.989.12-.731.252-1.46.383-2.19zm2.059-.246c-.296.232-.66.383-1.057.417l-.363 2.18c.504.224.898.651 1.079 1.177l3.648-.289c.047-.267.137-.519.262-.749l-3.569-2.736z"/></svg>
                <p>Examen Psicometrico</p>
            </div>
            <div class="categoria activa" data-categoria="test-psicometrico-segundo">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 11.374c0 4.55-3.783 6.96-7.146 6.796-.151 1.448.061 2.642.384 3.641l-3.72 1.189c-.338-1.129-.993-3.822-2.752-5.279-2.728.802-4.969-.646-5.784-2.627-2.833.046-4.982-1.836-4.982-4.553 0-4.199 4.604-9.541 11.99-9.541 7.532 0 12.01 5.377 12.01 10.374zm-21.992-1.069c-.145 2.352 2.179 3.07 4.44 2.826.336 2.429 2.806 3.279 4.652 2.396 1.551.74 2.747 2.37 3.729 4.967l.002.006.111-.036c-.219-1.579-.09-3.324.36-4.528 3.907.686 6.849-1.153 6.69-4.828-.166-3.829-3.657-8.011-9.843-8.109-6.302-.041-9.957 4.255-10.141 7.306zm8.165-2.484c-.692-.314-1.173-1.012-1.173-1.821 0-1.104.896-2 2-2s2 .896 2 2c0 .26-.05.509-.141.738 1.215.911 2.405 1.855 3.6 2.794.424-.333.96-.532 1.541-.532 1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5c-1.171 0-2.155-.807-2.426-1.895-1.201.098-2.404.173-3.606.254-.17.933-.987 1.641-1.968 1.641-1.104 0-2-.896-2-2 0-1.033.784-1.884 1.79-1.989.12-.731.252-1.46.383-2.19zm2.059-.246c-.296.232-.66.383-1.057.417l-.363 2.18c.504.224.898.651 1.079 1.177l3.648-.289c.047-.267.137-.519.262-.749l-3.569-2.736z"/></svg>
                <p>Segundo E. Psicometrico</p>
            </div>

        </div>
        <!--Contenedor preguntas-->
        <div class="preguntas">
        <form class="form" action="{{ route('tests.store') }}" method="POST">
            @csrf


            <!--Preguntas de primera encuesta psicologica-->
            <div class="contenedor-preguntas activo" data-categoria="test-psicologico">

            <input type="hidden" value="{{ Auth::id('id_usu') }}" name="id_usu" id="id_usu">

                <div class="contenedor-pregunta">
                    <p class="pregunta">1.- ¿Tienes preferencias en estar en un equipo de trabajo? <img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_uno" id="pregunta_uno" value="si" {{ old('pregunta_uno') == 'si' ? 'checked' : ''}}> SI
                    <input  type="radio" name="pregunta_uno" id="pregunta_uno" value="no"  {{ old('pregunta_uno') == 'no' ? 'checked' : ''}}> NO                    
                </div>
                @error('pregunta_uno')
                <small>*{{ $message }}</small>
                @enderror
                </div>


                <div class="contenedor-pregunta">
                    <p class="pregunta">2.- ¿Te sientes afectado con las actitudes de tus compañeros?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_dos" id="pregunta_dos" value="si" {{ old('pregunta_dos') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_dos" id="pregunta_dos" value="no" {{ old('pregunta_dos') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_dos')
                <small>*{{ $message }}</small>
                @enderror
                </div>




                <div class="contenedor-pregunta">
                    <p class="pregunta">3.- ¿El trabajo en equipo es importante para ti?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_tres" id="pregunta_tres" value="si" {{ old('pregunta_tres') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_tres" id="pregunta_tres" value="no" {{ old('pregunta_tres') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_tres')
                <small>*{{ $message }}</small>
                @enderror
                </div>


                <div class="contenedor-pregunta">
                    <p class="pregunta">4.- ¿Arriesgarías tu vida para proteger a una persona?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_cuatro" id="pregunta_cuatro" value="si" {{ old('pregunta_cuatro') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_cuatro" id="pregunta_cuatro" value="no" {{ old('pregunta_cuatro') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_cuatro')
                <small>*{{ $message }}</small>
                @enderror
                </div>



                <div class="contenedor-pregunta">
                    <p class="pregunta">5.- ¿Si eres líder de equipo te sientes de acuerdo, con esa decisión?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_cinco" id="pregunta_cinco" value="si" {{ old('pregunta_cinco') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_cinco" id="pregunta_cinco" value="no" {{ old('pregunta_cinco') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_cinco')
                <small>*{{ $message }}</small>
                @enderror
                </div>




                <div class="contenedor-pregunta">
                    <p class="pregunta">6.- ¿Tus instintos para ti los consideras rápidos?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_seis" id="pregunta_seis" value="si" {{ old('pregunta_seis') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_seis" id="pregunta_seis" value="no" {{ old('pregunta_seis') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_seis')
                <small>*{{ $message }}</small>
                @enderror
                </div>




                <div class="contenedor-pregunta">
                    <p class="pregunta">7.- ¿Si eres molestado por los demás los ofenderias?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_siete" id="pregunta_siete" value="si" {{ old('pregunta_siete') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_siete" id="pregunta_siete" value="no" {{ old('pregunta_siete') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_siete')
                <small>*{{ $message }}</small>
                @enderror
                </div>



                <div class="contenedor-pregunta">
                    <p class="pregunta">8.- ¿Las cosas te salen bien si eres una buena persona?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_ocho" id="pregunta_ocho" value="si" {{ old('pregunta_ocho') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_ocho" id="pregunta_ocho" value="no" {{ old('pregunta_ocho') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_ocho')
                <small>*{{ $message }}</small>
                @enderror
                </div>




                <div class="contenedor-pregunta">
                    <p class="pregunta">9.- ¿Te incomoda viajar al trabajo con otras personas?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_nueve" id="pregunta_nueve" value="si" {{ old('pregunta_nueve') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_nueve" id="pregunta_nueve" value="no" {{ old('pregunta_nueve') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_nueve')
                <small>*{{ $message }}</small>
                @enderror
                </div>



                <div class="contenedor-pregunta">
                    <p class="pregunta">10.- ¿Te creés una persona competente al momento de trabajar en equipo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                    <div class="respuesta">
                    <input type="radio" name="pregunta_diez" id="pregunta_diez" value="si" {{ old('pregunta_diez') == 'si' ? 'checked' : ''}}> SI
                    <input type="radio" name="pregunta_diez" id="pregunta_diez" value="no" {{ old('pregunta_diez') == 'no' ? 'checked' : ''}}> NO 
                </div>
                @error('pregunta_diez')
                <small>*{{ $message }}</small>
                @enderror
                </div>
            
                
                
        </div>

        <!--Preguntas de la segunda encuesta psicologica-->
           <div class="contenedor-preguntas" data-categoria="test-psicologico-segundo">

            <div class="contenedor-pregunta">
                <p class="pregunta">11.- ¿Te consideras una persona torpe al momento de trabajar?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_once" id="pregunta_once" value="si" {{ old('pregunta_once') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_once" id="pregunta_once" value="no" {{ old('pregunta_once') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_once')
                <small>*{{ $message }}</small>
                @enderror
            </div>
            
            


            <div class="contenedor-pregunta">
                <p class="pregunta">12.- ¿Es importante para ti el liderazgo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_doce" id="pregunta_doce" value="si" {{ old('pregunta_doce') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_doce" id="pregunta_doce" value="no" {{ old('pregunta_doce') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_doce')
                <small>*{{ $message }}</small>
                @enderror
            </div>




            <div class="contenedor-pregunta">
                <p class="pregunta">13.- ¿Entras en pánico si te encuentras solo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_trece" id="pregunta_trece" value="si" {{ old('pregunta_trece') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_trece" id="pregunta_trece" value="no" {{ old('pregunta_trece') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_trece')
                <small>*{{ $message }}</small>
                @enderror 
            </div>




            <div class="contenedor-pregunta">
                <p class="pregunta">14.- ¿Entras en crisis emocional si eres agredido por un delincuente?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_catorce" id="pregunta_catorce" value="si" {{ old('pregunta_catorce') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_catorce" id="pregunta_catorce" value="no" {{ old('pregunta_catorce') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_catorce')
                <small>*{{ $message }}</small>
                @enderror  
            </div>




            <div class="contenedor-pregunta">
                <p class="pregunta">15.- ¿Discriminarías a un compañero por su fisico?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_quince" id="pregunta_quince" value="si" {{ old('pregunta_quince') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_quince" id="pregunta_quince" value="no" {{ old('pregunta_quince') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_quince')
                <small>*{{ $message }}</small>
                @enderror 
            </div>





            <div class="contenedor-pregunta">
                <p class="pregunta">16.- ¿Compartirías tu conocimiento con tu equipo de trabajo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_dieciseis" id="pregunta_dieciseis" value="si" {{ old('pregunta_dieciseis') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_dieciseis" id="pregunta_dieciseis" value="no" {{ old('pregunta_dieciseis') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_dieciseis')
                <small>*{{ $message }}</small>
                @enderror 
            </div>



            <div class="contenedor-pregunta">
                <p class="pregunta">17.- ¿Golpearías a un compañero si eres ofendido por él?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_diecisiete" id="pregunta_diecisiete" value="si" {{ old('pregunta_diecisiete') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_diecisiete" id="pregunta_diecisiete" value="no" {{ old('pregunta_diecisiete') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_diecisiete')
                <small>*{{ $message }}</small>
                @enderror 
            </div>





            <div class="contenedor-pregunta">
                <p class="pregunta">18- ¿Tu forma de comunicación hacia los demás la consideras buena?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_dieciocho" id="pregunta_dieciocho" value="si" {{ old('pregunta_dieciocho') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_dieciocho" id="pregunta_dieciocho" value="no" {{ old('pregunta_dieciocho') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_dieciocho')
                <small>*{{ $message }}</small>
                @enderror 
            </div>




            <div class="contenedor-pregunta">
                <p class="pregunta">19.- ¿Te gusta recibir indicaciónes?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_diecinueve" id="pregunta_diecinueve" value="si" {{ old('pregunta_diecinueve') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_diecinueve" id="pregunta_diecinueve" value="no" {{ old('pregunta_diecinueve') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_diecinueve')
                <small>*{{ $message }}</small>
                @enderror 
            </div>





            <div class="contenedor-pregunta">
                <p class="pregunta">20.- ¿Te frusta salir tarde del trabajo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
                <div class="respuesta">
                <input type="radio" name="pregunta_veinte" id="pregunta_veinte" value="si" {{ old('pregunta_veinte') == 'si' ? 'checked' : ''}}> SI
                <input type="radio" name="pregunta_veinte" id="pregunta_veinte" value="no" {{ old('pregunta_veinte') == 'no' ? 'checked' : ''}}> NO 
            </div>
            @error('pregunta_veinte')
                <small>*{{ $message }}</small>
                @enderror 
            </div>




    </div>
    <!--Preguntas de primera encuesta psicometrica-->
    <div class="contenedor-preguntas" data-categoria="test-psicometrico">

        <div class="contenedor-pregunta">
            <p class="pregunta">1.- ¿Le tienes confianza a las personas que acabas de conocer y te rodean?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintiuno" id="pregunta_veintiuno" value="si" {{ old('pregunta_veintiuno') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintiuno" id="pregunta_veintiuno" value="no" {{ old('pregunta_veintiuno') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintiuno')
                <small>*{{ $message }}</small>
                @enderror 
        </div>
        



        
        <div class="contenedor-pregunta">
            <p class="pregunta">2- ¿Piensa usted que la mayoría de personas son de buenas cualidades y sobresalen más que sus fallas?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintidos" id="pregunta_veintidos" value="si" {{ old('pregunta_veintidos') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintidos" id="pregunta_veintidos" value="no" {{ old('pregunta_veintidos') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintidos')
                <small>*{{ $message }}</small>
                @enderror
        </div>




        <div class="contenedor-pregunta">
            <p class="pregunta">3.- ¿Te agrada compartir tus experiencias de trabajo y pensamientos con otros?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintitres" id="pregunta_veintitres" value="si" {{ old('pregunta_veintitres') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintitres" id="pregunta_veintitres" value="no" {{ old('pregunta_veintitres') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintitres')
                <small>*{{ $message }}</small>
                @enderror
        </div>





        <div class="contenedor-pregunta">
            <p class="pregunta">4.- ¿Haces paréntesis en tu vida para evaluar tus puntos fuertes y débiles?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veinticuatro" id="pregunta_veinticuatro" value="si" {{ old('pregunta_veinticuatro') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veinticuatro" id="pregunta_veinticuatro" value="si" {{ old('pregunta_veinticuatro') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veinticuatro')
                <small>*{{ $message }}</small>
                @enderror
        </div>




        <div class="contenedor-pregunta">
            <p class="pregunta">5.- ¿Creés que nomarlmente tienes que luchar demasiado para conseguir tus sueños?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veinticinco" id="pregunta_veinticinco" value="si" {{ old('pregunta_veinticinco') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veinticinco" id="pregunta_veinticinco" value="no" {{ old('pregunta_veinticinco') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veinticinco')
                <small>*{{ $message }}</small>
                @enderror
        </div>





        <div class="contenedor-pregunta">
            <p class="pregunta">6.- ¿Sientes que frecuentemente tus jefes son injustos?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintiseis" id="pregunta_veintiseis" value="si" {{ old('pregunta_veintiseis') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintiseis" id="pregunta_veintiseis" value="no" {{ old('pregunta_veintiseis') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintiseis')
                <small>*{{ $message }}</small>
                @enderror
        </div>



        <div class="contenedor-pregunta">
            <p class="pregunta">7.- ¿Resolverías un problema con una persona que no conoce?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintisiete" id="pregunta_veintisiete" value="si" {{ old('pregunta_veintisiete') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintisiete" id="pregunta_veintisiete" value="no" {{ old('pregunta_veintisiete') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintisiete')
                <small>*{{ $message }}</small>
                @enderror
        </div>




        <div class="contenedor-pregunta">
            <p class="pregunta">8.- ¿Piensas que tienes derecho de hacer lo que te plazca en horarios de trabajo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintiocho" id="pregunta_veintiocho" value="si" {{ old('pregunta_veintiocho') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintiocho" id="pregunta_veintiocho" value="no" {{ old('pregunta_veintiocho') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintiocho')
                <small>*{{ $message }}</small>
                @enderror
        </div>


        <div class="contenedor-pregunta">
            <p class="pregunta">9.- ¿A menudo tomas decisiones sin consultar con otros en horarios de trabajo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_veintinueve" id="pregunta_veintinueve" value="si" {{ old('pregunta_veintinueve') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_veintinueve" id="pregunta_veintinueve" value="no" {{ old('pregunta_veintinueve') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_veintinueve')
                <small>*{{ $message }}</small>
                @enderror
        </div>



        <div class="contenedor-pregunta">
            <p class="pregunta">10.- ¿Te consideras muy autoritario?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
            <div class="respuesta">
            <input type="radio" name="pregunta_treinta" id="pregunta_treinta" value="si" {{ old('pregunta_treinta') == 'si' ? 'checked' : ''}}> SI
            <input type="radio" name="pregunta_treinta" id="pregunta_treinta" value="no" {{ old('pregunta_treinta') == 'no' ? 'checked' : ''}}> NO 
        </div>
        @error('pregunta_treinta')
                <small>*{{ $message }}</small>
                @enderror
        </div>





</div>
       <!--Preguntas de primera encuesta psicometrico2-->
       <div class="contenedor-preguntas" data-categoria="test-psicometrico-segundo">

    <div class="contenedor-pregunta">
        <p class="pregunta">11.- ¿Respetas los pensamientos y opiniones ajenas?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_uno" id="pregunta_treinta_y_uno" value="si" {{ old('pregunta_treinta_y_uno') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_uno" id="pregunta_treinta_y_uno" value="no" {{ old('pregunta_treinta_y_uno') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_uno')
                <small>*{{ $message }}</small>
                @enderror
    </div>



    <div class="contenedor-pregunta">
        <p class="pregunta">12.- ¿Consideras que normalmente dudas mucho de ti mismo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_dos" id="pregunta_treinta_y_dos" value="si" {{ old('pregunta_treinta_y_dos') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_dos" id="pregunta_treinta_y_dos" value="no" {{ old('pregunta_treinta_y_dos') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_dos')
                <small>*{{ $message }}</small>
                @enderror
    </div>


    <div class="contenedor-pregunta">
        <p class="pregunta">13.- ¿Te gusta ejercer cierto poder sobre los demas?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_tres" id="pregunta_treinta_y_tres" value="si" {{ old('pregunta_treinta_y_tres') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_tres" id="pregunta_treinta_y_tres" value="no" {{ old('pregunta_treinta_y_tres') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_tres')
                <small>*{{ $message }}</small>
                @enderror
    </div>



    <div class="contenedor-pregunta">
        <p class="pregunta">14.- ¿Concideras que cualquier persona puede ser policía?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_cuatro" id="pregunta_treinta_y_cuatro" value="si" {{ old('pregunta_treinta_y_cuatro') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_cuatro" id="pregunta_treinta_y_cuatro" value="no" {{ old('pregunta_treinta_y_cuatro') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_cuatro')
                <small>*{{ $message }}</small>
                @enderror
    </div>



    <div class="contenedor-pregunta">
        <p class="pregunta">15.- ¿Concideras que los policias de hoy en dia hacen mal su trabajo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_cinco" id="pregunta_treinta_y_cinco" value="si" {{ old('pregunta_treinta_y_cinco') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_cinco" id="pregunta_treinta_y_cinco" value="no" {{ old('pregunta_treinta_y_cinco') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_cinco')
                <small>*{{ $message }}</small>
                @enderror
    </div>



    <div class="contenedor-pregunta">
        <p class="pregunta">16.- ¿Te importaría bastante la decision de un ciudadano de no hacerte caso?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_seis" id="pregunta_treinta_y_seis" value="si" {{ old('pregunta_treinta_y_seis') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_seis" id="pregunta_treinta_y_seis" value="no" {{ old('pregunta_treinta_y_seis') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_seis')
                <small>*{{ $message }}</small>
                @enderror
    </div>



    <div class="contenedor-pregunta">
        <p class="pregunta">17.- ¿Tomarías cerveza y sustancias ilícitas en horas de trabajo?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_siete" id="pregunta_treinta_y_siete" value="si" {{ old('pregunta_treinta_y_siete') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_siete" id="pregunta_treinta_y_siete" value="no" {{ old('pregunta_treinta_y_siete') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_siete')
                <small>*{{ $message }}</small>
                @enderror
    </div>



    <div class="contenedor-pregunta">
        <p class="pregunta">18.- ¿Concideras que te cuesta trabajo expresar opiniones hacia las demás personas?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_ocho" id="pregunta_treinta_y_ocho" value="si" {{ old('pregunta_treinta_y_ocho') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_ocho" id="pregunta_treinta_y_ocho" value="no" {{ old('pregunta_treinta_y_ocho') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_ocho')
                <small>*{{ $message }}</small>
                @enderror
    </div>




    <div class="contenedor-pregunta">
        <p class="pregunta">19.- ¿Prefieres evitar aquellas actividades en las que tendrás que conocer gente nueva?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_treinta_y_nueve" id="pregunta_treinta_y_nueve" value="si" {{ old('pregunta_treinta_y_nueve') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_treinta_y_nueve" id="pregunta_treinta_y_nueve" value="no" {{ old('pregunta_treinta_y_nueve') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_treinta_y_nueve')
                <small>*{{ $message }}</small>
                @enderror
    </div>


    <div class="contenedor-pregunta">
        <p class="pregunta">20.- ¿En una discusión acostumbras a no participar y aunque lo hagas no sueles hacer caso?<img src="test/img/suma.svg" alt="Abrir Respuesta"></p>
        <div class="respuesta">
        <input type="radio" name="pregunta_cuarenta" id="pregunta_cuarenta" value="si" {{ old('pregunta_cuarenta') == 'si' ? 'checked' : ''}}> SI
        <input type="radio" name="pregunta_cuarenta" id="pregunta_cuarenta" value="no" {{ old('pregunta_cuarenta') == 'no' ? 'checked' : ''}}> NO 
    </div>
    @error('pregunta_cuarenta')
                <small>*{{ $message }}</small>
                @enderror
    </div>


      </div>
      <center> <button type="submit" class="btn btn-warning">Enviar</button><br><br></center>
      </form>

        </div>

    </main>

@endif
    @section('js')
<script src="{{ asset('test/js/categorias.js') }}"></script>
<script src="{{ asset('test/js/preguntasFrecuentes.js') }}"></script>
<script src="{{ asset('test/js/instrucciones_iniciar.js') }}"></script>
@endsection
@stop
