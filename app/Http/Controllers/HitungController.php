<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 10/$kriteria;
        $bobot2 = 25/$kriteria;
        $bobot3 = 25/$kriteria;
        $bobot4 = 30/$kriteria;
        $bobot5 = 10/$kriteria;
        $bobot6 = 25/$kriteria;


        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];
        $widget4 = [
            'kriteria' => $bobot4,
        ];
        $widget5 = [
            'kriteria' => $bobot5,
        ];
        $widget6 = [
            'kriteria' => $bobot6,
        ];


        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('alternatif', 'asc')->get();

        $minC1 = Alternatif::min('harga_motor');
        $maxC1 = Alternatif::max('harga_motor');
        $minC2 = Alternatif::min('kapasitas_mesin');
        $maxC2 = Alternatif::max('kapasitas_mesin');
        $minC3 = Alternatif::min('kapasitas_tangki');
        $maxC3 = Alternatif::max('kapasitas_tangki');
        $minC4 = Alternatif::min('jarak_tempuh');
        $maxC4 = Alternatif::max('jarak_tempuh');
        $minC5 = Alternatif::min('tahun_pembuatan');
        $maxC5 = Alternatif::max('tahun_pembuatan');
        $minC6 = Alternatif::min('volume_silinder');
        $maxC6 = Alternatif::max('volume_silinder');



        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];
        $C6min =[
            'alternatif' => $minC6,
        ];
        $C6max =[
            'alternatif' => $maxC6,
        ];





        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'widget6', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max','C5min', 'C5max', 'C6min', 'C6max'));
    }

}