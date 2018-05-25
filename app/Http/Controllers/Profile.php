<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class Profile extends Controller
{
    public function create()
    {

    	return view('membres.profilemembre');
    }

    public function show()
    {
    	return view('membres.editprofile');
    }

    public function showpwd()
    {

    	return view('membres.editpwdmembre');
    }

    public function updateprofile(Request $request)
    {
    	$membre = Auth::User();


    	$this->validate($request, [
			// 'login' => 'required|string|max:50|unique:membres',
   //          'nom' => 'required|string|max:50',
   //          'prenom' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:membres',
            'tel' => 'required|regex:/[0-9]{10}/',
		]);

		$membre->update([
			// 'login' => $request->login,
			// 'nom' => $request->nom,
			// 'prenom' => $request->prenom,
			'email' => $request->email,
			'tel' => $request->tel,
		]);

		return redirect()->route('profilemembre');
    }

    public function updatepwd(Request $request)
    {
    	$this->validate($request, [
			'password' => 'required|string|min:6|confirmed',
		]);

		$membre = Auth::User();

		$membre->update(['password' => Hash::make($request->password)]);
			// 'password' => Hash::make($request->password)]);

		return redirect()->route('profilemembre');
    }
}
