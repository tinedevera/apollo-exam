<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'values', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
