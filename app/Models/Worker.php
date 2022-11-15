<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_phone',
        'RFC'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
