<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'desciption'
    ];

    public function Clothes(){
        return $this->hasMany(Clothes::class);
    }
}
