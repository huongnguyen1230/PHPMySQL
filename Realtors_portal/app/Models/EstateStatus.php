<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateStatus extends Model
{
    use HasFactory;

    protected $table = 'estate_status';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
