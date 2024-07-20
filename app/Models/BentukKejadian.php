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
}
