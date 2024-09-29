<?php

namespace App\Http\Controllers;

use App\Http\Requests\PosisiWarnaRequest;
use App\Helpers\PerhitunganWarna;
use App\Helpers\PerhitunganWarnaTest;
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
    public function store(PosisiWarnaRequest $request)
    {
        // return redirect()->route('posisi-warna.index')->with('success_message', 'Data berhasil ditambahkan.');
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
    public function update(PosisiWarnaRequest $request, PosisiWarna $posisiWarna)
    {

    }

    /**
     *
     */
    public function destroy(PosisiWarna $posisiWarna)
    {

    }

    /**
     *
     */
    public function test()
    {
        $data = [
            'kain'=> Kain::find(5),
            'posisiWarna' => PosisiWarna::find(5)
        ];
        $data['pw'] = new PerhitunganWarnaTest($data['kain'], $data['posisiWarna']);

        return view('pages.posisi-warna.test', $data);
    }

}
