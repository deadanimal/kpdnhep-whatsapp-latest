<?php

namespace App\Http\Controllers;

use App\Models\Senaraitugas;
use App\Models\User;
use Illuminate\Http\Request;

class SenaraitugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $senaraitugas = Senaraitugas::all();
        return view('senaraitugas',[
            'senaraitugas'=>$senaraitugas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $senaraitugas = new senaraitugas;

        $senaraitugas->tajuk = $request->tajuk;
        $senaraitugas->kerja = $request->kerja;
        $senaraitugas->tarikh = $request->tarikh;
        $senaraitugas->tahap = $request->tahap;
        $senaraitugas->status = "Underdone";

        $senaraitugas->save();
        return redirect('/senaraitugas/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senaraitugas  $senaraitugas
     * @return \Illuminate\Http\Response
     */
    public function show(Senaraitugas $senaraitugas)
    {
        //
        return view('senaraitugas',[
            'senaraitugas'=>$senaraitugas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senaraitugas  $senaraitugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Senaraitugas $senaraitugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Senaraitugas  $senaraitugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Senaraitugas $senaraitugas)
    {
        //
        $senaraitugas->tajuk = $request->tajuk;
        $senaraitugas->kerja = $request->kerja;
        $senaraitugas->tarikh = $request->tarikh;
        $senaraitugas->tahap = $request->tahap;
        $senaraitugas->status = $request->status;

        $senaraitugas->save();
        return redirect('/senaraitugas/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senaraitugas  $senaraitugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senaraitugas $senaraitugas)
    {
        //
    }

    public function delete_list($id)
    {
        Senaraitugas::where("id", $id)->delete();
        return redirect('/senaraitugas/');
    }

    public function terimakerja(Request $request, $id){
        $user = $request->user();
        $user = $user->name;
        $petugas_id = $request->user();
        $petugas_id = $petugas_id->id;
        $selectedtugas = Senaraitugas::find($id);

        $selectedtugas->petugas = $user;
        $selectedtugas->petugas_id = $petugas_id;
        $selectedtugas->save();
        // // dd($nama);
        // $senaraitugas->petugas = $user;

        // Senaraitugas::where("id", $id)->$senaraitugas->save();
        
        return redirect('senaraitugas');

    }
}
