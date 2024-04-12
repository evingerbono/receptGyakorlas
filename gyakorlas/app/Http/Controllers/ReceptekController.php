<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Receptek::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $receptek = new Receptek();
        $receptek->nev = $request->nev;
        $receptek->kat_id = $request->kat_id;
        $receptek->kep_eleresi_ut = $request->kep_eleresi_ut;
        $receptek->leiras = $request->leiras;
        $receptek->save();
        
        return $receptek;
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Receptek $receptek)
    {
        //
    }
    public function recepteklist()
    {
        $receptek = DB::table('recepteks')
            ->join('kategorias', 'recepteks.kat_id', '=', 'kategorias.id')
            ->select('recepteks.nev', 'kategorias.nev as kategoria_nev', 'recepteks.kep_eleresi_ut', 'recepteks.leiras')
            ->get();

        return response()->json($receptek);
    }
    
    public function receptnevek()
    {
        $receptek = DB::table('recepteks')
            ->join('kategorias', 'recepteks.kat_id', '=', 'kategorias.id')
            ->select('recepteks.nev', 'kategorias.nev as kategoria_nev')
            ->get();

        return response()->json($receptek);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receptek $receptek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recept = Receptek::find($id);
        if ($recept) {
            $recept->delete();
        }
    }
}
