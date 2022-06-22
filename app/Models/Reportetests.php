<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Reportetests extends Model
{
    use softDeletes;
    use HasFactory;
    protected $primaryKey = 'id_reporttest';
    protected $fillable = [
        'id_reporttest',
        'name_reporttest',
        'descripcion_reportest',
        'period_reporttest',
        'generos_reporttest',
        'registros_reporttest',
        'date_reporttest',
        'hors_reporttest'
    ];
}
