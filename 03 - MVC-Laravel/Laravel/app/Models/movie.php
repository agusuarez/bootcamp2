<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    public function actors(){
        return $this->belongsTo(actor::class,'actorprincipalid');
    }

    public function favorites(){
        return $this->hasMany(favorite::class,'id');
    }
}
