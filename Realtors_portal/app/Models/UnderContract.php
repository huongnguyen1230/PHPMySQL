<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnderContract extends Model
{
    use HasFactory;

    protected $table = 'under_contract';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
