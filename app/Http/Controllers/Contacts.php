<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class Contacts extends Controller
{
    public function create()
    {
    	return view ('auth.mdpoublier');
    }

    public function store(Request $request)
    {
    	$login = $request->input('login');
    	$email = $request->input('email');

    	Mail::send('auth.mdpoublier', ['login' => $login, 'email' => $email], function($message)
    	{
    			$message->from($email);

    			$message->to('sami.thair@hotmail.fr');
    	});

    	echo'<script>alert("Votre demande de nouveau mot de passe a était envoyé à l\'administrateur, il vous enverra un mail avec un nouveau mot de passe !"); window.location.href="/"</script>';
    }
}
