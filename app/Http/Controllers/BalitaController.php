<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Balita;
use App\Orangtua;
//Model seluruh data antropometri
use App\TBU;
use App\BBU;
use App\BBTB;
use App\IMTU;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class BalitaController extends Controller
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
            $balita = Balita::whereHas('orangtua.user', function($query) {
                return $query->where('name', '=', auth()->user()->name);
            })->get();
        }
        else {
            $balita = Balita::with('orangtua')->get();
        }

        return view('pages.balita.index', compact('balita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.balita.create', [
            'orangtua' => Orangtua::with('user')->orderBy('nama_balita', 'ASC')->get()
        ]);
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
        
        $imt = $request->berat_badan / pow(($request->tinggi_badan / 100) , 2);       // rumus index massa tubuh, dibagi 100 untuk konversi ke satuan meter
        $data['id_balita'] = $request->id_balita;
        $data['imt'] = $imt;

        $dtBBU = BBU::where('umur', $request->umur)->first();                         // berat badan berdasarkan umur
        $dtTBU = TBU::where('umur', $request->umur)->first();                         // tinggi badan berdasarkan umur
        $dtBBTB = BBTB::where('tinggi_badan', $request->tinggi_badan)->first();       // berat badan berdasarkan tinggi badan
        $dtIMTU = IMTU::where('umur', $request->umur)->first();                       // index massa tubuh berdasarkan umur


        //tinggi badan berdasarkan umur
        if($request->tinggi_badan >= $dtTBU->median) {
            $data['tbu'] = ($request->tinggi_badan - $dtTBU->median) / ($dtTBU->plus1sd - $dtTBU->median);
        }
        else if($request->tinggi_badan <= $dtTBU->median) {
            $data['tbu'] = ($request->tinggi_badan - $dtTBU->median) / ($dtTBU->median - $dtTBU->min1sd);
        }

        //berat badan berdasarkan umur
        if($request->berat_badan >= $dtBBU->median) {
            $data['bbu'] = ($request->berat_badan - $dtBBU->median) / ($dtBBU->plus1sd - $dtBBU->median);
        }
        else if($request->berat_badan <= $dtBBU->median) {
            $data['bbu'] = ($request->berat_badan - $dtBBU->median) / ($dtBBU->median - $dtBBU->min1sd);
        }  

        //berat badan berdasarkan tinggi badan
        if($request->berat_badan >= $dtBBTB->median) {
            $data['bbtb'] = ($request->berat_badan - $dtBBTB->median) / ($dtBBTB->plus1sd - $dtBBTB->median);
        }
        else if($request->berat_badan <= $dtBBTB->median) {
            $data['bbtb'] = ($request->berat_badan - $dtBBTB->median) / ($dtBBTB->median - $dtBBTB->min1sd);
        }

        //indeks massa tubuh beradasarkan umur
        if($imt >= $dtIMTU->median) {
            $data['imtu'] = ($imt - $dtIMTU->median) / ($dtIMTU->plus1sd - $dtIMTU->median);
        }
        else if($imt <= $dtIMTU->median) {
            $data['imtu'] = ($imt - $dtIMTU->median) / ($dtIMTU->median - $dtIMTU->min1sd);
        }

        // kategori status gizi -> tinggi badan berdasarkan umur
        if($data['tbu'] < -3) {
            $data['status_tbu'] = "Sangat Pendek";
            $data['bobot_tbu'] = 0.25;
        }
        else if(($data['tbu'] >= -3) && ($data['tbu'] < -2)) {
            $data['status_tbu'] = "Pendek";
            $data['bobot_tbu'] = 0.5;
        }
        else if(($data['tbu'] >= -2) && ($data['tbu'] < 1)) {
            $data['status_tbu'] = "Normal";
            $data['bobot_tbu'] = 0.75;
        }
        else {
            $data['status_tbu'] = "Tinggi";
            $data['bobot_tbu'] = 1;
        }

        // kategori status gizi -> berat badan beradasarkan umur
        if($data['bbu'] < -3) {
            $data['status_bbu'] = "Sangat Kurang";
            $data['bobot_bbu'] = 0.25;
        }
        else if(($data['bbu'] >= -3) && ($data['bbu'] < -2)) {
            $data['status_bbu'] = "Kurang";
            $data['bobot_bbu'] = 0.5;
        }
        else if(($data['bbu'] >= -2) && ($data['bbu'] < 1)) {
            $data['status_bbu'] = "Normal";
            $data['bobot_bbu'] = 0.75;
        }
        else {
            $data['status_bbu'] = "Lebih";
            $data['bobot_bbu'] = 1;
        }

        // kategori status gizi -> berat badan berdasarkan tinggi badan
        if($data['bbtb'] < -3) {
            $data['status_bbtb'] = "Sangat Kurus";
            $data['bobot_bbtb'] = 0.25;
        }
        else if(($data['bbtb'] >= -3) && ($data['bbtb'] < -2)) {
            $data['status_bbtb'] = "Kurus";
            $data['bobot_bbtb'] = 0.5;
        }
        else if(($data['bbtb'] >= -2) && ($data['bbtb'] < 1)) {
            $data['status_bbtb'] = "Normal";
            $data['bobot_bbtb'] = 0.75;
        }
        else {
            $data['status_bbtb'] = "Gemuk";
            $data['bobot_bbtb'] = 1;
        }

        // kategori status gizi -> indeks massa tubuh berdasarkan umur
        if($data['imtu'] < -3) {
            $data['status_imtu'] = "Sangat Kurus";
            $data['bobot_imtu'] = 0.25;
        }
        else if(($data['imtu'] >= -3) && ($data['imtu'] < -2)) {
            $data['status_imtu'] = "Kurus";
            $data['bobot_imtu'] = 0.5;
        }
        else if(($data['imtu'] >= -2) && ($data['imtu'] < 1)) {
            $data['status_imtu'] = "Normal";
            $data['bobot_imtu'] = 0.75;
        }
        else {
            $data['status_imtu'] = "Gemuk";
            $data['bobot_imtu'] = 1;
        }

        

        Balita::create($data);

        Alert::success('Data Berhasil Ditambahkan');

        return redirect('/balita');

        // if(Balita::where('id_balita', '=', $request->id_balita)->exists()) {
        //     Alert::warning('Data sudah ada');
        //     return redirect('/balita/create');
        // }
        // else {
        //     Balita::create($data);

        //     Alert::success('Data Berhasil Ditambahkan');

        //     return redirect('/balita');
        // }
        
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
        $balita = Balita::find($id);

        return view('pages.balita.edit', compact('balita'));
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
        $imt = $request->berat_badan / pow(($request->tinggi_badan / 100) , 2);

        $dtBBU = BBU::where('umur', $request->umur)->first();                         // berat badan berdasarkan umur
        $dtTBU = TBU::where('umur', $request->umur)->first();                         // tinggi badan berdasarkan umur
        $dtBBTB = BBTB::where('tinggi_badan', $request->tinggi_badan)->first();       // berat badan berdasarkan tinggi badan
        $dtIMTU = IMTU::where('umur', $request->umur)->first();                       // index massa tubuh berdasarkan umur

        //tinggi badan berdasarkan umur
        if($request->tinggi_badan >= $dtTBU->median) {
            $data['tbu'] = ($request->tinggi_badan - $dtTBU->median) / ($dtTBU->plus1sd - $dtTBU->median);
        }
        else if($request->tinggi_badan <= $dtTBU->median) {
            $data['tbu'] = ($request->tinggi_badan - $dtTBU->median) / ($dtTBU->median - $dtTBU->min1sd);
        }

        //berat badan berdasarkan umur
        if($request->berat_badan >= $dtBBU->median) {
            $data['bbu'] = ($request->berat_badan - $dtBBU->median) / ($dtBBU->plus1sd - $dtBBU->median);
        }
        else if($request->berat_badan <= $dtBBU->median) {
            $data['bbu'] = ($request->berat_badan - $dtBBU->median) / ($dtBBU->median - $dtBBU->min1sd);
        }  

        //berat badan berdasarkan tinggi badan
        if($request->berat_badan >= $dtBBTB->median) {
            $data['bbtb'] = ($request->berat_badan - $dtBBTB->median) / ($dtBBTB->plus1sd - $dtBBTB->median);
        }
        else if($request->berat_badan <= $dtBBTB->median) {
            $data['bbtb'] = ($request->berat_badan - $dtBBTB->median) / ($dtBBTB->median - $dtBBTB->min1sd);
        }

        //indeks massa tubuh beradasarkan umur
        if($imt >= $dtIMTU->median) {
            $data['imtu'] = ($imt - $dtIMTU->median) / ($dtIMTU->plus1sd - $dtIMTU->median);
        }
        else if($imt <= $dtIMTU->median) {
            $data['imtu'] = ($imt - $dtIMTU->median) / ($dtIMTU->median - $dtIMTU->min1sd);
        }

        // kategori status gizi -> tinggi badan berdasarkan umur
        if($data['tbu'] < -3) {
            $data['status_tbu'] = "Sangat Pendek";
            $data['bobot_tbu'] = 0.25;
        }
        else if(($data['tbu'] >= -3) && ($data['tbu'] < -2)) {
            $data['status_tbu'] = "Pendek";
            $data['bobot_tbu'] = 0.5;
        }
        else if(($data['tbu'] >= -2) && ($data['tbu'] < 1)) {
            $data['status_tbu'] = "Normal";
            $data['bobot_tbu'] = 0.75;
        }
        else {
            $data['status_tbu'] = "Tinggi";
            $data['bobot_tbu'] = 1;
        }

        // kategori status gizi -> berat badan beradasarkan umur
        if($data['bbu'] < -3) {
            $data['status_bbu'] = "Sangat Kurang";
            $data['bobot_bbu'] = 0.25;
        }
        else if(($data['bbu'] >= -3) && ($data['bbu'] < -2)) {
            $data['status_bbu'] = "Kurang";
            $data['bobot_bbu'] = 0.5;
        }
        else if(($data['bbu'] >= -2) && ($data['bbu'] < 1)) {
            $data['status_bbu'] = "Normal";
            $data['bobot_bbu'] = 0.75;
        }
        else {
            $data['status_bbu'] = "Lebih";
            $data['bobot_bbu'] = 1;
        }

        // kategori status gizi -> berat badan berdasarkan tinggi badan
        if($data['bbtb'] < -3) {
            $data['status_bbtb'] = "Sangat Kurus";
            $data['bobot_bbtb'] = 0.25;
        }
        else if(($data['bbtb'] >= -3) && ($data['bbtb'] < -2)) {
            $data['status_bbtb'] = "Kurus";
            $data['bobot_bbtb'] = 0.5;
        }
        else if(($data['bbtb'] >= -2) && ($data['bbtb'] < 1)) {
            $data['status_bbtb'] = "Normal";
            $data['bobot_bbtb'] = 0.75;
        }
        else {
            $data['status_bbtb'] = "Gemuk";
            $data['bobot_bbtb'] = 1;
        }

        // kategori status gizi -> indeks massa tubuh berdasarkan umur
        if($data['imtu'] < -3) {
            $data['status_imtu'] = "Sangat Kurus";
            $data['bobot_imtu'] = 0.25;
        }
        else if(($data['imtu'] >= -3) && ($data['imtu'] < -2)) {
            $data['status_imtu'] = "Kurus";
            $data['bobot_imtu'] = 0.5;
        }
        else if(($data['imtu'] >= -2) && ($data['imtu'] < 1)) {
            $data['status_imtu'] = "Normal";
            $data['bobot_imtu'] = 0.75;
        }
        else {
            $data['status_imtu'] = "Gemuk";
            $data['bobot_imtu'] = 1;
        }

        $balita = Balita::find($id);
        $balita->umur = $request->umur;
        $balita->tinggi_badan = $request->tinggi_badan;
        $balita->berat_badan = $request->berat_badan;
        $balita->imt = $imt; // <--- index massa tubuh
        $balita->tbu = $data['tbu'];
        $balita->bbu = $data['bbu'];
        $balita->bbtb = $data['bbtb'];
        $balita->imtu = $data['imtu'];
        $balita->status_tbu = $data['status_tbu'];
        $balita->bobot_tbu = $data['bobot_tbu'];
        $balita->status_bbu = $data['status_bbu'];
        $balita->bobot_bbu = $data['bobot_bbu'];
        $balita->status_bbtb = $data['status_bbtb'];
        $balita->bobot_bbtb = $data['bobot_bbtb'];
        $balita->status_imtu = $data['status_imtu'];
        $balita->bobot_imtu = $data['bobot_imtu'];
        $balita->save();

        Alert::success('Data Berhasil Diubah');

        return redirect('/balita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $balita = Balita::find($id);
        $balita->delete();

        Alert::success('Data Berhasil Dihapus');

        return redirect('/balita');
    }
}
