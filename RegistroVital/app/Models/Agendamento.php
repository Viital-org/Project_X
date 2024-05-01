<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    protected $table = 'agendamentos';
    protected $fillable = [
        'especializacao_id',
        'profissional_id',
        'paciente_id',
        'data_agendamento',
        'consulta_id',
    ];

    public function consulta(){
        return $this->belongsTo(Consulta::class);
    }

    public function especializacao(){
        return $this->belongsTo(Especializacao::class);
    }

    public function profissional(){
        return $this->belongsTo(Profissional::class);
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}