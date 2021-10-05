<?php

namespace App\Http\Controllers;

use App\User;
use App\Balita;
use App\Orangtua;
use App\Rekapan;
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
        $normal_tbu = round($balita->bobot_tbu / $max, 2);
        $normal_bbu = round($balita->bobot_bbu / $max, 2);
        $normal_bbtb = round($balita->bobot_bbtb / $max, 2);
        $normal_imtu = round($balita->bobot_imtu / $max, 2);

        // menghitung matriks nilai V
        $nilaiV = round(($c1 * $normal_tbu) + ($c2 * $normal_bbu) + ($c3 * $normal_bbtb) + ($c4 * $normal_imtu), 2);
        
        if($nilaiV <= 0.25) {
            $statusGizi = 'Gizi Buruk';
        }
        else if(($nilaiV > 0.26) && ($nilaiV <= 0.74)) {
            $statusGizi = 'Gizi Kurang';
        }
        else {
            $statusGizi = 'Gizi Baik';
        }
        
        return view('pages.seleksi.index', compact('balita', 'normal_tbu', 'normal_bbu', 'normal_bbtb', 'normal_imtu', 'nilaiV', 'statusGizi'));

    }

    public function rekapanSAW()
    {
        $balita = Balita::with('orangtua')->get();

        // // data bobot kriteria
        $c1 = 0.25;
        $c2 = 0.25;
        $c3 = 0.25;
        $c4 = 0.25;

        // untuk setiap balita
        $normal_tbu = $normal_bbu = $normal_bbtb = $normal_imtu = [];
        foreach ($balita as $data) {

            // normalisasi matriks
            $max = max($data->bobot_tbu, $data->bobot_bbu, $data->bobot_bbtb, $data->bobot_imtu);
            $normal_tbu[$data->orangtua->nama_balita] = round($data->bobot_tbu / $max, 2);
            $normal_bbu[$data->orangtua->nama_balita] = round($data->bobot_bbu / $max, 2);
            $normal_bbtb[$data->orangtua->nama_balita] = round($data->bobot_bbtb / $max, 2);
            $normal_imtu[$data->orangtua->nama_balita] = round($data->bobot_imtu / $max, 2);

        }

        // menghitung nilai matriks V dan menentukan status gizi
        $nilaiV = [];
        foreach ($balita as $data) {
            $nilaiV[$data->orangtua->nama_balita] = round(($c1 * $normal_tbu[$data->orangtua->nama_balita]) + ($c2 * $normal_bbu[$data->orangtua->nama_balita]) + ($c3 * $normal_bbtb[$data->orangtua->nama_balita]) + ($c4 * $normal_imtu[$data->orangtua->nama_balita]), 2);

            // data filter assoc array untuk status gizi
            foreach ($nilaiV as $key => $val) {
                $arrBuruk = count(array_filter($nilaiV,function($element) {
                    return $element <= 0.25;
                }));

                $arrKurang = count(array_filter($nilaiV,function($element) {
                    $data = $element >= 0.26 && $element <= 0.74;
                    return $data;
                }));

                $arrBaik = count(array_filter($nilaiV,function($element) {
                    return $element >= 0.75;
                }));
            }
        }

        // data chartjs
        $allData = count($nilaiV);
        $buruk = $arrBuruk;
        $kurang = $arrKurang;
        $baik = $arrBaik;

        $chartBuruk = round(($buruk / $allData) * 100, 2);
        $chartKurang = round(($kurang / $allData) * 100, 2);
        $chartBaik = round(($baik / $allData) * 100, 2);

        return view('pages.seleksi.rekapan', compact('balita', 'normal_tbu', 'normal_bbu', 'normal_bbtb', 'normal_imtu', 'nilaiV', 'chartBuruk', 'chartKurang', 'chartBaik'));
    }
}
