<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTamu extends Model
{
    //
    protected $fillable = [
        'nama', 'no_tlp', 'alias', 'tamu', 'tgl', 'read'
       ];
}
