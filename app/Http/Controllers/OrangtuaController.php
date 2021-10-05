<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orangtua;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->level == 'orangtua') {
            // $balita = Balita::with('orangtua.user')->where('id', '=', auth()->user()->id);
            $orangtua = Orangtua::whereHas('user', function($query) {
                return $query->where('name', '=', auth()->user()->name);
            })->get();
        }
        else {
            $orangtua = Orangtua::with('user')->get();
        }

        return view('pages.orangtua.index', compact('orangtua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->nama_ayah,
            'email' => $request->email,
            'level' => 'orangtua',
            'password' => $request->password
        ]);
        
        $input = $request->except(['email', 'password', 'nama_ayah']);

        Orangtua::create(array_merge($input, ['id_user' => $user->id]));

        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');

        return redirect('/orangtua');

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
        $orangtua = Orangtua::findOrFail($id);

        return view('pages.orangtua.edit', compact('orangtua'));
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
        $orangtua = Orangtua::find($id);
        $orangtua->nama_ibu = $request->nama_ibu;
        $orangtua->nama_balita = $request->nama_balita;
        $orangtua->jenis_kelamin = $request->jenis_kelamin;
        $orangtua->no_hp = $request->no_hp;
        $orangtua->alamat = $request->alamat;
        $orangtua->save();

        $user = User::find($orangtua->id);
        $user->name = $request->nama_ayah;
        $user->save();

        Alert::success('Berhasil', 'Data Berhasil Diperbarui');

        return redirect('/orangtua');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orangtua = Orangtua::with('user')->find($id);
        $user = User::where('id', $orangtua->id_user)->delete();
        $orangtua->delete();
        

        Alert::success('Berhasil', 'Data Orang Tua Berhasil Dihapus');

        return redirect('/orangtua');
    }
}
