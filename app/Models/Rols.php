<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Rols extends Model
{
    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_rol';
    protected $fillable = [
      'id_rol',
      'name_rol'
    ];
}
