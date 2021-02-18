<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    public function index()
    {
        return view('masterBarang.index');
    }
   
}