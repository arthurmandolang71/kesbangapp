<?php

namespace App\Http\Controllers;

use App\Models\BentukKejadian;
use App\Models\PemberiInfo;
use App\Models\User;
use Illuminate\Http\Request;

class BentukKejadianController extends Controller
{

    public function kode()
    {
        // dd($akteLahir);
        return view('pemberiinfo.kode', [
            'title' => 'Masukan Kode Akses',
        ]);
    }

    public function laporbentukkejadian(Request $request)
    {
        $kode = $request->get('kode');
        $stakeholder = PemberiInfo::where('kode_akses', $kode)->first();

        // dd($stakeholder);
        return view('pemberiinfo.form_pemberi_info', [
            'title' => 'Masukan Laporan Bentuk Kejadian',
            'stakeholder' => $stakeholder,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pemberi_info' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'oknum' => 'required|string|max:255',
            'bagaimana' => 'required|string',
            'mengapa' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'waktu' => 'required|date',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'katagori' => 'required|string',
            'sifat' => 'required|string',
            'nama_kontak' => 'required|string',
            'no_kontak' => 'required|string',
        ]);

        // Handle file upload
        // if ($request->hasFile('foto')) {
        //     $fileName = time() . '.' . $request->foto->extension();
        //     $request->photo->move(public_path('uploads'), $fileName);
        // }

        BentukKejadian::create([
            'id_pemberi_info' => $request->id_pemberi_info,
            'judul' => $request->judul,
            'oknum' => $request->oknum,
            'bagaimana' => $request->bagaimana,
            'mengapa' => $request->mengapa,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
            'foto' => null,
            'katagori' => $request->katagori,
            'sifat' => $request->sifat,
            'nama_kontak' => $request->nama_kontak,
            'no_kontak' => $request->no_kontak,
        ]);

        return redirect('bentukkejadiantl')->with('pesan', 'Pesan berhasil terkirim.');
    }
}
