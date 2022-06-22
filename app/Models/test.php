<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Test extends Model
{
    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_test';
    protected $fillable = [
      'id_test',
      'id_usu',
      'pregunta_uno',
      'pregunta_dos',
      'pregunta_tres',
      'pregunta_cuatro',
      'pregunta_cinco',
      'pregunta_seis',
      'pregunta_siete',
      'pregunta_ocho',
      'pregunta_nueve',
      'pregunta_diez',
      'pregunta_once',
      'pregunta_doce',
      'pregunta_trece',
      'pregunta_catorce',
      'pregunta_quince',
      'pregunta_dieciseis',
      'pregunta_diecisiete',
      'pregunta_dieciocho',
      'pregunta_diecinueve',
      'pregunta_veinte',
      'pregunta_veintiuno',
      'pregunta_veintidos',
      'pregunta_veintitres',
      'pregunta_veinticuatro',
      'pregunta_veinticinco',
      'pregunta_veintiseis',
      'pregunta_veintisiete',
      'pregunta_veintiocho',
      'pregunta_veintinueve',
      'pregunta_treinta',
      'pregunta_treinta_y_uno',
      'pregunta_treinta_y_dos',
      'pregunta_treinta_y_tres',
      'pregunta_treinta_y_cuatro',
      'pregunta_treinta_y_cinco',
      'pregunta_treinta_y_seis',
      'pregunta_treinta_y_siete',
      'pregunta_treinta_y_ocho',
      'pregunta_treinta_y_nueve',
      'pregunta_cuarenta'
    ];
}
