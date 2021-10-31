<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'random_id', 'values', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function random()
    {
        return $this
            ->hasOne('App\Models\Random', 'id', 'random_id');
    }
}
