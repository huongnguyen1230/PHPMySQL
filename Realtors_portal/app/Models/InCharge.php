<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InCharge extends Model
{
    use HasFactory;

    protected $table = 'in_charge';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
