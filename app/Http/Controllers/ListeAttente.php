<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class ListeAttente extends Controller
{
    public function create()
    {
    	$membres = Auth::user()->all();

    	return view('admin.listeattente', compact('membres'	));
    }
}
