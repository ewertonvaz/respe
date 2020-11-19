<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'respe_cargos';

    protected $fillable = [
    	'tipo_cargo',
     	'sigla_cargo'
	];
}
