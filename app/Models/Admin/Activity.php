<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',

        'area_id',
        
        'slug',

        'images',

        'description',

        'price',

        'booking_link',

        'status'
    ];

    protected $attributes = [

        'images' => '-',

        'price' => '0',
    
    ];

    protected $casts = [

        'images' => 'array'
    
    ];

}
