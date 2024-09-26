<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\PerhitunganWarna;
use App\Models\Kain;
use App\Models\TableWarna;
use App\Models\PosisiWarna;

class PosisiWarnaController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $data = [
            'posisiWarna' => PosisiWarna::all(),
            'kain' => new Kain()
        ];

        return view('pages.posisi-warna.index', $data);
    }

    /**
     *
     */
    public function show(PosisiWarna $posisiWarna)
    {
        $data = [
            'posisiWarna' => $posisiWarna,
            'kain'=> Kain::find($posisiWarna->fabric_id)
        ];
        $data['perhitunganWarna'] = new PerhitunganWarna($data['kain'], $posisiWarna);

        return view('pages.posisi-warna.detail', $data);
    }

    /**
     *
     */
    public function create()
    {
        $data = [
            'kain' => new Kain(),
            'tableWarna' => new TableWarna()
        ];

        return view('pages.posisi-warna.add', $data);
    }

    /**
     *
     */
    public function store(Request $request)
    {
        $noWB = $request->input('no-wb');
        $kain = intval($request->input('kain'));
        $warna = intval($request->input('warna'));
        $noSisir = $request->input('no-sisir');
        $cones = $request->input('cones');
        $seksi = intval($request->input('seksi'));

        $request->validate([
            'kain' => 'required',
            'warna' => 'required',
            'cones' => 'required',
            'seksi' => 'required',
            'no-sisir' => 'required',
            'no-wb' => 'required'
        ]);
        return redirect()->route('posisi-warna.index')->with('success_message', 'Data berhasil ditambahkan.');

        // $data = [
        //     'fabric_id' => $kain,
        //     'colour_id' => $warna,
        //     'cones' => $cones,
        //     'seksi' => $seksi,
        //     'sisir' => $noSisir,
        //     'wb_no' => $noWB,
        // ];

    }

    /**
     *
     */
    public function edit(PosisiWarna $posisiWarna)
    {
        $data = [
            'kain' => new Kain(),
            'posisiWarna' => $posisiWarna
        ];

        return view('pages.posisi-warna.edit', $data);
    }

    /**
     *
     */
    public function update(Request $request, PosisiWarna $posisiWarna)
    {

    }

    /**
     *
     */
    public function destroy(PosisiWarna $posisiWarna)
    {

    }

}
