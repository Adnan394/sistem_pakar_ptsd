<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    
    protected $guarded = ['id'];

    public function diagnoses()
    {
        return $this->hasMany(Diagnosa::class);
    }
}