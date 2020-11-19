<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'respe_setores';

    protected $fillable = [
    	'sigla_setor',
        'nivel_um',
        'nivel_dois',
        'nivel_tres'
    ];
}
