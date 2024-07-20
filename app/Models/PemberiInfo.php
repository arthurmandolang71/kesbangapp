<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PemberiInfo extends Model
{
    use HasFactory,  HasUuids;

    protected $table = 'pemberi_info';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
