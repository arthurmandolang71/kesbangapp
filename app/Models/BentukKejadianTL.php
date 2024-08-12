<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class BentukKejadianTL extends Model
{
    use HasFactory,  HasUuids;

    protected $table = 'bentuk_kejadian_tl';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function forkompinda_ref()
    {
        return $this->hasOne(ForKompinda::class, 'id', 'id_forkompinda');
    }

    public function bentukkejadian_ref()
    {
        return $this->hasOne(BentukKejadian::class, 'id', 'id_bentuk_kejadian');
    }
}
