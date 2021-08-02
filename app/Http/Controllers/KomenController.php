<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use App\Models\Tugasan;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $komens = Komen::all();

        $id = 3;
        $komen_selected = komen::where("id", $id)->first();

        return view('komens',[
            'komens'=>$komens,
            'komen_selected'=>$komen_selected,
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
        $komen = new komen;

        $komen->isi = $request->isi;
        $komen->user_id = $request->user()->id;
        $komen->tugasan_id = $request->tugasan()->id;

        $komen->save();
        return redirect('/tugasans/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function show(Komen $komen)
    {
        //
        return view('tugasans',[
            'komen'=>$komen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function edit(Komen $komen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komen $komen)
    {
        //
        $komen->isi = $request->isi;
        $komen->user_id = $request->user()->id;
        $komen->tugasan_id = $request->tugasan()->id;

        $komen->save();
        return redirect('/tugasans/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komen $komen)
    {
        //
    }
}
