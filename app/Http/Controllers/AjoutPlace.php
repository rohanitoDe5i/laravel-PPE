<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;


class AjoutPlace extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $membresreserver = DB::table('reserver')
            ->get();

        return view('admin.ajoutplace', compact('membresreserver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membre = User::findOrFail($id);
        $reservation = DB::table('reserver')
            ->where('id', '=', $id)
            ->first();
        $idplace = $reservation->idplace;
        $numplace = DB::table('places')
            ->where('idplace', '=', $idplace)
            ->first();

        return view('admin.addplace', compact('membre', 'numplace', 'reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateplace(Request $request, $id)
    {
        $this->validate($request, [
            'debutperiode' => 'date',
            'finperiode' => 'date'
        ]);
        $debutperiode = $request->debutperiode;
        $finperiode= $request->finperiode;

        $membre = User::findOrFail($id);

        DB::table('reserver')
            ->where('id', '=', $id)
            ->update([
            'debutperiode' => $debutperiode,
            'finperiode' => $finperiode,
            'valider' => 1,     
        ]);

        

        return redirect()->route('ajoutplace', $membre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
