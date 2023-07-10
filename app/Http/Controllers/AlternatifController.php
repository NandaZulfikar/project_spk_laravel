<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        // $alternatif = Alternatif::where('id', $id)->first();

        // return view('editalternatif', [
        //     'alternatif' => $alternatif,
        //     'title' => 'Edit Data alternatif'
        // ]);
        return view('editalternatif')->with([
            'alternatif' => Alternatif::find($id),
        ]);

    }

    public function update(Request $request, $id) {
        $alternatif1      = $request->input('alternatif');
        $harga_motor1   = $request->input('harga_motor');
        $kapasitas_mesin1 = $request->input('kapasitas_mesin');
        $kapasitas_tangki1 = $request->input('kapasitas_tangki');
        $jarak_tempuh1 = $request->input('jarak_tempuh');
        $tahun_pembuatan1 = $request->input('tahun_pembuatan');
        $volume_silinder1 = $request->input('volume_silinder');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->alternatif    = $alternatif1;
        $alternatif->harga_motor = $harga_motor1;
        $alternatif->kapasitas_mesin = $kapasitas_mesin1;
        $alternatif->kapasitas_tangki = $kapasitas_tangki1;
        $alternatif->jarak_tempuh = $jarak_tempuh1;
        $alternatif->tahun_pembuatan = $tahun_pembuatan1;
        $alternatif->volume_silinder = $volume_silinder1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $alternatif1 = $request->input('alternatif');
        $harga_motor1 = $request->input('harga_motor');
        $kapasitas_mesin1 = $request->input('kapasitas_mesin');
        $kapasitas_tangki1 = $request->input('kapasitas_tangki');
        $jarak_tempuh1 = $request->input('jarak_tempuh');
        $tahun_pembuatan1 = $request->input('tahun_pembuatan');
        $volume_silinder1 = $request->input('volume_silinder');

        $alternatif = new Alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->harga_motor = $harga_motor1;
        $alternatif->kapasitas_mesin = $kapasitas_mesin1;
        $alternatif->kapasitas_tangki = $kapasitas_tangki1;
        $alternatif->jarak_tempuh = $jarak_tempuh1;
        $alternatif->tahun_pembuatan = $tahun_pembuatan1;
        $alternatif->volume_silinder = $volume_silinder1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}