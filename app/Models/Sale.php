<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function Detail_Sales(){
        return $this->hasMany(Detail_Sale::class);
    }

    public function Client(){
        return $this->belongsTo(Client::class);
    }

    public function Worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
