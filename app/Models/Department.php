<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
