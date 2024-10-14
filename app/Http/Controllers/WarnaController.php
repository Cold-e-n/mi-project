<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use App\Helpers\DenahWarna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'warna' => Warna::all()
        ];

        return view('pages.table-warna.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Warna $warna)
    {
        $data = [
            'warna' => $warna,
            'denahWarna' => new DenahWarna($warna)
        ];

        return view('pages.table-warna.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warna $warna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warna $warna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warna $warna)
    {
        //
    }
}
