<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel 8 PDF</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style></style>
    </head>
    <body>
        <div class="container">
            <center><h2 class="mb-4">Reporte de Documentos</h2></center>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">fotografia</th>
                    <th scope="col">croquis</th>
                    <th scope="col">referencias</th>                      
                </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{ $document->id_doc }}</td>
                            <td>{{ $document->name_usu }}</td>
                            <td>{{ $document->lastname_usu}}</td>
                            <td>{{ $document->referent_doc }}</td>
                            <td>{{ $document->depend_doc }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>