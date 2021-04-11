<?php

namespace App\Exports;

use App\Document;
use Maatwebsite\Excel\Concerns\FromCollection;

class DocumentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Document::all();
    }
}
