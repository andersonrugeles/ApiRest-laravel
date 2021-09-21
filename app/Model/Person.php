<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\TipoDocumento;
use App\Model\Profesion;
use App\Model\NivelEducativo;

class Person extends Model
{
    public function tipo_documentos(){
        return $this->belongsTo(TipoDocumento::class,'tipo_documento_id','id');
    }
    public function nivel_educativos(){
        return $this->belongsTo(NivelEducativo::class,'nivel_educativo_id','id');
    }
    public function profesions(){
        return $this->belongsTo(Profesion::class,'profesion_id','id');
    }
}
