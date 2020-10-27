<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'respe_usuarios';

    protected $fillable = [
    	'mat_serv',
     	'nom_serv',
     	'nome_gue'
	];
}
