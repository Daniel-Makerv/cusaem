<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Reporteusers extends Model
{
    use softDeletes;
    use HasFactory;
    protected $primaryKey = 'id_report';
    protected $fillable = [
        'id_report',
        'name_report',
        'descripcion_report',
        'period_report',
        'generos_report',
        'id_usu',
        'registros_report'
    ];
    protected $casts = [
    'date_report' => 'date:hh:mm'
];
}
