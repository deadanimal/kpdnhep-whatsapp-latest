<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Fail;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporans = Laporan::all();

        $fails = Fail::all();

        return view('laporans',[
            'laporans'=>$laporans,
            'fails'=>$fails
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *9
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
        $laporan = new laporan;

        $laporan->laporan_nama = $request->laporan_nama;
        $laporan->laporan_perincian = $request->laporan_perincian;
        $laporan->laporan_tarikh = $request->laporan_tarikh;

        $laporan->save();
        return redirect('/laporans/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
        return view('laporans',[
            'laporan'=>$laporan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //

        $path = $request->file('fail')->store('fails');

        dd($path);

        $laporan->laporan_nama = $request->laporan_nama;
        $laporan->laporan_perincian = $request->laporan_perincian;
        $laporan->laporan_tarikh = $request->laporan_tarikh;

        $laporan->save();
        return redirect('/laporans/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }

    //custom
    public function laporan_delete($id)
    {
        Laporan::where("id", $id)->delete();
        return redirect('/laporans/');
    }

    public function simpan_muatnaik(Request $request)
    {
        $laporan = new laporan;

        $laporan->laporan_nama = $request->laporan_nama;
        $laporan->laporan_perincian = $request->laporan_perincian;
        $laporan->laporan_tarikh = $request->laporan_tarikh;

        $laporan->save();

        $fileModel = new Fail;

        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->nama = time().'_'.$request->file->getClientOriginalName();
            $fileModel->laluan_fail = '/laporans/' . $filePath;
            $fileModel->save();
        }


        return redirect('/laporans/');
    }
}
