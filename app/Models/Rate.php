<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = ['origin', 'destination', 'currency', 'twenty', 'forty', 'fortyhc', 'contract_id'];

    public function contract() {
        return $this->belongsTo(Contract::class);   
    }
}
