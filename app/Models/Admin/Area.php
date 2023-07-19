<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'location',

        'description',
        
        'image',
    ];

    protected $attributes = [
        
        'image' => '-'
    
    ];
}
