<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarpetsType extends Model
{
    use HasFactory;

    public function getHeight(){
        return $this->hasMany(CarpetsHeight::class);
    }
}
