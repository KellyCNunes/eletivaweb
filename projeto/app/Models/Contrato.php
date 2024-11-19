<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'imovel_id',         
        'proprietario_id',   
        'locatario_id',       
        'data_inicio',       
        'data_fim',          
    ];

   
    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }

   
    public function proprietario()
    {
        return $this->belongsTo(Proprietario::class);
    }

    
    public function locatario()
    {
        return $this->belongsTo(Locatario::class);
    }
}
