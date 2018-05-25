<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;
use DB;

class EditPlace extends Controller
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
        $places = DB::table('places')->get();
        $membre = Auth::user()->all();
        return view('admin.editplace', compact('places', 'membre'));
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
    public function show()
    {   
        return view('admin.creationplace', compact('place'));
    }

    public function showplace($id)
    {
        $place = DB::table('places')
                    ->where('idplace', $id)
                    ->first();

        $membre = DB::table('membres')
                    ->where('id', $id)
                    ->first();
        return view('admin.selectionplace', compact('place', 'membre'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'nbplace' => 'required|numeric',
        ]);
        $nbpl = $request->input('nbplace');

        $cmp = DB::table('places')->max('numplace');

        for($i=1; $i<=$nbpl; $i++) {
            $cmp++;
            DB::table('places')->insert([
                'numplace'=> $cmp 
            ]);
        }

        return redirect()->route('editplace', 'places');
    }

    public function deleteplace($id) 
    {

        $place = DB::table('places')
                    ->where('idplace', $id)
                    ->first(); // File::find($id)

        if($place) {

            $place = DB::table('places')
                        ->where('idplace', '=', $id)
                        ->delete();
            $places = DB::table('places')
                        ->get();
                        
            return view('admin.editplace', compact('places'));
        }
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
