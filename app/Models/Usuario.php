<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'respe_usuarios';

    protected $fillable = [
    	'mat_serv',
     	'nom_serv',
		'nome_gue',
		'name',
        'email',
		'password',
		'senha'
	];

	public function setPasswordAttribute($value)
	{
       $this->attributes['senha'] = md5($value);
	}

	public function getAuthPassword()
	{
		return $this->senha;
	}
}
