<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacant extends Model
{
    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_vacant';
    protected $fillable = [
      'id_vacant',
      'num_vacant',
      'region_vacant'
    ];
}
