<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;

    
    protected $table = 'respe_visitantes';

    protected $fillable = [
    	'nome',
        'rg',
        'cpf',
        'endereco'
    ];   
}
