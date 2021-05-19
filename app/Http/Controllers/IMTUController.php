<?php

namespace App\Http\Controllers;

use App\IMTU;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IMTUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imtu = IMTU::orderBy('umur', 'ASC')->get();

        return view('pages.imtu.index', compact('imtu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.imtu.create');
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
        IMTU::create($data);

        Alert::success('Data Berhasil Ditambahkan');

        return redirect('/imtu');
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
        $imtu = IMTU::find($id);
        return view('pages.imtu.edit', compact('imtu'));
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
        $imtu = IMTU::find($id);
        $imtu->update($data);

        Alert::success('Data Berhasil Diubah');

        return redirect('/imtu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imtu = IMTU::find($id);
        $imtu->delete();

        Alert::success('Data Berhasil Dihapus');

        return redirect('/imtu');
    }
}
