<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DA extends Model
{
    protected $table = "anggota";
    protected $primaryKey = "id";
    protected $fillable = [
        // 'id',
        'username',
        'serial_number',
        'gender',
        'email',
        //    'fingerprint_id',
        //    'fingerprint_select',
        'user_date',
        'time_in',
        //    'del_fingerid',
        //    'add_fingerid'
    ];
}
