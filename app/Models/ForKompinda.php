<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ForKompinda extends Model
{
    use HasFactory,  HasUuids;

    protected $table = 'forkompinda';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
