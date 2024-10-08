<?php

namespace App\Http\Controllers;

use App\Models\Kain;
use App\Models\TableWarna;
use App\Helpers\PerhitunganWarna;
use Illuminate\Http\Request;

class TableWarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'kain' => Kain::all()
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
    public function show(TableWarna $tableWarna)
    {
        $data = [
            'tableWarna' => $tableWarna
        ];

        return view('pages.table-warna.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableWarna $tableWarna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableWarna $tableWarna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableWarna $tableWarna)
    {
        //
    }

}
