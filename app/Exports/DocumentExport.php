<?php

namespace App\Exports;

use App\Models\document;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;


class DocumentExport implements FromView, ShouldAutoSize
{

    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('document.excel', ['documents' =>document::all()]);
    }
}
