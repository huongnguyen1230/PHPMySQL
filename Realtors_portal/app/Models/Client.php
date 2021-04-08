<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function contracts(){
        return $this->hasMany(Contract::class,'client_id','id');
    }
}
