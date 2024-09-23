<?php

namespace App\Http\Controllers;

use App\Models\Kain;
use App\Models\PosisiWarna;

class HomeController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $data = [
            'posisiWarna' => new PosisiWarna(),
            'kain' => new Kain()
        ];

        return view('pages.home', $data);
    }
}
