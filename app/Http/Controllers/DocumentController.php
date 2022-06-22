<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\Validator;
use PDF;
use App\Exports\DocumentExport;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    //declarando las variables para usar la libreria de excel
    private $excel;
    public function __construct(Excel $excel){
        $this->excel = $excel;
    }

    public function index(){
        //mostrar la vista principal
        $authuser = Auth::user()->id_usu;
        $document = Document::select('id_usu')->where('id_usu',$authuser)->exists();  
        return view('document.up',compact('authuser', 'document'));
    }

    public function exportPDF () {
            //consulta de todos los registros
        $datos['documents'] = Document::all();
        $consulta['documents'] = Document::withTrashed()->join('users', 'documents.id_usu','=','users.id_usu')
        ->select(
            'documents.id_doc',
            'documents.photo_doc',
            'documents.location_doc',
            'documents.referent_doc',
            'documents.depend_doc',
            'documents.letter_doc',
            'users.name_usu',
            'users.lastname_usu',
            'documents.deleted_at')->get();

        $documents = Document::all();
            $pdf = PDF::loadview('document.pdf', compact('documents'));
            return $pdf->download('pdf-documentos.pdf');
    }

    public function export(){
        return $this->excel->download(new DocumentExport, 'Documentos.xlsx');
     }

    public function store(Request $request){

        // para las validaciones de cada campo
        $request->validate([
            'photo_doc' => ['required','file','mimes:pdf'],
            'location_doc' => ['required','file','mimes:pdf'],
            'referent_doc' => ['required','file','mimes:pdf'],
            'depend_doc' => ['required','file','mimes:pdf'],
            'letter_doc' => ['required','file','mimes:pdf'],
            'certificate_doc' => ['required','file','mimes:pdf'],
            'birthcert_doc' => ['required','file','mimes:pdf'],
            'antecedent_doc' => ['required','file','mimes:pdf'],
            'address_doc' => ['required','file','mimes:pdf'],
            'lettercard_doc' => ['required','file','mimes:pdf'],
            'curp_doc' => ['required','file','mimes:pdf'],
            'ine_doc' => ['required','file','mimes:pdf'],
            'rfc_doc' => ['required','file','mimes:pdf'],
            'terms_doc' => ['required'],   
        ]);


        // recojer todos los id para guardarlos
       $document = $request->all();
       $document['uuid'] = (string) Str::uuid();

        // validaciones para verificicar que se cargo el documento pdf 
       if($request->hasFile('photo_doc')){

           $document['photo_doc'] = time() . '_' . $request->file('photo_doc')->getClientOriginalName();
           $request->file('photo_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['photo_doc']);

           $document['location_doc'] = time() . '_' . $request->file('location_doc')->getClientOriginalName();
           $request->file('location_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['location_doc']);

           $document['referent_doc'] = time() . '_' . $request->file('referent_doc')->getClientOriginalName();
           $request->file('referent_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '.auth()->user()->lastname_usu, $document['referent_doc']);

           $document['depend_doc'] = time() . '_' . $request->file('depend_doc')->getClientOriginalName();
           $request->file('depend_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['depend_doc']);

           $document['letter_doc'] = time() . '_' . $request->file('letter_doc')->getClientOriginalName();
           $request->file('letter_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['letter_doc']);

           $document['certificate_doc'] = time() . '_' . $request->file('certificate_doc')->getClientOriginalName();
           $request->file('certificate_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['certificate_doc']);

           $document['birthcert_doc'] = time() . '_' . $request->file('birthcert_doc')->getClientOriginalName();
           $request->file('birthcert_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['birthcert_doc']);

           $document['antecedent_doc'] = time() . '_' . $request->file('antecedent_doc')->getClientOriginalName();
           $request->file('antecedent_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['antecedent_doc']);

           $document['address_doc'] = time() . '_' . $request->file('address_doc')->getClientOriginalName();
           $request->file('address_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['address_doc']);

           $document['lettercard_doc'] = time() . '_' . $request->file('lettercard_doc')->getClientOriginalName();
           $request->file('lettercard_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['lettercard_doc']);

           $document['curp_doc'] = time() . '_' . $request->file('curp_doc')->getClientOriginalName();
           $request->file('curp_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['curp_doc']);

           $document['ine_doc'] = time() . '_' . $request->file('ine_doc')->getClientOriginalName();
           $request->file('ine_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['ine_doc']);

           $document['rfc_doc'] = time() . '_' . $request->file('rfc_doc')->getClientOriginalName();
           $request->file('rfc_doc')->storeAs('folder_pdf/' . auth()->id('id_usu').'. '. auth()->user()->name_usu.', '. auth()->user()->lastname_usu, $document['rfc_doc']);

       }

       // guardar todo en base y redireccionar
        Document::create($document);
        return redirect()->route('documentos.index');
}


    public function report(){
        //llamar todos los registros
        $datos['documents'] = Document::all();
        $consulta['documents'] = Document::withTrashed()->join('users', 'documents.id_usu','=','users.id_usu')
        ->select(
            'documents.id_doc',
            'documents.photo_doc',
            'documents.location_doc',
            'documents.referent_doc',
            'documents.depend_doc',
            'documents.letter_doc',
            'users.name_usu',
            'users.lastname_usu',
            'documents.deleted_at')->get();
            //redireccionar a la vista con los datos consultados 
        return view('document.report')->with($datos)->with($consulta);
        }



}
