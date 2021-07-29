<?php

namespace App\Http\Controllers;

use App\Models\Tugasan;
use Illuminate\Http\Request;

class TugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tugasans = Tugasan::all();

        return view('tugasans',[
            'tugasans'=>$tugasans
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
        $tugasan = new tugasan;

        $tugasan->tajuk = $request->tajuk;
        $tugasan->petugas = $request->petugas;
        $tugasan->kerja = $request->kerja;
        $tugasan->tarikh = $request->tarikh;
        $tugasan->tahap = $request->tahap;
        $tugasan->status = "belum";

        $tugasan->save();
        return redirect('/tugasans/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function show(Tugasan $tugasan)
    {
        //
        return view('tugasans',[
            'tugasan'=>$tugasan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugasan $tugasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugasan $tugasan)
    {
        //
        $tugasan->tajuk = $request->tajuk;
        $tugasan->petugas = $request->petugas;
        $tugasan->kerja = $request->kerja;
        $tugasan->tarikh = $request->tarikh;
        $tugasan->tahap = $request->tahap;
        $tugasan->status = $request->status;

        $tugasan->save();
        return redirect('/tugasans/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugasan $tugasan)
    {
        //
    }

    public function tugasan_delete($id)
    {
        Tugasan::where("id", $id)->delete();
        return redirect('/tugasans/');
    }
}
