<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CA extends Model
{
    protected $table = "anggota_logs";
    protected $primaryKey = "id";
    protected $fillable = [
       'id',
       'username',
       'serial_number',
       'fingerprint_id',
       'check_in_date',
       'time_in',
       'time_out'];
}
