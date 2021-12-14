<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'CNE',
        'date_naissance',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}