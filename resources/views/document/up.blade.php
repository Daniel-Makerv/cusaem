@extends('layouts.menu')
@section('contenido')
<!-- if para validar si ya se lleno la documentacion  -->
@if ($document == true){
<div class="form-documentss">
            <svg id=svgs>
                <rect id=rects></rect>
            </svg>
        <div class="tittless">

        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading ">Alerta</h4>
            <h4>¡Tu documentación ya ha sido enviada correctamente!</h4>
            <hr>
            <center><h6 class="mb-0 center"><u>Nuestros encargados te contactarán lo más pronto
                 posible para seguir con el proceso.</u></h6></center>
        </div>   
    </div>
</div>
}
    
@else
<form class="form" action="{{ route('documentos.store') }}" method="POST"
    enctype="multipart/form-data">

    @csrf
    <div class="form-group content-wrapper">{{-- div padre --}}
        <div class="form-tittle">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="texts">{{-- texto --}}
                <center>
                    <h1>Región "Cero" Lerma</h1>
                </center>
                <h4 class="nota">Nota: Los documentos que se subirán en este apartado serán solamente para corroborar su
                    documentación, de ser así se le contactará en un futuro para continuar con el proceso. <button
                        type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPoliticas"
                        id="modal_buton">Ver politicas de
                        privacidad</button><br></h4>
                <h4>Se permite subir solamente archivos con extensión .PDF <button type="button" class="btn btn-warning"
                        data-bs-toggle="modal" data-bs-target="#modalDocumentacion" id="modal_buton">Ver documentación
                        requerida</button></h4>
            </div>
        </div>

        <!-- modal para ver las potlicas de privacidad -->
        <div class="modal fade" tabindex="-1" id="modalPoliticas">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">POLÍTICA DE PRIVACIDAD</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <center>
                                <p><strong>POLÍTICA DE PRIVACIDAD</strong></p>
                            </center>
                            <p>El presente Política de Privacidad establece los términos en que Cusaem usa y protege
                                la información que es proporcionada por sus usuarios al momento de utilizar su sitio
                                web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios.
                                Cuando le pedimos llenar los campos de información personal con la cual usted pueda
                                ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los
                                términos de este documento. Sin embargo esta Política de Privacidad puede cambiar
                                con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar
                                continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
                            </p>
                            <p><strong>Información que es recogida</strong></p>
                            <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp;
                                información de contacto como&nbsp; su dirección de correo electrónica e información
                                demográfica. Así mismo cuando sea necesario podrá ser requerida información
                                específica para realizar algún proceso de documentación.</p>
                            <p><strong>Uso de la información recogida</strong></p>
                            <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio
                                posible, particularmente para mantener un registro de usuarios, de pedidos en caso
                                que aplique, y mejorar nuestros servicios. &nbsp;Es posible que sean
                                enviados correos electrónicos periódicamente a través de nuestro sitio información
                                publicitaria que consideremos
                                relevante para usted o que pueda brindarle algún beneficio.</p>
                            <p>Cusaem está altamente comprometido para cumplir con el compromiso de mantener su
                                información segura. Usamos los sistemas más avanzados y los actualizamos
                                constantemente para asegurarnos que no exista ningún acceso no autorizado.</p>

                            <p><strong>Enlaces a Terceros</strong></p>
                            <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su
                                interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no
                                tenemos control sobre al sitio al que es redirigido y por lo tanto no somos
                                responsables de los <a href="https://plantillaterminosycondicionestiendaonline.com/"
                                    target="_blank">términos o privacidad</a> ni de la protección de sus datos en
                                esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de
                                privacidad por lo cual es recomendable que los consulte para confirmar que usted
                                está de acuerdo con estas.</p>
                            <p><strong>Control de su información personal</strong></p>
                            <p>En cualquier momento usted puede restringir la recopilación o el uso de la
                                información personal que es proporcionada a nuestro sitio web.&nbsp; Cada vez que se
                                le solicite rellenar un formulario, como el de registro, puede marcar o
                                desmarcar la opción de recibir información por correo electrónico. &nbsp;En caso de
                                que haya marcado la opción de recibir nuestro boletín o publicidad usted puede
                                cancelarla en cualquier momento.</p>
                            <p>Esta compañía no venderá, cederá ni distribuirá la información personal que es
                                recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden
                                judicial.</p>
                            <p>Cusaem Se reserva el derecho de cambiar los términos de la presente Política de
                                Privacidad en cualquier momento.<br>
                                <center><strong>Cusaem cuerpo de auxiliares policiales</center></strong>
                            </p>
                            <center><img src="{{ asset('/document/img/logo.png') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal para ver la documentacion requerida-->
        <div class="modal fade" tabindex="-1" id="modalDocumentacion">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Documentación Requerida</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>xd
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- input invisible, guardara el id del usuario-->
        <input name="id_usu" type="hidden" class="form-group" value="{{ Auth::id('id_usu') }}"
            id="id_usu">

        <!-- input invisible, guardara el id nombre del usuario-->
        {{-- <input name="name_usu" type="text" class="form-group" value="{{ Auth()->user()->name_usu }}"
        id="name_usu"> --}}

        {{-- div con info de la región --}}
        <div class="form-documents">
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Fotografía:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalFoto" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="photo_doc" type="file" class="file-upload-field"
                        value="{{ old('phone_usu') }}" id="photo_doc">
                </div>
            </div>
            @error('photo_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de fotografia-->
        <div class="modal fade" tabindex="-1" id="modalFoto">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ejemplo de Fotografia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de su fotografía por ambos lados, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/foto.jpg') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Croquis de Ubicación:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalRegion" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="location_doc" type="file" class="file-upload-field"
                        value="{{ old('location_doc') }}" id="location_doc">
                </div>
            </div>
            @error('location_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de región-->
        <div class="modal fade" tabindex="-1" id="modalRegion">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ejemplo de Croquis de Ubicación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo del croquis (distancia a nuestras instalaciones), una sola
                            ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/croquis.jpg') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Referencias con Domicilio:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalReferencias" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="referent_doc" type="file" class="file-upload-field"
                        value="{{ old('referent_doc') }}" id="referent_doc">
                </div>
            </div>
            @error('referent_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de referencias con domicilio-->
        <div class="modal fade" tabindex="-1" id="modalReferencias">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ejemplo de Referencia con Domicilio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de la referencia (con domicilio), una sola referencia ves
                            dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img
                                    src="{{ asset('/document/img/referenciasdomicilio.jpg') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Dependientes Economicos:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalDependientes" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="depend_doc" type="file" class="file-upload-field"
                        value="{{ old('depend_doc') }}" id="depend_doc">
                </div>
            </div>
            @error('depend_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de dependientes economicos-->
        <div class="modal fade" tabindex="-1" id="modalDependientes">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ejemplo de Dependientes Economicos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de los dependientes, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/dependientes.png') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Precartilla, Recibo de Liberación o Cartilla Liberada:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalPrecartilla" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="letter_doc" type="file" class="file-upload-field"
                        value="{{ old('letter_doc') }}" id="letter_doc">
                </div>
            </div>
            @error('letter_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de precartilla-->
        <div class="modal fade" tabindex="-1" id="modalPrecartilla">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Precartilla, Recibo de Liberación o Cartilla Liberada</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de un solo documento, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/precartilla.png') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Certificado de Estudios:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalCertificado" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="certificate_doc" type="file" class="file-upload-field"
                        value="{{ old('certificate_doc') }}" id="certificate_doc">
                </div>
            </div>
            @error('certificate_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de certificado de estudios-->
        <div class="modal fade" tabindex="-1" id="modalCertificado">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Certificado de Estudios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo del certificado, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/certificado.png') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Acta de Nacimiento:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalActaNaci" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="birthcert_doc" type="file" class="file-upload-field"
                        value="{{ old('birthcert_doc') }}" id="birthcert_doc">
                </div>
            </div>
            @error('birthcert_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de acta de nacimiento-->
        <div class="modal fade" tabindex="-1" id="modalActaNaci">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Acta de Nacimiento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de la acta de nacimiento, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/actanacimiento.png') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Certificado de Antecedentes no Penales:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalAntecePenales" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="antecedent_doc" type="file" class="file-upload-field"
                        value="{{ old('antecedent_doc') }}" id="antecedent_doc">
                </div>
            </div>
            @error('antecedent_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de certificado de antecedentes no penales-->
        <div class="modal fade" tabindex="-1" id="modalAntecePenales">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Certificado de Antecedentes no Penales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo del certificado de antecedentes no penales, una sola ves
                            dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img
                                    src="{{ asset('/document/img/Tramitar-carta-de-antecedentes-no-penales.jpg') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Comprobante de Domicilio:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalCompDomici" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="address_doc" type="file" class="file-upload-field"
                        value="{{ old('address_doc') }}" id="address_doc">
                </div>
            </div>
            @error('address_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de certificado de antecedentes no penales-->
        <div class="modal fade" tabindex="-1" id="modalCompDomici">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Comprobante Domiciliario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo del comprobante domicilio (Puede ser CFE), una sola ves
                            dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/comprobantedomi.png') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Cartas de Recomendación:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalCartasReco" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="lettercard_doc" type="file" class="file-upload-field"
                        value="{{ old('lettercard_doc') }}" id="lettercard_doc">
                </div>
            </div>
            @error('lettercard_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de Cartas de recomendacion-->
        <div class="modal fade" tabindex="-1" id="modalCartasReco">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cartas de Recomendacion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de la carta de recomendacion, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img
                                    src="{{ asset('/document/img/cartarecomendacion.png') }}"
                                    alt=""></center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>CURP:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalCurp" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="curp_doc" type="file" class="file-upload-field"
                        value="{{ old('curp_doc') }}" id="curp_doc">
                </div>
            </div>
            @error('curp_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver ejemplo de curp-->
        <div class="modal fade" tabindex="-1" id="modalCurp">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">CURP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de la curp por ambos lados, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/curp.jpg') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>INE O IFE:</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalInne" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="ine_doc" type="file" class="file-upload-field"
                        value="{{ old('ine_doc') }}" id="ine_doc">
                </div>
            </div>
            @error('ine_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver inne-->
        <div class="modal fade" tabindex="-1" id="modalInne">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INE O IFE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo de INE o IFE por ambos lados, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/inne.png') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Registro Federal de Contribuyentes (RFC):</h4>
                </center>
                <h5>Seleccione su documento.PDF: <button type="button" class="badge bg-info text-dark"
                        data-bs-toggle="modal" data-bs-target="#modalRfc" id="modal_buton">Info</button>
                </h5><br>
                <div class="file-upload-wrapper" data-text="No se ha seleccionado ningun archivo">
                    <input name="rfc_doc" type="file" class="file-upload-field"
                        value="{{ old('rfc_doc') }}" id="rfc_doc">
                </div>
            </div>
            @error('rfc_doc')

                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <!-- modal para ver inne o iffe-->
        <div class="modal fade" tabindex="-1" id="modalRfc">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">RFC</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Solo se requiere el escaneo del RFC, una sola ves dentro del
                            documento.<br>
                            <h5>Ejemplo:</h5>
                            <center><img src="{{ asset('/document/img/rfc.png') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-documents">{{-- div con info de la región --}}
            <svg>
                <rect></rect>
            </svg>
            <div class="tittles">{{-- texto --}}
                <center>
                    <h4>Enviar Información</h4>
                </center><br>
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terms_doc" id="terms_doc">
                    He leído y acepto los <a target="_blank" href="{{ url('terminosycondiciones') }}"
                        data-bs-toggle="modal" data-bs-target="#modalTerminos" id="modal_buton">Términos y Condiciones
                        de
                        uso.</a>

                </label>
                @error('terms_doc')
                    <br>
                    <small>*{{ $message }}</small>
                @enderror
                <br><br>
                <button type="submit" class="btn btn-warning">Enviar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>
            </div>
        </div>

        <!-- modal para ver terminos y condiciones-->
        <div class="modal fade" tabindex="-1" id="modalTerminos">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Términos y Condiciones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <center>
                                <p><strong>TÉRMINOS DEL SERVICIO</strong></p>
                            </center>
                            <p>GENERALIDADES

                                Cuerpos de seguridad auxiliar del valle de México gestiona este sitio web. En todo el
                                sitio, los términos "nosotros", "nos" y "nuestro" se refieren en lo sucesivo a Cuerpos
                                de seguridad auxiliar del valle de México. Cuerpos de seguridad auxiliar del valle de
                                México ofrece esta página web, incluida toda la información, las herramientas y los
                                servicios que se ponen en este sitio a disposición suya, el usuario, siempre y cuando
                                acepte la totalidad de los términos, condiciones, políticas y avisos contemplados aquí.
                                Al visitar nuestro sitio y/o comprarnos algo, usted interactúa con nuestro "Servicio" y
                                reconoce como vinculantes los siguientes términos y condiciones (denominados en lo
                                sucesivo "Términos del servicio", "Términos"), incluidos aquellos términos y condiciones
                                adicionales y las políticas que se mencionan aquí y/o disponibles por medio de
                                hipervínculo. Estos Términos del servicio se aplican a todos los usuarios del sitio,
                                incluyendo de manera enunciativa mas no limitativa los usuarios que son navegadores,
                                proveedores,
                                clientes, comerciantes y/o que aporten contenido.Lea estos Términos del servicio
                                detenidamente antes de acceder o utilizar nuestra página web. Al acceder o utilizar
                                cualquier parte del sitio, usted acepta estos Términos del servicio. Si no acepta la
                                totalidad de los términos y condiciones de este acuerdo, no podrá acceder al sitio web
                                ni utilizar ningún servicio. Si estos Términos del servicio se considerasen una oferta,
                                la aceptación se limita expresamente a los presentes Términos del servicio.
                                Las nuevas funciones o herramientas que se agreguen a la tienda actual también estarán
                                sujetas a los Términos del servicio. Puede revisar la versión más reciente de los
                                Términos del servicio en cualquier momento en esta página. Nos reservamos el derecho de
                                actualizar, cambiar o reemplazar cualquier parte de los presentes Términos del servicio
                                mediante la publicación de actualizaciones o cambios en nuestra página web. Es su
                                responsabilidad revisar esta página periódicamente para ver los cambios.
                                Su uso de la página web o el acceso a ella de forma continuada después de la publicación
                                de cualquier cambio constituye la aceptación de dichos cambios.Nuestra tienda está
                                alojada en Shopify Inc. Nos proporcionan la plataforma de comercio electrónico en línea
                                que nos permite venderle nuestros productos y servicios.

                            </p>
                            <p><strong>SECCIÓN 1: TÉRMINOS</strong></p>
                            <p>
                                Al aceptar los presentes Términos del servicio, usted declara que tiene la mayoría de
                                edad en su estado o provincia de residencia, o que es mayor de edad en su estado o
                                provincia de residencia y que nos ha dado su consentimiento para permitir que cualquiera
                                de las personas menores que dependen de usted utilice este sitio.
                                No puede utilizar nuestros productos para ningún fin ilegal o no autorizado ni puede, al
                                hacer uso del Servicio, infringir las leyes de su jurisdicción (incluyendo de manera
                                enunciativa más no limitativa, las leyes de derechos de autor).
                                No transmitirá ningún gusano o virus informáticos ni ningún código de naturaleza
                                destructiva.
                                El incumplimiento o violación de cualquiera de los Términos dará como resultado la
                                rescisión inmediata de sus Servicios.</p>
                            <p><strong>SECCIÓN 2: CONDICIONES GENERALES</strong></p>

                            <p>Nos reservamos el derecho de rechazar el servicio a cualquier persona, por cualquier
                                motivo, en cualquier momento.

                                Usted comprende que su contenido (sin incluir la información de la tarjeta de crédito)
                                puede transferirse sin cifrar e implicar (a) transmisiones en varias redes; y (b)
                                cambios para adaptarse a los requisitos técnicos de conexión de redes o dispositivos y
                                cumplir con ellos. La información de la tarjeta de crédito siempre se cifra durante la
                                transferencia a través de las redes.
                                Usted acepta no reproducir, duplicar, copiar, vender, revender ni aprovechar ninguna
                                parte del Servicio, uso del Servicio o acceso al Servicio o cualquier contacto en el
                                sitio web a través de la cual se presta el servicio, sin nuestro permiso expreso por
                                escrito.
                                Los encabezados utilizados en este acuerdo se incluyen solo para facilitar la lectura y
                                no limitarán ni afectarán los presentes Términos.</p>
                            <p>Cusaem está altamente comprometido para cumplir con el compromiso de mantener su
                                información segura. Usamos los sistemas más avanzados y los actualizamos
                                constantemente para asegurarnos que no exista ningún acceso no autorizado.</p>

                            <p><strong>SECCIÓN 3: EXACTITUD, TOTALIDAD Y CRONOLOGÍA DE LA INFORMACIÓN</strong></p>
                            <p>No nos responsabilizamos si la información disponible en este sitio no es precisa,
                                completa o actualizada. El material presentado en este sitio se proporciona solo para
                                información general y no se debe confiar en él ni utilizarlo como la única base para
                                tomar decisiones sin consultar fuentes de información principales, más precisas, más
                                completas o más recientes. Al confiar en cualquier material de este sitio lo hace por su
                                cuenta y riesgo.

                                Este sitio puede contener cierta información histórica. La información histórica,
                                inevitablemente, no es actual y se proporciona únicamente como referencia. Nos
                                reservamos el derecho de modificar el contenido de este sitio en cualquier momento, pero
                                no tenemos la obligación de actualizar ninguna información en nuestro sitio. Usted
                                acepta que es su responsabilidad controlar los cambios en nuestro sitio.
                                SECCIÓN 4: MODIFICACIONES AL SERVICIO Y PRECIOS
                                Los precios de nuestros productos están sujetos a cambios sin previo aviso.
                                Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte o
                                contenido del mismo) sin previo aviso en cualquier momento.
                                No seremos responsables ante usted ni ante ningún tercero por ninguna modificación,
                                cambio de precio, suspensión o interrupción del Servicio.</p>
                            <p><strong>SECCIÓN 4: PRODUCTOS O SERVICIOS (si corresponde)</strong></p>
                            <p>Ciertos productos o servicios pueden estar disponibles exclusivamente online a través del
                                sitio web. Estos productos o servicios pueden tener cantidades limitadas y están sujetos
                                a devolución o cambio solo de acuerdo con nuestra Política de devolución.

                                Hemos hecho todo lo viable para mostrar con la mayor precisión posible los colores y las
                                imágenes de nuestros productos que aparecen en la tienda. No podemos garantizar que la
                                visualización de cualquier color en el monitor de su computadora sea precisa.Nos
                                reservamos el derecho, pero no estamos obligados, de limitar las ventas de nuestros
                                productos o servicios a cualquier persona, región geográfica o jurisdicción. Podemos
                                ejercer este derecho caso por caso. Nos reservamos el derecho de limitar las cantidades
                                de cualquier producto o servicio que ofrecemos. Todas las descripciones de los productos
                                o los precios de los productos están sujetos a cambios en cualquier momento y sin previo
                                aviso, a nuestra entera discreción. Nos reservamos el derecho de discontinuar cualquier
                                producto en cualquier momento. Cualquier oferta de cualquier producto o servicio que se
                                realice en este sitio no tiene validez donde dicho producto o servicio esté prohibido.
                                No garantizamos que la calidad de cualquier producto, servicio, información u otro
                                material que usted haya comprado u obtenido cumplirá con sus expectativas, o que
                                cualquier error en el Servicio se corregirá.
                                SECCIÓN 6: EXACTITUD DE LA FACTURACIÓN Y DE LA INFORMACIÓN DE LA CUENTA
                                Nos reservamos el derecho de rechazar cualquier pedido que realice en nuestra tienda.
                                Podemos, a nuestro exclusivo criterio, limitar o cancelar las cantidades compradas por
                                persona, por hogar o por pedido. Estas restricciones pueden incluir pedidos realizados
                                con la misma cuenta de cliente, la misma tarjeta de crédito o pedidos que usen la misma
                                dirección de facturación o de envío. En el caso de que realicemos un cambio o cancelemos
                                un pedido, intentaremos notificarle vía correo electrónico o la dirección de facturación
                                / número de teléfono proporcionados en el momento en que se realizó el pedido. Nos
                                reservamos el derecho de limitar o prohibir los pedidos que, a nuestra entera
                                discreción, parezcan haber sido realizados por comerciantes, revendedores o
                                distribuidores.Usted acepta suministrar información completa y precisa de la compra y
                                cuenta actual, para todas las compras realizadas en nuestra tienda. Usted acepta
                                actualizar rápidamente su cuenta y demás informaciones, entre ellas, su dirección de
                                correo electrónico, los números de tarjeta de crédito y las fechas de vencimiento, para
                                que podamos completar sus transacciones y contactarlo según sea necesario.
                                Para obtener más información, consulte nuestra Política de devoluciones.</p>
                            <p><strong>SECCIÓN 5: INFORMACIÓN DE CONTACTO</strong></p>

                            <p>Las preguntas sobre los Términos del servicio se deben enviar a cusaemcusaem2@gmail.com.
                            </p>

                            <center><img src="{{ asset('/document/img/logo.png') }}" alt="">
                            </center>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endif

     

@section('js')
<script src="{{ asset('document/js/document-funciones.js') }}"></script>

@endsection
@stop
