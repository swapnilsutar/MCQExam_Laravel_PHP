<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'id',
        'question_number',
        'is_correct',
        'option',
    ];
    public $timestamps = false;

    use HasFactory;
}
