<?php

namespace App\Http\Controllers;

use App\User;
use App\Balita;
use App\Orangtua;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    public function seleksi()
    {
        if(auth()->user()->level == 'orangtua') {
            // $balita = Balita::with('orangtua.user')->where('id', '=', auth()->user()->id);
            $balita = Balita::whereHas('orangtua.user', function($query) {
                return $query->where('name', '=', auth()->user()->name);
            })->get();
        }
        else {
            $balita = Balita::with('orangtua.user')->get();
        }

        // dd($balita);
        // exit();

        return view('pages.seleksi.create', compact('balita'));
    }

    public function preferensiSAW(Request $request)
    {
        $balita = Balita::with('orangtua')->where('id_balita', '=', $request->id_balita)->first(); // ambil seluruh data di tabel balita
        
        // data bobot kriteria
        $c1 = 0.25;
        $c2 = 0.25;
        $c3 = 0.25;
        $c4 = 0.25;
        
        // normalisasi matriks
        $max = max($balita->bobot_tbu, $balita->bobot_bbu, $balita->bobot_bbtb, $balita->bobot_imtu);
        $normal_tbu = $balita->bobot_tbu / $max;
        $normal_bbu = $balita->bobot_bbu / $max;
        $normal_bbtb = $balita->bobot_bbtb / $max;
        $normal_imtu = $balita->bobot_imtu / $max;


        
        // menghitung matriks nilai V
        $nilaiV = pow($c1, $normal_tbu) + pow($c2, $normal_bbu) + pow($c3, $normal_bbtb) + pow($c4, $normal_imtu);
        
        if($nilaiV <= 0.25) {
            $statusGizi = 'Gizi Buruk';
        }
        else if(($nilaiV > 0.26) && ($nilaiV <= 0.74)) {
            $statusGizi = 'Gizi Kurang';
        }
        else {
            $statusGizi = 'Gizi Baik';
        }

        // dd($nilaiV);
        // exit();
        
        return view('pages.seleksi.index', compact('balita', 'normal_tbu', 'normal_bbu', 'normal_bbtb', 'normal_imtu', 'nilaiV', 'statusGizi'));
    }
}
