<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class document extends Model
{
    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_doc';
    protected $fillable = [
      'id_doc',
      'photo_doc',
      'location_doc',
      'referent_doc',
      'depend_doc',
      'letter_doc',
      'certificate_doc',
      'birthcert_doc',
      'antecedent_doc',
      'address_doc',
      'lettercard_doc',
      'curp_doc',
      'ine_doc',
      'rfc_doc',
      'id_usu',
      'terms_doc'
    ];
}
