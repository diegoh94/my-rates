<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rate;

class Contract extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date', 'file'];

    public function rates() {
        return $this->hasMany(Rate::class);   
    }
}
