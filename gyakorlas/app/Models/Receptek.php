<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptek extends Model
{
    use HasFactory;
    protected  $primaryKey = 'id';
    protected $fillable = [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras',
    ];
}
