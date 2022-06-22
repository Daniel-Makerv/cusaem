<!DOCTYPE html>
<html lang="es_mx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('home/img/icono.ico')}}" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--
        font-family: 'Oswald', sans-serif;
        font-family: 'PT Sans Narrow', sans-serif; -->

        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('home/fonts.css')}}">
        <link rel="stylesheet" href="{{ asset('home/style.css')}}">
        <title>CUSAEM</title>

    </head>
    <body>
      <div class="page">
        <header class="section page-header rd-navbar-transparent-wrap">
          <!--RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-aside-outer rd-navbar-collapse">
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-info">
                    <a href="">CUERPOS DE SEGURIDAD AUXILIARES DEL ESTADO DE MÉXICO</a>
                  </div>
                  <ul class="list-lined">
                    @guest
                            <li><a href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{ __('Registrarme') }}</a></li>
                        @endif
                    @else
                   @if (Auth::user()->id_rol == '2')
                   <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name_usu }} <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('estadisticas.index',Auth::id('id_usu') ) }}">
                              {{ __('Estadisticas examenes') }}
                          </a>
                          <a class="dropdown-item" href="{{ route('documentos.report',Auth::id('id_usu') ) }}">
                            {{ __('Reportes') }}
                        </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Cerrar Sesión') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                   @else
                   <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name_usu }} <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('perfil.edit',Auth::id('id_usu') ) }}">
                              {{ __('Mi Perfil') }}
                          </a>
                          <a class="dropdown-item" href="{{ route('passreset.edit',Auth::id('id_usu') ) }}">
                            {{ __('Cambiar Contraseña') }}
                        </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Cerrar Sesión') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                   @endif
                    @endguest
                  </ul>
                </div>
              </div>
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main-inner">
                  <div class="rd-navbar-main">
                    <!--RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                      <!--RD Navbar Toggle-->
                      <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                      <!--RD Navbar Brand-->
                      <div class="rd-navbar-brand">
                        <!--Brand-->
                        <a class="brand" href="#"><img class="brand-logo-dark" src="{{ asset('home/img/logo.png')}}" alt="CUSAEM" width="146" height="22"/><img class="brand-logo-light" src="{{ asset('home/img/logo.png')}}" alt="" width="155" height="22"/></a>
                      </div>
                    </div>
                    <div class="rd-navbar-main-element">
                      <div class="rd-navbar-nav-wrap">
                        <ul class="rd-navbar-nav">
                          <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Inicio</a></li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="#">Vacantes</a></li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="#sobrenosotros">Sobre Nosotros</a></li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="#convocatoria">Convocatoria</a></li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="#adress">Ubicación</a></li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="#contact">Contacto</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!--Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-1 context-dark" data-loop="true" data-autoplay="5000" data-simulate-touch="false">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="{{ asset('home/img/2.jpg')}}">
              <div class="swiper-slide-caption section-lg">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                      <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Seguridad Profesional</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">y mejor servicio</span></h1>
                      <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">Estamos altamente capacitados y comprometidos para brindarle la antención que usted se merece, por ello es de vital importancia estar bien preparados para enfrentar las situaciones que se nos presenten.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{ asset('home/img/2.jpg')}}">
              <div class="swiper-slide-caption section-lg">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                      <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Apoyo policial</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">para tu seguridad</span></h1>
                      <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">Ofrece salvaguardar la integridad física y el patrimonio de los usuarios a través de servicios profesionales de seguridad integral con los niveles más altos de calidad y tecnología de clase mundial, privilegiando la disiciplina, honestidad y lealtad.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{ asset('home/img/2.jpg')}}">
              <div class="swiper-slide-caption section-lg">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                      <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Su tranquilidad</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">nuestro compromiso</span></h1>
                      <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">Consientes de la importancia de su seguridad, CUSAEM cuenta con un centro de control y monitoreo equipado con tecnología de punta 24/7.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Swiper Pagination-->
          <div class="swiper-pagination-wrap">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Icon List 2-->
        <section class="section section-sm section-sm-bottom-100 image-left">
          <div class="container">
            <div class="row row-30">
              <h2 class="title-icon title-icon-2"><span class="icon icon-default mercury-icon-partners"></span>Servicios</h2>
                <div class="left"><img class="tropa" src="{{ asset('home/img/tropa.jpg')}}"/></div>
                <div class="title-left">
                  <h4><a class="title">Guardia Intramuros</a></h4>
                  <p class="text">Guardias de protección de instalaciones, especializados en el control de accesos, monitoreo, técnicas de disuasión y manejo de situaciones de contingencia.</p>
                  <div class="title-left-1">
                    <h4><a class="mercury-icon-time title-1"> Jornada de servicio</a></h4>
                    <p class="text-1">12 x 12hrs. / 24 x 24hrs.</p>
                    <hr>
                    <h4><a class="mercury-icon-target title-1"> Equipo básico</a></h4>
                    <p class="text-1">Fornitura, tolete y / o Radio</p>
                    <hr>
                    <h4><a class="mercury-icon-target-2 title-1"> Equipo AA</a></h4>
                    <p class="text-1">Arma corta o larga</p>
                    <hr>
                  </div>
                  <div class="title-left-2">
                    <h4><a class="mercury-icon-note title-2"> Funciones</a></h4>
                    <ul class="list-marked-2">
                      <li>Verificar los bienes bajo su resguardo.</li>
                      <li>Prevenir, disuadir y reaccionar ante amenazas.</li>
                      <li>Monitoreo de instalaciones.</li>
                      <li>Control de acceso.</li>
                      <li>Velar por la seguridad de las personas que se encuentran dentro del inmueble resguardado.</li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Download Our Tax Guide App-->
        <section class="section bg-gray-100 box-image-left">
          <div class="container">
            <div class="row">
              <div class="wow fadeInLeft">
                <div class="section-lg section-lg-top-100">
                  <h2 class="title-icon title-icon-2 title-3"><span class="icon icon-default mercury-icon-touch"></span><span id="convocatoria">Convocatoria<br><span class="text-light-1">Incorpórate a la Policía Auxiliar del Estado de México</span></span></h2>
                  <p class="big-2">Convocamos a las Mexicanas y Mexicanos, mayores a 18 años (mujeres) y 19 años (hombres) cumplidos a la fecha de convocatoria, interesados en ingresar a la Policía Auxiliar del Estado de México como guardias de seguridad, supervisores y jefes de turno.</p>
                  <div class="convo">
                    <div class="three-columns">
                      <h4><a class="mercury-icon-note"> No.</a></h4>
                      <h4><a class="mercury-icon-case"> Documentación</a></h4>
                      <h4><a class="mercury-icon-news"> Original/Copia</a></h4>
                      <hr class="hr">
                    </div>
                    <p class="text-doc">6 Fotografías tamaño infantil blanco y negro, vestido de civil con nombre en la parte de atrás (hombres cabello corto, sin barba ni bigote, mujeres: cabello recogido, no maquillaje, no aretes).</p>
                    <p class="text-doc-2">Croquis de ubicación (Solo original).</p>
                    <p class="text-doc-3">3 Referencias con domicilio completo (de un 1 familiar directo, de 1 familiar indirecto y de 1 amigo, vecino o conocido).</p>
                    <p class="text-doc-4">Dependientes economicos.</p>
                    <p class="text-doc-5">Precartilla, recibo de liberación o cartilla liberada (original y 3 copias).</p>
                    <p class="text-doc-6">Certificado de estudios (minimo secundaria, original y 3 copias ambos lados).</p>
                    <p class="text-doc-7">Acta de nacimiento (Original y 3 copias).</p>
                    <p class="text-doc-8">Certificado de Antecedentes no penales (original y 3 copias) "INFORME DE ANTECEDENTES NO PENALES Y CONTRASEÑA".</p>
                    <p class="text-doc-9">Comprobante de domicilio Original, no mayor a un mes, recibo de telefono(telmex), estado de cuenta bancario, tv de paga (megacable) o constancia domiciliaria expendida por el municipio (NO PREDIO, LUZ, IZZI, AGUA Y GAS) (original y 3 copias).</p>
                    <p class="text-doc-10">Cartas de recomentación actuales y personales con domicilio completo, firma y telefono de la persona que recomienda. (no familiares).</p>
                    <p class="text-doc-11">CURP actualizado (3 copias) "AÑO ACTUAL".</p>
                    <p class="text-doc-12">INE o IFE (original y 3 copias ambos lados).</p>
                    <p class="text-doc-13">	Registro Federal de Contribuyentes con homoclave (RFC actual y 3 copias).</p>
                    <hr class="hr-2">
                    <div class="no">
                      <p class="colorno p-1">1 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-2">2 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-3">3 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-4">4 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-5">5 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-6">6 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-7">7 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-8">8 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-9">9 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-10">10 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-11">11 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-12">12 <i class="fa fa-caret-right flecha"></i></p>
                      <p class="colorno p-13">13 <i class="fa fa-caret-right flecha"></i></p>
                    </div>
                    <div class="cp">
                      <p class="a-1">6</p>
                      <p class="a-2">1</p>
                      <p class="a-3">3</p>
                      <p class="a-4">1</p>
                      <p class="a-5">1</p>
                      <p class="a-6">1</p>
                      <p class="a-7">1</p>
                      <p class="a-8">1</p>
                      <p class="a-9">1</p>
                      <p class="a-10">2</p>
                      <p class="a-11">1</p>
                      <p class="a-12">1</p>
                      <p class="a-13">1</p>
                      <hr class="hr-4">
                    </div>
                    <div class="cp-2">
                      <p class="b-5">3</p>
                      <p class="b-6">3</p>
                      <p class="b-7">3</p>
                      <p class="b-8">3</p>
                      <p class="b-9">3</p>
                      <p class="b-11">3</p>
                      <p class="b-12">3</p>
                      <p class="b-13">3</p>
                    </div>
                  </div>
                  <div class="group-sm group-wrap-2"><a class="fa fa-check button button-primary" href="{{ url('documentos')}}"> ¡Postularme!</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Latest Articles-->
        <section class="section bg-default section-md">
          <div class="container">
            <h2 class="title-icon"><span class="icon icon-default mercury-icon-document-search"></span><span id="sobrenosotros">Sobre Nosotros</span></h2>
            <div class="box-image-small box-image-small-left">
              <div class="item-image bg-image novi-nackground" style="background-image: url({{ asset('home/img/uniforme.png')}})"></div>
              <div class="item-body wow fadeInRight">
                <h4><a href="#">Uniformes</a></h4>
                <p class="big-3">1.- Pin CUSAEM</p>
                <p class="big-3">2.- Escudo CUSAEM</p>
                <p class="big-3">3.- Bordado NOMBRE</p>
                <p class="big-3">4.- Escudo de la Corporación</p>
                <p class="big-3">5.- Escudo de CES</p>
                <p class="big-3">6.- Emblema CES CUSAEM</p>
                <hr class="hr-3">
              </div>
            </div>
            <div class="box-image-small box-image-small-right">
              <div class="item-image bg-image novi-nackground bg-img" style="background-image: url({{ asset('home/img/patrulla.png')}})"></div>
              <div class="item-body wow fadeInLeft">
                <h4><a href="#">Patrullas</a></h4>
                <p>Cromática de acuerdo a los liniaminetos establecidos por la comisión Estatal de Seguridad Ciudadana del Estado de México.</p>
                <p class="big-3">1.- Escudo CES</p>
                <p class="big-3">2.- Numero Económico</p>
                <p class="big-3">3.- Rótulo CUERPO DE GUARDIAS VALLE DE TOLUCA</p>
                <p class="big-3">4.- Rótulo QUEJAS Y SUGERENCIAS (55) 5089 16 60</p>
                <p class="big-3">5.- Rótulo CUERPOS DE SEGURIDAD AUXILIARES</p>
                <p class="big-3">6.- Rótulo ESTADO DE MÉXICO</p>
                <p class="big-3">7.- Escudo ESTADO DE MÉXICO</p>
                <p class="big-3">8.- NÚMERO ECONÓMICO</p>
              </div>
            </div>
          </div>
        </section>
        <section class="parallax-container" data-parallax-img="{{ asset('home/img/2.jpg')}}">
          <div class="parallax-content section-xl context-dark text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 col-xl-9">
                  <h2 id="adress">Ubicación</h2>
                  <div class="heading-5 font-weight-normal">¡Visitanos y conoce nuestra instalaciones!</div><br>
                  <!--TimeCircles-->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1627.8811372912721!2d-99.5355127999213!3d19.295367082559537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf54ed9f982a7%3A0x7477bec3a3f6084c!2sCUSAEM%20Lerma!5e1!3m2!1ses!2smx!4v1638940125143!5m2!1ses!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="section footer-classic">
          <div class="footer-inner-1">
            <div class="container">
              <div class="row row-40">
                <div class="col-md-5 col-lg-3">
                  <h5 id="contact">Contacto</h5>
                  <ul class="contact-list font-weight-bold">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left">
                          <div class="icon icon-sm icon-primary novi-icon mdi mdi-map-marker"></div>
                        </div>
                        <div class="unit-body"><a href="#">CUSAEM Lerma <br>Del Parque 100, Parque Industrial, 52000 Lerma de Villada, Méx.</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left">
                          <div class="icon icon-sm icon-primary novi-icon mdi mdi-phone"></div>
                        </div>
                        <div class="unit-body"><a href="tel:#">(55) 5089 16 60</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left">
                          <div class="icon icon-sm icon-primary novi-icon mdi mdi-clock"></div>
                        </div>
                        <div class="unit-body">
                          <ul class="list-0">
                            <li>Lunes a Viernes: 7:00 pm –6:00 am</li>
                            <li>Sabado a Domingo: Cerrado</li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul><a class="d-inline-block big" href="mailto:#">cusaem@contacto.com</a>
                </div>
                <div class="col-md-12 col-lg-4">
                  <h5>Redes</h5>
                  <div class="row row-20 align-items-right text-center">
                    <div class="col-6 col-md-4 col-lg-6"><a href="https://www.facebook.com/RedCusaem/"><i class="fa fa-facebook-square facebook"></i></a></div>
                    <div class="col-6 col-md-4 col-lg-6"><a href="#"></a></div>
                    <div class="col-6 col-md-4 col-lg-6"><a href="#"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=185622c65a4354c175f91e63ff4b75e0b7a75281'></script>
        <script src="{{ asset('home/js/core.min.js')}}"></script>
        <script src="{{ asset('home/js/script.js')}}"></script>
    </body>
</html>
