<?php

namespace App\Imports;

use App\Document;
use Maatwebsite\Excel\Concerns\ToModel;

class DocumentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Document([
            'name' => $row[1],
            'email' => $row[2],
            'telp' => $row[3],
        ]);
    }
}
