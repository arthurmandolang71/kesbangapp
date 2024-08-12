<?php

namespace App\Http\Controllers;

use App\Models\BentukKejadian;
use App\Models\ForKompinda;
use App\Models\PemberiInfo;
use Illuminate\Http\Request;

class AdminStakeholderController extends Controller
{
    public function pemberiinfo()
    {
        $pemberiinfo = PemberiInfo::get();

        return view('admin.pemberiinfo', [
            'title' => 'Stakholder Pemberi Informasi Bentuk Kejadian',
            'pemberiinfo' => $pemberiinfo,
        ]);
    }

    public function forkompinda()
    {
        $forkompinda = ForKompinda::get();

        return view('admin.forkompinda', [
            'title' => 'Stakholder Penindak Lanjut',
            'pemberiinfo' => $forkompinda,
        ]);
    }
}
