<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Sale extends Model
{
    use HasFactory;

    public function Sale(){
        return $this->belongsTo(Sale::class);
    }

    public function Clothes(){
        return $this->belongsTo(Clothes::class);
    }

    

}
