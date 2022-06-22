<table class="">
    <thead>
        <tr>
            <th style="font-size: 12px; font-weight: bold; color=#FF0000; text-align: center;">id</th>
            <th>nombre</th>
            <th>Apellido</th>
            <th>foto</th>
            <th>croquis</th>
            <th>referencias de domicilio</th>
            <th>dependientes economicos</th>           
            <th>precartilla, recibo de luz o cartilla liberada</th>
            <th>certificado de estudios</th>
            <th>acta de nacimiento</th>
            <th>certificado de antecedentes no penales</th>
            <th>comprobante de domicilio</th>
            <th>cartas de recomendacion</th>
            <th>CURP del usuario</th>
            <th>INE o IFE</th>
            <th>registro federal de contribuyentes</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $documents as $document)
        <tr>
            <td>{{ $document->id_doc}}</td>
            <td>{{ $document->nombre_usu}}</td>
            <td>{{ $document->lastname_usu}}</td>
            <td>{{ $document->photo_doc}}</td>
            <td>{{ $document->location_doc}}</td>
            <td>{{ $document->referent_doc}}</td>
            <td>{{ $document->depend_doc}}</td>
            <td>{{ $document->letter_doc}}</td>
            <td>{{ $document->certificate_doc}}</td>
            <td>{{ $document->birthcert_doc}}</td>
            <td>{{ $document->antecedent_doc}}</td>
            <td>{{ $document->address_doc}}</td>
            <td>{{ $document->lettercard_doc}}</td>
            <td>{{ $document->curp_doc}}</td>
            <td>{{ $document->ine_doc}}</td>
            <td>{{ $document->rfc_doc}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
