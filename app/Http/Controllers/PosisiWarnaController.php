<?php

namespace App\Http\Controllers;

use App\Http\Requests\PosisiWarnaRequest;
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
    public function store(PosisiWarnaRequest $request)
    {
        $valiadated = $request->validated();
        $pw = new PosisiWarna();
        $pw->create($valiadated);

        return redirect()->route('posisi-warna.index')->with('success_message', 'Data baru berhasil ditambahin.');
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
        dd($request);
    }

    /**
     *
     */
    public function destroy(PosisiWarna $posisiWarna)
    {
        return response()->json([
            'message' => 'Data udah dihapus.'
        ]);
    }

}
