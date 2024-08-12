<?php

namespace App\Http\Controllers;

use App\Models\BentukKejadian;
use App\Models\BentukKejadianTL;
use Illuminate\Http\Request;

class AdminLaporanKejadianController extends Controller
{
    //
    public function index()
    {
        $bentukkejadian = BentukKejadian::with('pemberiinfo_ref')->get();

        // dd($bentukkejadian);
        return view('admin.bentukkejadian', [
            'title' => 'Informasi Bentuk Kejadian dari Stakeholder',
            'bentukkejadian' => $bentukkejadian,
        ]);
    }

    public function show($id)
    {
        $bentukkejadian = BentukKejadian::with('pemberiinfo_ref')->where('id', $id)->first();

        $bentukkejadianTL = BentukKejadianTL::with('forkompinda_ref')->where('id_bentuk_kejadian', $id)->get();
        // dd($bentukkejadianTL);

        return view('admin.bentukkejadianshow', [
            'title' => 'Informasi Bentuk Kejadian dari Stakeholder',
            'bentukkejadian' => $bentukkejadian,
            'tindaklanjut' => $bentukkejadianTL,
        ]);
    }
}
