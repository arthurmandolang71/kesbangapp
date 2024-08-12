<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class BentukKejadian extends Model
{
    use HasFactory,  HasUuids;

    protected $table = 'bentuk_kejadian';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function pemberiinfo_ref()
    {
        return $this->hasOne(PemberiInfo::class, 'id', 'id_pemberi_info');
    }

    public function tindaklanjut()
    {
        return $this->hasMany(BentukKejadianTL::class, 'id_bentuk_kejadian', 'id');
    }
}
