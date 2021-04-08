<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractInvoice extends Model
{
    use HasFactory;

    protected $table = 'contract_invoice';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
