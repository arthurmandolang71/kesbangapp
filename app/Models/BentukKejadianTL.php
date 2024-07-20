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
}
