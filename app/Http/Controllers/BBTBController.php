<?php

namespace App\Http\Controllers;

use App\BBTB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BBTBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bbtb = BBTB::orderBy('tinggi_badan', 'ASC')->get();

        return view('pages.bbtb.index', compact('bbtb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.bbtb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        BBTB::create($data);

        Alert::success('Data Berhasil Ditambahkan');
        
        return redirect('/bbtb');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bbtb = BBTB::find($id);

        return view('pages.bbtb.edit', compact('bbtb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $bbtb = BBTB::find($id);
        $bbtb->update($data);

        Alert::success('Data Berhasil Diubah');

        return redirect('/bbtb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bbtb = BBTB::find($id);
        $bbtb->delete();

        Alert::success('Data Berhasil Dihapus');

        return redirect('/bbtb');
    }
}
