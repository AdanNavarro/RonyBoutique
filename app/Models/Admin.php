<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_phone'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
