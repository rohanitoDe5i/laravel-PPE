<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $table = 'membres';

    protected $fillable = [
        'login', 'nom', 'prenom', 'email', 'tel', 'password', 'rang'
    ];


    protected function index() {
    	return Membre::all();

    }
}

