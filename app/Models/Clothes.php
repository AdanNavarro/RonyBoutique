<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_costumer_clothe',
        'size',
        'description',
        'price',
        'stock',
        'status',
        'img'
    ];

    public function Trademark()
    {
        return $this->belongsTo(Trademark::class);
    }

    public function Type_Clothe()
    {
        return $this->belongsTo(Type_Clothe::class);
    }

    public function Detail_Sales(){
        return $this->hasMany(Detail_Sale::class);
    }
}
