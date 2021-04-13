<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'telp', 'pesan'];

    protected $hidden = [];

    protected $primaryKey = 'id_message';
}
