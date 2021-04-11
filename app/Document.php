<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";
    protected $primarykey = "id";
    protected $fillable = [
        'name', 'email', 'telp',
    ];
}
