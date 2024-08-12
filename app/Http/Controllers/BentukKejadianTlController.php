<?php

namespace App\Http\Controllers;

use App\Models\BentukKejadian;
use App\Models\BentukKejadianTL;
use App\Models\ForKompinda;
use Illuminate\Http\Request;

class BentukKejadianTlController extends Controller
{
    //
    public function kode($id)
    {
        $bentuk_kejadian = BentukKejadian::with('pemberiinfo_ref')->where('id', $id)->first();
        // dd($bentuk_kejadian);
        return view('tl.kode', [
            'title' => 'Masukan Kode Akses',
            'bentuk_kejadian' => $bentuk_kejadian
        ]);
    }

    public function tlbentukkejadiantl(Request $request)
    {
        $kode = $request->get('kode');
        $id_bentuk_kejadian = $request->get('id_bentuk_kejadian');
        $stakeholder = ForKompinda::where('kode_akses', $kode)->first();
        // dd($stakeholder);
        $bentuk_kejadian = BentukKejadian::with('pemberiinfo_ref')->where('id', $id_bentuk_kejadian)->first();
        $bentuk_kejadian_tl = BentukKejadianTL::where('id_bentuk_kejadian', $id_bentuk_kejadian)->where('id_forkompinda', $stakeholder->id)->first();
        if ($bentuk_kejadian_tl) {
            $tl = $bentuk_kejadian_tl;
        } else {
            $tl = null;
        }
        // dd($tl);
        return view('tl.form', [
            'title' => 'Masukan Laporan Bentuk Kejadian',
            'stakeholder' => $stakeholder,
            'bentuk_kejadian' => $bentuk_kejadian,
            'kode_forkompinda' =>  $stakeholder->id,
            'tl' =>  $tl
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->post());
        $request->validate([
            'id_bentuk_kejadian' => 'required|string|max:255',
            'id_forkompinda' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        BentukKejadianTL::create([
            'id_bentuk_kejadian' => $request->id_bentuk_kejadian,
            'id_forkompinda' => $request->id_forkompinda,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);

        return redirect("bentukkejadiantl/$request->id_bentuk_kejadian")->with('pesan', 'Pesan berhasil terkirim.');
    }
}
