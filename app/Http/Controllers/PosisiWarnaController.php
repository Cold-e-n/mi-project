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
     * Tampilin semua data.
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
     * Nampilin data spesifik.
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
     * Form untuk nambah data baru.
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
     * Action untuk nambah data baru.
     */
    public function store(PosisiWarnaRequest $request)
    {
        $validated = $request->validated();
        $pw = new PosisiWarna();
        $pw->create($validated);

        return redirect()->route('posisi-warna.index')->with('message', 'Data baru udah ditambahin.');
    }

    /**
     * Form untuk ngubah data.
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
     * Action untuk ngubah data.
     */
    public function update(PosisiWarnaRequest $request, PosisiWarna $posisiWarna)
    {
        $validated = $request->validated();
        $posisiWarna->update($validated);

        return redirect()->route('posisi-warna.index')->with('message', 'Data udah diupdate.');
    }

    /**
     * Hapus data spesifik.
     */
    public function destroy(PosisiWarna $posisiWarna)
    {
        $posisiWarna->delete();

        return response()->json([
            'message' => 'Data udah dihapus.'
        ]);
    }
}
