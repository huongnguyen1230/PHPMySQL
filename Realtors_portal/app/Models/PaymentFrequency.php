<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentFrequency extends Model
{
    use HasFactory;

    protected $table = 'payment_frequency';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
