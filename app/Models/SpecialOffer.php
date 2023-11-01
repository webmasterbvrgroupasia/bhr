<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    use HasFactory;

    protected $table = 'special_offer';

    protected $fillable = [
        
        'package_name',
        
        'slug',

        'description',

        'image',

        'booking_link',

        'meta_description',

        'meta_keywords',

        'additional_notes'
    
    ];

    public $timestamps = true;
}
